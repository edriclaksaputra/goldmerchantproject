@include('admin.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Input Barang Baru</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        @if (session('alert'))
                            <div class="alert alert-success">
                                <h4> {{ session('alert') }} </h4>
                            </div>
                        @endif
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <!-- /.panel-heading -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" action="/inputbaru.insertbarangbaru" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="col-lg-4">
                                            <br>
                                            <div class="panel panel-primary col-lg-12">
                                                <br>
                                                <div class="panel-heading text-center">
                                                    Gambar Terlampir
                                                </div>
                                                <div class="panel-body text-center">
                                                    <img id="uploadphoto" name="uploadphoto" src="#" alt="Masukan Gambar" width="50%" height="50%"/>
                                                </div>
                                                <div class="panel-footer">
                                                    <div class="form-group">
                                                        <label>Ambil Gambar</label>
                                                        <input type='file' onchange="readURL(this);"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-12 text-center">
                                                <img alt="barcode" src="../images/barcode.png" width="50%" height="50%"/>
                                            </div> -->
                                        </div>
                                        <div class="col-lg-8">
                                            <br>
                                            <!-- <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-2">
                                                        Kode Barang
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="kodebarang" value="00101011100101">
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-2 {{ $errors->has('jenisbarang') ? ' has-error' : '' }}">
                                                        Jenis
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="jenisbarang">
                                                            <option>Gelang</option>
                                                            <option selected>Kalung</option>
                                                            <option>Cincin</option>
                                                            <option>Anting</option>
                                                            <option>Gigi Palsu</option>
                                                        </select>
                                                    </div>
                                                    <div class="panel-heading col-sm-1 {{ $errors->has('ukuranbarang') ? ' has-error' : '' }}">
                                                        Ukuran
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="ukuranbarang" required autofocus>
                                                        @if ($errors->has('ukuranbarang'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('ukuranbarang') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-2 {{ $errors->has('namabarang') ? ' has-error' : '' }}">
                                                        Nama Barang
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="namabarang" required autofocus>
                                                        @if ($errors->has('namabarang'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('namabarang') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-2 {{ $errors->has('beratasli') ? ' has-error' : '' }}">
                                                        Berat Asli (gram)
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="beratasli" required autofocus>
                                                        @if ($errors->has('beratasli'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('beratasli') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="panel-heading col-sm-2 text-right {{ $errors->has('beratpembulatan') ? ' has-error' : '' }}">
                                                        Berat RU (gram)
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="beratpembulatan" required autofocus>
                                                        @if ($errors->has('beratpembulatan'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('beratpembulatan') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-2 {{ $errors->has('kadar') ? ' has-error' : '' }}">
                                                        Kadar
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <input type="text" name="kadar" required autofocus>
                                                        @if ($errors->has('kadar'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('kadar') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-2 {{ $errors->has('namasupplier') ? ' has-error' : '' }}">
                                                        Supplier
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <input type="text" name="namasupplier" required autofocus>
                                                        @if ($errors->has('namasupplier'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('namasupplier') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-2 {{ $errors->has('hargajual') ? ' has-error' : '' }}">
                                                        Harga Jual (gram)
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <input type="text" name="hargajual" required autofocus>
                                                        @if ($errors->has('hargajual'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('hargajual') }}</strong>
                                                            </span>
                                                        @endif
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
                                                                <input type="checkbox" name="kondisi[]" value="Baru" checked>Baru
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="kondisi[]" value="Baru Sepuh">Baru Sepuh
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="kondisi[]" value="Pekok kecil">Pekok kecil
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="kondisi[]" value="Pekok parah">Pekok parah
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="kondisi[]" value="Bengkok">Bengkok
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="kondisi[]" value="Rusak">Rusak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-2 {{ $errors->has('tanggalmasuk') ? ' has-error' : '' }}">
                                                        Tanggal Masuk
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <input type="text" name="tanggalmasuk" id="todaydate" required autofocus>
                                                        @if ($errors->has('tanggalmasuk'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('tanggalmasuk') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-2 {{ $errors->has('baki') ? ' has-error' : '' }}">
                                                        Baki
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select class="form-control" name="baki" required autofocus>
                                                            <option selected>Dalam</option>
                                                            <option>Luar</option>
                                                        </select>
                                                        @if ($errors->has('baki'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('baki') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-2">
                                                        Keterangan
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <textarea name="keterangan" rows="5" cols="35"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="row">
                                                <div class="col-lg-12 text-right">
                                                    <div class="panel-heading col-lg-2">
                                                        <button type="Submit" class="btn btn-success">Submit and Print Barcode</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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

<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#uploadphoto')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<script>
    var d = new Date();
    document.getElementById("todaydate").value = d.toDateString();
</script>