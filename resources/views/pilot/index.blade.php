@extends('main')

@section('content')
<div class = "container">   
    <h1>Pilots</h1>
    <form action = '/pilot' method= 'post'>
        @csrf
        <label for="nombre">Nombre</label><br>
        <input type ="text" name="nombre" ><br>

        <label for="numero_licencia">Numero de licencia</label><br>
        <input type ="number" name="numero_licencia" ><br>

        <label for="fecha">Fecha Nacimiento</label><br>
        <input type ="date" name="fecha" ><br>

        <label for="victorias">Numero de Victorias</label><br>
        <input type ="number" name="victorias" ><br>

        <input type="submit" value= "Crear Piloto">

    </form>
</div>
 
@endsection