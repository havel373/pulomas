<table class="table table-bordered table-centered mb-0">
    <thead>
        <tr>
            <th>No</th>
            <th>Customer</th>
            <th>Jam Awal Overtime</th>
            <th>Jam Akhir Overtime</th>
            <th>Jumlah Karyawan</th>
            <th>Tarif Dasar Overtime</th>
            <th>Status</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($collection as $i => $data)
        <tr>
            <td>{{$collection->firstItem() + $i}}</td>
            <td>{{$data->customer->nama}}</td>
            <td>{{$data->jam_awal_overtime}}</td>
            <td>{{$data->jam_akhir_overtime}}</td>
            <td>{{$data->jumlah_karyawan}}</td>
            <td>{{$data->status}}</td>
            <td class="table-action text-center">
                <a href="javascript:;" onclick="load_input('{{route('overtime.edit', $data->id)}}');" class="action-icon">
                    <i class="dripicons-document-edit"></i>
                </a>
                <a href="javascript: void(0);" onclick="handle_delete('{{route('overtime.destroy', $data->id)}}')" class="action-icon">
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