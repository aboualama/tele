<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gb extends Model
{
    protected $table = 'gp';

    public $timestamps = true;

    protected $fillable = ['gb', 'price', 'telefono_id'];
}
