<table class="table table-bordered table-centered mb-0">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Grade</th>
            <th>Nilai Grade</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($collection as $i => $data)
            <tr>
                <td>{{ $collection->firstItem() + $i }}</td>
                <td>{{ $data->kode }}</td>
                <td>{{ $data->nilai }}</td>
                <td class="table-action text-center">
                    <a href="javascript:;" onclick="load_input('{{ route('grade.edit', $data->id) }}');"
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
