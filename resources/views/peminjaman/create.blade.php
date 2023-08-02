
@extends('layouts.app')
@section('content')
<div class="container-sm mt-5">
    <form action="{{ route('pinjam.store') }}" method="POST" enctype="multipart/form-data">

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
                        <label class="form-label" for="nama">Nama: {{Auth::user()->name}}</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email: {{Auth::user()->email}}</label>
                    </div>

                    <div class=" mb-3">
                        <label for="Event" class="form-label">Event</label>
                        <input class="form-control @error('Event') is-invalid @enderror" type="text" name="Event" id="Event" value="{{ old('Event') }}">
                        @error('Event')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                    <div class=" mb-3">
                        <label for="Keterangan" class="form-label">Keterangan</label>
                        <input class="form-control @error('Keterangan') is-invalid @enderror" type="textarea" name="Keterangan" id="Keterangan" value="{{ old('Keterangan') }}">
                        @error('Keterangan')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class=" mb-3">
                        <label for="tanggal_pinjam" class="form-label">tanggal pinjam</label>
                        <input class="form-control @error('tanggal_pinjam') is-invalid @enderror" type="date" name="tanggal_pinjam" id="tanggal_pinjam" value="{{ old('tanggal_pinjam') }}">
                        @error('tanggal_pinjam')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class=" mb-3">
                        <label for="tanggal_kembali" class="form-label">tanggal kembali</label>
                        <input class="form-control @error('tanggal_kembali') is-invalid @enderror" type="date" name="tanggal_kembali" id="tanggal_kembali" value="{{ old('tanggal_kembali') }}">
                        @error('tanggal_pinjam')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
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
                        <a href="{{ route('home') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
