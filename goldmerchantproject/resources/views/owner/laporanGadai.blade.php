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
                        <li class="active"><a href="#gadai" data-toggle="tab">Gadai</a>
                        </li>
                        <li><a href="#tebus" data-toggle="tab">Tebus</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>15-Sep-2017</td>
                                        <td>NG-150917-0001</td>
                                        <td>Budi</td>
                                        <td>Jatibarang</td>
                                        <td>1000000</td>
                                        <td>Gelang</td>
                                        <td>5</td>
                                        <td>5%</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="col-lg-12">
                                <div class="col-lg-7">
                                    
                                </div>
                                <div class="panel-heading col-lg-2 text-right">
                                    Total Peminjaman
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" name="stokLimit" value="">
                                </div>
                            </div>
                            <div class="row col-lg-12">
                                <div class="col-lg-6 text-left">
                                    <a href="graph.html" style="text-decoration: none"><button type="button" class="btn btn-success">Lihat Grafik</button></a>
                                    <button type="button" class="btn btn-primary" style="float: right;">Print</button>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tebus">
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
                                    <tr class="odd gradeX">
                                        <td>15-Sep-2017</td>
                                        <td>16-Sep-2017</td>
                                        <td>NG-150917-0001</td>
                                        <td>Budi</td>
                                        <td>Jatibarang</td>
                                        <td>1000000</td>
                                        <td>Gelang</td>
                                        <td>5</td>
                                        <td>5%</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="col-lg-12">
                                <div class="col-lg-7">
                                    
                                </div>
                                <div class="panel-heading col-lg-2 text-right">
                                    Total Tebusan
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" name="stokLimit" value="">
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