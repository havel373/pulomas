<x-Office-Layout title="Standmeter">
    <div id="content_list">
        <div class="content-page">
            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <!-- <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Data Tables</li>
                                    </ol>
                                </div> -->
                            {{-- <h4 class="page-title">Filter Bulan Standmeter</h4> --}}
                        </div>
                    </div>
                </div> <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="basic-datatable-preview">
                                       
                                    </div> <!-- end preview-->


                                </div> <!-- end tab-content-->

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div> <!-- end row-->

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <!-- <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Data Tables</li>
                                    </ol>
                                </div> -->
                            <h4 class="page-title">Data Standmeter</h4>
                        </div>
                    </div>
                </div> <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <!-- <button type="button" href="/superadmin" class="btn btn-primary">+ Create Gedung</button> -->
                                        <a href="javascript:;" onclick="load_input('{{route('standmeter.create')}}');" class="btn btn-primary">+ Create Standmeter</a>
                                    </li>
                                </ul> <!-- end nav-->

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="basic-datatable-preview">
                                        <div id="list_result"></div>
                                    </div> <!-- end preview-->


                                </div> <!-- end tab-content-->

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div> <!-- end row-->
            </div> <!-- container -->
        </div>
    </div>
    <div id="content_input"></div>
    @section('custom_js')
        <script>
            load_list(1);
        </script>
    @endsection
</x-Office-Layout>