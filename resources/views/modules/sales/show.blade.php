@extends('layouts.app')

@section('title', 'Sales')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard / Venta / </span> {{ $sale->id }}</h4>

        <a href="{{ route('sales.index') }}" class="btn btn-dark btn-sm text-white">Ventas</a>
        <a href="{{ route('sales.create') }}" class="btn btn-dark btn-sm text-white"><i class="bi bi-plus-lg"></i> Nuevo</a>
        {{-- <a href="{{ route('sales.index') }}" class="btn btn-dark btn-sm text-white"><i class="bi bi-pencil"></i> Editar</a> --}}
        <hr>
        <div class="card mb-1" style="background: green">
            <h5 class="card-header text-white">Datos del vehículo</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-white text-bold"><span class="text-white">Modelo:</span> {{ $sale->vehicle->model }}</p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-white text-bold"><span class="text-white">Potencia Maxima:</span> {{ $sale->vehicle->maximum_power }} </p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-white text-bold"><span class="text-white">Torque Maximo:</span> {{ $sale->vehicle->maximum_torque }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-white text-bold"><span class="text-white">Combustible:</span> {{ $sale->vehicle->fuel_type }}</p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-white text-bold"><span class="text-white">Color:</span> {{ $sale->vehicle->color }} </p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-white text-bold"><span class="text-white">Marca:</span> {{ $sale->vehicle->brand }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-white text-bold"><span class="text-white">Valor:</span> $ {{ number_format($sale->vehicle->value, 2, '.', ',') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-1">
            <h5 class="card-header">Datos de la venta</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Código:</span> {{ $sale->id }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Fecha y hora de la venta:</span> {{ $sale->created_at }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Comentarios:</span> {{ $sale->comments }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-1">
            <h5 class="card-header">Datos del vendedor</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Código:</span> {{ $sale->seller->id }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Nombre:</span> {{ $sale->seller->name }} {{ $sale->seller->surname }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Email:</span> {{ $sale->seller->email }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Compañia:</span> {{ $sale->seller->company }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-1">
            <h5 class="card-header">Datos del cliente</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Código:</span> {{ $sale->customer->id }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Nombre:</span> {{ $sale->customer->name }} {{ $sale->customer->surname }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Email:</span> {{ $sale->customer->email }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Compañia:</span> {{ $sale->customer->telephone }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Compañia:</span> {{ $sale->customer->direction }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
