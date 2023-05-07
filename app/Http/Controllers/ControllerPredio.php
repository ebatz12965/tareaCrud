<?php


namespace App\Http\Controllers;

use App\Models\Predio;
use Illuminate\Http\Request;

class ControllerPredio extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $predios = Predio::orderBy('id', 'desc')->paginate(3);
        return view('predio.listaP', compact('predios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('predio.agregarP');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $predios = Predio::find($id);
        return view('predio.eliminarC', compact('predios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $predios = Predio::find($id);
        return view("predio.actualizarP", compact('predios'));
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
