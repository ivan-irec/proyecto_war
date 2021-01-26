@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{ Session::get('Mensaje')}}
</div>
@endif

<a href="{{ url('estudiantes/create')}}" class="btn btn-outline-primary">Agregar Estudiante</a>
<br>
<br>
<table class="table table-light table-hover">

    <thead class="thead-light">

        <tr>

            <th>#</th>
            <th>Nombre</th>
            <!--<th>Apellido Paterno</th>
            <th>Apellido Materno</th>-->
            <th>Apellido</th>
            <th>Edad</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>

    </thead>

    <tbody>
    @foreach ($estudiantes as $estudiante) <!--Variable estudiantes viene del controller -->
        
        <tr>

            <td>{{$loop->iteration}}</td>
            <td>{{$estudiante->Nombre}}</td> <!--POner nombres como la base de datos-->
            <td>{{$estudiante->ApellidoPaterno}} {{$estudiante->ApellidoMaterno}}</td>
            <td>{{$estudiante->Edad}}</td>
            <td>{{$estudiante->Email}}</td>
            <td>{{$estudiante->Telefono}}</td>
            <td> 
            
            <a class="btn btn-warning" href="{{url('/estudiantes/'.$estudiante->id.'/edit')}}" >
            Editar</a>
                
                
            <form method="post" action=" {{ url('/estudiantes/'.$estudiante->id) }}" style="display:inline"  >
                {{ csrf_field() }}
                {{ method_field('DELETE')}} 

                <button class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Borrar Esuudiante?')">Eliminar</button>

            </form>   


            
            </td>

        </tr>
    @endforeach
    </tbody>

</table>

{{$estudiantes->links()}}
</div>

@endsection