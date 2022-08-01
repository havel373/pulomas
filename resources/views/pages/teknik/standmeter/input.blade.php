<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Tenant</h4>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="tooltips-validation-preview">
                            <form class="needs-validation">
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Ruang Sewa Tenant
                                        <small class="text-danger"><i>*Required</i></small>
                                    </label>
                                    <select name="ruang_sewa_tenant" id="ruang_sewa_tenant" class="form-control">
                                        <option value="">
                                            -- Pilih Ruang Sewa Tenant --
                                        </option>
                                        @foreach ($ruangs as $ruang)
                                            <option value="{{ $ruang->id }}"
                                                {{ $ruang->id == $data->ruang_sewa_tenant ? 'selected' : '' }}>
                                                {{ $ruang->nama_ruang }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Daya<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <select name="daya" id="daya" class="form-control">
                                        <option value="" {{ $data->daya == '' ? 'selected' : '' }}>-- Pilih Daya
                                            Tenant --</option>
                                    </select>
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Standmeter Awal<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" name="standmeter_awal"
                                        id="standmeter_awal" value="{{ $data->standmeter_awal }}">
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Standmeter Akhir<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" name="standmeter_akhir"
                                        id="standmeter_akhir" value="{{ $data->standmeter_akhir }}">
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Foto Standmeter</label>
                                    <input type="file" class="form-control" name="foto_standmeter"
                                        id="foto_standmeter" value="{{ $data->foto_standmeter }}">
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Pemakaian Per KWH / LWBP<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" name="pemakaian_per_kwh_lwbp"
                                        id="pemakaian_per_kwh_lwbp" value="{{ $data->pemakaian_per_kwh_lwbp }}"
                                        readonly>
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Biaya Pemakaian<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <div class="input-group" id="input-group1">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control" name="biaya_pemakaian"
                                            id="biaya_pemakaian" value="{{ $data->biaya_pemakaian }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Biaya BPJU / Lain - lain<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <div class="input-group" id="input-group1">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control" name="biaya_bpju_lain_lain"
                                            id="biaya_bpju_lain_lain" value="{{ $data->biaya_bpju_lain_lain }}"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Jumlah Tagihan<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <div class="input-group" id="input-group1">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control" name="jumlah_tagihan"
                                            id="jumlah_tagihan" value="{{ $data->jumlah_tagihan }}" readonly>
                                    </div>
                                </div>
                                <a href="javascript:;" onclick="load_list(1);" class="btn btn-info">Cancel</a>
                                @if ($data->id)
                                    <button class="btn btn-primary" id="tombol_submit"
                                        onclick="handle_upload('#tombol_submit', '#form_submit', '{{ route('standmeter.update', $data->id) }}', 'PATCH', 'Submit');">Submit</button>
                                @else
                                    <button class="btn btn-primary" id="tombol_submit"
                                        onclick="handle_upload('#tombol_submit', '#form_submit', '{{ route('standmeter.store') }}', 'POST', 'Submit');">Submit</button>
                                @endif
                            </form>
                        </div>
                    </div> <!-- end preview-->
                </div> <!-- end tab-content-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<script></script>
