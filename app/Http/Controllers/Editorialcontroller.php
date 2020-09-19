<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editoriales;

class Editorialcontroller extends Controller
{
    public function index(Request $request)
    {
        $Editoriales=Editoriales::all();
        return $Editoriales;
    }

    public function store(Request $request)
    {
        $Editoriales= new Editoriales();
        $Editoriales->nombre = $request->nombre;
        $Editoriales->save();
    }

    public function update(Request $request)
    {
        $Editoriales=Editoriales::findOrfail($request->$id);
        $Editoriales->nombre = $request->nombre;
        $Editoriales->save();
    }

    public function destroy(Request $request)
    {
        $Editoriales=Editoriales::findOrfail($request->$id);
        $Editoriales->delete();
    }
}
