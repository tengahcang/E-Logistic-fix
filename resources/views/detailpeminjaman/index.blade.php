@extends('layouts.app')
@section('content')
<div class="table-responsive border p-3 rounded-3">
    <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="dataTable">
        <thead>
            <tr>
                <th>nama user</th>
                <th>email user</th>
                <th>event</th>
                {{-- <th>keterangan</th> --}}
                <th>tanggal pinjam</th>
                <th>tanggal kembali</th>
                <th>barang</th>
                <th>jumlah</th>
                <th>status</th>
            </tr>
        </thead>
        {{-- @foreach ($datas1 as $data1)

                <tbody>
                    <tr>
                        <th>{{$data1->peminjaman->user->name}}</th>
                        <th>{{$data1->peminjaman->user->email}}</th>
                        <th>{{$data1->peminjaman->event}}</th>
                        <th>{{$data1->peminjaman->keterangan}}</th>
                        <th>{{$data1->peminjaman->tanggal_pinjam}}</th>
                        <th>{{$data1->peminjaman->tanggal_kembali}}</th>
                        <th>{{$data1->barang->nama_barang}}</th>
                        <th>{{$data1->jumlah}}</th>
                        <th>{{$data1->status}}</th>
                    </tr>
                </tbody>


        @endforeach --}}
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
                // { data: 'peminjaman.keterangan', name: 'peminjaman.keterangan' },
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
