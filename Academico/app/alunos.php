<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PharIo\Manifest\Email;

class alunos extends Model
{
    //

    protected $fillable = ['nome','Email','cidade_id'];

    public function cidade(){

        return $this->belongsto('App\Cidade');

    }
}
