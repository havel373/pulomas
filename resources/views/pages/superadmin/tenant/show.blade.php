<div id="content_list">
    <div class="content-page">
        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">Detail Tenant</h4>
                            <hr>
                            <div class="chart-content-bg">
                                <div class="row text-center">
                                    <div class="col-sm-5" style="text-align: left;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Email</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>{{ $data->user->email }}</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Nama Perusahaan / Instansi</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>{{ $data->nama_instansi }}</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Nomor Telepon Perusahaan</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>{{ $data->nomor_hp_instansi }}</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Nama Penanggungjawab</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>{{ $data->nama_penanggungjawab }}</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Nomor Telepon Penanggungjawab</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>{{ $data->nomor_hp_penanggungjawab }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5" style="text-align: left;">
                                        <div class="row">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3>Nomor KTP Penanggungjawab</h3>
                                                </div>
                                                <div class="col-md-12">
                                                    <h5>{{ $data->nomor_ktp_penanggungjawab }}</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h3>Alamat Penanggungjawab</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>{{ $data->alamat_penanggungjawab }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-info mt-4" onclick="load_list(1);">Kembali</button>
                            <div dir="ltr">
                                <div id="revenue-chart" class="apex-charts mt-3" data-colors="#727cf5,#0acf97"></div>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">Data Follow UP History</h4>
                            <button class="btn btn-info mt-3">+Create Data Follow UP History</button>
                            <hr>
                            <div class="chart-content-bg">
                                <div class="row text-center">
                                    <table class="table table-bordered table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <td>No</td>
                                                <td>Tanggal</td>
                                                <td>Marketing</td>
                                                <td>Channel</td>
                                                <td>Agenda</td>
                                                <td>Hasil</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @forelse()
                                                <tr>
                                                    <td>{{}}</td>
                                                    <td>{{}}</td>
                                                    <td>{{}}</td>
                                                    <td>{{}}</td>
                                                </tr>
                                            @empty
                                            @endforelse --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div dir="ltr">
                                <div id="revenue-chart" class="apex-charts mt-3" data-colors="#727cf5,#0acf97"></div>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>

            <div class="row">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">History Grading</h4>
                            <hr>
                            <table class="table table-striped table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal Berubah</th>
                                        <th>Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">Purchase History</h4>
                            <hr>
                            <table class="table table-striped table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal Order</th>
                                        <th>Keterangan Order</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>

        </div> <!-- container -->
    </div>
</div>
