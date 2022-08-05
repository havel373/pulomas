<table class="table table-bordered table-centered mb-0">
    <thead>
        <tr>
            <th>No</th>
            <th>Customer</th>
            <th>Daya</th>
            <th>Standmeter Awal</th>
            <th>Standmeter Akhir</th>
            <th>Pemakaian</th>
            <th>Biaya Pemakaian</th>
            <th>BPJU</th>
            <th>Jumlah Tagihan</th>
            <th>Tanggal Input</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($collection as $i => $data)
        <tr>
            <td>{{$collection->firstItem() + $i}}</td>
            <td>Tenant</td>
            <td>{{$data->daya}}</td>
            <td>{{$data->standmeter_awal}}</td>
            <td>{{$data->standmeter_akhir}}</td>
            <td>{{$data->pemakaian}}</td>
            <td>{{$data->biaya_pemakaian}}</td>
            <td>{{$data->bpju}}</td>
            <td>{{$data->jumlah_tagihan}}</td>
            <td>{{$data->created_at}}</td>
            <td class="table-action text-center">
                <a href="javascript:;" onclick="load_input('{{route('data-standmeter.edit', $data->id)}}');" class="action-icon">
                    <i class="dripicons-document-edit"></i>
                </a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="10" align="center">Data Kosong</td>
        </tr>
        @endforelse
    </tbody>
</table>