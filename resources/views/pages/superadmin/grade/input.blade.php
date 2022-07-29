<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Grade</h4>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="tooltips-validation-preview">
                            <form class="needs-validation">
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Kode Grade<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" name="kode" id="kode"
                                        value="{{ $data->kode }}">
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Nilai Grade<small
                                            class="text-danger"><i></i></small></label>
                                    <input type="text" class="form-control" name="nilai" id="nilai"
                                        value="{{ $data->nilai }}">
                                </div>
                                <a href="javascript:;" onclick="load_list(1);" class="btn btn-info">Cancel</a>
                                @if ($data->id)
                                    <button class="btn btn-primary" id="tombol_submit"
                                        onclick="handle_save('#tombol_submit', '#form_submit', '{{ route('grade.update', $data->id) }}', 'PATCH', 'Submit');">Submit</button>
                                @else
                                    <button class="btn btn-primary" id="tombol_submit"
                                        onclick="handle_save('#tombol_submit', '#form_submit', '{{ route('grade.store') }}', 'POST', 'Submit');">Submit</button>
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
