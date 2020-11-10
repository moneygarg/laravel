<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function Scopefindby($query,$data)
    {
        $query->select("users.*");
        if(!empty($data['name'])){
            $query->where('name', '=', $data['name']);
        }
        if(!empty($data['email'])){
            $query->where('email', '=', $data['email']);
        }
        if(!empty($data['type'])){
            $query->where('type', '=', $data['type']);
        }
        if(!empty($data['id'])){
            $query->where('id', '=', $data['id']);
        }
        return $query->get();
    }
    
    public function saveUser($data)
    {
        if(isset($data['id']))
        {
            $ticket = $this->find($data['id']);
    //        $ticket->user_id = auth()->user()->id;
            if(isset($data['image']))
                $ticket->image = $data['image'];
            if(isset($data['name']))
                $ticket->name = $data['name'];
            if(isset($data['email']))
                $ticket->email = $data['email'];
            if(isset($data['password']) && !empty(($data['password'])))
                $ticket->password =  bcrypt($data['password']);
            if(isset($data['type']))
                $ticket->type = $data['type'];
                
            if(isset($data['description']))
                $ticket->description = $data['description'];
            
            if(isset($data['active']))
                $ticket->active = $data['active'];
//            $ticket->remember_token = $data['remember_token'];
            $ticket->save();
            return true;
            
        }else{
//          $this->user_id = auth()->user()->id;
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->password = bcrypt($data['password']);
            $this->type = $data['type'];
            $this->description = $data['description'];
            $ticket->active = $data['active'];
//            $this->remember_token = $data['remember_token'];
            $this->save();
            return true;
        }

    }
}
