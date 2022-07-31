<table class="table table-bordered table-centered mb-0">
    <thead>
        <tr>
            <th>No</th>
            <th>Email</th>
            <th>Nama Perusahaan / Instansi</th>
            <th>Nomor Telepon Perusahaan / Instansi </th>
            <th>Nama Penanggungjawab</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($collection as $i => $data)
            <tr>
                <td>{{ $collection->firstItem() + $i }}</td>
                <td>{{ $data->user->email }}</td>
                <td>{{ $data->nama_instansi }}</td>
                <td>{{ $data->nomor_hp_instansi }}</td>
                <td>{{ $data->nama_penanggungjawab }}</td>
                <td class="table-action text-center">
                    <a href="javascript:;" onclick="load_input('{{ route('tenant.edit', $data->id) }}');"
                        class="action-icon btn">
                        <i class="dripicons-document-edit"></i>
                    </a>
                    <a href="javascript:;" onclick="load_input('{{ route('tenant.show', $data->id) }}');"
                        class="action-icon">
                        <i class="dripicons-preview"></i>
                    <a href="javascript:;" onclick="handle_delete('{{ route('tenant.destroy', $data->id) }}');"
                        class="action-icon">
                        <i class="dripicons-trash"></i>
                    </a>
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
