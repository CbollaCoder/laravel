<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['materias']=Materia::paginate(5);
        return view('materia.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('materia.create');
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
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Carrera'=>'required|string|max:100',
            'Semestre'=>'required|string|max:100',
            'Docente'=>'required|string|max:100'
        ];

        $mensaje=[
            'required' => ':attribute es requerido'
        ];

        $this->validate($request,$campos,$mensaje);

        $datosMateria = request()->except('_token');
        Materia::insert($datosMateria);
        //return response()->json($datosMateria);
        return redirect('materia')->with('mensaje','Materia agregada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $materia = Materia::findOrFail($id);
        return view('materia.edit', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Carrera'=>'required|string|max:100',
            'Semestre'=>'required|string|max:100',
            'Docente'=>'required|string|max:100'
        ];

        $mensaje=[
            'required' => ':attribute es requerido'
        ];

        $this->validate($request,$campos,$mensaje);
        $datosMateria = request()->except(['_token','_method']);
        Materia::where('id','=',$id)->update($datosMateria);
        $materia = Materia::findOrFail($id);
        return view('materia.edit',compact('materia'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Materia::destroy($id);
        return redirect('materia');
    }
}
