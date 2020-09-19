<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paises;

class Paiscontroller extends Controller
{
    public function index(Request $request)
    {
        $Paises=Paises::all();
        return $Paises;
    }

    public function store(Request $request)
    {
        $Paises= new Paises();
        $Paises->nombre = $request->nombre;
        $Paises->save();
    }

    public function update(Request $request)
    {
        $Paises=Paises::findOrfail($request->$id);
        $Paises->nombre = $request->nombre;
        $Paises->save();
    }

    public function destroy(Request $request)
    {
        $Paises=Paises::findOrfail($request->$id);
        $Paises->delete();
    }
}
