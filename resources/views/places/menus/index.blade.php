<x-templates.default>
    <x-slot name="title">Menu Kuliner</x-slot>

    <x-slot name="button_create">
        <a href="{{ route('menu.create', $place) }}" class="btn btn-primary d-none d-sm-inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
            Tambah Menu
        </a>
        <a href="{{ route('menu.create', $place) }}" class="btn btn-primary d-sm-none btn-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
        </a>
    </x-slot>

    <div class="card">
        <x-forms.alert />
        <div class="card-header">
            <h2 class="card-title">Data Menu Kuliner <u>{{ $place->name }}</u></h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap" id="table-menu">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>

        <div class="modal modal-blur fade" id="modal-delete-menu" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
              <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-status bg-danger"></div>
                <div class="modal-body text-center py-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v2m0 4v.01" /><path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" /></svg>
                  <h3>Are you sure?</h3>
                  <div class="text-muted">Do you really want to remove menu? What you've done cannot be undone.</div>
                </div>
                <div class="modal-footer">
                  <div class="w-100">
                    <div class="row">
                      <div class="col">
                          <a href="#" class="btn w-100" data-bs-dismiss="modal">Cancel</a>
                      </div>
                      <div class="col">
                          <a href="#" class="btn btn-danger w-100" id="confirm-delete" data-id-place="" data-id-menu="">Delete</a>
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
                $('#table-menu').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('menu.index', request()->segment(2)) }}",
                    columns: [
                        {
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        { data: 'name', name: 'name' },
                        { data: 'image', name: 'image' },
                        { data: 'description', name: 'description' },
                        { data: 'price', name: 'price' },
                        { data: 'action', name: 'action' },
                    ],
                });

                $('#table-menu').on('click', 'a#delete-menu', function (e) {
                    e.preventDefault();
                    const idPlace = $(this).data('id-place');
                    const idMenu = $(this).data('id-menu');

                    $('#confirm-delete').attr('data-id-place', idPlace);
                    $('#confirm-delete').attr('data-id-menu', idMenu);
                    $('#modal-delete-menu').modal('show');
                });

                $('#confirm-delete').click(function (e) {
                    e.preventDefault();
                    const idPlace = $(this).data('id-place');
                    const idMenu = $(this).data('id-menu');

                    $.ajax({
                        type: 'DELETE',
                        url: '/places/' + idPlace + '/menu/' + idMenu,
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
