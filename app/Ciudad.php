<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    //
    protected $table = 'ciudades';
    protected $primaryKey='idCiudad';
    public $timestamps=false; // crea una fecha creacion del registro y un update del registro
    protected $fillable = [
        'idCiudad',
        'NombreCiudad',
        'idEstado',
        'idAlcalde',
    ];

    public function estado(){
        return $this->belongsTo('App\Estado','idEstado','idEstado');
    }
    public function alcalde(){
        return $this->belongsTo('App\Alcalde','idAlcalde','Cedu_Alcalde');
    }
}
