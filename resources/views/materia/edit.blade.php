@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{url('/materia/'.$materia->id)}}" method="post">
        @csrf
        {{method_field('PATCH')}}
        @include('materia.form',['modo'=>'Editar']);
    </form>
</div>
@endsection