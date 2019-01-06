<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{

    protected $table = 'telefonos';
    public $timestamps = true;
    protected $fillable = array('modello_id', 'q1', 'q2', 'q3', 'prezzo');


    public function modello()
    {
        return $this->belongsTo(Modello::class);
    }

 
}