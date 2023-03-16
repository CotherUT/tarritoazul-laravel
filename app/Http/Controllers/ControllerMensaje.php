<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMensaje extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
        Request()->validate(
            [
                'NombreUsuario'=> 'required|alpha',
                'Email'=> 'required |email',
                'ConfirmarEmail'=> 'required|email|same:Email',
                'Contraseña'=> 'required|min:8|max:15',
                'ConfirmarContraseña'=> 'required|same:Contraseña|'

                
            ]
            );

            return('Transacción exitosa');

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
