@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fecha</th>
      <th scope="col">Dolar</th>
      <th scope="col">Euro</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>

      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>{{$dolar['fecha'] }}</td>
      <td>{{$dolar['fecha'] }}</td>
      <td>{{$dolar['ivp']['nombre'] }}</td>
    </tr>
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
