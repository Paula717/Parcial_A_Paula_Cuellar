<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editorial;

class EditorialController extends Controller
{
    public function listar_editorial()
    {
        $editorial = Editorial::all();
        return view('editorial.listar-editorial',['editorial' => $editorial]);
    }
}
