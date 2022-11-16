@extends('main')
@section('content')
<div class = "container">   
    <h1>Teams</h1>
    <form action = '/team/create' method= 'post'>
        @csrf
        <label for="nombre">Name</label><br>
        <input type ="text" name="nombre" ><br>

        <label for="fecha">Fecha de creacion</label><br>
        <input type ="date" name="fecha" ><br>

        <label for="numero_licencia">Numero de pilotos</label><br>
        <input type ="number" name="numero_licencia" ><br>

        <label for="sobrepresupuesto">Sobrepresupuesto</label><br>
        <input type ="checkbox" name="sobrepresupuesto" ><br>

        <input type="submit" value= "Crear equipo">

    </form>
</div>
 
@endsection