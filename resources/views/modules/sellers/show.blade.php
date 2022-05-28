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
        </div>

    </div>

@endsection
