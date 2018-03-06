@include('sales.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Penjualan</h1>
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
                        @if (session('error'))
                            <div class="alert alert-danger">
                                <h4> {{ session('error') }} </h4>
                            </div>
                        @endif
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Input Barcode Barang
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <form action="/detailbarangpenjualan" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="panel-heading col-sm-2">
                                    Barcode Barang :
                                    </div>
                                    <div class="col-sm-4 text-left">
                                        <input type="text" name="barcode" required autofocus size="35" >
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="Submit" class="btn btn-success">Proses</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                @if($databarang != null)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3> Detail Nota </h3>
                            </div>
                            <div class="panel-body">
                                <form action="/inputpenjualan" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="col-lg-4">
                                        <br>
                                        <div class="panel panel-primary col-lg-12">
                                            <br>
                                            <div class="panel-heading text-center">
                                                Gambar Terlampir
                                            </div>
                                            <div class="panel-body text-center">
                                                <img alt="gambar barang" src="images/image.jpg" width="50%" height="50%" />
                                                <p>*gambar ilustrasi</p>
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
                                                <div class="panel-heading col-lg-2">
                                                    Tanggal
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="tanggalpenjualan" id="todaydate" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Nama Customer
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="namacustomer" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Alamat Customer
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="alamatcustomer" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Barcode Barang
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="barcodebarang" value="{{$databarang->id}}" required autofocus readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-sm-2">
                                                    Jenis
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" name="jenisbarang" value="{{$databarang->jenis}}" required autofocus readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-sm-2">
                                                    Nama Jenis
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" name="namajenis" value="{{$databarang->namajenis}}" required autofocus readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-sm-2">
                                                    Berat (gram)
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" id="beratasli" name="beratasli" value="{{$databarang->beratasli}}" required autofocus readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-sm-2">
                                                    Harga
                                                </div>
                                                <div class="col-sm-1">
                                                    <input type="text" id="hargagram" name="hargagram" value="{{$databarang->hargagram}}" required autofocus readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Supplier
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="supplier" value="{{$databarang->supplier}}" required autofocus readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Kadar
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="kadar" value="{{$databarang->kadar}}" required autofocus readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Ongkos
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" id="ongkos" name="ongkos" value="0" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Total Harga
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="totalharga" id="totalharga" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Sales
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="namasales"  required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-lg-12 text-right">
                                                <div class="panel-heading col-lg-2">
                                                    <button type="Submit" class="btn btn-success">Submit and Print</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
                @endif
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
@include('sales.layouts.footer')
<script>
    var berat = document.getElementById("beratasli").value;
    var harga = document.getElementById("hargagram").value;
    document.getElementById("totalharga").value = (berat*harga);

</script>
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
<script>
    function generatenota() {
    }     
</script>