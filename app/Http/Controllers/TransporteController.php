<?php

namespace App\Http\Controllers;

use App\Models\Transporte;
use Illuminate\Http\Request;

class TransporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transportes = Transporte::orderBy('id', 'desc')->paginate(3);
        return view('transporte.listaT', compact('transportes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transporte/agregarT');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transportes = new Transporte();
        $transportes->id = $request->post('id');
        $transportes->nombre = $request->post('nombre');
        $transportes->razon_social = $request->post('razon');
        $transportes->save();

        return redirect()->route("transporte.index")->with("success", "Agregado con exito!");
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
