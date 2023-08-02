@extends('layouts.app')
@section('content')
{{-- @foreach ($detailpakets as $item)
    {{ $item->barang->nama_barang }}
@endforeach --}}
<div class="container-sm mt-5">
    <form action="{{ route('detailpeminjaman.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-6">
                <div class="mb-3 text-center">
                    <i class="bi bi-file-earmark-plus-fill fs-1"></i>
                    <h4>Tambah Barang</h4>
                </div>
                <hr>
                {{-- <div class="row">
                    <h1>{{$id}}</h1>
                </div> --}}
                <input type="hidden" name="dataid" value="{{$id}}">
                <div class="col-md-12 mb-3">
                    <label for="paket" class="form-label">Paket</label>
                    <select name="paket" id="paket" class="form-select">
                        <option value="">Pilih salah satu</option>
                        {{-- <option value="paket1">Paket 1</option>
                        <option value="paket2">Paket 2</option> --}}
                    @foreach ($pakets as $paket)
                        <option value="{{ $paket->id }}" {{ old('paket') == $paket->id ? 'selected' : '' }}>{{ $paket->nama_paket }}</option>
                    @endforeach
                        <option value="satuan">additional</option>
                    </select>
                    @error('paket')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>

                <div class="col-md-12 mb-3">
                    <label for="barang" class="form-label">Barang:</label>
                    <select name="barang" id="barang" class="form-select" disabled>
                        <option value="">pilih salah satu</option>
                        @foreach ($barangs as $barang)
                            <option value="{{ $barang->id }}" {{ old('barang') == $barang->id ? 'selected' : '' }}>{{ $barang->nama_barang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="qty" class="form-label">Qty:</label>
                    <input type="number" id="qty" class="form-control @error('qty') is-invalid @enderror" name="qty"  value="{{ old('qty') }}" disabled>
                </div>
                <div  id="daftarBarang">

                </div>



                <hr>
                <div class="row">
                    {{-- <div class="col-md-6 d-grid">
                        <a href="{{ route('detailpeminjaman.show',['detailpeminjaman'=>$id]) }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                    </div> --}}
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('detailpeminjaman.show',['detailpeminjaman'=>$id]) }}" class="btn btn-outline-danger btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
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
@push('scripts')


    <script>
        // console.log("{{ $detailpakets }}");

        const detailpaket = {
            @foreach ($pakets as $paket)
            {{$paket->id}}: [
                @foreach ($detailpakets as $detail)

                    @if ($detail->paket_id == $paket->id)
                        'barang: ' + "{{ $detail->barang->nama_barang }}" + ', qty: ' + {{ $detail->qty }},
                    @endif

                @endforeach
            ],
            @endforeach
        };

        console.log(detailpaket);

        const paketDropdown = document.getElementById('paket');
        const daftarBarangContainer = document.getElementById('daftarBarang');
        const barangDropdown = document.getElementById('barang');
        const qtyInput = document.getElementById('qty');

        function tampilkanDaftarBarang(paket) {
            console.log(detailpaket);
            daftarBarangContainer.innerHTML = '';
            const daftarBarangPaket = detailpaket[paket];
            if (daftarBarangPaket) {
            const ul = document.createElement('ul');
            daftarBarangPaket.forEach((barang) => {
                const li = document.createElement('li');
                li.textContent = barang;
                ul.appendChild(li);
            });
            daftarBarangContainer.appendChild(ul);
            }
        }

        function toggleBarangDropdown() {
            const selectedPaket = paketDropdown.value;
            if (selectedPaket === 'satuan') {
            barangDropdown.disabled = false;
            qtyInput.disabled = false;
            // Sembunyikan daftar barang ketika memilih 'Satuan'
            daftarBarangContainer.style.display = 'none';
            } else {
            barangDropdown.disabled = true;
            qtyInput.disabled = true;
            qtyInput.value = "";
            // Tampilkan daftar barang ketika memilih opsi lain selain 'Satuan'
            daftarBarangContainer.style.display = 'block';
            tampilkanDaftarBarang(selectedPaket); // Tampilkan daftar barang untuk pilihan paket
            }
        }

        // Panggil fungsi saat halaman dimuat dan setiap kali dropdown paket berubah
        window.addEventListener('DOMContentLoaded', toggleBarangDropdown);
        paketDropdown.addEventListener('change', toggleBarangDropdown);
    </script>


@endpush
