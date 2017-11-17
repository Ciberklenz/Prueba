<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    protected $table='obras';
    protected $primaryKey='id';
    protected $fillable= array('nombre_obra');


}
