<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personita;

class personitaController extends Controller
{
    public function Listar(Request $request){
        return personita::all();
    }

    public function ListarUno(Request $request, $idPersona){
        return personita::findOrFail($idPersona);

    }

    public function Eliminar(Request $request, $idPersona){
        $persona = personita::findOrFail($idPersona);
        $persona -> delete();

        return [ "mensaje" => "Persona $idPersona a sido eliminada."];



    }
    public function Insertar(Request $request){
        $persona = new personita;
        $persona -> nombre = $request -> post("nombre");
        $persona -> apellido = $request -> post("apellido");
        $persona -> telefono = $request -> post("telefono");

        $persona -> save();

        return $persona;
    }

    public function Modificar(Request $request, $idPersona){
        $persona = personita::findOrFail($idPersona);
        $persona -> nombre = $request -> post("nombre");
        $persona -> apellido = $request -> post("apellido");
        $persona -> telefono = $request -> post("telefono");

        $persona -> save();
        return $persona;

    }
}
