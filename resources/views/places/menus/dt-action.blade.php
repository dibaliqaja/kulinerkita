<a href="{{ route('menu.edit', [$model->place->id, $model]) }}" class="btn btn-sm btn-info">Edit</a>
<a href="#" data-id-place="{{ $model->place->id }}" data-id-menu="{{ $model->id }}" id="delete-menu" class="btn btn-sm btn-danger">Hapus</a>
