<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>-->

<h1>{{$modo}} empleado</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        
    </div>
    
@endif
<div>
<div class="form-group">
<label for="Nombre">Nombre</label>
<input type="text" class="form-control" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" id="Nombre">

</div>    
<div class="form-group">
<label for="Apellido1">Apellido1</label>
<input type="text" class="form-control" name="Apellido1" value="{{isset($empleado->Apellido1)?$empleado->Apellido1:old('Apellido1')}}" id="Apellido1">

</div>
<div class="form-group">
<label for="Apellido2">Apellido2</label>
<input type="text" class="form-control" name="Apellido2" value="{{isset($empleado->Apellido2)?$empleado->Apellido2:old('Apellido2')}}" id="Apellido2">

</div>

<div class="form-group">
<label for="Correo">Correo</label>
<input type="text" class="form-control" name="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}" id="Correo">

</div>
<div class="form-group">
<label for="Foto">  </label>
@if(isset($empleado->Foto))
<img src="{{asset('storage').'/'.$empleado->Foto}}" width="100px" class="img-thumbnail img-fluid" alt="">
@endif

<input class="form-control" type="file" name="Foto"  id="Foto">
</div>

<input type="submit" class="btn btn-success" value="{{$modo}} datos">

<a href="{{url('empleado')}}" class="btn btn-primary">Regresar</a>
</div>
