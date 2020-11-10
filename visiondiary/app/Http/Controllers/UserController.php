<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('users.index',compact('users'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(Request $request)
    {
        $users = User::find(auth()->user()->id);
        if ($request->ajax()) 
        {
            return response()->json([
              'data' => view('users.profileview')->with("id",auth()->user()->id)->with('users',$users)->render()
           ]);  
        }
        return view('users.profile',compact('users'))->with("id",auth()->user()->id)->with('users',$users);
    }
    
    //To upload DP
    public function uploadAvatars(Request $request,$id = "")
    {
        if($request->file('avatar'))
        {
            $image = $request->file('avatar');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/avatars');
            $image->move($destinationPath, $name);
            $data["image"] = $name;
        }

        $obj = new User();

        unset($data["_token"]);
        if(!empty($id))
            $data["id"] = $id;

        $obj->saveUser($data);
        
        return redirect('/users/profile');
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
       return view('users.create');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id = "",$type = "")
    {
        if ($request->isMethod('get')) 
        {
            $users = User::find($id);
            
            $view = (!empty($type) && ($type == "password"))?"users.editpassword" :"users.edit";
            
            return response()->json([
                'data' => view($view)->with("id",$id)->with('users',$users)->render()
            ]);
        }
        else
        {
            $data = $request->all();
            
            if($request->file('avatar'))
            {
                $image = $request->file('avatar');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/avatars');
                $image->move($destinationPath, $name);
                $data["image"] = $name;
            }
            
            $obj = new User();
            
            unset($data["_token"]);
            if(!empty($id)){
                $data["id"] = $id;
                
                //Update Password
                if(!empty($type) && ($type == "password"))
                {
                    if($data["old_password"] == $data["password"])
                    {
                        $error_msg = "New password should be different from old password";
                    }
                    elseif($data["password_confirmation"] != $data["password"])
                    {
                        $error_msg = "Password and confirm password should be same";
                    }
                    $users = User::find($id);
                    if (!Hash::check($request->get('old_password'), $users["password"])) 
                    {
                        $error_msg = "Current password is not correct.Please try again!";
                    }
                    
                    if(!empty($error_msg))
                    {
                        return response()->json([ 'result' => false,
                            'data' => $error_msg
                        ]);
                    }

                    unset($data["old_password"]);
                    unset($data["password_confirmation"]);
                    $obj->saveUser($data);
                    
                    return response()->json([ 'result' => true,
                                          'view' => view("users.edit")->render(),
                                          'data' => "Record has been added"
                    ]);
                    
                }else{
                    
                    $obj->saveUser($data);
                    return response()->json([ 'result' => true,
                                               'data' => "Record has been added"
                    ]);
                }
            }
            
            
        }
        
        
    }
    
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id = null)
    {
        $ticket = User::find($id);
        $ticket->delete();
        return response()->json([ 'result' => true,
            'data' => "Record has been deleted!"
        ]);
    }
    
    /**
     * find the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  post pa
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
        $data = $request->all();
        
        $obj = new User();
        $users = $obj->findby($data);
        
        return response()->json([
            'data' => view('users.list')->with('users',$users)->render()
        ]);
    }
}
