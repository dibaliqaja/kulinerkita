<x-templates.default>
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Data Kecamatan</h2>
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
                    ajax: "{{ route('subdistrict.index') }}",
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'slug', slug: 'slug' },
                    ],
                });
            });
        </script>
    @endpush
</x-templates.default>
