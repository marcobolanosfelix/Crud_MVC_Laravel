
@extends('layouts.app')

@section('content')

<div class="container">

<!--Si existe la variable mensaje o tiene información, imprime el mensaje-->
@if(Session::has('Mensaje')) 
    <div class="alert alert-success" role="alert">
        {{ Session::get('Mensaje') }}
    </div>
@endif

<a href="{{ url('registros/create') }}" class="btn btn-success">Agregar Persona</a>
<br><br>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>RFC</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>ID Ciudad</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
            
                <a class="btn btn-warning" href="">Editar</a>
            
                <form action="" method="post" style="display:inline">
                {{ method_field('DELETE') }}
                    <button class="btn btn-danger" type="submit" onclick="return confirm('¿Desea borrarlo?');">Borrar</button>
                </form>
            
            </td>
        </tr>
    </tbody>
    
</table>

</div>

@endsection