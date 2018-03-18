@include('owner.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Laporan Keuangan</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                List Laporan
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Transaksi</th>
                                                <th>Nilai Transaksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>15-Sep-2017</td>
                                                <td>NG-150917-0001</td>
                                                <td>-100000</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>15-Sep-2017</td>
                                                <td>FJ-150917-0001</td>
                                                <td>+50000</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>16-Sep-2017</td>
                                                <td>NG-150917-0001</td>
                                                <td>+105000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="col-lg-12">
                                        <div class="col-lg-6">
                                            
                                        </div>
                                        <div class="panel-heading col-lg-2 text-right">
                                            Total Kas
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="text" name="stokLimit" value="">
                                        </div>
                                    </div>
                                    <div class="row col-lg-12">
                                        <div class="col-lg-6 text-left">
                                            <a href="grafikKeuangan.html" style="text-decoration: none"><button type="button" class="btn btn-success">Lihat Grafik</button></a>
                                            <button type="button" class="btn btn-primary" style="float: right;">Print</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.table-responsive -->
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