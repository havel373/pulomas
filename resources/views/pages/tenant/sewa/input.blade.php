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
                                        <label class="form-label">Booking
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <select class="form-control" name="booking" id="booking">
                                            <option value="ya">Ya</option>
                                            <option value="tidak">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3" id="input_kode">
                                        <label class="form-label">Kode Booking
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <select class="form-control" name="kode_booking" id="kode_booking">
                                            <option value="ya">Ya</option>
                                            <option value="tidak">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Gedung
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <select class="form-control" name="gedung_id" id="gedung_id">
                                            <option value="">Pilih Gedung</option>
                                            @foreach ($gedungs as $gedung)
                                                <option value="{{ $gedung->id }}">{{ $gedung->nama_gedung }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Lantai
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <select class="form-control" name="lantai_id" id="lantai_id">
                                            <option value="">Pilih Lantai</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Ruang
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <select class="form-control" name="ruang" id="ruang">
                                            <option value="">Pilih Ruang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Jangka Waktu
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <select class="form-control" name="jangka_waktu" id="jangka_waktu">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <div class="input-group" id="input-group1">
                                            <input type="text" class="form-control" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Tanggal Awal Sewa
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <div class="input-group" id="input-group1">
                                            <input type="date" class="form-control" name="tanggal_awal"
                                                id="tanggal_awal">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Tanggal Akhir Sewa
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <div class="input-group" id="input-group1">
                                            <input type="date" class="form-control" name="tanggal_akhir"
                                                id="tanggal_akhir" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Jenis Service Charge
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <select class="form-control" name="jenis_service_charge"
                                            id="jenis_service_charge">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">PPN
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <select class="form-control" name="ppn" id="ppn">
                                            <option value="dibayarkan tenant">PPN 10% Dibayarkan Tenant</option>
                                            <option value="dibayarkan manajemen">PPN 10% Dibayarkan Manajemen</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Luas Ruangan
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <select class="form-control" name="luas_ruangan" id="luas_ruangan">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Marketing
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <select class="form-control" name="marketing_id" id="marketing_id">
                                            @foreach ($marketings as $marketing)
                                                <option value="{{ $marketing->id }}">{{ $marketing->user->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Keterangan
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
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
                                                    @foreach ($additionals as $item)
                                                        <div class="col-sm-3 row inputanService">
                                                            <div class="col-sm-12">
                                                                <img src="data_file/{{ $item->foto }}"
                                                                    alt="image" class="img-fluid rounded-circle"
                                                                    width="75">
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h4><input type="checkbox"
                                                                        class="checkbox checkbox-primary sewaService"
                                                                        name="service[]" value="{{ $item->id }}"
                                                                        data-harga="100000"> {{ $item->nama }}
                                                                    <div class="input-group mt-2 totalService"
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
                                                                <p>Rp.
                                                                    {{ number_format($item->harga) . '/' . $item->satuan }}/Per
                                                                    Bulan</p>
                                                            </div>
                                                            <input type="hidden" class="currenTotalService"
                                                                value="100000">
                                                            <input type="hidden" name="harga_service[]"
                                                                value="100000">
                                                            <input type="hidden" name="id_service[]"
                                                                value="{{ $item->id }}">
                                                        </div>
                                                    @endforeach
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
<script>
    $('#booking').change(function() {
        if ($(this).val() == 'ya') {
            $('#kode_booking').show();
        } else {
            $('#kode_booking').hide();
        }
    });

    $('#gedung_id').change(function() {
        var gedung_id = $('#gedung_id').val();
        $.ajax({
            url: '{{ route('sewa.getLantai') }}',
            type: 'GET',
            dataType: 'JSON',
            success: function(data) {
                $('#lantai_id').html('');
                $('#lantai_id').append('<option value="">Pilih Lantai</option>');
                $.each(data, function(i, item) {
                    $('#lantai_id').append('<option value="' + item.id + '">' + item.nama +
                        '</option>');
                });
            }
        });
    });

    $('#lantai_id').change(function() {
        var lantai_id = $('#lantai_id').val();
        $.ajax({
            url: '{{ route('sewa.getRuang') }}',
            type: 'GET',
            dataType: 'JSON',
            data: {
                lantai_id: lantai_id
            },
            success: function(data) {
                $('#ruang_id').html('');
                $('#ruang_id').append('<option value="">Pilih Ruang</option>');
                $.each(data, function(i, item) {
                    $('#ruang_id').append('<option value="' + item.id + '">' + item.nama +
                        '</option>');
                });
            }
        });
    });

    $('#ruangan_id').change(function() {
        var ruangan_id = $('#ruangan_id').val();
        $.ajax({
            url: '{{ route('sewa.getJangkaWaktu') }}',
            type: 'GET',
            dataType: 'JSON',
            data: {
                ruangan_id: ruangan_id
            },
            success: function(data) {
                $('#jangka_waktu').append('<option value="">Pilih Jangka Waktu</option>');
                $.each(data, function(i) {
                    $('#jangka_waktu').append(data[i]);
                });
            }
        });
    });

    $('#tanggal_awal').change(function() {
        var tanggal_awal = $('#tanggal_awal').val();
        // tambahkan tanggal awal dan jangka waktu untuk tanggal akhir
        var tanggal_akhir = new Date(tanggal_awal);
        tanggal_akhir.setDate(tanggal_akhir.getDate() + parseInt($('#jangka_waktu').val()));
        $('#tanggal_akhir').val(tanggal_akhir.toISOString().substring(0, 10));
    });

    $('#sewa').html('Rp. 0');
</script>
