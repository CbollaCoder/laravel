<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['estudiantes']=Estudiante::paginate(5);
        return view('estudiante.index',$datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estudiante.create');
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
            'CI'=>'required|string|max:100',
            'Nombre'=>'required|string|max:100',
            'ApellidoPaterno'=>'required|string|max:100',
            'ApellidoMaterno'=>'required|string|max:100',
            'Nacionalidad'=>'required|string|max:100',
            'FechaNac'=>'required|date',
            'Carrera'=>'required|string|max:100',
            'Semestre'=>'required|string|max:100'
        ];

        $mensaje=[
            'required' => ':attribute es requerido'
        ];

        $this->validate($request,$campos,$mensaje);

        $datosEstudiante = request()->except('_token');

        Estudiante::insert($datosEstudiante);
        //return response()->json($datosEstudiante);
        return redirect('estudiante')->with('mensaje','Estudiante agregado con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiante.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'CI'=>'required|string|max:100',
            'Nombre'=>'required|string|max:100',
            'ApellidoPaterno'=>'required|string|max:100',
            'ApellidoMaterno'=>'required|string|max:100',
            'Nacionalidad'=>'required|string|max:100',
            'FechaNac'=>'required|date',
            'Carrera'=>'required|string|max:100',
            'Semestre'=>'required|string|max:100'
        ];

        $mensaje=[
            'required' => 'El :attribute es requerido'
        ];

        $this->validate($request,$campos,$mensaje);

        $datosEstudiante = request()->except(['_token','_method']);
        Estudiante::where('id','=',$id)->update($datosEstudiante);
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiante.edit',compact('estudiante'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Estudiante::destroy($id);
        return redirect('estudiante');

    }
}
