<table class="table table-bordered table-centered mb-0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Additional Service</th>
            <th>Satuan</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($collection as $i => $data)
        <tr>
            <td>{{$collection->firstItem() + $i}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->satuan}}</td>
            <td>{{$data->harga}}</td>
            <td>{{$data->deskripsi}}</td>
            <td>{{$data->aset->alamat_gedung}}</td>
            <td class="table-action text-center">
                <a href="javascript:void(0);" onclick="handle_delete('{{route('additional-service.destroy', $data->id)}}');" class="action-icon"> <i class="mdi mdi-delete"></i></a>
            </td>
        </tr>

        @empty
            <tr>
                <td colspan="7" align="center">Data Kosong</td>
            </tr>
        @endforelse
    </tbody>
</table>      