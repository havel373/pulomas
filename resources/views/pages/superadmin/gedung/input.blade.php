<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Gedung</h4>
                    <form class="needs-validation" id="form_submit">
                        <div class="position-relative mb-3">
                            <label class="form-label" for="validationTooltip01">Pilih Asset<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <select class="form-control" name="id_aset" id="id_aset">
                                <option value="">Pilih Aset</option>
                                @foreach ($assets as $asset)
                                    <option value="{{ $asset->id }}"
                                        {{ $data->id_aset == $asset->id ? 'selected' : '' }}>{{ $asset->nama_gedung }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="position-relative mb-3">
                            <label class="form-label" for="validationTooltip02">Nama Gedung<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <input type="text" class="form-control" placeholder="" name="nama_gedung"
                                value="{{ $data->nama_gedung }}">
                        </div>
                        <div class="position-relative mb-3">
                            <label class="form-label" for="validationTooltip03">Kode Asset<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <input type="text" class="form-control" id="validationTooltip03" placeholder="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="example-textarea" class="form-label">Alamat Gedung<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <textarea class="form-control" id="example-textarea" rows="5" readonly></textarea>
                        </div>
                        <a href="javascript:;" onclick="load_list(1);" class="btn btn-info">Cancel</a>
                        @if ($data->id)
                            <button class="btn btn-primary" id="tombol_submit"
                                onclick="handle_save('#tombol_submit', '#form_submit', '{{ route('gedung.update', $data->id) }}', 'PATCH', 'Submit');">Submit</button>
                        @else
                            <button class="btn btn-primary" id="tombol_submit"
                                onclick="handle_save('#tombol_submit', '#form_submit', '{{ route('gedung.store') }}', 'POST', 'Submit');">Submit</button>
                        @endif
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#id_aset').on('change', function() {
            var id = $(this).val();
            $.ajax({
                url: "{{ route('asset.get', ':id') }}".replace(':id', id),
                method: "GET",
                dataType: "json",
                success: function(data) {
                    $('#validationTooltip03').val(data.kode_aset);
                    $('#example-textarea').val(data.alamat_gedung);
                }
            });
        });
        @if ($data->id)
            $('#id_aset').trigger('change');
        @endif
    });
</script>
