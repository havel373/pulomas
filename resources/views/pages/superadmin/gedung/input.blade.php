<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Gedung</h4>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="tooltips-validation-preview">
                            <form class="needs-validation">
                                <div class="position-relative mb-3">
                                    <label class="form-label" for="validationTooltip01">Pilih Asset<small class="text-danger"><i>*Required</i></small></label>
                                    <select class="form-control" name="asset" id="asset">
                                        <option value="">Pilih Aset</option>
                                        @foreach($assets as $asset)
                                            <option value="{{$asset->id}}">{{$asset->nama_gedung}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-tooltip">
                                        *required
                                    </div>
                                </div>
                                <div class="position-relative mb-3">
                                    <label class="form-label" for="validationTooltip02">Nama Gedung<small class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" id="validationTooltip02" placeholder="" value="" required>
                                    <div class="invalid-tooltip">
                                        *required
                                    </div>
                                </div>
                                <div class="position-relative mb-3">
                                    <label class="form-label" for="validationTooltip03">Kode Asset<small class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" id="validationTooltip03" placeholder="" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="example-textarea" class="form-label">Alamat Gedung<small class="text-danger"><i>*Required</i></small></label>
                                    <textarea class="form-control" id="example-textarea" rows="5" readonly></textarea>
                                </div>
                                <a href="javascript:;" onclick="load_list(1);" class="btn btn-info">Cancel</a>
                                <button class="btn btn-primary" onclick="handle_save('');" >Submit</button>
                            </form>
                        </div>
                    </div> <!-- end preview-->
                </div> <!-- end tab-content-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<script>

</script>