<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{

protected $fillable = ['id','nom'];

public function visiteur ()
    {
        return $this->hasOne(Visiteur::class);
    }

}
