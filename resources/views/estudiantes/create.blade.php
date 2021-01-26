@extends('layouts.app')

@section('content')
<div class="container">


 @if(count($errors)>0)
 <div class="alert alert-primary" role="alert">
     <ul>
         @foreach ($errors->all() as $error)
         <li>{{$error}}</li>    
         @endforeach
     </ul>
 </div>
 @endif   

<form action="{{url('/estudiantes/')}}" class="form-horizontal" method="post" enctype="multipar/form-data"> 

    {{ csrf_field() }}

    @include('estudiantes.form',['Modo'=>'crear'])

    

</form>

</div>

@endsection