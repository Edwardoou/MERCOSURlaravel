<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaisM extends Model
{
 protected $table='pais_miembro';
 
 protected $fillable =  array('id','nombre');

 protected $hidden = ['created_at','updated_at'];
}