@extends('layouts.app')
@section('content')
<div class="table-responsive border p-3 rounded-3">
    <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="dataTable">
        <thead>
            <tr>
                <th>nama user</th>
                <th>email user</th>
                <th>event</th>
                <th>tanggal pinjam</th>
                <th>tanggal kembali</th>
                <th>barang</th>
                <th>jumlah</th>
                <th>status</th>
            </tr>
        </thead>
    </table>
</div>
@endsection
@push('scripts')
<script type="module">
    $(document).ready(function() {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/getBarang',
            columns: [
                { data: 'peminjaman.user.name', name: 'peminjaman.user.name' },
                { data: 'peminjaman.user.email', name: 'peminjaman.user.email' },
                { data: 'peminjaman.event', name: 'peminjaman.event' },
                { data: 'peminjaman.tanggal_pinjam', name: 'peminjaman.tanggal_pinjam' },
                { data: 'peminjaman.tanggal_kembali', name: 'peminjaman.tanggal_kembali' },
                { data: 'barang.nama_barang', name: 'barang.nama_barang' },
                { data: 'jumlah', name: 'jumlah' },
                { data: 'status', name: 'status' }
            ],
        });
    });
</script>
@endpush
