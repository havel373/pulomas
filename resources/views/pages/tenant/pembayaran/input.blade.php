<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Request Pembayaran</h4>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="tooltips-validation-preview">
                            <form class="needs-validation">
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Nominal Dibayarkan<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <div class="input-group" id="input-group1">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control" id="validationTooltip02"
                                            value="0" name="nominal">
                                        <div class="invalid-tooltip">
                                            *required
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Bukti Pembayaran<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="file" class="form-control" id="validationTooltip02" name="bukti">
                                    <div class="invalid-tooltip">
                                        *required
                                    </div>
                                    <small class="text-warning">* Ukuran maksimal 2MB tipe file JPG, JPEG, PNG</small>
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Keterangan Pembayaran<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Input Keterangan Pembayaran"></textarea>
                                    <div class="invalid-tooltip">
                                        *required
                                    </div>
                                </div>
                                <a href="javascript:;" onclick="load_list(1);" class="btn btn-info">Cancel</a>
                                <button class="btn btn-primary" onclick="handle_save('');">Submit</button>
                            </form>
                        </div>
                    </div> <!-- end preview-->
                </div> <!-- end tab-content-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<script></script>
