<table class="table table-bordered table-centered mb-0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Gedung</th>
            <th>Nama Lantai</th>
            <th>Harga Sewa</th>
            <th>Service Charge (Termasuk Listrik)</th>
            <th>Service Charge Listrik Sendiri</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($collection as $i => $data)
            <tr>
                <td>{{ $collection->firstItem() + $i }}</td>
                <td>{{ $data->gedung->nama_gedung }}</td>
                <td>{{ $data->nama_lantain }}</td>
                <td>Rp {{ $data->harga_sewa }}</td>
                <td>Rp {{ $data->service_charge }}</td>
                <td>Rp {{ $data->service_charge_listrik_sendiri }}</td>
                <td class="table-action text-center">
                    <a href="javascript:;" onclick="load_input('{{ route('lantai.edit', $data->id) }}');"
                        class="action-icon">
                        <i class="dripicons-document-edit"></i>
                    </a>
                    <a href="javascript: void(0);" onclick="handle_delete('{{ route('lantai.destroy', $data->id) }}')"
                        class="action-icon">
                        <i class="mdi mdi-delete"></i>
                    </a>
                </td>
            </tr>

        @empty
            <tr>
                <td colspan="7" align="center">Data Kosong</td>
            </tr>
        @endforelse
    </tbody>
</table>
