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
                        <li><a href="/laporangadai">Gadai</a>
                        </li>
                        <li class="active"><a href="/laporantebus">Tebus</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content col-lg-11">
                        <div class="tab-pane fade in active" id="tebus">
                            <h4>Laporan Tebus</h4>
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Tanggal Gadai</th>
                                        <th>Tanggal Tebus</th>
                                        <th>Kode Gadai</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Pinjam</th>
                                        <th>Jaminan</th>
                                        <th>Berat (gram)</th>
                                        <th>Bunga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listtebusan as $detaillisttebusan)
                                    <tr class="odd gradeX">
                                        <td>{{$detaillisttebusan->tanggalgadai}}</td>
                                        <td>{{$detaillisttebusan->tanggaltebus}}</td>
                                        <td>{{$detaillisttebusan->id}}</td>
                                        <td>{{$detaillisttebusan->namapenggadai}}</td>
                                        <td>{{$detaillisttebusan->alamat}}</td>
                                        <td>Rp {{ number_format($detaillisttebusan->totalpinjam, 2)}}</td>
                                        <td>{{$detaillisttebusan->namabarang}}</td>
                                        <td>{{$detaillisttebusan->berat}}</td>
                                        <td>{{$detaillisttebusan->bunga}} %</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="col-lg-12">
                                <div class="col-lg-7">
                                    
                                </div>
                                <div class="panel-heading col-lg-2 text-right">
                                    Total Tebusan
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" name="tebustotal" value="Rp {{number_format($tebustotal, 2)}}">
                                </div>
                            </div>
                            <div class="row col-lg-12">
                                <div class="col-lg-6 text-left">
                                    <a href="grafikGadai.html" style="text-decoration: none"><button type="button" class="btn btn-success">Lihat Grafik</button></a>
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