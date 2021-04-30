<h1> {{$modo}} Materia </h1>

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li> {{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="form-group">
    <label for="Nombre"> Nombre </label>
    <input type="text" class="form-control" name="Nombre" value="{{isset($materia->Nombre)?$materia->Nombre:''}}" id="Nombre">
</div>
<div class="form-group">
    <label for="Carrera"> Carrera </label>
    <input type="text" class="form-control" name="Carrera" value="{{isset($materia->Carrera)?$materia->Carrera:''}}" id="Carrera">
</div>
<div class="form-group">
    <label for="Semestre"> Semestre </label>
    <input type="text" class="form-control" name="Semestre" value="{{isset($materia->Semestre)?$materia->Semestre:''}}" id="Semestre">
</div>
<div class="form-group">
    <label for="Docente"> Docente </label>
    <input type="text" class="form-control" name="Docente" value="{{isset($materia->Docente)?$materia->Docente:''}}" id="Docente">
</div>
<div>
    <input type="submit" class="btn btn-success" value="{{$modo}} datos">
    <a href="{{url('materia/')}}" class="btn btn-primary"> Regresar </a>
</div>

