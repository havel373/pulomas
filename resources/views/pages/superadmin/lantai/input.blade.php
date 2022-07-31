<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Lantai</h4>
                    <div class="tab-pane show active" id="tooltips-validation-preview">
                        <form class="needs-validation" id="form_submit">
                            <div class="position-relative mb-3">
                                <label class="form-label" for="validationTooltip01">Pilih Gedung<small
                                        class="text-danger"><i>*Required</i></small></label>
                                <select class="form-control" name="id_gedung" id="id_gedung">
                                    <option value="">Pilih Gedung</option>
                                    @foreach ($gedungs as $gedung)
                                        <option value="{{ $gedung->id }}"
                                            {{ $data->id_gedung == $gedung->id ? 'selected' : '' }}>
                                            {{ $gedung->nama_gedung }}
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">
                                    *required
                                </div>
                            </div>
                            <div class="position-relative mb-3">
                                <label class="form-label" for="validationTooltip02">Nama Lantai<small
                                        class="text-danger"><i>*Required</i></small></label>
                                <input type="text" class="form-control" id="validationTooltip02" placeholder=""
                                    name="nama_lantai" value="{{ $data->nama_lantai }}">
                                <div class="invalid-tooltip">
                                    *required
                                </div>
                            </div>
                            <div class="position-relative mb-3">
                                <label class="form-label">Harga Sewa Ruangan<small
                                        class="text-danger"><i>*Required</i></small></label>
                                <div class="input-group" id="validationTooltip01">
                                    <input type="text" class="form-control" name="harga_sewa"
                                        value="{{ $data->harga_sewa }}" id="harga_sewa">
                                    <span class="input-group-text">m<sup>2</sup>/Bulan</i></span>
                                </div>
                            </div>
                            <div class="position-relative mb-3">
                                <label class="form-label">Service Charge<small
                                        class="text-danger"><i>*Required</i></small></label>
                                <div class="input-group" id="input-group1">
                                    <input type="text" class="form-control" name="service_charge"
                                        value="{{ $data->service_charge }}" id="service_charge">
                                    <span class="input-group-text">m<sup>2</sup>/Bulan</i></span>
                                </div>
                            </div>
                            <div class="position-relative mb-3">
                                <label class="form-label">Service Charge Listrik Sendiri<small
                                        class="text-danger"><i>*Required</i></small></label>
                                <div class="input-group" id="input-group1">
                                    <input type="text" class="form-control" name="service_charge_listrik_sendiri"
                                        value="{{ $data->service_charge_listrik_sendiri }}" id="service_charge_listrik_sendiri">
                                    <span class="input-group-text">m<sup>2</sup>/Bulan</i></span>
                                </div>
                            </div>
                            <a href="javascript:;" onclick="load_list(1);" class="btn btn-info">Cancel</a>
                            @if ($data->id)
                                <button class="btn btn-primary" id="tombol_submit"
                                    onclick="handle_save('#tombol_submit', '#form_submit', '{{ route('lantai.update', $data->id) }}', 'PATCH', 'Submit');">Submit</button>
                            @else
                                <button class="btn btn-primary" id="tombol_submit"
                                    onclick="handle_save('#tombol_submit', '#form_submit', '{{ route('lantai.store') }}', 'POST', 'Submit');">Submit</button>
                            @endif
                        </form>
                    </div>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<script>
</script>
