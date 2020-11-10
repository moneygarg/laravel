<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Officetrack extends Model
{
    protected $table = 'officetrack';
    protected $fillable = ['title','start_date','end_date'];
    //
}
