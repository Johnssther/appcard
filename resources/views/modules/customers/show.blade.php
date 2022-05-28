@extends('layouts.app')

@section('title', 'Customers')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard / Clientes / </span> {{ $customer->id }}</h4>

        <a href="{{ route('customers.index') }}" class="btn btn-dark btn-sm text-white">Clientes</a>
        <a href="{{ route('customers.create') }}" class="btn btn-dark btn-sm text-white"><i class="bi bi-plus-lg"></i> Nuevo</a>
        {{-- <a href="{{ route('customers.index') }}" class="btn btn-dark btn-sm text-white"><i class="bi bi-pencil"></i> Editar</a> --}}
        <hr>
        <div class="card">
            <h5 class="card-header">Cliente</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Código:</span> {{ $customer->id }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Nombre:</span> {{ $customer->name }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Apellido:</span> {{ $customer->surname }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Teléfono:</span> {{ $customer->telephone }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Dirección:</span> {{ $customer->direction }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="text-muted fw-light">Email:</span> {{ $customer->email }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
