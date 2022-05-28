@extends('layouts.app')

@section('title', 'Sales')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Ventas</h4>

        <a href="{{ route('sales.create') }}" class="btn btn-dark btn-sm text-white"><i class="bi bi-plus-lg"></i> Nuevo</a>

        <hr>
        <div class="card">
            <h5 class="card-header">Listado de ventas</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Cliente</th>
                            <th>Vendedor</th>
                        </tr>
                    <tbody>
                        @foreach ($sales as $sale)
                            <tr>
                                <td>{{ $sale->id }}</td>
                                <td>{{ $sale->name_customer }} {{ $sale->surname_customer }}</td>
                                <td>{{ $sale->name_seller }} {{ $sale->surname_seller }}</td>
                                <td>
                                    <a href="{{ route('sales.show',$sale->id) }}"  class="btn btn-dark btn-sm text-white">Ver</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
