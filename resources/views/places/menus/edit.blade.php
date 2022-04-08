<x-templates.default>
    <x-slot name="title">Menu Kuliner</x-slot>

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Data Menu Kuliner</h3>
        </div>
        <div class="card-body">
          <form action="{{ route('menu.update', [$place, $menu]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan nama menu" value="{{ old('name') ?? $menu->name }}">
                @error('name')
                    <small class="invalid-feedback"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Masukkan deskripsi menu">{{ old('description') ?? $menu->description }}</textarea>
                @error('description')
                    <small class="invalid-feedback"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Kategori</label>
                <select name="category_id" class="form-select @error('category_id') is-invalid @enderror">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                        @if ($category->id == $menu->category_id)
                            selected
                        @endif
                        >{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <small class="invalid-feedback"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Harga</label>
                <input type="number" min="1" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Masukkan harga menu" value="{{ old('price') ?? $menu->price }}">
                @error('price')
                    <small class="invalid-feedback"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Gambar Menu</label>
                <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror">
                @error('image')
                    <small class="invalid-feedback"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-footer">
              <a href="{{ route('menu.index', $place) }}" class="btn btn-white">Back</a>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

</x-templates.default>
