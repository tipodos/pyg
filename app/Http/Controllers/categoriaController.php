<?php

namespace App\Http\Controllers;

use App\Models\categoria_img;
use Illuminate\Http\Request;

class categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria = categoria_img::all();
        return view('categoria/index',compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categoria= new categoria_img();
        $categoria->nombre= $request->categoria;
        $categoria->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $catego =categoria_img::find($id);
        $categoria = categoria_img::all();
        return view('categoria/edit',compact('categoria','catego'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria = categoria_img::find($id);
        $categoria->nombre=$request->categoria;
        $categoria->save();

        return redirect()->route('categoria.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = categoria_img::find($id);
        $categoria->delete();

        return redirect()->back();
    }
}
