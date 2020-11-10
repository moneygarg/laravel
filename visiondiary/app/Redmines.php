<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Redmines extends Model
{
    protected $table = 'redmines';
    protected $fillable = ['title', 'status'];
    
    public function Scopefindby($query,$data)
    {
        $query->select("redmines.*");
        if(!empty($data['title'])){
            $query->where('title', '=', $data['title']);
        }
        if(!empty($data['title'])){
            $query->where('description', '=', $data['title']);
        }
        if(!empty($data['project_type'])){
            $query->where('project_type', '=', $data['project_type']);
        }
        if(!empty($data['status'])){
            $query->where('status', '=', $data['status']);
        }
        if(!empty($data['id'])){
            $query->where('id', '=', $data['id']);
        }
        if(!empty($data['id_user']))
        {
           $query->where('id_users', '=', $data['id_user']);
        } 
        else if(in_array(auth()->user()->type, array("user","admin")))
        {
           $query->where('redmines.id_users', '=', auth()->user()->id);
        } 
        return $query->get();
    }
    
    public function Scopefetchall($query)
    {
        $query->select('redmines.*');
        if(in_array(auth()->user()->type, array("user","admin")))
        {
           $query->where('redmines.id_users', '=', auth()->user()->id);
        } 
        return $query->get();
    }
    
    public function saveProject($data)
    {
        if(isset($data['id']))
        {
            $ticket = $this->find($data['id']);
            $ticket->id_users = auth()->user()->id;
            $ticket->title = $data['title'];
            $ticket->link = $data['link'];
            $ticket->redmine_no = $data['redmine_no'];
            $ticket->project_type = $data['project_type'];
            $ticket->status = $data['status'];
            $ticket->timespent = $data['timespent'];
            $ticket->assigned_by = $data['assigned_by'];
            $ticket->assigned_to = $data['assigned_to'];
            $ticket->priority = $data['priority'];
            $ticket->start_date = $data['start_date'];
            $ticket->due_date = $data['due_date'];
            $ticket->description = $data['description'];
            $ticket->active = $data['active'];
            $ticket->save();
            return 1;
            
        }else{
            $this->id_users = auth()->user()->id;
            $this->title = $data['title'];
            $this->link = $data['link'];
            $this->redmine_no = $data['redmine_no'];
            $this->project_type = $data['project_type'];
            $this->status = $data['status'];
            $this->timespent = $data['timespent'];
            $this->assigned_by = $data['assigned_by'];
            $this->assigned_to = $data['assigned_to'];
            $this->priority = $data['priority'];
            $this->start_date = $data['start_date'];
            $this->due_date = $data['due_date'];
            $this->description = $data['description'];
            $this->active = $data['active'];
            $this->save();
            return true;
        }

    }
}
