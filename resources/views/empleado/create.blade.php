formulario creacion de empleado
@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{url('/empleado')}}" method="POST" enctype="multipart/form-data"><!--Enviar fotografias o archivos-->
    @csrf
    @include('empleado.form',['modo'=>'Crear'])
</form>
</div>
@endsection