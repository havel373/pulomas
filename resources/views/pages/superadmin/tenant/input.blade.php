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
                                value="{{ $data->user ? $data->user->email : '' }}" {{$data->id ? 'disabled' : ''}}>
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">{{$data->id ? 'Password Baru' : 'Password'}}<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <input type="password" class="form-control" name="password" id="password">
                            <small>
                                <i>
                                    Kosongkan Jika Tidak Ingin Diubah
                                </i>
                            </small>
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Nama Perusahaan / Instansi<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <input type="text" class="form-control" name="nama_instansi" id="nama"
                                value="{{ $data->user ? $data->nama_instansi : '' }}">
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
                        @if($data->id)
                            <div class="col-md mb-3">
                                <label class="form-label" for="validationTooltip01">Nomor KTP
                                    Penanggungjawab<small class="text-danger"><i>*Required</i></small></label>
                                <input type="text" class="form-control" name="nomor_ktp_penanggungjawab"
                                    id="nomor_ktp_penanggungjawab" value="{{ $data->nomor_ktp_penanggungjawab }}">
                            </div>
                            <div class="col-md mb-3">
                                <label class="form-label" for="validationTooltip01">Nomor NPWP
                                    <small class="text-danger"><i>*Required</i></small></label>
                                <input type="text" class="form-control" name="nomor_npwp"
                                    id="nomor_npwp" value="{{ $data->nomor_npwp }}">
                            </div>
                        @endif
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Industri <small
                                    class="text-danger"><i>*Required</i></small></label>
                            <select class="form-control" name="industri[]" id="industri" multiple="multiple">
                                <option value="">-- Pilih Industri --</option>
                                @if($data->id)
                                <option value="1" @if (in_array(1, json_decode($data->industri))) selected @endif>
                                    Pertanian</option>
                                <option value="2" @if (in_array(2, json_decode($data->industri))) selected @endif>
                                    Perkebunan</option>
                                <option value="3" @if (in_array(3, json_decode($data->industri))) selected @endif>
                                    Perikanan</option>
                                <option value="4" @if (in_array(4, json_decode($data->industri))) selected @endif>
                                    Pertambangan</option>
                                <option value="5" @if (in_array(5, json_decode($data->industri))) selected @endif>
                                    Perdagangan</option>
                                <option value="6" @if (in_array(6, json_decode($data->industri))) selected @endif>
                                    Peternakan</option>
                                <option value="7" @if (in_array(7, json_decode($data->industri))) selected @endif>
                                    Pariwisata</option>
                                <option value="8" @if (in_array(8, json_decode($data->industri))) selected @endif>
                                    Alat angkutan lainnya</option>
                                <option value="9" @if (in_array(9, json_decode($data->industri))) selected @endif>
                                    Barang-barang dari logam, dan peralatannya</option>
                                <option value="10" @if (in_array(10, json_decode($data->industri))) selected @endif>
                                    Batu bara, minyak, dan gas bumi, dan bahan bakar dari nuklir</option>
                                @else
                                    <option value="1">
                                        Pertanian</option>
                                    <option value="2">
                                        Perkebunan</option>
                                    <option value="3">
                                        Perikanan</option>
                                    <option value="4">
                                        Pertambangan</option>
                                    <option value="5">
                                        Perdagangan</option>
                                    <option value="6">
                                        Peternakan</option>
                                    <option value="7">
                                        Pariwisata</option>
                                    <option value="8">
                                        Alat angkutan lainnya</option>
                                    <option value="9">
                                        Barang-barang dari logam, dan peralatannya</option>
                                    <option value="10">
                                        Batu bara, minyak, dan gas bumi, dan bahan bakar dari nuklir</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Status Tenant<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <select class="form-control" name="status_tenant[]" id="status_tenant" multiple>
                                <option value="">-- Pilih Status Tenant --</option>
                                @if($data->id)
                                <option value="1" @if (in_array(1, json_decode($data->status_tenant))) selected @endif>
                                    Verifikasi Data</option>
                                <option value="2" @if (in_array(2, json_decode($data->status_tenant))) selected @endif>
                                    Fraud Screening</option>
                                <option value="3" @if (in_array(3, json_decode($data->status_tenant))) selected @endif>
                                    Grading / Scoring</option>
                                <option value="4" @if (in_array(4, json_decode($data->status_tenant))) selected @endif>
                                    Prioritization</option>
                                @else    
                                    <option value="1">
                                        Verifikasi Data</option>
                                    <option value="2">
                                        Fraud Screening</option>
                                    <option value="3">
                                        Grading / Scoring</option>
                                    <option value="4">
                                        Prioritization</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Alamat Penanggungjawab<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <textarea name="alamat_penanggungjawab" class="form-control">{{ $data->alamat_penanggungjawab }}</textarea>
                        </div>
                        @if($data->id)
                            <div class="col-md mb-3">
                                <label class="form-label" for="validationTooltip01">Scan KTP Penanggungjawab
                                    <small class="text-danger"><i>*Required</i></small></label>
                                <input type="file" class="form-control" name="ktp_penanggungjawab"
                                    id="ktp_penanggungjawab" value="{{ $data->ktp_penanggungjawab }}">
                            </div>
                            <div class="col-md mb-3">
                                <label class="form-label" for="validationTooltip01">Scan NPWP
                                    <small class="text-danger"><i>*Required</i></small></label>
                                <input type="file" class="form-control" name="npwp"
                                    id="npwp" value="{{ $data->npwp }}">
                            </div>
                        @endif
                        <a href="javascript:;" onclick="load_list(1);" class="btn btn-info">Cancel</a>
                        @if ($data->id)
                            <button class="btn btn-primary" id="tombol_submit"
                                onclick="handle_upload('#tombol_submit', '#form_submit', '{{ route('tenant.update', $data->id) }}', 'PATCH', 'Submit');">Submit</button>
                        @else
                            <button class="btn btn-primary" id="tombol_submit"
                                onclick="handle_upload('#tombol_submit', '#form_submit', '{{ route('tenant.store') }}', 'POST', 'Submit');">Submit</button>
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
