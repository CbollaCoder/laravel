@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{url('/estudiante/'.$estudiante->id)}}"  method="post">
        @csrf
        {{method_field('PATCH')}}
        @include('estudiante.form',['modo'=>'Editar']);
    </form>
</div>
@endsection