@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row gx-4 gx-lg-5">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Check Asset</h2>
                    <p class="card-text">Cek Kelengkapan Asset kamu sekarang!</p>
                </div>
                {{-- <div class="card-footer"><a class="btn btn-success btn-block" href="{{route('detailpeminjaman.index')}}"><i class="bi bi-clipboard-check card-img-top"></i> Cek Barang</a></div> --}}
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Peminjaman Asset</h2>
                    <p class="card-text">Layanan peminjaman asset seperti aula rapat, serta perlengkapan audio & video</p>
                </div>
                {{-- <div class="card-footer"><a class="btn btn-primary btn-block" href="{{route('pinjam.create')}}"><i class="bi bi-bag-plus"></i> Pinjam Barang</a></div> --}}
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Pemeliharaan Asset Hilang/Rusak</h2>
                    <p class="card-text">Layanan pemeliharaan asset mengenai kelistrikan, air, gedung, audio & video yang rusak atau hilang.</p>
                </div>
                <div class="card-footer"><a class="btn btn-danger btn-block" href="{{route('laporan.create')}}"><i class="bi bi-exclamation-circle"></i> Lapor Kerusakan Barang</a></div>
            </div>
        </div>
    </div>
</div>

    {{-- <div class="row gx-4 gx-lg-5">
        <div class="col-md-4 mb-5">
            <a href="{{route('pinjam.index')}}" >
                <button class="btn btn-success">
                    <h1><i class="bi bi-clipboard-check card-img-top"></i> Cek Barang</h1> --}}

                    {{-- <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title font-weight-bold">Lapor kerusakan</h5>
                            <h5 class="card-title font-weight-bold">{{ $product->type->kode_tipe }}</h5>
                        </div>
                        <h2 class="card-title">Lapor kerusakan</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                    </div> --}}

                {{-- </button>
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <a href="{{route('pinjam.create')}}">
                <button class="btn btn-primary">
                    <h1><i class="bi bi-bag-plus"></i> Pinjam barang</h1> --}}

                    {{-- <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title font-weight-bold">Lapor kerusakan</h5>
                            <h5 class="card-title font-weight-bold">{{ $product->type->kode_tipe }}</h5>
                        </div>
                        <h2 class="card-title">Lapor kerusakan</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                    </div> --}}

                {{-- </button>
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <a href="{{route('laporan.create')}}">
                <button class="btn btn-danger">
                    <h1><i class="bi bi-exclamation-circle"></i> Lapor kerusakan Barang</h1> --}}

                    {{-- <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title font-weight-bold">Lapor kerusakan</h5>
                            <h5 class="card-title font-weight-bold">{{ $product->type->kode_tipe }}</h5>
                        </div>
                        <h2 class="card-title">Lapor kerusakan</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                    </div> --}}
{{--
                </button>
            </a>
        </div> --}}

    {{-- </div> --}}



@endsection
