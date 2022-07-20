<table class="table table-bordered table-centered mb-0">
    <thead>
        <tr>
            <th>No</th>
            <th>Jenis Tarif</th>
            <th>Daya</th>
            <th>Tarif</th>
            <th>Tarif Dasar / LWBP</th>
            <th>BPJU/Pajak Penerangan</th>
            <th>KWH Minumum/Bulan</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($collection as $i => $data)
        <tr>
            <td>{{$collection->firstItem() + $i}}</td>
            <td>{{$data->jenis_tarif}}</td>
            <td>{{$data->daya}}</td>
            <td>{{$data->tarif}}</td>
            <td>{{$data->tarif_dasar}}</td>
            <td>{{$data->bpju}}</td>
            <td>{{$data->kwh_minimum}}</td>
            <td class="table-action text-center">
                <a href="javascript:;" onclick="load_input('{{route('tarif-listrik.edit', $data->id)}}');" class="action-icon">
                    <i class="dripicons-document-edit"></i>
                </a>
                <a href="javascript:;" onclick="handle_delete('{{route('tarif-listrik.destroy',$data->id)}}');" class="action-icon">
                    <i class="dripicons-document-trash"></i>
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