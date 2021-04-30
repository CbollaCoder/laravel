<h1> {{$modo}} Estudiante </h1>

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
    <label for="CI"> CI </label>
    <input type="text" class="form-control" name="CI" value="{{isset($estudiante->CI)?$estudiante->CI:''}}" id="CI">
</div>
<div class="form-group">
    <label for="Nombre"> Nombre </label>
    <input type="text" class="form-control" name="Nombre" value="{{isset($estudiante->Nombre)?$estudiante->Nombre:''}}" id="Nombre">
</div>
<div class="form-group">
    <label for="ApellidoPaterno"> Apellido Paterno </label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="{{isset($estudiante->ApellidoPaterno)?$estudiante->ApellidoPaterno:''}}" id="ApellidoPaterno">
</div>
<div class="form-group">
    <label for="ApellidoMaterno"> Apellido Materno </label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="{{isset($estudiante->ApellidoMaterno)?$estudiante->ApellidoMaterno:''}}" id="ApellidoMaterno">
</div>
<div class="form-group">
    <label for="Nacionalidad"> Nacionalidad </label>
    <input type="text" class="form-control" name="Nacionalidad" value="{{isset($estudiante->Nacionalidad)?$estudiante->Nacionalidad:''}}" id="Nacionalidad">
</div>
<div class="form-group">
    <label for="FechaNac"> Fecha de Nacimiento </label>
    <input type="date" class="form-control" name="FechaNac" value="{{isset($estudiante->FechaNac)?$estudiante->FechaNac:''}}" id="FechaNac">
</div>
<div class="form-group">
    <label for="Carrera"> Carrera </label>
    <input type="text" class="form-control" name="Carrera"  value="{{isset($estudiante->Carrera)?$estudiante->Carrera:''}}" id="Carrera">
</div>
<div class="form-group">
    <label for="Semestre"> Semestre </label>
    <input type="text" class="form-control" name="Semestre" value="{{isset($estudiante->Semestre)?$estudiante->Semestre:''}}" id="Semestre">
</div>
<div>
    <input type="submit" class="btn btn-success" value="{{$modo}} datos">
    <a href="{{url('estudiante/')}}" class="btn btn-primary"> Regresar </a>
</div>
    