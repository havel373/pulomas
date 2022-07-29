<table class="table table-bordered table-centered mb-0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Gedung</th>
            <th>Kode Asset</th>
            <th>Alamat Gedung</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($collection as $i => $data)
            <tr>
                <td>{{ $collection->firstItem() + $i }}</td>
                <td>{{ $data->nama_gedung }}</td>
                <td>{{ $data->aset->kode_aset }}</td>
                <td>{{ $data->aset->alamat_gedung }}</td>
                <td class="table-action text-center">
                    <a href="javascript:void(0);" onclick="handle_delete('{{ route('gedung.destroy', $data->id) }}');"
                        class="action-icon">
                        <i class="mdi mdi-delete"></i>
                    </a>
                </td>
            </tr>

        @empty
            <tr>
                <td colspan="5" align="center">Data Kosong</td>
            </tr>
        @endforelse
    </tbody>
</table>
