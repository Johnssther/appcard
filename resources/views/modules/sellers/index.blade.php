@extends('layouts.app')

@section('title', 'Customers')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Vendedores</h4>

        <a href="{{ route('sellers.create') }}" class="btn btn-dark btn-sm text-white"><i class="bi bi-plus-lg"></i> Nuevo</a>

        <hr>
        <div class="card">
            <h5 class="card-header">Listado de vendedores</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Estado</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                            <th>E-mail</th>
                            <th>Compañia</th>
                            <th>Cedúla</th>
                            <th>Acciones</th>
                        </tr>
                    <tbody>
                        @foreach ($sellers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->surname }}</td>
                                <td><span class="badge bg-label-{{ $customer->active == true ? 'primary':'danger' }} me-1">{{ $customer->active == true ? 'ACTIVE':'INACTIVE' }}</span></td>
                                <td>{{ $customer->telephone }}</td>
                                <td>{{ $customer->direction }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->company }}</td>
                                <td>{{ $customer->identification_card }}</td>
                                <td>
                                    <a href="{{ route('sellers.show',$customer->id) }}"  class="btn btn-dark btn-sm text-white">Ver</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
