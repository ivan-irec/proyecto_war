
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url ('grupos/'. $grupo->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    {{ method_field('PATCH') }}

    @include('grupos.form',['Modo'=>'editar'])


</form>

</div>

@endsection