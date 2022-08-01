<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Tarif Listrik</h4>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="tooltips-validation-preview">
                            <form class="needs-validation">
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Jenis Tarif Listrik<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" placeholder="" name="jenis_tarif"
                                        value="{{ $data->jenis_tarif }}" />
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Daya<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" placeholder="" name="daya"
                                        value="{{ $data->daya }}" />
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Tarif<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" placeholder="" name="tarif"
                                        value="{{ $data->tarif }}" />
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Tarif Dasar / LWBP<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <div class="input-group" id="input-group1">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control" placeholder="" name="tarif_dasar"
                                            value="{{ $data->tarif_dasar }}" />
                                    </div>
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">BPJU / Pajak
                                        Penerangan<small class="text-danger"><i>*Required</i></small></label>
                                    <div class="input-group" id="input-group1">
                                        <input type="text" class="form-control" placeholder="" name="bpju"
                                            value="{{ $data->bpju }}" />
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">KWH Minimum<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <div class="input-group" id="input-group1">
                                        <input type="text" class="form-control" placeholder="" name="kwh_minimum"
                                            value="{{ $data->kwh_minimum }}" />
                                        <span class="input-group-text">KWH / Bulan</span>
                                    </div>
                                </div>
                                <a href="javascript:;" onclick="load_list(1);" class="btn btn-info">Cancel</a>
                                @if ($data->id)
                                    <button class="btn btn-primary" id="tombol_submit"
                                        onclick="handle_save('#tombol_submit', '#form_submit', '{{ route('tarif-listrik.update', $data->id) }}', 'PATCH', 'Submit');">Submit</button>
                                @else
                                    <button class="btn btn-primary" id="tombol_submit"
                                        onclick="handle_save('#tombol_submit', '#form_submit', '{{ route('tarif-listrik.store') }}', 'POST', 'Submit');">Submit</button>
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
