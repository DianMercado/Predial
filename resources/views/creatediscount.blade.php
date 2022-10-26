@extends("layouts.app")
@section('title', 'Discount Create')
@section('content')
<form class="form-group" method="POST" action="/discounts" enctype="multipart/form-data">
    @csrf
    <div clas="form-group">
        <label for="">Clave Catastral:</label>
        <input type="text" name="clave_catastral" class="form-control">
</div>
<div clas="form-group">
        <label for="">Correo:</label>
        <input type="text" name="correo" class="form-control">
</div>
<div clas="form-group">
        <label for="">Tipo De Trámite:</label>
<select class="form-control" input type="text" name="tipo_tramite">
        <option value="1">Persona de la Tercera Edad </option>
        <option value="2">Mujer Embarazada </option>
        <option value="3">Persona con Discapacidad </option>
</select>

</div>
<div clas="form-group">
        <label for="">Archivo Comprobante (Para Descuento):</label>
        <input type="file" name="archivo_comprobante" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection

