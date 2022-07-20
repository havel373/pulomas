<table class="table table-bordered table-centered mb-0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Rekening</th>
            <th>Atas Nama</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($collection as $i => $data)
        <tr>
            <td>{{$collection->firstItem() + $i}}</td>
            <td>{{$data->nomor_rekening}}</td>
            <td>{{$data->atas_nama}}</td>
            <td class="table-action text-center">
                <a href="javascript:;" onclick="load_input('{{route('rekening.edit', $data->id)}}');" class="action-icon">
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