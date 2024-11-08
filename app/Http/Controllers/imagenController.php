<?php

namespace App\Http\Controllers;

use App\Models\categoria_img;
use App\Models\image;
use Illuminate\Http\Request;

class imagenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imagen = image::all();
        $categoria =categoria_img::all();
        return view('imagen/index',compact('imagen','categoria'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categoria_imgs,id',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Guardar la imagen en el directorio 'public/img'
        $imageName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('img'), $imageName);

        // Crear el registro en la base de datos
        $imagen = new Image();
        $imagen->nombre = $request->nombre;
        $imagen->categoria_id = $request->categoria_id;
        $imagen->img = $imageName;
        $imagen->save();

        return redirect()->back()->with('success', 'Imagen subida exitosamente');
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        $imagen = image::find($id);
        $img = image::all();
        $categoria =categoria_img::all();
        return view('imagen/edit',compact('imagen','categoria','img'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categoria_imgs,id',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Guardar la imagen en el directorio 'public/img'
        $imageName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('img'), $imageName);

        // Crear el registro en la base de datos
        $imagen = image::find($id);
        $imagen->nombre = $request->nombre;
        $imagen->categoria_id = $request->categoria_id;
        $imagen->img = $imageName;
        $imagen->save();

        return redirect()->route('imagen.index')->with('success', 'Imagen subida exitosamente');
    }
    public function destroy(string $id)
    {
        $imagen = image::find($id);
        $imagen->delete();
        return redirect()->back();
    }
}
