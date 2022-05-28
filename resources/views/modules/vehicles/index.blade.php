@extends('layouts.app')

@section('title', 'Vehicles')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Vehículos</h4>

        <a href="{{ route('vehicles.create') }}" class="btn btn-dark btn-sm text-white"><i class="bi bi-plus-lg"></i> Nuevo</a>

        <hr>
        <div class="card">
            <h5 class="card-header">Listado de vehículos</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <td>Código</td>
                            <td>Modelo</td>
                            <td>Potencia maxíma</td>
                            <td>Torque Maxímo</td>
                            <td>Combustible</td>
                            <td>Color</td>
                            <td>Marca</td>
                            <td>Valor</td>
                            <td>Fecha de llegada</td>
                        </tr>
                    <tbody>
                        @foreach ($vehicles as $vehicle)
                            <tr>
                                <td>{{ $vehicle->id }}</td>
                                <td>{{ $vehicle->model }}</td>
                                <td>{{ $vehicle->maximum_power }}</td>
                                <td>{{ $vehicle->maximum_torque }}</td>
                                <td>{{ $vehicle->fuel_type }}</td>
                                <td>{{ $vehicle->color }}</td>
                                <td>{{ $vehicle->brand }}</td>
                                <td>$ {{ number_format($vehicle->value, 2, '.', ',') }}</td>
                                <td>{{ $vehicle->created_at }}</td>
                                <td>
                                    <a href="{{ route('vehicles.show',$vehicle->id) }}"  class="btn btn-dark btn-sm text-white">Ver</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
