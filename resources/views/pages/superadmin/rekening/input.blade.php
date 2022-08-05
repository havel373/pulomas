<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create User Marketing</h4>
                    <ul class="nav nav-tabs nav-bordered mb-3">
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="tooltips-validation-preview">
                            <form class="needs-validation" id="form_submit">
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Nomor Rekening<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" id="validationTooltip02" placeholder=""
                                        value="{{ $data->nomor_rekening }}" required name="nomor_rekening">
                                    <div class="invalid-tooltip">
                                        *required
                                    </div>
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Atas Nama<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" id="validationTooltip02" placeholder="" name="atas_nama"
                                        value="{{ $data->atas_nama }}" required>
                                    <div class="invalid-tooltip">
                                        *required
                                    </div>
                                </div>
                                <a href="javascript:;" onclick="load_list(1);" class="btn btn-info">Cancel</a>
                                <button class="btn btn-primary" id="button_submit" onclick="handle_save('#button_submit','#form_submit','{{route('rekening.update', $data->id) }}', 'PATCH', 'Submit');">Submit</button>
                            </form>
                        </div>
                    </div> <!-- end preview-->
                </div> <!-- end tab-content-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<script></script>
