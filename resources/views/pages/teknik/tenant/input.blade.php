<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Detail Data Tenant</h4>
                    <form class="needs-validation" id="form_submit">
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Nama Perusahaan / Instansi<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <input type="text" class="form-control" name="nama_instansi" id="nama_instansi"
                                value="{{ $data->nama_instansi }}">
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Nama Penanggungjawab<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <input type="text" class="form-control" name="nama_penanggungjawab"
                                id="nama_penanggungjawab" value="{{ $data->nama_penanggungjawab }}">
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Alamat Penanggungjawab<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <textarea name="alamat_penanggungjawab" class="form-control">{{ $data->alamat_penanggungjawab }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3" id="form-dinamic">
                            @if ($data->id)
                                <label class="form-label">Daya Terpasang
                                    <small class="text-danger">
                                        <i>*Required</i>
                                    </small>
                                </label>
                                @foreach ($data->daya_terpasang as $key => $value)
                                    <div class="input-group">
                                        <input type="text" class="form-control"
                                            name="daya_terpasang[{{ $key }}]"
                                            value="{{ $data->daya_terpasang }}">
                                        <button type="button" id="tambah_form"
                                            class="btn btn-primary btn-add-fasilitas">
                                            <i class="uil-plus" style="color:white;"></i>
                                        </button>
                                    </div>
                                @endforeach
                            @else
                                <label class="form-label">Daya Terpasang
                                    <small class="text-danger">
                                        <i>*Required</i>
                                    </small>
                                </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="daya_terpasang[0]">
                                    <button type="button" id="tambah_form" class="btn btn-primary btn-add-fasilitas">
                                        <i class="uil-plus" style="color:white;"></i>
                                    </button>
                                </div>
                            @endif
                        </div>
                        <a href="javascript:;" onclick="load_list(1);" class="btn btn-info">Cancel</a>
                        @if ($data->id)
                            <button class="btn btn-primary" id="tombol_submit"
                                onclick="handle_save('#tombol_submit', '#form_submit', '{{ route('tenant.update', $data->id) }}', 'PATCH', 'Submit');">Submit</button>
                        @else
                            <button class="btn btn-primary" id="tombol_submit"
                                onclick="handle_save('#tombol_submit', '#form_submit', '{{ route('tenant.store') }}', 'POST', 'Submit');">Submit</button>
                        @endif
                    </form>
                </div>
            </div> <!-- end preview-->
        </div> <!-- end tab-content-->
    </div> <!-- end card-body-->
</div> <!-- end card-->
<script>
    // create dinamically input type="text"
    var i = 0;
    $('#tambah_form').click(function() {
        ++i;
        $('#form-dinamic').append(
            '<div class="input-group mt-2" id="input-group1">' +
            '<input type="text" class="form-control" name="fasilitas[' + i + ']">' +
            '<button type="button" class="btn btn-danger" id="remove"><i class="uil-trash" style="color:white;"></i></button>' +
            '<button type="button" id="tambah_form" class="btn btn-primary btn-add-fasilitas">' +
            '<i class="uil-plus" style="color:white;"></i>' +
            '</button>' +
            '</div>'
        )
    });
    $('#form-dinamic').on('click', '#remove', function() {
        $(this).parent().remove();
    });
</script>
