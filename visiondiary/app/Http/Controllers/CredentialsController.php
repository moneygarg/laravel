<?php
namespace App\Http\Controllers;
use App\Credentials;
use App\ProjectType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Contracts\Encryption\EncryptException;
use Illuminate\Contracts\Encryption\Encrypter as EncrypterContract;

class CredentialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type = null)
    {
        $data = array("type"=>$type,"active"=>0);
        $projecttypes = ProjectType::fetchall($data);
        $credentials = Credentials::fetchall($data);
        $user = auth()->user();
//        echo "<pre>";
//        print_r($user);die;
        return view('credentials.index',compact('credentials','projecttypes','type','user'));
    }
    
    /**
     * find the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  post pa
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request,$type = null)
    {
        $data = $request->all();
        $obj = new Credentials();
        $data["type"] = $type;
        $credentials = $obj->findby($data);
        
//        $type = $data["type"];
        $projecttypes = ProjectType::get();
        $user = auth()->user();
        return response()->json([
            'type' => $type,
            'data' => view('credentials.list',compact('credentials','projecttypes','user','type'))->render(),
        ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id = "")
    {
        if ($request->isMethod('get')) 
        {
            $projecttypes = ProjectType::get();
            $credential = Credentials::find($id);
            $credential["password"] = decrypt($credential["password"]);
//            print_r($credential["password"]);
            return response()->json([
              'data' => view('credentials.edit')->with("id",$id)->with('credential',$credential)->with('projecttypes',$projecttypes)->render()
            ]);
        }
        
        $obj = new Credentials();
        $data = $request->all();
        unset($data["_token"]);
        if(!empty($id))
            $data["id"] = $id;
        
        $obj->saveProject($data);
        
        return response()->json([ 'result' => true,
                                  'data' => "Record has been added"
        ]);
    }
    
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id = null)
    {
		
        $ticket = Credentials::find($id);
		$ticket->delete();
		return response()->json([ 'result' => true,
            'data' => "Record has been deleted!"
        ]);
    }
    
}
