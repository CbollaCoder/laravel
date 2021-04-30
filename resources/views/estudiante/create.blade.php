@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{url('/estudiante')}}" method="post">
        @csrf
        @include('estudiante.form',['modo'=>'Crear']);

    </form>
</div>
@endsection