<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direccion;
use App\Models\User;

class DireccionController extends Controller
{
    public function direccion(){
        return view("Direccion.direccion");
    }

    public function guardardireccion(User $usuario,Request $request){
        $request->validate(['direccion' => 'required']);
        $direccion = new Direccion();
        $direccion->direccion = $request->direccion;
        $direccion->userid = $usuario->id;
        $direccion->save();
        return redirect()->route('usuario',$usuario->id);
    }
}
