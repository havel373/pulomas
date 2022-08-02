<table class="table table-bordered table-centered mb-0">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Request</th>
            <th>Keterangan</th>
            <th>Nominal (Rp)</th>
            <th>Status</th>
            <th>File Bukti Pembayaran</th>
        </tr>
    </thead>
    <tbody>
        @forelse($collection as $i => $data)
            <tr>
                <td>{{ $collection->firstItem() + $i }}</td>
                <td>{{ $data->tanggal_request }}</td>
                <td>Rp {{ number_format($data->nominal) }}</td>
                <td>{{ $data->keterangan }}</td>
                <td>{{ $data->status }}</td>
                <td><img src="{{ $data->image }}" class="img-responsive img-fluid"></td>
                {{-- <td class="table-action text-center"> --}}
                {{-- <a href="javascript:;" onclick="load_input('{{route('ruang.edit', $data->id)}}');" class="action-icon">
                    <i class="dripicons-document-edit"></i>
                </a>
                <a href="javascript: void(0);" onclick="handle_delete('{{route('ruang.destroy', $data->id)}}')" class="action-icon">
                    <i class="mdi mdi-delete"></i>
                </a> --}}
                {{-- </td> --}}
            </tr>
        @empty
            <tr>
                <td colspan="9" align="center">Data Kosong</td>
            </tr>
        @endforelse
    </tbody>
</table>
