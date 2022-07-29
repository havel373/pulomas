<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Ruang</h4>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="tooltips-validation-preview">
                            <form class="needs-validation">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationTooltip01">Pilih Gedung<small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <select class="form-control" name="id_gedung" id="id_gedung">
                                            <option value="">Pilih Gedung</option>
                                            @foreach ($gedungs as $gedung)
                                                <option value="{{ $gedung->id }}"
                                                    {{ $data->id_gedung == $gedung->id ? 'selected' : '' }}>
                                                    {{ $gedung->nama_gedung }}
                                            @endforeach
                                        </select>
                                        <div class="invalid-tooltip">
                                            *required
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationTooltip01">Pilih Lantai<small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <select class="form-control" name="id_lantai" id="id_lantai">
                                            <option value="">Pilih Lantai</option>
                                        </select>
                                        <div class="invalid-tooltip">
                                            *required
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationTooltip02">Kode Ruang<small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <input type="text" class="form-control" id="validationTooltip02"
                                            placeholder="" name="kode_ruang" value="{{ $data->kode_ruang }}" required>
                                        <div class="invalid-tooltip">
                                            *required
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationTooltip02">Nama Ruang<small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <input type="text" class="form-control" id="validationTooltip02"
                                            placeholder="" name="nama_ruang" value="{{ $data->nama_ruang }}" required>
                                        <div class="invalid-tooltip">
                                            *required
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationTooltip01">Pilih Status<small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <select class="form-control" name="lantai" id="lantai">
                                            <option value="aktiv" {{ $data->lantai == 'aktiv' ? 'selected' : '' }}>
                                                Aktiv</option>
                                            <option value="tidak aktiv"
                                                {{ $data->lantai == 'tidak aktiv' ? 'selected' : '' }}>
                                                Tidak Aktiv</option>
                                        </select>
                                        <div class="invalid-tooltip">
                                            *required
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Luas (m<sup>2</sup>)<small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <div class="input-group" id="input-group1">
                                            <input type="text" class="form-control" name="luas"
                                                value="{{ $data->luas }}" required>
                                            <span class="input-group-text">m<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Harga Per m<sup>2</sup>/Bulan <small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <div class="input-group" id="input-group1">
                                            <span class="input-group-text">Rp</span>
                                            <input type="text" class="form-control" name="harga"
                                                value="{{ $data->harga }}" required>
                                            <span class="input-group-text">m<sup>2</sup>/Bulan</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Harga Per m<sup>2</sup>/Hari <small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <div class="input-group" id="input-group1">
                                            <span class="input-group-text">Rp</span>
                                            <input type="text" class="form-control" name="harga_hari"
                                                value="{{ $data->harga_hari }}" required>
                                            <span class="input-group-text">m<sup>2</sup>/Hari</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Tarif Dasar Overtime (Dibawah 4 Jam) <small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <div class="input-group" id="input-group1">
                                            <input type="text" class="form-control" name="overtime_dibawah_4jam"
                                                value="{{ $data->overtime_dibawah_4jam }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Total Tarif Overtime (Dibawah 4 Jam) <small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <div class="input-group" id="input-group1">
                                            <span class="input-group-text">Rp</span>
                                            <input type="text" class="form-control"
                                                name="total_overtime_dibawah_4jam"
                                                value="{{ $data->total_overtime_dibawah_4jam }}" readonly>
                                            <span class="input-group-text">Jam / m<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Tarif Dasar Overtime (Diatas 4 Jam) <small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <div class="input-group" id="input-group1">
                                            <span class="input-group-text">Rp</span>
                                            <input type="text" class="form-control" name="overtime_diatas_4jam"
                                                value="{{ $data->overtime_diatas_4jam }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Total Tarif Overtime (Diatas 4 Jam) <small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <div class="input-group" id="input-group1">
                                            <span class="input-group-text">Rp</span>
                                            <input type="text" class="form-control"
                                                name="total_overtime_diatas_4jam"
                                                value="{{ $data->total_overtime_diatas_4jam }}" readonly>
                                            <span class="input-group-text">Jam / m<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3" id="form-dinamic">
                                        @if ($data->id)
                                            @foreach ($data->fasilitas as $fasilitas)
                                                <label class="form-label">Fasilitas
                                                    <small class="text-danger">
                                                        <i>*Required</i>
                                                    </small>
                                                </label>
                                                <div class="input-group" id="input-group1">
                                                    <input type="text" class="form-control" name="fasilitas[]"
                                                        value="{{ $data->fasilitas }}">
                                                    <button type="button" id="tambah_form"
                                                        class="btn btn-primary btn-add-fasilitas">
                                                        <i class="uil-plus" style="color:white;"></i>
                                                    </button>
                                                </div>
                                            @endforeach
                                        @else
                                            <label class="form-label">Fasilitas
                                                <small class="text-danger">
                                                    <i>*Required</i>
                                                </small>
                                            </label>
                                            <div class="input-group" id="input-group1">
                                                <input type="text" class="form-control" name="fasilitas[]">
                                                <button type="button" id="tambah_form"
                                                    class="btn btn-primary btn-add-fasilitas">
                                                    <i class="uil-plus" style="color:white;"></i>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Tarif Service Charge (Rp 0) <small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <div class="input-group" id="input-group1">
                                            <span class="input-group-text">Rp</span>
                                            <input type="text" class="form-control" name="service_charge"
                                                value="{{ $data->service_charge }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Tarif Service Charge Sendiri (Rp 0) <small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <div class="input-group" id="input-group1">
                                            <span class="input-group-text">Rp</span>
                                            <input type="text" class="form-control" name="service_charge_sendiri"
                                                value="{{ $data->service_charge_sendiri }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Foto Ruang <small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <div class="input-group" id="input-group1">
                                            <input type="file" class="form-control" name="foto_ruang"
                                                value="{{ $data->foto_ruang }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="example-textarea" class="form-label">Deskripsi Ruang<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <textarea class="form-control" id="example-textarea" rows="5" name="deskripsi_ruang">{{ $data->deskripsi_ruang }}</textarea>
                                </div>
                                <h4 class="header-title">Daftar Tarif Sewa</h4>
                                <table class="table table-striped table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Satuan Jangka Waktu / Lama Sewa</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1 Hari</td>
                                            <td id="hari"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>1 Minggu</td>
                                            <td id="minggu"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>1 Bulan</td>
                                            <td id="1bulan"></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>2 Bulan</td>
                                            <td id="2bulan"></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>3 Bulan</td>
                                            <td id="3bulan"></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>4 Bulan</td>
                                            <td id="4bulan"></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>5 Bulan</td>
                                            <td id="5bulan"></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>6 Bulan</td>
                                            <td id="6bulan"></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>7 Bulan</td>
                                            <td id="7bulan"></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>8 Bulan</td>
                                            <td id="8bulan"></td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>9 Bulan</td>
                                            <td id="9bulan"></td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>10 Bulan</td>
                                            <td id="10bulan"></td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>11 Bulan</td>
                                            <td id="11bulan"></td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>1 Tahun </td>
                                            <td id="tahun"></td>
                                        </tr>
                                    </tbody>
                                </table>

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
<script>
    $(document).ready(function() {
                $('#id_gedung').on('change', function() {
                    var id_gedung = $(this).val();
                    $.ajax({
                        url: "{{ route('lantai.get', ':id') }}".replace(':id', id_gedung),
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            // foreach data
                            var html = '';
                            html += '<option value="">Pilih Lantai</option>';
                            $.each(data, function(key, value) {
                                html += '<option value="' + value.id + '">' + value
                                    .nama_lantai +
                                    '</option>';
                            });
                            $('#id_lantai').html(html);
                        }
                    });
                });

                // create dinamically input type="text"
                var i = 0;
                $('#tambah_form').on('click', function() {
                        ++i;
                        $('#form-dinamic').append(
                            '<label class="form-label">Fasilitas' +
                            '<small class="text-danger">' +
                            '<i>*Required</i>' +
                            '</small>' +
                            '</label>' +
                            '<div class="input-group" id="input-group1">' +
                            '<input type="text" class="form-control" name="fasilitas[]">' +
                            '<button type="button" id="tambah_form" class="btn btn-primary btn-add-fasilitas">' +
                            '<i class="uil-plus" style="color:white;"></i>' +
                            '</button>' +
                            '</div>'
                        }
                    );
                    @if ($data->id_gedung != null)
                        $('#id_gedung').val({{ $data->id_gedung }});
                        setTimeout(function() {
                            $('#id_gedung').trigger('change');
                            setTimeout(function() {
                                $('#id_lantai').val({{ $data->id_lantai }});
                            }, 1000);
                        }, 1000);
                    @endif
                });
</script>
