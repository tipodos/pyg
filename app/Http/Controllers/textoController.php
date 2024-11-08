<?php

namespace App\Http\Controllers;

use App\Models\texto;
use Illuminate\Http\Request;

class textoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $texto=texto::all();

        return view('texto/index',compact('texto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $texto = new texto();

        $texto->campo=$request->campo;
        $texto->titulo=$request->titulo;
        $texto->texto=$request->texto;

        $texto->save();

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
        $texto= texto::find($id);
        $textos=texto::all();
        
        return view('texto/edit',compact('texto','textos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $texto=texto::find($id);
        $texto->campo=$request->campo;
        $texto->titulo=$request->titulo;
        $texto->texto=$request->texto;

        $texto->save();

        return redirect()->route('texto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $texto=texto::find($id);

        $texto->delete();

        return redirect()->back();
    }
}
