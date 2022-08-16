<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $busqueda) //La función index recibira un Request (solicitud) de un form
    {
        //Recuperamos la información del form utilizando la propiedad name del input
        $buscar = $busqueda->input('buscar');

        /*Realizamos la consulta utilizando la palabra introducida por el usuario
        Llamamos a nuestro modelo user y lo relacionamos con la tabla courses
        Donde courses tenga un nombre parecido a buscar
        O donde users tenga un nombre parecido a buscar
        O donde users tenga un apellidoP parecido a buscar
        O donde users tenga un apellidoM parecido a buscar
        hacemos un select del resultado
        */
        $users = User::with('courses')
            ->whereHas('courses', function ($query) use ($buscar) {
                $query->where('name', 'like', '%' . $buscar . '%');
            })
            ->orwhere('name', 'like', '%' . $buscar . '%')
            ->orWhere('apellidoP', 'like', '%' . $buscar . '%')
            ->orWhere('apellidoM', 'like', '%' . $buscar . '%')
            ->get();

        //Regresamos la vista users.blade.php y le pasamos a la vista el resultado de nuestra consulta
        return view('users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
