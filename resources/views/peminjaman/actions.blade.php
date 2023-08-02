<div class="d-flex">
    {{-- <a href="{{ route('pinjam.show', ['pinjam' => $data1->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a> --}}
    <a href="{{ route('pinjam.edit', ['pinjam' => $data1->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
    {{-- {{$data1}} --}}
    <div>
        <form action="{{ route('pinjam.destroy', ['pinjam' => $data1->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2 btn-delete"><i class="bi-trash"></i></button>
        </form>
    </div>
    @if ($data1->status == 'approved')
        <a href="{{ route('pinjam.exportPdf', ['pinjam' => $data1->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-file-earmark-arrow-down"></i></a>
    @endif
</div>
