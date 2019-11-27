<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //
    protected $table = 'estados';
    protected $primaryKey='idEstado';
    public $timestamps=false;
    protected $fillable = [
        'idEstado',
        'NombreEstado',
    ];

    public function ciudades(){
        return $this->hasMany('app\Ciudad','idEstado','idEstado');
    }
}
