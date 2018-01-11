@include('admin.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Input Barang Baru</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <!-- /.panel-heading -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-4">
                                        <br>
                                        <div class="panel panel-primary col-lg-12">
                                            <br>
                                            <div class="panel-heading text-center">
                                                Gambar Terlampir
                                            </div>
                                            <div class="panel-body text-center">
                                                <img alt="icon" src="../images/image.jpg" width="50%" height="50%" />
                                            </div>
                                            <div class="panel-footer">
                                                <div class="form-group">
                                                    <label>Ambil Gambar</label>
                                                    <input type="file">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <img alt="barcode" src="../images/barcode.png" width="50%" height="50%"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-sm-2">
                                                    Kode Barang
                                                </div>
                                                <div class="col-sm-1">
                                                    <input type="text" name="stokLimit" value="26-Sep-2017">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-sm-2">
                                                    Jenis
                                                </div>
                                                <div class="col-sm-3">
                                                    <select class="form-control">
                                                        <option>Gelang</option>
                                                        <option selected>Kalung</option>
                                                        <option>Cincin</option>
                                                        <option>Anting</option>
                                                        <option>Gigi Palsu</option>
                                                    </select>
                                                </div>
                                                <div class="panel-heading col-sm-1">
                                                    Ukuran
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" name="stokLimit" value="22">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-sm-2">
                                                    Nama Barang
                                                </div>
                                                <div class="col-sm-1">
                                                    <input type="text" name="stokLimit" value="Rantai Variasi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-sm-2">
                                                    Berat Asli (gram)
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" name="stokLimit" value="1.047">
                                                </div>
                                                <div class="panel-heading col-sm-2 text-right">
                                                    Berat RU (gram)
                                                </div>
                                                <div class="col-sm-1">
                                                    <input type="text" name="stokLimit" value="1.047">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Kadar
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="stokLimit" value="375">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Supplier
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="stokLimit" value="UBS">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Harga Jual
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="stokLimit" value="150000">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Kondisi
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="" checked>Baru
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="">Baru Sepuh
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="">Pekok 1
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="">Pekok 2
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="">Bengkok
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Tanggal Masuk
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="stokLimit" value="27-Sep-2017">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Baki
                                                </div>
                                                <div class="col-lg-2">
                                                    <select class="form-control">
                                                        <option selected>Dalam</option>
                                                        <option>Luar</option>
                                                        <option>Tengah</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br><br>
                                        <div class="row">
                                            <div class="col-lg-12 text-right">
                                                <div class="panel-heading col-lg-2">
                                                    <button type="button" class="btn btn-success">Submit and Print Barcode</button>
                                                </div>
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
@include('admin.layouts.footer')