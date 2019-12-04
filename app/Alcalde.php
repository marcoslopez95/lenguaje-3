<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alcalde extends Model
{
    //
    protected $table = 'alcalde';
    protected $primaryKey='Cedu_alcalde';
    public $timestamps=false; 
    protected $fillable = [
        'Cedu_alcalde',
        'NombreAlcalde',
    ];

    public function ciudad(){
        return $this->hasOne('App\Ciudad','Cedu_Alcalde','idAlcalde');
    }
}
