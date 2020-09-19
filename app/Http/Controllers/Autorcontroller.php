<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autores;

class Autorcontroller extends Controller
{
    public function index(Request $request)
    {
        $Autores=Autores::all();
        return $Autores;
    }

    public function store(Request $request)
    {
        $Autores= new Autores();
        $Autores->nombre = $request->nombre;
        $Autores->nombre = $request->id_pais;
        $Autores->save();
    }

    public function update(Request $request)
    {
        $Autores=Autores::findOrfail($request->$id);
        $Autores->nombre = $request->nombre;
        $Autores->id_pais = $request->id_pais;
        $Autores->save();
    }

    public function destroy(Request $request)
    {
        $Autores=Autores::findOrfail($request->$id);
        $Autores->delete();
    }
}
