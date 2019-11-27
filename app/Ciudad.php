<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    //
    protected $table = 'ciudades';
    protected $primaryKey='idCiudad';
    public $timestamps=false;
    protected $fillable = [
        'idCiudad',
        'NombreCiudad',
        'idEstado',
    ];

    public function estado(){
        return $this->belongsTo('App\Estado','idEstado','idEstado');
    }
}
