<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Lantai</h4>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="tooltips-validation-preview">
                            <form class="needs-validation">
                                <div class="position-relative mb-3">
                                    <label class="form-label" for="validationTooltip01">Pilih Gedung<small class="text-danger"><i>*Required</i></small></label>
                                    <select class="form-control" name="gedung" id="gedung">
                                        <option value="">Pilih Gedung</option>
                                        @foreach($gedungs as $gedung)
                                            <option value="{{$gedung->id}}">{{$gedung->nama_gedung}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-tooltip">
                                        *required
                                    </div>
                                </div>
                                <div class="position-relative mb-3">
                                    <label class="form-label" for="validationTooltip02">Nama Lantai<small class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" id="validationTooltip02" placeholder="" value="" required>
                                    <div class="invalid-tooltip">
                                        *required
                                    </div>
                                </div>
                                <div class="position-relative mb-3">
                                    <label class="form-label">Harga Sewa Ruangan<small class="text-danger"><i>*Required</i></small></label>
                                    <div class="input-group" id="validationTooltip01">
                                    <input id="timepicker" type="text" class="form-control">
                                    <span class="input-group-text">m<sup>2</sup>/Bulan</i></span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Service Charge<small class="text-danger"><i>*Required</i></small></label>
                                    <div class="input-group" id="input-group1">
                                    <input id="timepicker" type="text" class="form-control">
                                    <span class="input-group-text">m<sup>2</sup>/Bulan</i></span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Service Charge Listrik Sendiri<small class="text-danger"><i>*Required</i></small></label>
                                    <div class="input-group" id="input-group1">
                                    <input id="timepicker" type="text" class="form-control">
                                    <span class="input-group-text">m<sup>2</sup>/Bulan</i></span>
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