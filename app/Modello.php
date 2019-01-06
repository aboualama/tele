<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modello extends Model
{

    protected $table = 'modellos';
    public $timestamps = true;
    protected $fillable = array('marca_id', 'title' , 'gb');
 


    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
    
    public function telefonos()
    {
        return $this->hasMany(Telefono::class);
    }

 
}