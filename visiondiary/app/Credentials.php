<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Credentials extends Model
{
    protected $fillable = ['username', 'password','link'];
    protected $table = 'credentials';
    public $timestamps = false;
     
    public function Scopefindby($query,$data)
    {
        $query->select("credentials.*")
                ->select("project_types.title as Title","credentials.*")
                    ->leftJoin("project_types", "credentials.id_project_type", "=", "project_types.id")
                    ->where('project_types.type', '=', $data['type']);
                            
        if(!empty($data['title'])){
            $query->where('link', '%', $data['title'],'%');
        }
        if(!empty($data['title'])){
            $query->where('username', '=', $data['title']);
        }
        if(!empty($data['id_environment_type'])){
            $query->where('id_environment_type', '=', $data['id_environment_type']);
        }
        if(!empty($data['id_project_type'])){
            $query->where('id_project_type', '=', $data['id_project_type']);
        }
        
//        if(in_array(auth()->user()->type, array("user","admin")) && $data['type'] == "personnel")
        if($data['type'] == "personnel")
        {
           $query->where('credentials.id_users', '=', auth()->user()->id);
        } 
        
        if(!empty($data['id']))
        {
            $query->where('id', '=', $data['id']);
        }
        return $query->get();
    }
    
    public function Scopefetchall($query,$data)
    {
        $query->select("project_types.title as Title","credentials.*");
        $query->leftJoin("project_types", "credentials.id_project_type", "=", "project_types.id");
        $query->where('project_types.type', '=', $data['type']);
        
        if(isset($data['active']))
        $query->where('project_types.active', '=', 1);
        
//        if(in_array(auth()->user()->type, array("user","admin")) && $data['type'] == "personnel")
        if($data['type'] == "personnel")
        {
           $query->where('credentials.id_users', '=', auth()->user()->id);
        } 
        return $query->get();
        
        
//        $records = DB::table('credentials')
//                    ->select("project_types.title as Title","credentials.*")
//                    ->leftJoin("project_types", "credentials.id_project_type", "=", "project_types.id")
//                    ->where('project_types.type', '=', $data['type']);
//                    if(auth()->user()->id == "user")
//                    {
//                       $records->where('credentials.id_users', '=', auth()->user()->id);
//                    }
//                    $records->get();
//        return $records;
    }
    
    public function Scopefind($id)
    {
        $records = DB::table('credentials')
                    ->where('id', $id)
                    ->get();
        return $records;
    }
    
    
    public function saveProject($data)
    {
        if(isset($data['id']))
        {
            $ticket = $this->find($data['id']);
            $ticket->id_users = auth()->user()->id;
            $ticket->id_project_type = $data['id_project_type'];
            $ticket->id_environment_type = $data['id_environment_type'];
            $ticket->link = $data['link'];
            $ticket->username = $data['username'];
            $ticket->password = encrypt($data['password']);
            $ticket->link = $data['link'];
            $ticket->description = $data['description'];
            $ticket->active = $data['active'];
            $ticket->save();
            return 1;
            
        }else{
            $this->id_users = auth()->user()->id;
            $this->id_project_type = $data['id_project_type'];
            $this->id_environment_type = $data['id_environment_type'];
            $this->link = $data['link'];
            $this->username = $data['username'];
            $this->password = encrypt($data['password']);
            $this->link = $data['link'];
            $this->description = $data['description'];
            $this->active = $data['active'];
            $this->save();
            return true;
        }

    }
    
    public function saveCredentails($data)
    {
        $this->id_project_type = $data['id_project_type'];
        $this->id_environment_type = $data['id_environment_type'];
        $this->link = $data['link'];
        $this->username = $data['username'];
        $this->password = $data['password'];
        $this->link = $data['link'];
        $this->description = $data['description'];
        $this->active = $data['active'];
        $this->save();
        return 1;
    }
    
    public function updateCredentails($data)
    {
        $ticket = $this->find($data['id']);
//        $ticket->user_id = auth()->user()->id;
        $ticket->id_project_type = $data['id_project_type'];
        $ticket->id_environment_type = $data['id_environment_type'];
        $ticket->link = $data['link'];
        $ticket->username = $data['username'];
        $ticket->password = $data['password'];
        $ticket->link = $data['link'];
        $ticket->description = $data['description'];
        $ticket->active = $data['active'];
        $ticket->save();
        return 1;
    }
}
