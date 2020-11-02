@extends('layouts.app')
@section('content')
<div class="container">

    Agregar registros

    <form action="{{ url('/registros') }} " class="form-horizontal" method="post">
        @include('registros.form', ['Modo'=>'crear'])
    </form>

</div>
@endsection