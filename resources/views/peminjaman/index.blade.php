@extends('layouts.app')
@section('content')
<div class="table-responsive border p-3 rounded-3">
    <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="dataTable">
        <thead>
            <tr>
                <th>id</th>
                <th>nama user</th>
                <th>email user</th>
                <th>event</th>
                {{-- <th>keterangan</th> --}}
                <th>tanggal pinjam</th>
                <th>tanggal kembali</th>
                <th>status</th>
                {{-- <th>pid</th> --}}
                <th></th>
            </tr>
        </thead>
        {{-- @foreach ($datas1 as $data1)

                <tbody>
                    <tr>
                        <th>{{$data1->user->name}}</th>
                        <th>{{$data1->user->email}}</th>
                        <th>{{$data1->event}}</th>

                        <th>{{$data1->tanggal_pinjam}}</th>
                        <th>{{$data1->tanggal_kembali}}</th>

                        <th>{{$data1->status}}</th>
                        <th>@include('peminjaman.actions')</th>
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
            ajax: '/getPinjam',
            columns: [
                { data: "id", name: "id", visible: false },
                { data: 'user.name', name: 'user.name' },
                { data: 'user.email', name: 'user.email' },
                { data: 'event', name: 'event' },
                { data: 'tanggal_pinjam', name: 'tanggal_pinjam' },
                { data: 'tanggal_kembali', name: 'tanggal_kembali' },
                { data: 'status', name: 'status' },
                { data: 'actions', name: 'actions' }
            ],
            order: [[5, "dsc"]],
        });
    });
</script>


@endpush
