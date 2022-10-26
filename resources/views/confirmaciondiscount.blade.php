@extends("layouts.app")
@section('title', 'PayBills ConfirmacionDiscount')
@section('content')
@csrf
    <p>Se Ha Enviado Exitosamente</p>
    <a href="/" class="btn btn-primary">Regresar</a>
@endsection