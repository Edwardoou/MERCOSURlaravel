<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplomatica extends Model
{
 protected $table='reladiplo';
 
 protected $fillable =  array('iddiplo','titulo','fecha','detalle');

 protected $hidden = ['created_at','updated_at'];
}
