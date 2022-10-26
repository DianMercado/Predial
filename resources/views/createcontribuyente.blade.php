@extends("layouts.app")
@section('title', 'Contribuyente Create')
@section('content')
<form class="form-group" method="POST" action="/contribuyentes" enctype="multipart/form-data">
    @csrf
<div clas="form-group">
        <label for="">Nombre:</label>
        <input type="text" name="nombre" class="form-control">
</div>
<div clas="form-group">
        <label for="">Apellido Paterno:</label>
        <input type="text" name="apellido_paterno" class="form-control">
</div>
<div clas="form-group">
        <label for="">Apellido Materno:</label>
        <input type="text" name="apellido_materno" class="form-control">
</div>
<div clas="form-group">
        <label for="">Clave Catastral:</label>
        <input type="text" name="clave_catastral" class="form-control">
</div>
<a href="/contribuyentes/consultado" class="btn btn-primary">Consultar</a>
</form>
@endsection

