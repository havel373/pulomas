<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title text-center">Denah Bangunan</h4>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="tooltips-validation-preview">
                            <form class="needs-validation">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <img src="{{ asset('assets/images/denah.jpg') }}" alt=""
                                            style="width:100%;height:100%;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationTooltip01">Booking<small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <select class="form-control" name="gedung" id="gedung">
                                            <option value="ya">Ya</option>
                                            <option value="tidak">Tidak</option>
                                        </select>
                                        <div class="invalid-tooltip">
                                            *required
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationTooltip01">Gedung<small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <select class="form-control" name="gedung" id="gedung">
                                            <option value="">Pilih Gedung</option>
                                            @foreach ($gedungs as $gedung)
                                                <option value="{{ $gedung->id }}">{{ $gedung->nama_gedung }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-tooltip">
                                            *required
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationTooltip02">Lantai<small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <select class="form-control" name="lantai" id="lantai">
                                            <option value="">Pilih Lantai</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationTooltip02">Ruang<small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <select class="form-control" name="ruang" id="ruang">
                                            <option value="">Pilih Ruang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationTooltip01">Jangka Waktu<small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <select class="form-control" name="jangka" id="jangka">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Luas (m<sup>2</sup>)<small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <div class="input-group" id="input-group1">
                                            <input id="timepicker" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Tanggal Awal Sewa <small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <div class="input-group" id="input-group1">
                                            <input id="timepicker" type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Tanggal Akhir Sewa <small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <div class="input-group" id="input-group1">
                                            <input id="timepicker" type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Jenis Service Charge <small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <select class="form-control" name="" id="">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">PPN <small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <select class="form-control" name="" id="">
                                            <option value="dibayarkan tenant">PPN 10% Dibayarkan Tenant</option>
                                            <option value="dibayarkan manajemen">PPN 10% Dibayarkan Manajemen</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Keterangan <small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Input keterangan"></textarea>
                                    </div>
                                </div>
                                <div class="accordion mb-3" id="accordionExample">
                                    <div class="card mb-0">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="m-0">
                                                <a class="custom-accordion-title d-block pt-2 pb-2 text-primary"
                                                    data-bs-toggle="collapse" href="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    Additional Service
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-bs-parent="#accordionExample" style="">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-3 row inputanService">
                                                        <div class="col-sm-12">
                                                            <img src="" alt="image"
                                                                class="img-fluid rounded-circle" width="75">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <h4><input type="checkbox"
                                                                    class="checkbox checkbox-primary sewaService"
                                                                    name="service[]" value="13"
                                                                    data-harga="100000"> Sewa Jaringan <div
                                                                    class="input-group mt-2 totalService"
                                                                    style="">
                                                                    <input type="number"
                                                                        class="form-control col-sm-4 total_service"
                                                                        name="total_service[]" placeholder="Total"
                                                                        value="1" width="50"
                                                                        data-harga="100000">
                                                                    <div class="input-group-append">
                                                                        <div class="input-group-text">
                                                                            Per Bulan </div>
                                                                    </div>
                                                                </div>
                                                            </h4>
                                                            <p>Rp. 100,000/Per Bulan</p>
                                                        </div>
                                                        <input type="hidden" class="currenTotalService"
                                                            value="100000">
                                                        <input type="hidden" name="harga_service[]" value="100000">
                                                        <input type="hidden" name="id_service[]" value="13">
                                                    </div>
                                                    <div class="col-sm-3 row inputanService">
                                                        <div class="col-sm-12">
                                                            <img src="" alt="image"
                                                                class="img-fluid rounded-circle" width="75">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <h4><input type="checkbox"
                                                                    class="checkbox checkbox-primary sewaService"
                                                                    name="service[]" value="6"
                                                                    data-harga="1600"> Overtime dibawah 4 Jam <div
                                                                    class="input-group mt-2 totalService"
                                                                    style="">
                                                                    <input type="number"
                                                                        class="form-control col-sm-4 total_service"
                                                                        name="total_service[]" placeholder="Total"
                                                                        value="1" width="50"
                                                                        data-harga="1600">
                                                                    <div class="input-group-append">
                                                                        <div class="input-group-text">
                                                                            Jam/m2 </div>
                                                                    </div>
                                                                </div>
                                                            </h4>
                                                            <p>Rp. 1,600/Jam/m2</p>
                                                        </div>
                                                        <input type="hidden" class="currenTotalService"
                                                            value="1600">
                                                        <input type="hidden" name="harga_service[]" value="1600">
                                                        <input type="hidden" name="id_service[]" value="6">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mb-6">
                                    <div class="col-md-6">
                                        <h4 class="header-title text-center">Total Pembayaran</h4>
                                        <table class="table table-striped table-centered mb-2">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Deskripsi</th>
                                                    <th>Nominal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Pembayaran Sewa</td>
                                                    <td id="sewa"></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Service Charge</td>
                                                    <td id="service"></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Deposit Sewa</td>
                                                    <td id="deposit"></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Additional Service</td>
                                                    <td id="additional"></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>PPN 10%</td>
                                                    <td id="ppn">Rp. 0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="row mb-2" style="margin-left:37%;">
                                            <div class="col-md-6">
                                                Total :
                                            </div>
                                            <div class="col-md-6" id="total">
                                                Rp. 0
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row mb-2" style="margin-left:37%;">
                                            <div class="col-md-6">
                                                Total + PPN 10% :
                                            </div>
                                            <div class="col-md-6" id="totalppn">
                                                Rp. 0
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <h4 class="header-title text-center">Foto Ruangan</h4>
                                    </div>
                                </div>

                                <a href="javascript:;" onclick="load_list(1);" class="btn btn-info mt-3">Cancel</a>
                                <button class="btn btn-primary mt-3" onclick="handle_save('');">Submit</button>
                            </form>
                        </div>
                    </div> <!-- end preview-->
                </div> <!-- end tab-content-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<script></script>
