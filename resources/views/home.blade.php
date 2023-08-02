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
                <div class="card-footer"><a class="btn btn-success btn-block" href="{{route('detailpeminjaman.index')}}"><i class="bi bi-clipboard-check card-img-top"></i> Cek Barang</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Peminjaman Asset</h2>
                    <p class="card-text">Layanan peminjaman asset seperti aula rapat, serta perlengkapan audio & video</p>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-block" href="{{route('pinjam.create')}}"><i class="bi bi-bag-plus"></i> Pinjam Barang</a></div>
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
@endsection
