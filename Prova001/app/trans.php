<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trans extends Model
{
    //

    protected $fillable = ['cliente_id','tipo_id','data','valor','credito'];

    public function tipos(){

        return $this->belongsto('App\tipos');

    }
    public function cliente(){

        return $this->belongsto('App\cliente');

    }
}
