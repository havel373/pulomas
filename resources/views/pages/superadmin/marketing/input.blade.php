<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create User Marketing</h4>
                    <ul class="nav nav-tabs nav-bordered mb-3">
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="tooltips-validation-preview">
                            <form class="needs-validation" id="form_submit">
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Status Pegawai<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <select class="form-control" name="status_pegawai" id="status_pegawai"
                                        placeholder="Pilih Status Pegawai">
                                        <option value="pegawai pmj"
                                            {{ $data->status_pegawai == 'pegawai pmj' ? 'selected' : '' }}>Pegawai PMJ
                                        </option>
                                        <option value="bukan pegawai pmj"
                                            {{ $data->status_pegawai == 'bukan pegawai pmj' ? 'selected' : '' }}>Bukan
                                            Pegawai PMJ
                                    </select>
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Email<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" name="email" id="email"
                                        value="{{ $data->user->email }}">
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Password<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Nama Pegawai Marketing<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        value="{{ $data->user->nama }}">
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Nomor Handphone<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <input type="text" class="form-control" name="nomor_hp" id="nomor_hp"
                                        value="{{ $data->nomor_hp }}">
                                </div>
                                <div class="col-md mb-3">
                                    <label class="form-label" for="validationTooltip01">Status<small
                                            class="text-danger"><i>*Required</i></small></label>
                                    <select class="form-control" name="status" id="status">
                                        placeholder="Pilih Status Pegawai">
                                        <option value="aktiv" {{ $data->status == 'aktiv' ? 'selected' : '' }}>Aktiv
                                        </option>
                                        <option value="tidak aktiv"
                                            {{ $data->status == 'tidak aktiv' ? 'selected' : '' }}>Tidak
                                            Aktiv
                                        </option>
                                    </select>
                                </div>
                                <a href="javascript:;" onclick="load_list(1);" class="btn btn-info">Cancel</a>
                                @if ($data->id)
                                    <button class="btn btn-primary" id="tombol_submit"
                                        onclick="handle_save('#tombol_submit', '#form_submit', '{{ route('marketing.update', $data->id) }}', 'PATCH', 'Submit');">Submit</button>
                                @else
                                    <button class="btn btn-primary" id="tombol_submit"
                                        onclick="handle_save('#tombol_submit', '#form_submit', '{{ route('marketing.store') }}', 'POST', 'Submit');">Submit</button>
                                @endif
                            </form>
                        </div>
                    </div> <!-- end preview-->
                </div> <!-- end tab-content-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<script></script>
