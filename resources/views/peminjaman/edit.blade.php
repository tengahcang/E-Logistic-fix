@extends('layouts.app')
@section('content')
<form action="{{ route('pinjam.update',['pinjam'=>$datas1->id]) }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="row justify-content-center">
        <div class="p-5 bg-light rounded-3 border col-xl-6">
            <div class="mb-3 text-center">
                <i class="bi bi-box-seam-fill fs-1"></i>
                <h4>Buat peminjaman</h4>
            </div>
            <hr>
            <div class="row">
                    <input class="form-control @error ('firstName') is-invalid @enderror " type="hidden" name="Nama" id="Nama" value="{{Auth::user()->id}}">
                <div class="mb-3">
                    <label class="form-label" for="nama">Nama: {{$datas1->user->name}}</label>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email: {{$datas1->user->email}}</label>
                </div>
                <div class=" mb-3">
                    <label for="Event" class="form-label">Event: {{$datas1->event}}</label>

                </div>
                <div class=" mb-3">
                    <label for="Keterangan" class="form-label">Keterangan: {{$datas1->keterangan}}</label>

                </div>
                <div class=" mb-3">
                    <label for="tanggal_pinjam" class="form-label">tanggal pinjam: {{$datas1->tanggal_pinjam}}</label>

                </div>
                <div class=" mb-3">
                    <label for="tanggal_kembali" class="form-label">tanggal kembali: {{$datas1->tanggal_kembali}}</label>

                </div>
                <div class=" mb-3">
                    <label for="statuspeminjam" class="form-label">status: </label>
                    <select name="statuspeminjam" id="statuspeminjam" class="form-select">
                            @php
                                $selected = "";
                                if ($errors->any())
                                    $selected = old('status');
                                else
                                    $selected = $datas1->status;
                            @endphp
                        <option value="waiting" {{ $selected == 'waiting' ? 'selected' : '' }}>waiting</option>
                        <option value="approved" {{ $selected == 'approved' ? 'selected' : '' }}>approved</option>
                        <option value="decline" {{ $selected == 'decline' ? 'selected' : '' }}>decline</option>
                    </select>
                </div>
            </div>
            {{-- <div class=" mb-3">
                <label for="Foto" class="form-label">input File foto</label>
                <input type="file" class="form-control" name="Foto" id="Foto">
                @error('Foto')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
            </div> --}}
            <hr>
            <div class="row">
                <div class="col-md-6 d-grid">
                    <a href="{{ route('pinjam.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                </div>
                <div class="col-md-6 d-grid">
                    <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<div class="table-responsive border p-3 rounded-3">
    <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="dataTable">
        <thead>
            <tr>
                <th>nama user</th>
                <th>email user</th>
                <th>event</th>
            </tr>
        </thead>
        @foreach ($datas2 as $alat)
                <tbody>
                    <tr>
                        <form action="{{ route('detailpeminjaman.update',['detailpeminjaman'=>$alat->id]) }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <th>{{$alat->barang->nama_barang}}</th>
                            <th>{{$alat->jumlah}}</th>
                            <th>

                                    <select name="statusalat" id="statusalat" class="form-select">
                                            @php
                                                $selected = "";
                                                if ($errors->any())
                                                    $selected = old('status');
                                                else
                                                    $selected = $alat->status;
                                            @endphp
                                        <option value="waiting" {{ $selected == 'waiting' ? 'selected' : '' }}>waiting</option>
                                        <option value="booked" {{ $selected == 'booked' ? 'selected' : '' }}>booked</option>
                                        <option value="rent" {{ $selected == 'rent' ? 'selected' : '' }}>rent</option>
                                        <option value="done" {{ $selected == 'done' ? 'selected' : '' }}>done</option>
                                        <option value="cancel" {{ $selected == 'cancel' ? 'selected' : '' }}>cancel</option>
                                    </select>

                            </th>
                            <th>
                                <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                            </th>
                        </form>
                        {{-- <th>{{$alat->tanggal_pinjam}}</th>
                        <th>{{$alat->tanggal_kembali}}</th>
                        <th>{{$alat->status}}</th>
                        <th></th> --}}
                    </tr>
                </tbody>


        @endforeach
    </table>
</div>
@endsection
