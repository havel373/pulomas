<x-Office-Layout title="Kelola Gedung">
    <div class="content-page">
        <div class="content">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Edit Profile</h4>
                        <div class="tab-pane show active" id="tooltips-validation-preview">
                            <form class="needs-validation" id="form_submit">
                                <div class="position-relative mb-3">
                                    <label class="form-label">Nama
                                        <small class="text-danger"><i>*Required</i></small>
                                    </label>
                                    <input type="text" name="nama" class="form-control" id="nama"
                                        placeholder="Nama" value="{{ $user->nama }}">
                                </div>
                                <div class="position-relative mb-3">
                                    <label class="form-label">Email
                                        <small class="text-danger"><i>*Required</i></small>
                                    </label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Email" value="{{ $user->email }}">
                                </div>
                                <div class="position-relative mb-3">
                                    <label class="form-label">Password Baru
                                        <small>
                                            <i>
                                                Kosongkan Jika Tidak Ingin Diubah
                                            </i>
                                        </small>
                                    </label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Password">
                                </div>
                                @if ($user->role == 'marketing' || $user->role == 'teknik' || $user->role == 'keuangan')
                                    <div class="position-relative mb-3">
                                        <label class="form-label">Nomor HP
                                            <small class="text-danger"><i>*Required</i></small>
                                        </label>
                                        <input type="text" name="nomor_hp" class="form-control" id="nomor_hp"
                                            placeholder="Nomor HP" value="{{ $data->nomor_hp }}">
                                    </div>
                                @elseif ($user->role == 'tenant')
                                    <div class="col-md mb-3">
                                        <label class="form-label" for="validationTooltip01">Nama Perusahaan /
                                            Instansi<small class="text-danger"><i>*Required</i></small></label>
                                        <input type="text" class="form-control" name="nama_instansi" id="nama"
                                            value="{{ $data->user ? $data->nama_instansi : '' }}">
                                    </div>
                                    <div class="col-md mb-3">
                                        <label class="form-label" for="validationTooltip01">Nomor Telepon
                                            Perusahaan<small class="text-danger"><i>*Required</i></small></label>
                                        <input type="text" class="form-control" name="nomor_hp_instansi"
                                            id="nomor_hp_instansi" value="{{ $data->nomor_hp_instansi }}">
                                    </div>
                                    <div class="col-md mb-3">
                                        <label class="form-label" for="validationTooltip01">Nama Penanggungjawab<small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <input type="text" class="form-control" name="nama_penanggungjawab"
                                            id="nama_penanggungjawab" value="{{ $data->nama_penanggungjawab }}">
                                    </div>
                                    <div class="col-md mb-3">
                                        <label class="form-label" for="validationTooltip01">Nomor Telepon
                                            Penanggungjawab<small class="text-danger"><i>*Required</i></small></label>
                                        <input type="text" class="form-control" name="nomor_hp_penanggungjawab"
                                            id="nomor_hp_penanggungjawab" value="{{ $data->nomor_hp_penanggungjawab }}">
                                    </div>
                                    <div class="col-md mb-3">
                                        <label class="form-label" for="validationTooltip01">Nomor KTP
                                            Penanggungjawab<small class="text-danger"><i>*Required</i></small></label>
                                        <input type="text" class="form-control" name="nomor_ktp_penanggungjawab"
                                            id="nomor_ktp_penanggungjawab"
                                            value="{{ $data->nomor_ktp_penanggungjawab }}">
                                    </div>
                                    <div class="col-md mb-3">
                                        <label class="form-label" for="validationTooltip01">Nomor NPWP
                                            <small class="text-danger"><i>*Required</i></small></label>
                                        <input type="text" class="form-control" name="nomor_npwp" id="nomor_npwp"
                                            value="{{ $data->nomor_npwp }}">
                                    </div>
                                    <div class="col-md mb-3">
                                        <label class="form-label" for="validationTooltip01">Industri <small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <select class="form-control" name="industri[]" id="industri"
                                            multiple="multiple">
                                            <option value="">-- Pilih Industri --</option>
                                            <option value="1" @if (in_array(1, json_decode($data->industri))) selected @endif>
                                                Pertanian</option>
                                            <option value="2" @if (in_array(2, json_decode($data->industri))) selected @endif>
                                                Perkebunan</option>
                                            <option value="3" @if (in_array(3, json_decode($data->industri))) selected @endif>
                                                Perikanan</option>
                                            <option value="4" @if (in_array(4, json_decode($data->industri))) selected @endif>
                                                Pertambangan</option>
                                            <option value="5" @if (in_array(5, json_decode($data->industri))) selected @endif>
                                                Perdagangan</option>
                                            <option value="6" @if (in_array(6, json_decode($data->industri))) selected @endif>
                                                Peternakan</option>
                                            <option value="7" @if (in_array(7, json_decode($data->industri))) selected @endif>
                                                Pariwisata</option>
                                            <option value="8" @if (in_array(8, json_decode($data->industri))) selected @endif>
                                                Alat angkutan lainnya</option>
                                            <option value="9" @if (in_array(9, json_decode($data->industri))) selected @endif>
                                                Barang-barang dari logam, dan peralatannya</option>
                                            <option value="10" @if (in_array(10, json_decode($data->industri))) selected @endif>
                                                Batu bara, minyak, dan gas bumi, dan bahan bakar dari nuklir
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md mb-3">
                                        <label class="form-label" for="validationTooltip01">Status Tenant<small
                                                class="text-danger"><i>*Required</i></small></label>
                                        <select class="form-control" name="status_tenant[]" id="status_tenant"
                                            multiple>
                                            <option value="">-- Pilih Status Tenant --</option>
                                            <option value="1" @if (in_array(1, json_decode($data->status_tenant))) selected @endif>
                                                Verifikasi Data</option>
                                            <option value="2" @if (in_array(2, json_decode($data->status_tenant))) selected @endif>
                                                Fraud Screening</option>
                                            <option value="3" @if (in_array(3, json_decode($data->status_tenant))) selected @endif>
                                                Grading / Scoring</option>
                                            <option value="4" @if (in_array(4, json_decode($data->status_tenant))) selected @endif>
                                                Prioritization</option>
                                        </select>
                                    </div>
                                    <div class="col-md mb-3">
                                        <label class="form-label" for="validationTooltip01">Alamat
                                            Penanggungjawab<small class="text-danger"><i>*Required</i></small></label>
                                        <textarea name="alamat_penanggungjawab" class="form-control">{{ $data->alamat_penanggungjawab }}</textarea>
                                    </div>
                                    <div class="col-md mb-3">
                                        <label class="form-label" for="validationTooltip01">Scan KTP
                                            Penanggungjawab
                                            <small class="text-danger"><i>*Required</i></small></label>
                                        <input type="file" class="form-control" name="ktp_penanggungjawab"
                                            id="ktp_penanggungjawab" value="{{ $data->ktp_penanggungjawab }}">
                                    </div>
                                    <div class="col-md mb-3">
                                        <label class="form-label" for="validationTooltip01">Scan NPWP
                                            <small class="text-danger"><i>*Required</i></small></label>
                                        <input type="file" class="form-control" name="npwp" id="npwp"
                                            value="{{ $data->npwp }}">
                                    </div>
                                @endif
                                <button class="btn btn-primary" type="submit">Update
                                </button>
                            </form>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    @section('custom_js')
        <script>
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#form_submit').submit(function(e) {
                    alert('Data Berhasil Diubah');
                    e.preventDefault();
                    var data = $(this).serialize();
                    $.ajax({
                        url: '{{ route('auth.profile.update', $data->id) }}',
                        type: 'POST',
                        data: data,
                        success: function(response) {
                            if (response.alert == 'success') {
                                success_toastr(response.message);
                                setTimeout(function() {
                                    location.reload();
                                }, 2000);
                            } else {
                                error_toastr(response.message);
                            }
                        },
                    });
                });
            });
        </script>
    @endsection
</x-Office-Layout>
