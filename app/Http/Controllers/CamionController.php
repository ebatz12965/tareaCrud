<?php

namespace App\Http\Controllers;

use App\Models\Camion;
use Illuminate\Http\Request;


class CamionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $camions = Camion::orderBy('id', 'desc')->paginate(3);
        return view('camion.listaC', compact('camions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('camion.agregarC');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $camions = new Camion();
        $camions->id = $request->post('id');
        $camions->placa_camion = $request->post('placa_camion');
        $camions->marca = $request->post('marca');
        $camions->color = $request->post('color');
        $camions->modelo = $request->post('modelo');
        $camions->capacidad_toneladas = $request->post('capacidad_toneladas');
        $camions->transporte_id = $request->post('transporte_id');
        $camions->save();

        return redirect()->route("camion.index")->with("success", "Agregado con exito!");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $camions = Camion::find($id);
        return view('camion.eliminarC', compact('camions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $camions = Camion::find($id);
        return view("camion.actualizarC", compact('camions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $camions = Camion::find($id);
        $camions->id = $request->post('id');
        $camions->placa_camion = $request->post('placa_camion');
        $camions->marca = $request->post('marca');
        $camions->color = $request->post('color');
        $camions->modelo = $request->post('modelo');
        $camions->capacidad_toneladas = $request->post('capacidad_toneladas');
        $camions->transporte_id = $request->post('transporte_id');
        $camions->save();

        return redirect()->route("camion.index")->with("success", "Actualizado con exito!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $camions = Camion::find($id);
        $camions->delete();
        return redirect()->route("camion.index")->with("success", "Eliminado con Exito!!");
    }
}
