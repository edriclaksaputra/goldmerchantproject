@include('sales.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cek Barang</h1>
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
                                <form action="/salesdetailbarang" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="panel-heading col-sm-2">
                                    Barcode Barang :
                                    </div>
                                    <div class="col-sm-4 text-left">
                                        <input type="password" name="barcode" required autofocus size="35" >
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
                                <h4> Detail Barang </h4>
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
                                                <img alt="gambar barang" src="{{$databarang->foto}}" width="100%" height="100%" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <br>
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
                                                    <input type="text" name="hargagram" value="Rp {{number_format($databarang->hargagram,2,'.',',')}}" required autofocus readonly>
                                                    <input type="hidden" id="hargagram" value="{{$databarang->hargagram}}">
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
                                                    Stok
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="stok" value="{{$databarang->stok}}" required autofocus readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Total Harga
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="totalharga" id="totalharga" required autofocus readonly>
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
    var num = berat*harga.toString();
    document.getElementById("totalharga").value = 'Rp '+(num).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'); 

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