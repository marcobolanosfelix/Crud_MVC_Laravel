
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
    
    </tbody>
    
</table>

</div>

@endsection