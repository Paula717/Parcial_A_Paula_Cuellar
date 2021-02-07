<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Editorial;

class LibreriaController extends Controller
{
    //Registrar
    public function registro_libro()
    {
        $editorial = Editorial::all();
        return view('libro.registro-libros', compact('editorial'));
    }

    public function mensaje_libro(Request $request)
    {
        
        $libro = new Libro();
        $libro ->ISBN = $request->input('ISBM');
        $libro ->titulo = $request->input('titulo');
        $libro ->precio = $request->input('precio');
        $libro ->editorial_fk = $request->input('editorial');
        $libro ->save();
        return redirect()->route('listaLibro');
    }

    //Listar
    public function listarLibro()
    {
        $editorial = Editorial::all();
        $libro = Libro::all();
        return view('libro.listar-libros',['libro' => $libro ])->with(['editorial' => $editorial ]);
    }

    //Actualizar
    public function form_actualiza_libro($id)
    {
        $libro = Libro::findOrFail($id);
        $editorial = Editorial::all();
        return view('libro.form_actualiza_libro', compact('editorial','libro'));
    }

    public function actualizar_libro(Request $request, $id)
    {
        $libro = Libro::findOrFail($id);
        $libro ->ISBN = $request->input('ISBM');
        $libro ->titulo = $request->input('titulo');
        $libro ->precio = $request->input('precio');
        $libro ->editorial_fk = $request->input('editorial');
        $libro ->save();
        return redirect()->route('listaLibro');
    }


}
