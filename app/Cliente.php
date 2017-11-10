<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
      'name','domicilio','colonia','telcasa','telcel'
    ];
}
