@extends('layouts.app')

@section('title', 'Vehicles')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard / Vehículos / </span> {{ $vehicle->id }}</h4>

        <a href="{{ route('vehicles.index') }}" class="btn btn-dark btn-sm text-white">Vehículos</a>
        <a href="{{ route('vehicles.create') }}" class="btn btn-dark btn-sm text-white"><i class="bi bi-plus-lg"></i> Nuevo</a>
        {{-- <a href="{{ route('seller.index') }}" class="btn btn-dark btn-sm text-white"><i class="bi bi-pencil"></i> Editar</a> --}}
        <hr>
        <div class="card">
            <h5 class="card-header">Vehiculo</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Código:</span> {{ $vehicle->id }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Modelo:</span> {{ $vehicle->model }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Potencia Maxíma:</span> {{ $vehicle->maximum_power }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Torque Maxímo:</span>  {{ $vehicle->maximum_torque }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Combustible:</span>  {{ $vehicle->fuel_type }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Color:</span>  {{ $vehicle->color }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Marca:</span>  {{ $vehicle->brand }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Valor:</span>  $ {{ number_format($vehicle->value, 2, '.', ',') }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Fecha de llegada:</span>  {{ $vehicle->created_at }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
