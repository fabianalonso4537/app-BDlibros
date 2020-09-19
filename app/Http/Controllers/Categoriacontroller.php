<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;

class Categoriacontroller extends Controller
{
    public function index(Request $request)
    {
        $Categorias=Categorias::all();
        return $Categorias;
    }

    public function store(Request $request)
    {
        $Categorias= new Categorias();
        $Categorias->nombre = $request->nombre;
        $Categorias->save();
    }

    public function update(Request $request)
    {
        $Categorias=Categorias::findOrfail($request->$id);
        $Categorias->nombre = $request->nombre;
        $Categorias->save();
    }

    public function destroy(Request $request)
    {
        $Categorias=Categorias::findOrfail($request->$id);
        $Categorias->delete();
    }
}
