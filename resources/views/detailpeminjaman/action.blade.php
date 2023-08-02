<div class="d-flex">
    <div>
        <form action="{{ route('detailpeminjaman.destroy', ['detailpeminjaman' => $data->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2 btn-delete"><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
