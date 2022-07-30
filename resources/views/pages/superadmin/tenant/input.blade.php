<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Tenant</h4>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="tooltips-validation-preview">
                            <form class="needs-validation">
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Email<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" name="email" id="email"
                                        value="{{ $data->email }}">
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Password<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Nama Perusahaan / Instansi<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" name="nama_perusahaan"
                                        id="nama_perusahaan" value="{{ $data->nama_perusahaan }}">
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Nomor Telepon Perusahaan<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" name="nomor_telepon_perusahaan"
                                        id="nomor_telepon_perusahaan" value="{{ $data->nomor_telepon_perusahaan }}">
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
                                    <input type="text" class="form-control" name="nomor_telepon_penanggungjawab"
                                        id="nomor_telepon_penanggungjawab"
                                        value="{{ $data->nomor_telepon_penanggungjawab }}">
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Industri <small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" name="industri">
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Status Tenant<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <select class="form-control" name="status_tenant" id="status_tenant">
                                        <option value="pegawai pnj">Pegawai PMJ</option>
                                        <option value="bukan pegawai pnj">Bukan Pegawai PMJ</option>
                                    </select>
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Alamat Penanggungjawab<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <textarea name="alamat_penanggungjawab" class="form-control">{{ $data->alamat_penanggungjawab }}</textarea>
                                </div>
                                <a href="javascript:;" onclick="load_list(1);" class="btn btn-info">Cancel</a>
                                @if ($data->id)
                                    <button class="btn btn-primary" id="tombol_submit"
                                        onclick="handle_save('#tombol_submit', '#form_submit', '{{ route('tenant.update', $data->id) }}', 'PATCH', 'Submit');">Submit</button>
                                @else
                                    <button class="btn btn-primary" id="tombol_submit"
                                        onclick="handle_save('#tombol_submit', '#form_submit', '{{ route('tenant.store') }}', 'POST', 'Submit');">Submit</button>
                                @endif
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
        // tagify
    });
</script>
