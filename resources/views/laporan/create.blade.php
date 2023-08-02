
@extends('layouts.app')
@section('content')
<div class="container-sm mt-5">
    <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-6">
                <div class="mb-3 text-center">
                    <i class="bi bi-stickies-fill fs-1"></i>
                    <h4>Buat Laporan</h4>
                </div>
                <hr>
                <div class="row">
                    {{-- <div class=" mb-3"> --}}
                        {{-- <label for="Nama" class="form-label">Nama</label> --}}
                        <input class="form-control @error ('firstName') is-invalid @enderror " type="hidden" name="Nama" id="Nama" value="{{Auth::user()->id}}">
                        {{-- @error('Nama')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror --}}
                    {{-- </div> --}}
                    {{-- <div class="col-md-6 mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input class="form-control" type="text" name="firstName" id="firstName" value="" placeholder="Enter First Name">
                        @if ($errors->has('firstName'))
                            <span>
                                {{ $error }}
                            </span>
                        @endif
                    </div> --}}
                    <div class=" mb-3">
                        <label for="Alat" class="form-label">Alat</label>
                        <select name="Alat" id="Alat" class="form-select">
                            @foreach ($barangs as $barang)
                                <option value="{{ $barang->id }}" {{ old('barang') == $barang->id ? 'selected' : '' }}>{{ $barang->nama_barang }}</option>
                            @endforeach
                            </select>
                        {{-- <input class="form-control @error('lastName') is-invalid @enderror" type="text" name="Alat" id="Alat" value="{{ old('Alat') }}"> --}}
                        @error('Alat')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    {{-- <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input class="form-control" type="text" name="lastName" id="lastName" value="" placeholder="Enter Last Name">
                        @if ($errors->has('lastName'))
                            <span>
                                <strong>{{ $error }}</strong>
                            </span>
                        @endif
                    </div> --}}
                    <div class=" mb-3">
                        <label for="Deskripsi" class="form-label">Deskripsi kerusakan (boleh cerita bagaimana alat itu rusak)</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="textarea" name="Deskripsi" id="Deskripsi" value="{{ old('Deskripsi') }}">
                        @error('Deskripsi')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                </div>

                <div class=" mb-3">
                    <label for="Foto" class="form-label">Input File foto</label>
                    <input type="file" class="form-control" name="Foto" id="Foto">
                    @error('Foto')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
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
