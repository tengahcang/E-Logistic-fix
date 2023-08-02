@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <div class="row mb-0">
        <div class="col-lg-9 col-xl-10">

        </div>
        <div class="col-lg-3 col-xl-2">
            <div class="d-grid gap-2">
                <a class="btn btn-primary btn-lg" href="{{ route('detailpeminjaman.create',['id'=>$id]) }}">
                    <i class="bi bi-plus"></i> Tambah Barang
                </a>
            </div>
        </div>
    </div>
    <hr>

    <div class="table-responsive border p-3 rounded-3">
        <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="dataTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Barang</th>
                    <th>Jumlah</th>
                    <th></th>
                </tr>
            </thead>

            @if ($datas->isNotEmpty())
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->barang->nama_barang }}</td>
                            <td>{{ $data->jumlah }}</td>
                            <td>@include('detailpeminjaman.action')</td>
                        </tr>
                    @endforeach
                </tbody>
            @else
                <h1>tidak ada barang</h1>
            @endif



        </table>
    </div>
    <div class="row">
        <div class="col-md-6 d-grid">

        </div>
        <div class="col-md-6 d-grid">
            <a href="{{ route('home') }}" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</a>
        </div>

    </div>
</div>
@endsection
