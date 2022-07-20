<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Additional Service</h4>
                    
                    <ul class="nav nav-tabs nav-bordered mb-3">
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="tooltips-validation-preview">
                            <form class="needs-validation">
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Nama Service<small class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" id="validationTooltip02" placeholder="" value="" >
                                    <div class="invalid-tooltip">
                                        *required
                                    </div>
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">PIC<small class="text-danger"><i>*Required</i></small></label>
                                    <select class="form-control" name="gedung" id="gedung">
                                        @foreach($marketings as $marketing)
                                            <option value="{{$marketing->id}}">{{$marketing->user->nama}}</option>
                                        @endforeach
                                        @foreach($tekniks as $teknik)
                                            <option value="{{$teknik->id}}">{{$teknik->user->nama}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-tooltip">
                                        *required
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="form-label" for="validationTooltip01">Harga<small class="text-danger"><i>*Required</i></small></label>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="validationTooltip02" placeholder="Satuan Additional Service" value="" >
                                        <div class="invalid-tooltip">
                                            *required
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="input-group" id="input-group1">
                                            <span class="input-group-text">Rp</span>
                                            <input type="text" class="form-control" id="validationTooltip02" placeholder="" value="0" >
                                            <div class="invalid-tooltip">
                                                *required
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationTooltip01">Jenis Pembayaran<small class="text-danger"><i>*Required</i></small></label>
                                    <select class="form-control" name="gedung" id="gedung">
                                        <option value="">Pilih Status Jangka WaktuJ</option>
                                        <option value="debit">Debit</option>
                                        <option value="kredit">Kredit</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                        *required
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationTooltip01">Jangka Waktu<small class="text-danger"><i>*Required</i></small></label>
                                    <select class="form-control" name="gedung" id="gedung">
                                        <option value="">Pilih Status Jangka WaktuJ</option>
                                        <option value="langsung">1x Pembayaran</option>
                                        <option value="berjangka">Berjangka</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                        *required
                                    </div>
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Foto Additional Service<small class="text-danger"><i>*Required</i></small></label>
                                    <input type="file" class="form-control" id="validationTooltip02" placeholder="" value="">
                                    <div class="invalid-tooltip">
                                        *required
                                    </div>
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Deskripsi<small class="text-danger"><i>*Required</i></small></label>
                                    <textarea name="" id="" class="form-control"></textarea>
                                    <div class="invalid-tooltip">
                                        *required
                                    </div>
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