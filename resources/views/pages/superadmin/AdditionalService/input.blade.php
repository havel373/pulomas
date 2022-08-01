<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Additional Service</h4>
                    <form class="needs-validation" id="form_submit">
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Nama Service<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <input type="text" class="form-control" name="nama" id="nama"
                                value="{{ $data->nama }}">
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">PIC<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <select class="form-control" name="pic" id="pic" required>
                                @foreach ($marketings as $marketing)
                                    <option value="{{ $marketing->id }}">{{ $marketing->user->nama }}</option>
                                @endforeach
                                @foreach ($tekniks as $teknik)
                                    <option value="{{ $teknik->id }}">{{ $teknik->user->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <label class="form-label" for="validationTooltip01">Harga<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" name="satuan" id="validationTooltip022"
                                    placeholder="Satuan Additional Service" value="{{$data->satuan}}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="input-group" id="input-group1">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" class="form-control" id="validationTooltip02312" placeholder=""
                                        value="{{$data->id ? $data->harga : 0}}" name="harga">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="validationTooltip01">Jenis Pembayaran<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <select class="form-control" name="jenis_pembayaran" id="jenis_pembayaran">
                                <option value="">Pilih Status Jangka WaktuJ</option>
                                <option value="debit" {{$data->jenis_pembayaran == 'debit' ? 'selected' : ''}}>Debit</option>
                                <option value="kredit" {{$data->jenis_pembayaran == 'kredit' ? 'selected' : ''}}>Kredit</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="validationTooltip01">Jangka Waktu<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <select class="form-control" name="jangka" id="jangka">
                                <option value="">Pilih Status Jangka WaktuJ</option>
                                <option value="langsung" {{$data->jangka == 'langsung' ? 'selected' : ''}}>1x Pembayaran</option>
                                <option value="berjangka" {{$data->jangka == 'berjangka' ? 'selected' : ''}}>Berjangka</option>
                            </select>
                        </div>
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Foto Additional Service<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <input type="file" class="form-control" id="validationTooltip02" placeholder=""
                                value="" name="foto">
                            <div class="invalid-tooltip">
                            </div>
                            <div class="col-md mb-3">
                                <label class="form-label" for="validationTooltip01">Deskripsi<small
                                        class="text-danger"><i>*Required</i></small></label>
                                <textarea name="deskripsi" id="" class="form-control">{{$data->deskripsi}}</textarea>
                            </div>
                        </div>
                        <a href="javascript:;" onclick="load_list(1);" class="btn btn-info">Cancel</a>
                        @if ($data->id)
                            <button class="btn btn-primary" id="tombol_submit"
                                onclick="handle_upload('#tombol_submit', '#form_submit', '{{ route('additional-service.update', $data->id) }}', 'PATCH', 'Submit');">Submit</button>
                        @else
                            <button class="btn btn-primary" id="tombol_submit"
                                onclick="handle_upload('#tombol_submit', '#form_submit', '{{ route('additional-service.store') }}', 'POST', 'Submit');">Submit</button>
                        @endif
                    </form>
                </div>
            </div> <!-- end preview-->
        </div> <!-- end tab-content-->
    </div> <!-- end card-body-->
</div> <!-- end card-->
<script>
    ribuan('validationTooltip02312');
</script>
