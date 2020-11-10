<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProjectType extends Model
{
    protected $table = 'project_types';
    protected $fillable = ['title', 'type','short_tag'];
    
    public function Scopefindby($query,$data)
    {
        $query->select("project_types.*");
        if(!empty($data['title'])){
            $query->where('title', '=', $data['title']);
        }
        if(!empty($data['title'])){
            $query->where('short_tag', '=', $data['title']);
        }
        if(!empty($data['type'])){
            $query->where('type', '=', $data['type']);
        }
        if(!empty($data['id'])){
            $query->where('id', '=', $data['id']);
        }
        return $query->get();
    }
    
    public function Scopefetchall($query,$data)
    {
        $query->select('project_types.*');
        if(!empty($data['type'])){
            $query->where('type', '=', $data['type']);
        }   
        if(isset($data['active'])){
            $query->where('active', '=', 1);
        }   
                    
        return $query->get();
    }
    
    public function saveProject($data)
    {
        if(isset($data['id']))
        {
            $ticket = $this->find($data['id']);
    //        $ticket->user_id = auth()->user()->id;
            $ticket->title = $data['title'];
            $ticket->short_tag = $data['short_tag'];
            $ticket->type = $data['type'];
            $ticket->description = $data['description'];
            $ticket->active = $data['active'];
            $ticket->save();
            return 1;
            
        }else{
    //      $this->user_id = auth()->user()->id;            
            $this->title = $data['title'];
            $this->short_tag = $data['short_tag'];
            $this->type = $data['type'];
            $this->description = $data['description'];
            $this->active = $data['active'];
            $this->save();
            return true;
        }

    }
    
    public function updateProject($data)
    {
        
    }
}
