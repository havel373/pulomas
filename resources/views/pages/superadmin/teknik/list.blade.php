<table class="table table-bordered table-centered mb-0">
    <thead>
        <tr>
            <th>No</th>
            <th>Email</th>
            <th>Nama</th>
            <th>Nomor Handphone</th>
            <th>Admin</th>
            <th>Status</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($collection as $i => $data)
            <tr>
                <td>{{ $collection->firstItem() + $i }}</td>
                <td>{{ $data->user->email }}</td>
                <td>{{ $data->user->nama }}</td>
                <td>{{ $data->nomor_hp }}</td>
                <td>{{ $data->admin->nama }}</td>
                <td>{{ $data->status }}</td>
                <td class="table-action text-center">
                    <a href="javascript:;" onclick="load_input('{{ route('teknik.edit', $data->id) }}');"
                        class="action-icon">
                        <i class="dripicons-document-edit"></i>
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
