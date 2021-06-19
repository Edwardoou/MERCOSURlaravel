<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaisE extends Model
{
 protected $table='pais_extranjero';

 protected $fillable =  array('id','nombre');

 protected $hidden = ['created_at','updated_at'];
}