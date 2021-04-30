@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif

<a href="{{url('estudiante/create')}}" class="btn btn-success">Registrar Nuevo Estudiante </a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>CI</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Nacionalidad</th>
            <th>Fecha de Nacimiento</th>
            <th>Carrera</th>
            <th>Semestre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($estudiantes as $estudiante)
        <tr>
            <td>{{$estudiante->id}}</td>
            <td>{{$estudiante->CI}}</td>
            <td>{{$estudiante->Nombre}}</td>
            <td>{{$estudiante->ApellidoPaterno}}</td>
            <td>{{$estudiante->ApellidoMaterno}}</td>
            <td>{{$estudiante->Nacionalidad}}</td>
            <td>{{$estudiante->FechaNac}}</td>
            <td>{{$estudiante->Carrera}}</td>
            <td>{{$estudiante->Semestre}}</td>
            <td > 
                <a href="{{url('/estudiante/'.$estudiante->id.'/edit')}}"  class="btn btn-warning"> Editar </a>
                |
                <form action="{{url('/estudiante/'.$estudiante->id)}}" class="d-inline" method="post">
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