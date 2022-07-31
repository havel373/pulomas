<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Tenant</h4>
                    <form class="needs-validation" id="form_submit">
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Email<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <input type="text" class="form-control" name="email" id="email"
                                value="{{ $data->email }}">
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Password<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Nama Perusahaan / Instansi<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <input type="text" class="form-control" name="nama_instansi" id="nama_instansi"
                                value="{{ $data->nama_instansi }}">
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Nomor Telepon Perusahaan<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <input type="text" class="form-control" name="nomor_hp_instansi" id="nomor_hp_instansi"
                                value="{{ $data->nomor_hp_instansi }}">
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Nama Penanggungjawab<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <input type="text" class="form-control" name="nama_penanggungjawab"
                                id="nama_penanggungjawab" value="{{ $data->nama_penanggungjawab }}">
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Nomor Telepon
                                Penanggungjawab<small class="text-danger"><i>*Required</i></small></label>
                            <input type="text" class="form-control" name="nomor_hp_penanggungjawab"
                                id="nomor_hp_penanggungjawab" value="{{ $data->nomor_hp_penanggungjawab }}">
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Industri <small
                                    class="text-danger"><i>*Required</i></small></label>
                            <select class="form-control" name="industri[]" id="industri" multiple="multiple">
                                <option value="">-- Pilih Industri --</option>
                                <option value="1" @if ($data->industri == 1) selected @endif>
                                    Pertanian</option>
                                <option value="2" @if ($data->industri == 2) selected @endif>
                                    Perkebunan</option>
                                <option value="3" @if ($data->industri == 3) selected @endif>
                                    Perikanan</option>
                                <option value="4" @if ($data->industri == 4) selected @endif>
                                    Pertambangan</option>
                                <option value="5" @if ($data->industri == 5) selected @endif>
                                    Perdagangan</option>
                                <option value="6" @if ($data->industri == 6) selected @endif>
                                    Peternakan</option>
                                <option value="7" @if ($data->industri == 7) selected @endif>
                                    Pariwisata</option>
                                <option value="8" @if ($data->industri == 8) selected @endif>
                                    Pertanian</option>
                                <option value="9" @if ($data->industri == 9) selected @endif>
                                    Perkebunan</option>
                                <option value="10" @if ($data->industri == 10) selected @endif>
                                    Perikanan</option>
                            </select>
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Status Tenant<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <select class="form-control" name="status_tenant[]" id="status_tenant" multiple>
                                <option value="">-- Pilih Status Tenant --</option>
                                <option value="1" @if ($data->status_tenant == 1) selected @endif>
                                    Pegawai</option>
                                <option value="2" @if ($data->status_tenant == 2) selected @endif>
                                    Karyawan</option>
                                <option value="3" @if ($data->status_tenant == 3) selected @endif>
                                    Mahasiswa</option>
                                <option value="4" @if ($data->status_tenant == 4) selected @endif>
                                    Lainnya</option>
                            </select>
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Alamat Penanggungjawab<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <textarea name="alamat_penanggungjawab" class="form-control">{{ $data->alamat_penanggungjawab }}</textarea>
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
    $(document).ready(function() {
        // select 2 multiple
        $('#industri').select2({
            placeholder: 'Pilih Industri',
            allowClear: true,
            multiple: true
        });

        $('#status_tenant').select2({
            placeholder: 'Pilih Status Tenant',
            allowClear: true,
            multiple: true
        });
    });
</script>
