<table class="table table-bordered table-centered mb-0">
    <thead>
        <tr>
            <th>No</th>
            <th>Ruangan Sewa</th>
            <th>Tanggal Mulai Sewa</th>
            <th>Tanggal Mulai Sewa</th>
            <th>Nama Marketing</th>
            <th>Status</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($collection as $i => $data)
            <tr>
                <td>{{ $collection->firstItem() + $i }}</td>
                <td>{{ $data->ruang->nama_ruang }}</td>
                <td>{{ $data->tanggal_awal_sewa }}</td>
                <td>{{ $data->tanggal_akhir_sewa }}</td>
                <td>{{ $data->marketing->nama }}</td>
                <td>{{ $data->status }}</td>
                <td class="table-action text-center">
                    {{-- <a href="javascript:;" onclick="load_input('{{route('ruang.edit', $data->id)}}');" class="action-icon">
                    <i class="dripicons-document-edit"></i>
                </a>
                <a href="javascript: void(0);" onclick="handle_delete('{{route('ruang.destroy', $data->id)}}')" class="action-icon">
                    <i class="mdi mdi-delete"></i>
                </a> --}}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="9" align="center">Data Kosong</td>
            </tr>
        @endforelse
    </tbody>
</table>
