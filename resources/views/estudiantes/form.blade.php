
<div class="form-group">

<label for="Nombre" class="control-label" >{{'Nombre'}}</label>

    <input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" name="Nombre" id="Nombre" 
    value="{{ isset($estudiante->Nombre)?$estudiante->Nombre:old("Nombre")}}">

    {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>')!!}
    

</div>

<div class="form-group">

    <label for="ApellidoPaterno" class="control-label">{{'Apellido Paterno'}}</label>

    <input type="text" class="form-control {{$errors->has('ApellidoPaterno')?'is-invalid':''}}" name="ApellidoPaterno" id="ApellidoPaterno" 
    value="{{ isset($estudiante->ApellidoPaterno)?$estudiante->ApellidoPaterno:old("ApellidoPaterno")}}">

    {!! $errors->first('ApellidoPaterno','<div class="invalid-feedback">:message</div>')!!}

</div>

<div class="form-group">
    <label for="ApellidoMaterno" class="control-label">{{'Apellido Materno'}}</label>
    <input type="text" class="form-control {{$errors->has('ApellidoMaterno')?'is-invalid':''}}" name="ApellidoMaterno" id="ApellidoMaterno" 
    value="{{ isset($estudiante->ApellidoMaterno)?$estudiante->ApellidoMaterno:old("ApellidoMaterno")}}">

    {!! $errors->first('ApellidoMaterno','<div class="invalid-feedback">:message</div>')!!}

</div>


<div class="form-group">
    <label for="Edad" class="control-label">{{'Edad'}}</label>
    <input type="text" class="form-control {{$errors->has('Edad')?'is-invalid':''}}" name="Edad" id="Edad" 
    value="{{ isset($estudiante->Edad)?$estudiante->Edad:old("Edad")}}">

    {!! $errors->first('Edad','<div class="invalid-feedback">:message</div>')!!}

</div>


<div class="form-group">
    <label for="Telefono" class="control-label">{{'Telefono'}}</label>
    <input type="text" class="form-control {{$errors->has('Telefono')?'is-invalid':''}}" name="Telefono" id="Telefono" 
    value="{{ isset($estudiante->Telefono)?$estudiante->Telefono:old("Telefono")}}">    

    {!! $errors->first('Telefono','<div class="invalid-feedback">:message</div>')!!}

</div>


<div class="form-group">   
    <label for="Email" class="control-label">{{'Correo'}}</label>
    <input type="email" class="form-control {{$errors->has('Email')?'is-invalid':''}}" name="Email" id="Email" 
    value="{{ isset($estudiante->Email)?$estudiante->Email:old("Email")}}">
    {!! $errors->first('Telefono','<div class="invalid-feedback">:message</div>')!!}
</div><br>

    <input type="submit" class="btn btn-outline-primary" value="{{ $Modo=='crear' ? 'Agregar' : 'Mododificar' }}">

    <a class="btn btn-outline-secondary" href="{{ url('estudiantes')}}">Regresar</a>

