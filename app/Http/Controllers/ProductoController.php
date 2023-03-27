<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Producto.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Producto::create([
            'nombre'=>request('tbNombre'),
            'descripcion'=>request('tbDescripcion'),
            'precio'=>request('tbPrecio'),
            'cantidad'=>request('tbCantidad'),
            'disponibilidad'=>request('ddlDisponibilidad'),
            'categoria'=>request('ddlCategoria'),
            'etiquetas'=>request('tbEtiquetas')
        ]);    

        return redirect()->route('Dashboard.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Hacer consultas de informacion
        return View('Producto.show', ['i'=>Producto::findorFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //obtener el valor desde la bd en la migracion
        $i = Producto::findorFail($id);
        return view('Admin.Producto.edit', compact('i'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $i=Producto::findorFail($id);
        $i->nombre=$request->tbNombre;
        $i->descripcion=$request->tbDescripcion;
        $i->precio=$request->tbPrecio;
        $i->cantidad=$request->tbCantidad;
        $i->disponibilidad=$request->ddlDisponibilidad;
        $i->categoria=$request->ddlCategoria;
        $i->etiquetas=$request->tbEtiquetas;
        // $i->updated_at=$request->;
        $i->save();
        return redirect()->route('Dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $i=Producto::findorFail($id);
        $i->delete();
        return redirect()->route('Dashboard.index');
    }
}
