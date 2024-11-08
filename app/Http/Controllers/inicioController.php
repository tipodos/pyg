<?php

namespace App\Http\Controllers;

use App\Models\categoria_img;
use App\Models\image;
use App\Models\texto;
use Illuminate\Http\Request;

class inicioController extends Controller
{
    public function index(){
        $categoria= categoria_img::all();
        $imagenes=image::all();
        $texto=texto::all();

        return view('index', compact('categoria','imagenes','texto'));
    }
}
