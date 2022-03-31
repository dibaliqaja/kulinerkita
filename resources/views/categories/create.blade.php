<x-templates.default>
    <x-slot name="title">Kategori</x-slot>

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tambah Data Kategori</h3>
        </div>
        <div class="card-body">
          <form action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="form-group mb-3">
              <label class="form-label">Nama</label>
              <div >
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" aria-describedby="emailHelp" placeholder="Masukkan nama kategori">
                {{-- <small class="form-hint">We'll never share your email with anyone else.</small> --}}
                @error('name')
                    <small class="invalid-feedback"><strong>{{ $message }}</strong></small>
                @enderror
              </div>
            </div>
            <div class="form-footer">
              <a href="{{ route('category.index') }}" class="btn btn-white">Back</a>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</x-templates.default>
