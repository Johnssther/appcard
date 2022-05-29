@extends('layouts.app')

@section('title', 'Sellers')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard / Sellers / </span> {{ $seller->id }}</h4>

        <a href="{{ route('sellers.index') }}" class="btn btn-dark btn-sm text-white">Sellers</a>
        <a href="{{ route('sellers.create') }}" class="btn btn-dark btn-sm text-white"><i class="bi bi-plus-lg"></i> Nuevo</a>
        {{-- <a href="{{ route('seller.index') }}" class="btn btn-dark btn-sm text-white"><i class="bi bi-pencil"></i> Editar</a> --}}
        <hr>
        <div class="card">
            <h5 class="card-header">Cliente</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Código:</span> {{ $seller->id }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Nombre:</span> {{ $seller->name }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Apellido:</span> {{ $seller->surname }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Teléfono:</span> {{ $seller->telephone }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Dirección:</span> {{ $seller->direction }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Email:</span> {{ $seller->email }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Compañia:</span> {{ $seller->company }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Cédula:</span> {{ $seller->identification_card }}</p>
                    </div>
                </div>
            </div>
            <h5 class="card-header">Ventas</h5>
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>Codigo de la venta</th>
                        <th>Cliente</th>
                        <th>Vehiculo</th>
                        <th>Valor</th>
                        <th>Fecha de la venta</th>
                        <th>Ver</th>
                    </tr>
                <tbody>
                    @foreach ($seller->sales as $sale)
                    <tr>
                        <td>{{ $sale->id }}</td>
                        <td>{{ $sale->name_customer }} {{ $sale->surname_customer }}</td>
                        <td>{{ $sale->vehicle->model }} {{ $sale->vehicle->color }}</td>
                        <td>$ {{ number_format($sale->vehicle->value, 2, '.', ',') }}</td>
                        <td>{{ $sale->created_at }}</td>
                        <td>
                            <a href="{{ route('sales.show',$sale->id) }}">
                                <i class="bi bi-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection
