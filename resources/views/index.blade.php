@extends("layouts.app")
@section('title', 'PayBills')
@section('content')
@csrf
    <p></p>
    <a href="/paybills/create" class="btn btn-primary">Subir Comprobante</a>
    <a href="/discounts/create" class="btn btn-primary">Solicitar Descuento</a>
    <a href="/contribuyentes/create" class="btn btn-primary">Buscar Contribuyente</a>
@endsection

