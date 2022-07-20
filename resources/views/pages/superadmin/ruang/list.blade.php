<table class="table table-bordered table-centered mb-0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Gedung</th>
            <th>Kode Ruang</th>
            <th>Nama Ruang</th>
            <th>Luas(m/<sup>2</sup>)</th>
            <th>Status Ruang</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($collection as $i => $data)
        <tr>
            <td>{{$collection->firstItem() + $i}}</td>
            <td>{{$data->gedung->nama_gedung}}</td>
            <td>{{$data->kode_ruang}}</td>
            <td>{{$data->nama_ruang}}</td>
            <td>{{$data->luas}}</td>
            <td>{{$data->status}}</td>
            <td class="table-action text-center">
                <a href="javascript:;" onclick="load_input('{{route('ruang.edit', $data->id)}}');" class="action-icon">
                    <i class="dripicons-document-edit"></i>
                </a>
                <a href="javascript: void(0);" onclick="handle_delete('{{route('ruang.destroy', $data->id)}}')" class="action-icon">
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