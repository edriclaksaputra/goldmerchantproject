@include('owner.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Laporan Gadai & Tebus</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="/laporangadai">Gadai</a>
                        </li>
                        <li><a href="/laporantebus">Tebus</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content col-lg-11">
                        <div class="tab-pane fade in active" id="gadai">
                            <h4>Laporan Gadai</h4>
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Kode Gadai</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Pinjam</th>
                                        <th>Jaminan</th>
                                        <th>Berat (gram)</th>
                                        <th>Bunga</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listgadai as $detaillistgadai)
                                    <tr class="odd gradeX">
                                        <td>{{$detaillistgadai->tanggalgadai}}</td>
                                        <td>{{$detaillistgadai->id}}</td>
                                        <td>{{$detaillistgadai->namapenggadai}}</td>
                                        <td>{{$detaillistgadai->alamat}}</td>
                                        <td>Rp {{ number_format($detaillistgadai->totalpinjam, 2)}}</td>
                                        <td>{{$detaillistgadai->namabarang}}</td>
                                        <td>{{$detaillistgadai->berat}}</td>
                                        <td>{{$detaillistgadai->bunga}} %</td>
                                        @if($detaillistgadai->status == 'lunas')
                                        <td style="color: #3CB371">Lunas</td>
                                        @else
                                        <td style="color: #FF6347">Belum Lunas</td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="col-lg-12">
                                <div class="col-lg-7">
                                    
                                </div>
                                <div class="panel-heading col-lg-2 text-right">
                                    Total Peminjaman
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" name="totalpinjam" value="Rp {{number_format($pinjamtotal, 2)}}" readonly>
                                </div>
                            </div>
                            <div class="row col-lg-12">
                                <div class="col-lg-6 text-left">
                                    <a href="graph.html" style="text-decoration: none"><button type="button" class="btn btn-success">Lihat Grafik</button></a>
                                    <button type="button" class="btn btn-primary" style="float: right;">Print</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
@include('owner.layouts.footer')