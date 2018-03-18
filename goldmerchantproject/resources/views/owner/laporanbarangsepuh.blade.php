@include('owner.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Laporan Barang</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Laporan Barang
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li><a href="laporanbarang.dalam">Barang Dalam</a>
                                    </li>
                                    <li><a href="laporanbarang.baki">Barang Baki</a>
                                    </li>
                                    <li class="active"><a href="laporanbarang.sepuh">Barang Sepuh</a>
                                    </li>
                                    <li><a href="laporanbarang.rongsok">Barang Rongsok</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active">
                                        <h4>Barang Sepuh</h4>
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Tanggal Masuk</th>
                                                    <th>Kode Barang</th>
                                                    <th>Jenis</th>
                                                    <th>Berat (gram)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>15-Sep-2017</td>
                                                    <td>GL-001</td>
                                                    <td>Gelang</td>
                                                    <td>1.050</td>
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>12-Sep-2017</td>
                                                    <td>GL-002</td>
                                                    <td>Kalung</td>
                                                    <td>3</td>
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>13-Sep-2017</td>
                                                    <td>GL-003</td>
                                                    <td>Cincin</td>
                                                    <td>2.035</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="col-lg-12">
                                            <div class="col-lg-7">
                                                
                                            </div>
                                            <div class="panel-heading col-lg-2 text-right">
                                                Total Berat
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="text" name="stokLimit" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
@include('owner.layouts.footer')