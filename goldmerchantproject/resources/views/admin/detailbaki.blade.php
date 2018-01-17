@include('admin.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Baki</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                List Data Baki
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Tanggal Keluar</th>
                                                <th>Kode Barang</th>
                                                <th>Jenis</th>
                                                <th>Nama</th>
                                                <th>Berat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="gradeX">
                                                <td>9-Dec-2017</td>
                                                <td>Dillo 0.8</td>
                                                <td>Embedded devices</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>9-Dec-2017</td>
                                                <td>Links</td>
                                                <td>Text only</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>9-Dec-2017</td>
                                                <td>Lynx</td>
                                                <td>Text only</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>9-Dec-2017</td>
                                                <td>IE Mobile</td>
                                                <td>Windows Mobile 6</td>
                                                <td class="center">-</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>9-Dec-2017</td>
                                                <td>PSP browser</td>
                                                <td>PSP</td>
                                                <td class="center">-</td>
                                                <td class="center">C</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="panel-heading col-sm-5">
                                        Stok Limit :
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="stokLimit" value="35" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="panel-heading col-sm-5">
                                        Barang Terjual :
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="stokLimit" value="15" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="panel-heading col-sm-5">
                                        Barang yang Harus Diisi :
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="stokLimit" value="20" disabled>
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
@include('admin.layouts.footer')