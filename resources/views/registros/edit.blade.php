
@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{ url('/registros/'.$registro->id) }}" method="post">
        {{ method_field('PATCH') }}
        @include('registros.form', ['Modo'=>'editar'])
    </form>

</div>

@endsection