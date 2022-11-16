@extends('main')

@section('content')
<div class = "container">   
    <h1>Pilots</h1>
    <form action = '/pilot/create' method= 'post'>
        <label for="nombre">Nombre</label><br>
        <input type ="text" name="nombre" ><br>

        <label for="nombre">Numero de licencia</label><br>
        <input type ="number" name="numero_licencia" ><br>

        <label for="fecha">Fecha Nacimiento</label><br>
        <input type ="date" name="fecha" ><br>

        <label for="nombre">Numero de licencia</label><br>
        <input type ="number" name="numero_licencia" ><br>

        <input type="button" value= "Crear Piloto">

    </form>
</div>
 
@endsection