<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoresModel extends Model
{
    protected $table='stores';
    protected $fillable = ['name', 'address', 'description'];
}
