@extends('layouts.app')
@section('content')
<div class="container mt-4">
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
            ],
        });
    });
</script>
@endpush
