<div id="content_list">
    <div class="content-page">
        <!-- Start Content-->
        <div class="container-fluid">
            
            <div class="row mt-5">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">Detail Ruang</h4>
                            <hr>
                            <div class="chart-content-bg">
                                <div class="row text-center">
                                    <div class="col-sm-5" style="text-align: left;">
                                      <div class="row">
                                            <div class="col-md-12">
                                                <h3>Gedung</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>{{$data->gedung->nama_gedung}}</h5>
                                            </div>
                                      </div>
                                      <div class="row">
                                            <div class="col-md-12">
                                                <h3>Kode Ruang</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>{{$data->kode_ruang}}</h5>
                                            </div>
                                      </div>
                                      <div class="row">
                                            <div class="col-md-12">
                                                <h3>Lantai</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>{{$data->lantai->nama_lantai}}</h5>
                                            </div>
                                      </div>
                                      <div class="row">
                                            <div class="col-md-12">
                                                <h3>Nama Ruang</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>{{$data->nama_ruang}}</h5>
                                            </div>
                                      </div>
                                      <div class="row">
                                            <div class="col-md-12">
                                                <h3>Luas</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>{{$data->luas}}</h5>
                                            </div>
                                      </div>
                                      <div class="row">
                                            <div class="col-md-12">
                                                <h3>Deskripsi</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>{{$data->deskripsi}}</h5>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-5" style="text-align: left;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Harga Sewa Ruangan</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Rp {{number_format($data->harga_bulan)}}m<sup>2</sup>Bulan</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Harga Overtime (Dibawah 4 Jam)</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Rp {{number_format($data->overtime_dibawah_4jam)}} Jam/m<sup>2</sup></h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Total Harga Overtime (Dibawah 4 Jam)</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Rp {{number_format($data->total_overtime_dibawah_4jam)}} Jam/m<sup>2</sup></h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Harga Overtime (Diatas 4 Jam)</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Rp {{number_format($data->overtime_diatas_4jam)}} Jam/m<sup>2</sup></h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Total Harga Overtime (Diatas 4 Jam)</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Rp {{number_format($data->total_overtime_diatas_4jam)}} Jam/m<sup>2</sup></h5>
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
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">Foto Ruang</h4>
                            <hr>
                            <div class="chart-content-bg">
                                <div class="row text-center">
                                    <div class="col-sm-5" style="text-align: left;">
                                        <div class="row">
                                            <img src="{{$data->image}}" alt="" class="img-responsive img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div dir="ltr">
                                <div id="revenue-chart" class="apex-charts mt-3" data-colors="#727cf5,#0acf97"></div>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>

            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">History Luas Ruangan</h4>
                            <hr>
                            <div class="chart-content-bg">
                                <div class="row text-center">
                                  <table class="table table-bordered table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <td>#</td>
                                            <td>Luas</td>
                                            <td>Customer</td>
                                            <td>Tanggal</td>
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
                                        <tr>
                                            <td class="text-left"><i>Tidak Ada History</i></td>
                                        </tr>
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

            <div class="row mt-5">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">Daftar Harga Ruang</h4>
                            <hr>
                            <table class="table table-striped table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Satuan</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1 Hari</td>
                                        <td id="hari">{{number_format($data->harga_hari)}}</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>1 Minggu</td>
                                        <td id="minggu">{{number_format($data->harga_hari * 7)}}</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>1 Bulan</td>
                                        <td id="1bulan">{{number_format($data->harga_bulan)}}</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>2 Bulan</td>
                                        <td id="2bulan">{{number_format($data->harga_bulan * 2)}}</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>3 Bulan</td>
                                        <td id="3bulan">{{number_format($data->harga_bulan * 3)}}</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>4 Bulan</td>
                                        <td id="4bulan">{{number_format($data->harga_bulan * 4)}}</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>5 Bulan</td>
                                        <td id="5bulan">{{number_format($data->harga_bulan * 5)}}</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>6 Bulan</td>
                                        <td id="6bulan">{{number_format($data->harga_bulan * 6)}}</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>7 Bulan</td>
                                        <td id="7bulan">{{number_format($data->harga_bulan * 7)}}</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>8 Bulan</td>
                                        <td id="8bulan">{{number_format($data->harga_bulan * 8)}}</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>9 Bulan</td>
                                        <td id="9bulan">{{number_format($data->harga_bulan * 9)}}</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>10 Bulan</td>
                                        <td id="10bulan">{{number_format($data->harga_bulan * 10)}}</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>11 Bulan</td>
                                        <td id="11bulan">{{number_format($data->harga_bulan * 11)}}</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>1 Tahun </td>
                                        <td id="tahun">{{number_format($data->harga_bulan * 12)}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">Daftar Fasilitas Ruang</h4>
                            <hr>
                            <table class="table table-striped table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Fasilitas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse(json_decode($data->fasilitas) as $i => $item)
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{$item}}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    @endforelse
                                </tbody>
                            </table>
                            <div dir="ltr">
                                <div id="revenue-chart" class="apex-charts mt-3" data-colors="#727cf5,#0acf97"></div>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>

        </div> <!-- container -->
    </div>
</div>
