<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use App\Ciudad;

class CiudadController extends Controller
{
    //
    function formulario(){
        $estado=Estado::all();
        return view('formulario',compact('estado'));
    }

    function guardar_ciudad(Request $request){

         $NombreCiudad = $request->input('ciudad');
         if(empty($NombreCiudad))
            $data = [
                "status" => 'error'
            ]; 
        else {
            
        $ciudad = new Ciudad();
        $ciudad->NombreCiudad = $request->input('ciudad');
        $ciudad->idEstado = $request->input('estado');
        $ciudad->save();
         return redirect()->route('reporte');
         $join = Ciudad::select('ciudades.NombreCiudad','estados.NombreEstado')->join('estados','ciudades.idEstado','=','estados.idEstado')->get();
            $data = [
                "status" => 'succesfull',
                "content" => $join
            ];
        }

        return response()->json($data);
        
    }

    function reporte(){
        $join = Ciudad::select('ciudades.NombreCiudad','estados.NombreEstado')->join('estados','ciudades.idEstado','=','estados.idEstado')->get();
        // $sele = marca::distinct()->select('marca.COD_MARCA','marca.NOMBRE_MARCA')->join('Estado','')
        return view('reporte',compact('join'));
        // return $join->all();
    }
}
