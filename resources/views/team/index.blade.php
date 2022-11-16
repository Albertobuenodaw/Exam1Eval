@extends('main')
@section('content')
<div class = "container">   
    <h1>Teams</h1>
    <form action = '/team' method= 'post'>
        @csrf
        <label for="nombre">Name</label><br>
        <input type ="text" name="nombre" ><br>

        <label for="fecha">Fecha de creacion</label><br>
        <input type ="date" name="fecha_creacion" ><br>

        <label for="num_pilotos">num_pilotos</label><br>
        <input type ="number" name="num_pilotos" ><br>

        <label for="sobrepresupuesto">Sobre Presupuesto</label><br>
        <input type ="checkbox" name="sobre_presupuesto" ><br>

        <input type="submit" value= "Crear equipo">

    </form>
</div>
 
@endsection