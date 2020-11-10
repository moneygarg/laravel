<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Events;
use App\User;
use App\EventsImages;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = EventsImages::get();
        $users = User::get();
        $items = Events::fetchall();
        return view('events.index',compact('items','users','images'));
    }
    
    
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
       return view('events.create');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id = "")
    {
        if ($request->isMethod('get')) {
            $item = Events::find($id);
              return response()->json([
                'data' => view('events.edit')->with("id",$id)->with('item',$item)->render()
             ]);
        }
        $obj = new Events();
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
        $ticket = Events::find($id);
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
        
        $obj = new Events();
        $items = $obj->findby($data);
        
        return response()->json([
            'data' => view('events.list')->with('items',$items)->render()
        ]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadimages(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        $photos = $request->file('file');
 
        if (!is_array($photos)) {
            $photos = [$photos];
        }
        $destinationPath = public_path('/images/events');
        if (!is_dir($path)) {
            mkdir($path, 0777);
        }
 
        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $name = sha1(date('YmdHis') . str_random(30));
            $save_name = $name . '.' . $photo->getClientOriginalExtension();

            $photo->move($destinationPath, $save_name);

            $obj = new EventsImages();
            if(!empty($id))
            $data["id"] = $id;
            
            $data["title"] = $save_name;
            $data["image"] = $save_name;
            $data["public"] = 0;
            $data["feature"] = 0;
            $data["active"] = 1;
            $data["description"] = "";
//            $obj->saveImages($data);
        }
        
        return Response::json([
            'message' => 'Image saved Successfully'
        ], 200);
    }
    
    public function allImages(){
    	$images = EventsImages::get();
        return view('eventImages.imagelist', compact('images'))->render();
    }
    
    //load image dashboard
    public function upload(Request $request,$id = "")
    {
        if ($request->isMethod('get')) {
            $obj = new EventsImages();
            $images = $obj->findby(array('events_id'=>$id));
            $item = Events::find($id);
              return response()->json([
                'data' => view('events.uploadimages')->with("id",$id)->with('item',$item)->with('images',$images)->render()
             ]);
        }
    }
    
    //Upload images corresponding to event
    public function storeImage(Request $request,$id = "")
    {
    	if($request->file('file') && $request->file('file')->isValid())
        {
            $imageName = str_random(12).".".$request->file('file')->getClientOriginalExtension();
            $request->file('file')->move(public_path() . '/images/uploads', $imageName);
//           / dd($imageName);
            //Save into DB
            $obj = new EventsImages();
            $data["events_id"] = $id;
            $data["title"] = $imageName;
            $data["image"] = $imageName;
            $data["public"] = 0;
            $data["feature"] = 0;
            $data["active"] = 1;
            $data["description"] = "";
            $obj->saveImages($data);


            if($obj->saveImages($data))
            {
                $obj = new EventsImages();
                unset($data["id"]);
                $images = $obj->findby(array('events_id'=>$id));
                $view = view('eventImages.list', compact('images'))->render();

                return response()->json(['id'=>$id,'html'=>$view]);
            }else{
                return response()->json(['message' => 'Error while saving image'],422);
            }
    	}else{
    		return response()->json(['message' => 'Invalid image'],422);
    	}
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editimage(Request $request,$id = "")
    {
        if ($request->isMethod('get')) 
        {
            $item = EventsImages::find($id);
              return response()->json([
                'data' => view('eventImages.edit')->with("id",$id)->with('item',$item)->render()
             ]);
        }
        else
        {
            $obj = new EventsImages();
            $data = $request->all();
            unset($data["_token"]);
            if(!empty($id))
                $data["id"] = $id;
            
            $obj->saveImages($data);

            return response()->json([ 'result' => true,
                                      'data' => "Your Memories has been updated successfully"
            ]); 
        }
        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteimage($id = null)
    {
        $ticket = EventsImages::find($id);
        $ticket->delete();
        return response()->json([ 'result' => true,
            'data' => "Record has been deleted!"
        ]);
    }
    
}
