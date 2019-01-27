<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{

    protected $table = 'telefonos';
    public $timestamps = true;
    protected $fillable = array('modello_id', 'gb', 'q1', 'q2', 'q3', 'prezzo', 'documents');


    public function modello()
    {
        return $this->belongsTo(Modello::class);
    }

    public function gb()
    {
        return $this->hasMany(Gb::class);
    }
}
