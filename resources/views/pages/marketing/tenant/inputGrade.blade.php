<div class="content-page">
    <div class="content">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Set Grade</h4>
                    <form class="needs-validation" id="form_submit">
                        <div class="col-md mb-3">
                        <div class="col-md mb-3">
                            <label class="form-label" for="validationTooltip01">Grade<small
                                    class="text-danger"><i>*Required</i></small></label>
                            <select class="form-control" name="grade_tenant" id="grade_tenant">
                                <option value="">-- Pilih Grade Tenant --</option>
                                @foreach($grade as $gr)
                                    <option value="{{$gr->id}}" >{{$gr->kode}}</option>
                                @endforeach
                            </select>
                        </div>
                        <a href="javascript:;" onclick="load_list(1);" class="btn btn-info">Cancel</a>
                            <button class="btn btn-primary" id="tombol_submit"
                                onclick="handle_save('#tombol_submit', '#form_submit', '{{ route('data-tenant.create.grade') }}', 'POST', 'Submit');">Submit</button>
                    </form>
                </div>
            </div> <!-- end preview-->
        </div> <!-- end tab-content-->
    </div> <!-- end card-body-->
</div> <!-- end card-->
<script>
    $(document).ready(function() {
        $('#status_tenant').select2({
            placeholder: 'Pilih Status Tenant',
            allowClear: true,
            multiple: true
        });
    });
</script>