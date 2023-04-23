<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //página de inicio
        $datos = Persona::orderBy('paterno', 'desc')->paginate(3);
        return view('welcome', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //el formulario donde
        //nosotros agregamos datos
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //sirve para guardar datos en la bd
       $personas = new Persona();
       $personas->paterno = $request->post('paterno');
       $personas->materno = $request->post('materno');
       $personas->nombre = $request->post('nombre');
       $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
       $personas->save();

       return redirect()->route("persona.index")->with("success", "Agregado con exito!");

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //servira para obtener un registro de nuestra tabla
        $personas = Persona::find($id);
        return view('eliminar', compact('personas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //este metódo nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario
        $personas = Persona::find($id);
            return view("actualizar", compact('personas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //este metodo actualiza los datos en la bd
        $personas = Persona::find($id);
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("persona.index")->with("success", "Actualizado con exito!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //elimina un registro
        $personas = Persona::find($id);
        $personas->delete();
        return redirect()->route("persona.index")->with("success", "Eliminado con Exito!!");
    }
}
