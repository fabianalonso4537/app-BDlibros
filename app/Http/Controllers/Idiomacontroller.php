<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idiomas;

class Idiomacontroller extends Controller
{
    public function index(Request $request)
    {
        $Idiomas=Idiomas::all();
        return $Idiomas;
    }

    public function store(Request $request)
    {
        $Idiomas= new Idiomas();
        $Idiomas->nombre = $request->nombre;
        $Idiomas->save();
    }

    public function update(Request $request)
    {
        $Idiomas=Idiomas::findOrfail($request->$id);
        $Idiomas->nombre = $request->nombre;
        $Idiomas->save();
    }

    public function destroy(Request $request)
    {
        $Idiomas=Idiomas::findOrfail($request->$id);
        $Idiomas->delete();
    }
}
