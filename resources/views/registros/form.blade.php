<!--Diferenciar quien pide este formulario-->
 
<div class="form-group">
    <label for="RFC" class="control-label">{{'RFC'}}</label>
    <input type="text" class="form-control" name="RFC" id="RFC" 
    value="">
</div>

<div class="form-group">
    <label for="Nombre" class="control-label">{{'Nombre'}}</label>
    <input type="text" class="form-control" name="Nombre" id="Nombre"
    value="">
</div>
    
<div class="form-group">
    <label for="Edad" class="control-label">{{'Edad'}}</label>
    <input type="text" class="form-control" name="Edad" id="Edad"
    value="">
</div>
    
<div class="form-group">
    <label for="IdCiudad" class="control-label">{{'ID Ciudad'}}</label>
    <input type="text" class="form-control" name="IdCiudad" id="IdCiudad"
    value="">
</div>
    

<input type="submit" class="btn btn-success" value="{{ $Modo == 'crear' ? 'Agregar' : 'Modificar' }}">

<a class="btn btn-primary" href="{{ url('registros') }}">Regresar</a>
