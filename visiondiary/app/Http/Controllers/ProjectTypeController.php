<?php
namespace App\Http\Controllers;
use App\ProjectType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projecttypes = ProjectType::get();
        return view('projectType.index',compact('projecttypes'));
    }
    
    
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
       return view('projectType.create');
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
            $projecttypes = ProjectType::find($id);
              return response()->json([
                'data' => view('projectType.edit')->with("id",$id)->with('projecttypes',$projecttypes)->render()
             ]);
        }
        $obj = new ProjectType();
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
        $ticket = ProjectType::find($id);
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
        
        $obj = new ProjectType();
        $projecttypes = $obj->findby($data);
        
        return response()->json([
            'data' => view('projectType.list')->with('projecttypes',$projecttypes)->render()
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ticket = new ProjectType();
        $data = $this->validate($request, [
            'description'=>'required',
            'title'=> 'required'
        ]);
        $data['id'] = $id;
        $ticket->updateProject($data);

        return redirect('/home')->with('success', 'New support ticket has been updated!!');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticket = new ProjectType();
        $data = $this->validate($request, [
            'description'=>'required',
            'title'=> 'required'
        ]);
       
        $ticket->saveProject($data);
        return redirect('/projectType')->with('success', 'New support Project Type has been created! Wait sometime to get resolved');
    }
      /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = ProjectType::find($id);
        $ticket->delete();

        return redirect('/projectType')->with('success', 'Ticket has been deleted!!');
    }
}
