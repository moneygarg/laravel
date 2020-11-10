<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use EventsImages;

class Events extends Model
{
    protected $table = 'events';
    protected $fillable = ['event', 'active'];
    
    public function eventsimages()
    {
        return $this->hasMany('App\EventsImages');
    }

    public function Scopefindby($query,$data)
    {
        $query->select("events.*");
        if(!empty($data['event'])){
            $query->where('event', '=', $data['event']);
        }
        if(!empty($data['event'])){
            $query->where('description', '=', $data['event']);
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
           $query->where('events.id_users', '=', auth()->user()->id);
        } 
        return $query->get();
    }
    
    public function Scopefetchallpublic($query)
    {
        $query->select('events.*')
        ->where('events.public', '=', 1)
        ->orderBy('created_at', 'desc')
        ->limit(4);
        return $query->get();
    }
    
    public function Scopefetchall($query)
    {   
        $query->select('events.*');
        
        if(isset(auth()->user()->id) && in_array(auth()->user()->type, array("user","admin")))
        {
           $query->where('events.id_users', '=', auth()->user()->id);
        } 
        return $query->get();
    }
    
    public function saveProject($data)
    {
        if(isset($data['id']))
        {
            $ticket = $this->find($data['id']);
            $ticket->id_users = auth()->user()->id;
            $ticket->event = $data['event'];
            $ticket->public = $data['public'];
            $ticket->feature = $data['feature'];
            $ticket->description = $data['description'];
            $ticket->active = $data['active'];
            $ticket->save();
            return 1;
            
        }else{
            $this->id_users = auth()->user()->id;
            $this->event = $data['event'];
            $this->public = $data['public'];
            $this->feature = $data['feature'];
            $this->description = $data['description'];
            $this->active = $data['active'];
            $this->save();
            return true;
        }

    }
}
