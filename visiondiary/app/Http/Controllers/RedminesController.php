<?php
namespace App\Http\Controllers;
use App\Redmines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class RedminesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $items = Redmines::get();
        $users = User::get();
        $items = Redmines::fetchall();
        $status['pending'] = Redmines::where('status','=','pending')->count();
        $status['assigned'] = Redmines::where('status','=','assigned')->count();
        $status['feedback'] = Redmines::where('status','=','feedback')->count();
        $status['resolved'] = Redmines::where('status','=','resolved')->count();
        
        return view('redmines.index',compact('items','users',"status"));
    }
    
    public function excel() {
        // Execute the query used to retrieve the data. In this example
        // we're joining hypothetical users and payments tables, retrieving
        // the payments table's primary key, the user's first and last name, 
        // the user's e-mail address, the amount paid, and the payment
        // timestamp.

        $payments = Redmines::select(
              'id', 
              'title', 
              'description')
            ->get();
        // Initialize the array which will be passed into the Excel
        // generator.
        $paymentsArray = []; 

        // Define the Excel spreadsheet headers
        $paymentsArray[] = ['id', 'title','description'];

        // Convert each member of the returned collection into an array,
        // and append it to the payments array.
        foreach ($payments as $payment) {
            $paymentsArray[] = $payment->toArray();
        }

        // Generate and return the spreadsheet
        \Excel::create('payments', function($excel){

            // Set the spreadsheet title, creator, and description
            $excel->setTitle('Payments');
            $excel->setCreator('Laravel')->setCompany('WJ Gilmore, LLC');
            $excel->setDescription('payments file');

            // Build the spreadsheet, passing in the payments array
            $excel->sheet('sheet1', function($sheet) use ($paymentsArray) {
                $sheet->fromArray($paymentsArray, null, 'A1', false, false);
            });

        })->download('xlsx');
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
       return view('redmines.create');
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
            $item = Redmines::find($id);
              return response()->json([
                'data' => view('redmines.edit')->with("id",$id)->with('item',$item)->render()
             ]);
        }
        $obj = new Redmines();
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
        $ticket = Redmines::find($id);
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
        
        $obj = new Redmines();
        $items = $obj->findby($data);
        
        $status['pending'] = Redmines::where('status','=','pending')->count();
        $status['assigned'] = Redmines::where('status','=','assigned')->count();
        $status['feedback'] = Redmines::where('status','=','feedback')->count();
        $status['resolved'] = Redmines::where('status','=','resolved')->count();
        return response()->json([
            'data' => view('redmines.list')->with('items',$items)->with('status',$status)->render()
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
        $ticket = new Redmines();
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
        $ticket = new Redmines();
        $data = $this->validate($request, [
            'description'=>'required',
            'title'=> 'required'
        ]);
       
        $ticket->saveProject($data);
        return redirect('/redmines')->with('success', 'New support Project Type has been created! Wait sometime to get resolved');
    }
      /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Redmines::find($id);
        $ticket->delete();

        return redirect('/redmines')->with('success', 'Ticket has been deleted!!');
    }
}
