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
                                List All of Data Baki
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="panel-heading col-lg-4">
                                                            Tanggal
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="stokLimit" value="26-Sep-2017">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="panel-heading col-sm-4">
                                                            Baki
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="stokLimit" value="02">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="panel-heading col-sm-4">
                                                            Barcode
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="stokLimit" value="0011010100100110">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="panel-heading col-lg-5">
                                                            Stok Limit :
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <input type="text" name="stokLimit" value="35">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="panel-heading col-lg-5">
                                                            Barang Terjual :
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <input type="text" name="stokLimit" value="15">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="panel-heading col-lg-5">
                                                            Barang yang Harus Diisi :
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <input type="text" name="stokLimit" value="20">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-4 text-center">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <button type="button" class="btn btn-success btn-block">Proceed</button>
                                            </div>
                                            <div class="col-lg-4 text-center">
                                            </div>
                                            <br/><br/><br/>
                                        </div>
                                        <thead>
                                            <tr>
                                                <th>Tanggal Keluar</th>
                                                <th>Kode Barang</th>
                                                <th>Jenis</th>
                                                <th>Nama</th>
                                                <th>Berat</th>
                                                <th>Cancel</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>03-Sep-2017</td>
                                                <td>GL-001</td>
                                                <td>Win 95+</td>
                                                <td class="center">4</td>
                                                <td class="center">X</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="even gradeC">
                                                <td>03-Sep-2017</td>
                                                <td>GL-001</td>
                                                <td>Win 95+</td>
                                                <td class="center">5</td>
                                                <td class="center">C</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>03-Sep-2017</td>
                                                <td>GL-001</td>
                                                <td>Win 95+</td>
                                                <td class="center">5.5</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="even gradeA">
                                                <td>03-Sep-2017</td>
                                                <td>KL-001</td>
                                                <td>Win 98+</td>
                                                <td class="center">6</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>03-Sep-2017</td>
                                                <td>Internet Explorer 7</td>
                                                <td>Win XP SP2+</td>
                                                <td class="center">7</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="even gradeA">
                                                <td>03-Sep-2017</td>
                                                <td>AOL browser (AOL desktop)</td>
                                                <td>Win XP</td>
                                                <td class="center">6</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Firefox 1.0</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.7</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Firefox 1.5</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Firefox 2.0</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Firefox 3.0</td>
                                                <td>Win 2k+ / OSX.3+</td>
                                                <td class="center">1.9</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Camino 1.0</td>
                                                <td>OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Camino 1.5</td>
                                                <td>OSX.3+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Netscape 7.2</td>
                                                <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                <td class="center">1.7</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Netscape Browser 8</td>
                                                <td>Win 98SE+</td>
                                                <td class="center">1.7</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Netscape Navigator 9</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Mozilla 1.0</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Mozilla 1.1</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.1</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Mozilla 1.2</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.2</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Mozilla 1.3</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.3</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Mozilla 1.4</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.4</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Mozilla 1.5</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.5</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Mozilla 1.6</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.6</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Mozilla 1.7</td>
                                                <td>Win 98+ / OSX.1+</td>
                                                <td class="center">1.7</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Mozilla 1.8</td>
                                                <td>Win 98+ / OSX.1+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Seamonkey 1.1</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>12-Aug-2017</td>
                                                <td>Epiphany 2.20</td>
                                                <td>Gnome</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>24-Nov-2017</td>
                                                <td>Safari 1.2</td>
                                                <td>OSX.3</td>
                                                <td class="center">125.5</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>24-Nov-2017</td>
                                                <td>Safari 1.3</td>
                                                <td>OSX.3</td>
                                                <td class="center">312.8</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>24-Nov-2017</td>
                                                <td>Safari 2.0</td>
                                                <td>OSX.4+</td>
                                                <td class="center">419.3</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>24-Nov-2017</td>
                                                <td>Safari 3.0</td>
                                                <td>OSX.4+</td>
                                                <td class="center">522.1</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>8-Dec-2017</td>
                                                <td>Internet Explorer 5.2</td>
                                                <td>Mac OS 8-X</td>
                                                <td class="center">1</td>
                                                <td class="center">C</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>9-Dec-2017</td>
                                                <td>NetFront 3.1</td>
                                                <td>Embedded devices</td>
                                                <td class="center">-</td>
                                                <td class="center">C</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>9-Dec-2017</td>
                                                <td>NetFront 3.4</td>
                                                <td>Embedded devices</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>9-Dec-2017</td>
                                                <td>Dillo 0.8</td>
                                                <td>Embedded devices</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>9-Dec-2017</td>
                                                <td>Links</td>
                                                <td>Text only</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>9-Dec-2017</td>
                                                <td>Lynx</td>
                                                <td>Text only</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>9-Dec-2017</td>
                                                <td>IE Mobile</td>
                                                <td>Windows Mobile 6</td>
                                                <td class="center">-</td>
                                                <td class="center">C</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>9-Dec-2017</td>
                                                <td>PSP browser</td>
                                                <td>PSP</td>
                                                <td class="center">-</td>
                                                <td class="center">C</td>
                                                <td class="center"><button type="button" class="btn btn-danger">Cancel</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br><br>
                                    <div class="col-lg-12 text-right">
                                    <div class="col-lg-10"></div>
                                        <button type="button" class="btn btn-info col-lg-2">Submit</button>
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
@include('admin.layouts.footer')