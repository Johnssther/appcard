@extends('layouts.app')

@section('title', 'Customers')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard / Clientes / </span> Create </h4>

        <a href="{{ route('customers.index') }}" class="btn btn-dark btn-sm text-white">Clientes</a>
        <hr>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Formulario Cliente</h5>
                        <small class="text-muted float-end">Creando un nuevo cliente</small>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            Existe un error 
                        @endif
                        @include('modules.customers.main')
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
