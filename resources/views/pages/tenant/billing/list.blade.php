<table class="table table-bordered table-centered mb-0">
    <thead>
        <tr>
            <th>No</th>
            <th>Status Informasi Tagihan</th>
            <th>Kode Informasi Tagihan</th>
            <th>Nama Informasi Tagihan</th>
            <th>Tagihan</th>
            <th>Tanggal Informasi Tagihan</th>
            <th>Jatuh Tempo</th>
            <th>Konfirmasi Pembayaran</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($collection as $i => $data)
        <tr>
            <td>{{$collection->firstItem() + $i}}</td>
            <td>{{$data->status}}</td>
            <td>{{$data->kode_informasi_tagihan}}</td>
            <td>{{$data->nama_informasi_tagihan}}</td>
            <td>{{$data->tagihan}}</td>
            <td>{{$data->tanggal_informasi_tagihan}}</td>
            <td>{{$data->jatuh_tempo}}</td>
            <td>{{$data->konfirmasi_pembayaran}}</td>
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