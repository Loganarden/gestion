<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribution extends Model
{
    protected $fillable = ['id','nom','poste','date','heuredebut','heurefin'];

}
