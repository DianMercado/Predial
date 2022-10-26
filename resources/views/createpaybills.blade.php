@extends("layouts.app")
@section('title', 'PayBills Create')
@section('content')
<form class="form-group" method="POST" action="/paybills" enctype="multipart/form-data" >
    @csrf
    <div clas="form-group">
        <label for="">Clave Catastral:</label>
        <input type="text" name="clave_catastral" class="form-control">
</div>
<div clas="form-group">
        <label for="">Teléfono:</label>
        <input type="text" name="telefono" class="form-control">
</div>
<div clas="form-group">
        <label for="">Correo:</label>
        <input type="text" name="correo" class="form-control">
</div>
<div clas="form-group">
        <label for="">Comprobante De Pago:</label>
        <input type="file" name="comprobante_pago_cliente" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
<a href="/paybills/verpaybills" class="btn btn-primary">Ver Registros</a>
</form>
@endsection

