<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{

    protected $fillable = ['user_id', 'procedure_id','date'];

    public function procedure(){

        return $this->belongsto('App\procedure');

    }
    public function User(){

        return $this->belongsto('App\User');

    }
}
