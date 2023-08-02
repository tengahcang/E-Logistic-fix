@extends('layouts.app')
@section('content')
<div class="container mt-4">
    {{-- <div class="row mb-0">
        <div class="col-lg-9 col-xl-6">
            <h4 class="mb-3">{{ $pageTitle }}</h4>
        </div>
        <div class="col-lg-3 col-xl-6">
            <ul class="list-inline mb-0 float-end">
                <li class="list-inline-item">
                    <a href="{{ route('employees.exportExcel') }}" class="btn btn-outline-success">
                        <i class="bi bi-download me-1"></i> to Excel
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ route('employees.exportPdf') }}" class="btn btn-outline-danger">
                        <i class="bi bi-download me-1"></i> to PDF
                    </a>
                </li>
                <li class="list-inline-item">|</li>
                <li class="list-inline-item">
                    <a href="{{ route('employees.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle me-1"></i> Create Employee
                    </a>
                </li>
            </ul>
        </div>
    </div> --}}
    <hr>
    <div class="table-responsive border p-3 rounded-3">
        <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="dataTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nama</th>
                    <th>alat</th>
                    <th>descripsi</th>
                    <th></th>
                </tr>
            </thead>
            {{-- <tbody>
                @foreach ($laporan as $lapor)
                    <tr>
                        <td>{{ $lapor->id }}</td>
                        <td>{{ $lapor->user->name }}</td>
                        <td>{{ $lapor->barang->nama_barang }}</td>
                        <td>{{ $lapor->descripsi }}</td>
                        <td>@include('laporan.actions')</td>
                    </tr>
                @endforeach
            </tbody> --}}

        </table>
    </div>
</div>
@endsection
@push('scripts')
<script type="module">
    $(document).ready(function() {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/getLaporan',
            columns: [
                { data: "id", name: "id", visible: false },
                { data: 'user.name', name: 'user.name' },
                { data: 'barang.nama_barang', name: 'barang.nama_barang' },
                { data: 'descripsi', name: 'descripsi' },
                { data: 'actions', name: 'actions' },
                // { data: 'peminjaman.user.email', name: 'peminjaman.user.email' },
                // { data: 'peminjaman.event', name: 'peminjaman.event' },
                // { data: 'peminjaman.keterangan', name: 'peminjaman.keterangan' },
                // { data: 'peminjaman.tanggal_pinjam', name: 'peminjaman.tanggal_pinjam' },
                // { data: 'peminjaman.tanggal_kembali', name: 'peminjaman.tanggal_kembali' },
                // { data: 'barang.nama_barang', name: 'barang.nama_barang' },
                // { data: 'jumlah', name: 'jumlah' },
                // { data: 'status', name: 'status' }
            ],
        });
    });
</script>


@endpush
