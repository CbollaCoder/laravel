@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif

<a href="{{url('materia/create')}}" class="btn btn-success">Registrar Nueva Materia </a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Carrera</th>
            <th>Semestre</th>
            <th>Docente</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($materias as $materia)
        <tr>
            <td>{{$materia->id}}</td>
            <td>{{$materia->Nombre}}</td>
            <td>{{$materia->Carrera}}</td>
            <td>{{$materia->Semestre}}</td>
            <td>{{$materia->Docente}}</td>
            <td>
                <a href={{url('/materia/'.$materia->id.'/edit')}} class="btn btn-warning"> Editar </a> 
                | 
                <form action="{{url('/materia/'.$materia->id)}}" class="d-inline" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" class="btn btn-danger" onclick="return confirm('Quieres borrar?')" value="Borrar">
                </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection