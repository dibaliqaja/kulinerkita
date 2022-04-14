<x-templates.default>

    <x-slot name="title">Kategori</x-slot>

    <x-slot name="button_create">
        <a href="{{ route('categories.create') }}" class="btn btn-primary d-none d-sm-inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
            Tambah Kategori
        </a>
        <a href="{{ route('categories.create') }}" class="btn btn-primary d-sm-none btn-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
        </a>
    </x-slot>

    <div class="card">
        <x-forms.alert />
        <div class="card-header">
            <h2 class="card-title">Data Kategori</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap" id="table-category">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Slug</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>

        <div class="modal modal-blur fade" id="modal-delete-category" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
              <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-status bg-danger"></div>
                <div class="modal-body text-center py-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v2m0 4v.01" /><path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" /></svg>
                  <h3>Are you sure?</h3>
                  <div class="text-muted">Do you really want to remove category? What you've done cannot be undone.</div>
                </div>
                <div class="modal-footer">
                  <div class="w-100">
                    <div class="row">
                      <div class="col">
                          <a href="#" class="btn w-100" data-bs-dismiss="modal">Cancel</a>
                      </div>
                      <div class="col">
                          <a href="#" class="btn btn-danger w-100" id="confirm-delete" data-id="">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script type="text/javascript">
            $(function () {
                $('#table-category').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('categories.index') }}",
                    columns: [
                        {
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        { data: 'name', name: 'name' },
                        { data: 'slug', name: 'slug' },
                        { data: 'action', name: 'action' },
                    ],
                });

                $('#table-category').on('click', 'a#delete-category', function (e) {
                    e.preventDefault();
                    const id = $(this).data('id');

                    $('#confirm-delete').attr('data-id', id);
                    $('#modal-delete-category').modal('show');
                });

                $('#confirm-delete').click(function (e) {
                    e.preventDefault();
                    const id = $(this).data('id');

                    $.ajax({
                        type: 'DELETE',
                        url: '/categories/' + id,
                        data: { '_token': "{{ csrf_token() }}" },
                        success: function (response) {
                            if(response.success) {
                                window.location.reload();
                            }
                        }
                    });
                });
            });
        </script>
    @endpush

</x-templates.default>

