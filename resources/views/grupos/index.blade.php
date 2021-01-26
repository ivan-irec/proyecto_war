
@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{ Session::get('Mensaje')}}
</div>
@endif

<a href="{{ url('grupos/create')}}" class="btn btn-outline-primary">Agregar Grupo</a>
<br>
<br>
<table class="table table-light table-hover">

    <thead class="thead-light">

        <tr>

            <th>#</th>
            <th>GRUPO</th>
            <th>Semestre</th>
            <th>Turno</th>

        </tr>

    </thead>

    <tbody>
    @foreach ($grupos as $grupo) <!--Variable estudiantes viene del controller -->
        
        <tr>

            <td>{{$loop->iteration}}</td>
            <td>{{$grupo->Grupo}}</td> <!--POner nombres como la base de datos-->
            <td>{{$grupo->Semestre}}</td>
            <td>{{$grupo->Turno}}</td>
            <td>
            <a class="btn btn-warning" href="{{url('/grupos/'.$grupo->id.'/edit')}}" >
            Editar</a>
                
                
            <form method="post" action=" {{ url('/grupos/'.$grupo->id) }}" style="display:inline"  >
                {{ csrf_field() }}
                {{ method_field('DELETE')}} 

                <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Seguro que desea ELIMINAR grupo')">Eliminar</button>

            </form>   


            
            </td>

        </tr>
    @endforeach
    </tbody>

</table>

{{$grupos->links()}}
</div>

@endsection