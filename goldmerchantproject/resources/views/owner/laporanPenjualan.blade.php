@include('owner.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Laporan Penjualan</h1>
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
                                                <th>Kode Nota</th>
                                                <th>Jenis</th>
                                                <th>Nama Jenis</th>
                                                <th>Berat (gram)</th>
                                                <th>Harga</th>
                                                <th>Sales</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>15-Sep-2017</td>
                                                <td>FJ-150917-0001</td>
                                                <td>Gelang</td>
                                                <td>Rantai Variasi</td>
                                                <td>1.050</td>
                                                <td>200000</td>
                                                <td>Lia</td>
                                                <td><button type="button" class="btn btn-outline btn-info" data-toggle="modal" data-target="#myModal">Detail Nota</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="row col-lg-12">
                                        <div class="col-lg-6 text-left">
                                            <a href="GrafikPenjualan.html" style="text-decoration: none"><button type="button" class="btn btn-success">Lihat Grafik</button></a>
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
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Nota Penjualan</h4>
                            </div>
                            <div class="modal-body">
                                <div class="panel panel-primary col-lg-12">
                                    <br>
                                    <div class="panel-body text-center">
                                        <img alt="icon" src="../images/image.jpg" width="50%" height="50%" />
                                    </div>
                                </div>
                                <table class="table table-striped col-lg-12">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Kode Nota</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" name="stokLimit" value="FJ-170917-0001" disabled></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Tanggal</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" name="stokLimit" value="15 September 2017" disabled></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Nama Customer</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" name="stokLimit" value="Sarah" disabled></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Alamat Customer</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" name="stokLimit" value="Kebogadung" disabled></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Kode Barang</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" name="stokLimit" value="GL- 001" disabled></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Jenis</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" name="stokLimit" value="Gelang" disabled></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Nama Jenis</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" name="stokLimit" value="Rantai Variasi" disabled></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Berat (gram)</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" name="stokLimit" value="1.050" disabled></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Harga</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" name="stokLimit" value="200000" disabled></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Supplier</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" name="stokLimit" value="UBS" disabled></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Kadar</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" name="stokLimit" value="375" disabled></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Ongkos</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" name="stokLimit" value="0" disabled></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Total Harga</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" name="stokLimit" value="185000" disabled></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Sales</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" name="stokLimit" value="Lia" disabled></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
@include('owner.layouts.footer')