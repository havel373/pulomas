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
                            <input type="text" class="form-control" name="nama_instansi" id="nama"
                                value="{{ $data->user ? $data->nama_instansi : '' }}" readonly>
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Nama Penanggungjawab<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <input type="text" class="form-control" name="nama_penanggungjawab"
                                id="nama_penanggungjawab" value="{{ $data->nama_penanggungjawab }}" readonly>
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Alamat Penanggungjawab<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <textarea name="alamat_penanggungjawab" class="form-control" readonly>{{ $data->alamat_penanggungjawab }}</textarea>
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Tempat Pembayaran<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <textarea name="alamat_penanggungjawab" class="form-control" readonly>{{ $data->alamat_penanggungjawab }}</textarea>
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Daya Terpasang<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <div id="form-dinamic">
                                <div class="row">
                                    <div class="col-md-6">
                                        <select name="daya" id="daya" class="form-control">
                                            @foreach($daya as $item)
                                                <option value="{{$item->id}}">{{$item->daya_terpasang}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group" id="input-group1">
                                            <span class="input-group-text">Rp</span>
                                            <input type="text" class="form-control" name="daya_terpasang"
                                            id="daya_terpasang" value="">
                                            <span class="input-group-text">
                                                <button type="button" id="tambah_form"
                                                    class="btn btn-primary btn-add-fasilitas">
                                                    <i class="uil-plus" style="color:white;"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:;" onclick="load_list(1);" class="btn btn-info">Cancel</a>
                            <button class="btn btn-primary" id="tombol_submit"
                                onclick="handle_upload('#tombol_submit', '#form_submit', '{{ route('teknik-data-tenant.update', $data->id) }}', 'PATCH', 'Submit');">Submit</button>
                    </form>
                </div>
            </div> <!-- end preview-->
        </div> <!-- end tab-content-->
    </div> <!-- end card-body-->
</div> <!-- end card-->
<script>
    $(document).ready(function() {
        // select 2 multiple
        number_only('daya_terpasang');
        var i = 0;
        $('#tambah_form').click(function() {
            ++i;
            $('#form-dinamic').append(
                '<div class="row mt-3">' +
                    '<div class="col-md-6">' +
                        '<select class="form-control" name="daya[' + i + ']">' +
                            @foreach($daya as $item)
                                '<option value="{{$item->id}}">{{$item->daya_terpasang}}>' +
                                '</option>' +
                            @endforeach
                        '</select>' +
                    '</div>'+
                    '<div class="col-md-6">' +
                        '<div class="input-group">' +
                            '<span class="input-group-text">Rp</span>' +
                            '<input type="text" class="form-control" name="fasilitas[' + i + ']">' +
                            '<button type="button" class="btn btn-danger" id="remove"><i class="uil-trash" style="color:white;"></i></button>' +
                        '</div>'+
                    '</div>'+
                '</div>'
            )
        });
        $('#form-dinamic').on('click', '#remove', function() {
            $(this).parent().remove();
        });
    });
</script>
