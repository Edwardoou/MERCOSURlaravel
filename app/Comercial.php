<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comercial extends Model
{
 protected $table='relacomercial';
 
 protected $fillable =  array('idcomer', 'pais_miembro_nombre','tipo','pais_extranjero_nombre','porcentaje');

 protected $hidden = ['created_at','updated_at'];
}