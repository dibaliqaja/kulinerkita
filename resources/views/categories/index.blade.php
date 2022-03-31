<x-templates.default>
    <div class="card">
        <x-forms.alert />
        <div class="card-header">
            <div class="col-md-8">
                <h2 class="card-title">Data Kategori</h2>
            </div>
            <div class="col-md-4">
                <a href="{{ route('category.create') }}" class="btn btn-primary float-end">Tambah Kategori</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap" id="table-subdistrict">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Slug</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

    @push('styles')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>
    @endpush

    @push('scripts')
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>

        <script type="text/javascript">
            $(function () {
                $('#table-subdistrict').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('category.index') }}",
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'slug', slug: 'slug' },
                    ],
                });
            });
        </script>
    @endpush

    <x-slot name="title">Kategori</x-slot>

</x-templates.default>

