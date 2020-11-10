<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EventsImages extends Model
{
    protected $table = 'events_images';
    protected $fillable = ['title', 'image'];
    
    public function events()
    {
        return $this->belongsTo('App\Events');
    }
    
    public function Scopefindby($query,$data)
    {
        $query->select("events_images.*");
        if(!empty($data['title'])){
            $query->where('title', '=', $data['title']);
        }
//        if(!empty($data['id'])){
//            $query->where('id', '=', $data['id']);
//        }
        if(!empty($data['events_id'])){ 
            $query->where('events_id', '=', $data['events_id']);
        }
        return $query->get();
    }
    
    public function Scopefetchall($query,$data)
    {
        $query->select('events_images.*');
                    if(!empty($data['type'])){
                        $query->where('type', '=', $data['type']);
                    }   
        return $query->get();
    }
    
    public function saveImages($data)
    {
        
        if(isset($data['id']))
        {
            $ticket = $this->find($data['id']);
            $ticket->title = $data['title'];
            $ticket->public = $data['public'];
            $ticket->feature = $data['feature'];
            $ticket->description = $data['description'];
            $ticket->active = $data['active'];
            $ticket->save();
            return 1;
            
        }else{
            $this->id_users = auth()->user()->id;
        
//            if(isset($data['events_id']))
            $this->events_id = $data['events_id'];
            $this->title = $data['title'];
//            if(isset($data['image']))
            $this->image = $data['image'];
            $this->public = $data['public'];
            $this->feature = $data['feature'];
            $this->active = $data['active'];
            $this->description = $data['description'];
            $this->save();
            return true;
        }
        
        
        return true;

    }
    
    public function updateProject($data)
    {
        
    }
}
