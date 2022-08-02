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
                            <form class="needs-validation" id="form_submit">
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
                                            <option value="">--- Booking ----</option>
                                            <option value="ya">Ya</option>
                                            <option value="tidak">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3" id="input_kode">
                                        <label class="form-label">Kode Booking
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <input  class="form-control" type="text" name="kode_booking" id="kode_booking">
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
                                            <option value="">Pilih Gedung Lebih Dulu</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Ruang
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <select class="form-control" name="ruang" id="ruang">
                                            <option value="">Pilih Lantai Lebih Dulu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Jangka Waktu
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <select class="form-control" name="jangka_waktu" id="jangka_waktu">
                                            <option value="">Pilih Ruang Terlebih Dulu</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <div class="input-group" id="input-group1">
                                            <input type="text" class="form-control" value="1" id="angka">
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
                                            <option value="">Service Charge + Listrik - Rp 0 / Bulan</option>
                                            <option value="">Service Charge - Rp 0 / Bulan</option>
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
                                            <option value="">Pilih</option>
                                            <option value="1">Ada Penambahan Luas Ruang</option>
                                            <option value="2">Kurangi Luas</option>
                                            <option value="3">Tidak Ada Penambahan atau Pengurangan</option>
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
                                                    @foreach ($additionals as $key => $item)
                                                        <div class="col-sm-3 row inputanService">
                                                            <div class="col-sm-12">
                                                                <img src="{{ $item->image }}"
                                                                    alt="image" class="img-fluid rounded-circle"
                                                                    width="75">
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h4><input type="checkbox"
                                                                        class="checkbox checkbox-primary sewaService"
                                                                        name="additional_services[]" value="{{ $item->id }}"> {{ $item->nama }}
                                                                    <div class="input-group mt-2 totalService"
                                                                        style="">
                                                                        <input type="number"
                                                                            class="form-control col-sm-4 total_service"
                                                                            name="additional_services_qty[]" placeholder="Total"
                                                                            value="" width="50" id="totalServiceInput{{$key+1}}">
                                                                        <div class="input-group-append">
                                                                            <div class="input-group-text">
                                                                                {{$item->satuan}} </div>
                                                                        </div>
                                                                    </div>
                                                                </h4>
                                                                <p>Rp.
                                                                    {{ number_format($item->harga) . '/' . $item->satuan }} /Per
                                                                    Bulan</p>
                                                            </div>
                                                            <input type="hidden" name="harga_service[]" class="harga_service"
                                                                value="{{$item->harga}}">
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
                                                    <input type="hidden" name="sewa" id="sewainp">
                                                    <td id="sewa"></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Service Charge</td>
                                                    <input type="hidden" name="service" id="serviceinp">
                                                    <td id="service"></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Deposit Sewa</td>
                                                    <input type="hidden" name="deposit" id="depositinp">
                                                    <td id="deposit"></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Additional Service</td>
                                                    <input type="hidden" name="additional" id="additionalinp">
                                                    <td id="additional"></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>PPN 10%</td>
                                                    <input type="hidden" name="ppnjumlah" id="ppninp">
                                                    <td id="ppnrow">Rp. 0</td>
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
                                            <div class="col-md-6" id="totalppn" >
                                                Rp. 0
                                            </div>
                                            <input type="hidden" name="totalharga" id="totalppninp">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="header-title text-center">Foto Ruangan</h4>
                                        {{-- <img src="{{ $item->image }}" alt="image" class="img-fluid"> --}}
                                    </div>
                                </div>
                                <a href="javascript:;" onclick="load_list(1);" class="btn btn-info mt-3">Cancel</a>
                                <button class="btn btn-primary mt-3" id="btn_submit" onclick="handle_save('#btn_submit','#form_submit','{{route('sewa.store')}}','POST','Submit');">Submit</button>
                            </form>
                        </div>
                    </div> <!-- end preview-->
                </div> <!-- end tab-content-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<script>
    $('#input_kode').hide();
    $('#booking').change(function() {
        if ($(this).val() == 'ya') {
            $('#input_kode').show();
        } else {
            $('#input_kode').hide();
        }
    });
        $("#gedung_id").change(function() {
            $.ajax({
                type: "POST",
                url: "{{ route('lantai.get_list') }}",
                data: {
                    id: $("#gedung_id").val()
                },
                success: function(response) {
                    $("#lantai_id").html(response);
                    $("#lantai_id").change(function() {
                        $.ajax({
                            type: "POST",
                            url: "{{ route('sewa.getRuang') }}",
                            data: {
                                id: $("#lantai_id").val()
                            },
                            success: function(response) {
                                $('#ruang').html('');
                                $('#ruang').append('<option value="">Pilih Ruang</option>');
                                $.each(response, function(i, item) {
                                    $('#ruang').append('<option value="' + item.id + '">' + item.nama_ruang +'</option>');
                                    $("#ruang").change(function() {
                                        $.ajax({
                                            success: function(response) {
                                                let bulan = 1;
                                                const numberFormatter = Intl.NumberFormat('id-ID');
                                                $('#jangka_waktu').html('');
                                                $('#jangka_waktu').append(
                                                    '<option value="">Pilih Jangka Waktu</option>' + 
                                                    '<option value="'+item.harga_hari+'">1 Hari - Rp '+ thousand(item.harga_hari )+ ' </option>' + 
                                                    '<option value="'+item.harga_hari * 7+'">1 Minggu - Rp '+ thousand(item.harga_hari * 7 )+ ' </option>'+
                                                    '<option value="'+item.harga_bulan+'">1 Bulan - Rp '+ thousand(item.harga_bulan )+ ' </option>'+
                                                    '<option value="'+item.harga_bulan * 2+'">2 Bulan - Rp '+ thousand(item.harga_bulan * 2 )+ ' </option>'+
                                                    '<option value="'+item.harga_bulan * 3+'">3 Bulan - Rp '+ thousand(item.harga_bulan * 3 )+ ' </option>'+
                                                    '<option value="'+item.harga_bulan * 4+'">4 Bulan - Rp '+ thousand(item.harga_bulan * 4 )+ ' </option>'+
                                                    '<option value="'+item.harga_bulan * 5+'">5 Bulan - Rp '+ thousand(item.harga_bulan * 5 )+ ' </option>'+
                                                    '<option value="'+item.harga_bulan * 6+'">6 Bulan - Rp '+ thousand(item.harga_bulan * 6 )+ ' </option>'+
                                                    '<option value="'+item.harga_bulan * 7+'">7 Bulan - Rp '+ thousand(item.harga_bulan * 7 )+ ' </option>'+
                                                    '<option value="'+item.harga_bulan * 8+'">8 Bulan - Rp '+ thousand(item.harga_bulan * 8 )+ ' </option>'+
                                                    '<option value="'+item.harga_bulan * 9+'">9 Bulan - Rp '+ thousand(item.harga_bulan * 9 )+ ' </option>'+
                                                    '<option value="'+item.harga_bulan * 10+'">10 Bulan - Rp '+ thousand(item.harga_bulan * 10 )+ ' </option>'+
                                                    '<option value="'+item.harga_bulan * 11+'">11 Bulan - Rp '+ thousand(item.harga_bulan * 11 )+ ' </option>'+
                                                    '<option value="'+item.harga_bulan * 12+'">1 Tahun - Rp '+ thousand(item.harga_bulan * 12 )+ ' </option>'
                                                );
                                                $("#jangka_waktu").change(function() {
                                                    $.ajax({
                                                        success: function(response) {
                                                            $('#sewa').html('Rp '+thousand($('#jangka_waktu').val() * $('#angka').val()));
                                                            $('#sewainp').val($('#jangka_waktu').val() * $('#angka').val());
                                                            $('#deposit').html('Rp '+thousand($('#jangka_waktu').val() * $('#angka').val()));
                                                            $('#depositinp').val($('#jangka_waktu').val() * $('#angka').val());
                                                        }
                                                    });
                                                });
                                                $("#angka").change(function() {
                                                    $.ajax({
                                                        success: function(response) {
                                                            $('#sewa').html('Rp '+thousand($('#jangka_waktu').val() * $('#angka').val()));
                                                            $('#sewainp').val($('#jangka_waktu').val() * $('#angka').val());
                                                            $('#deposit').html('Rp '+thousand($('#jangka_waktu').val() * $('#angka').val()));
                                                            $('#depositinp').val($('#jangka_waktu').val() * $('#angka').val());
                                                        }
                                                    });
                                                });
                                            }
                                        });
                                    });
                                });
                                $.each(response, function(i, item) {
                                    $('#jenis_service_charge').html('');
                                    $('#jenis_service_charge').append(
                                        '<option value="">Pilih Service Charge</option>' + 
                                        '<option value="1">Listrik Pulomas Office Park - Rp '+thousand(item.service_charge)+'</option>' + 
                                        '<option value="2">Listrik Pulomas Office Park - Rp '+thousand(item.service_charge_sendiri)+'</option>'
                                    );
                                    $('#jenis_service_charge').change(function() {
                                        if($('#jenis_service_charge').val() == '1'){
                                            $('#service').html('Rp '+thousand(item.service_charge));
                                            $('#serviceinp').val(item.service_charge);
                                        }else{
                                            $('#service').html('Rp '+thousand(item.service_charge_sendiri));
                                            $('#serviceinp').val(item.service_charge_sendiri);
                                        }
                                    });
                                });
                            }
                        });
                    });
                }
            });
        });

        $('.sewaService').click(function(){
            $('#additionalinp').val($('.harga_service').val());
            $('#additional').html('Rp '+thousand($('.harga_service').val()));
            let sewainp = $('#sewainp').val();
            let additionalinp = $('#additionalinp').val();
            let serviceinp = $('#serviceinp').val();
            let totalinp = parseFloat(sewainp) + parseFloat(additionalinp) + parseFloat(serviceinp);
            $('#ppninp').val( (totalinp/10) );
            $('#ppnrow').html(thousand('Rp ' +  $('#ppninp').val() ));
            let grandtotal = parseFloat($('#ppninp').val()) + parseFloat(totalinp);
            $('#total').html('Rp '+thousand(totalinp));
            $('#totalppninp').val(grandtotal);
            $('#totalppn').html('Rp '+thousand(grandtotal));
        });
    $('#jangka_waktu').change(function() {
        $('#tanggal_awal').change(function() {
            var tanggal_awal = $('#tanggal_awal').val();
            // tambahkan tanggal awal dan jangka waktu untuk tanggal akhir
            var tanggal_akhir = new Date(tanggal_awal);
            tanggal_akhir.setDate(tanggal_akhir.getDate() + parseInt($('#angka').val()));
            $('#tanggal_akhir').val(tanggal_akhir.toISOString().substring(0, 10));
        });
    });

    $('#sewa').html('Rp. 0');
</script>
