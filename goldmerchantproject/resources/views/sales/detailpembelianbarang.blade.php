@include('sales.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nota Pembelian</h1>
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
                                    <form action="inputdatapembelian" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        @if($detailPenjualan != null)
                                        <div class="col-lg-4">
                                            <br>
                                            <div class="panel panel-primary col-lg-12">
                                                <br>
                                                <div class="panel-heading text-center">
                                                    Gambar Barang
                                                </div>
                                                <div class="panel-body text-center">
                                                    <img alt="icon" src="../images/image.jpg" width="50%" height="50%" />
                                                    <p>*gambar pembanding</p>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-lg-4"></div>
                                        @endif
                                        <div class="col-lg-8">
                                            <br>
                                            @if($detailPenjualan != null)
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Barcode Penjualan
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="idpenjualan" readonly required autofocus value={{$detailPenjualan->id}}>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                                <input type="hidden" name="idpenjualan" value="">
                                            @endif
                                            @if($detailPenjualan != null)
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-3">
                                                        Tanggal Penjualan
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <input type="text" name="tanggalPenjualan" required readonly autofocus value={{$detailPenjualan->tanggal}}>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-3">
                                                        Nama Customer
                                                    </div>
                                                    <div class="col-lg-1">
                                                        @if($detailPenjualan != null)
                                                        <input type="text" name="namaPenjual" required readonly autofocus value={{$detailPenjualan->nama}}>
                                                        @else
                                                        <input type="text" name="namaPenjual" required autofocus>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-3">
                                                        Alamat Customer
                                                    </div>
                                                    <div class="col-lg-1">
                                                        @if($detailPenjualan != null)
                                                        <input type="text" name="alamatPenjual" required readonly autofocus value={{$detailPenjualan->alamat}}>
                                                        @else
                                                        <input type="text" name="alamatPenjual" required autofocus>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            @if($detailPenjualan != null)
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-3">
                                                        Kode Barang
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <input type="text" name="stokLimit" required readonly autofocus value={{$detailPenjualan->barangs_id}}>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Jenis
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="jenisbarang">
                                                            @if($detailPenjualan != null)
                                                            <option selected readonly>{{$detailPenjualan->barangs->jenis}}</option>
                                                            @endif
                                                            <option>Gelang</option>
                                                            <option>Kalung</option>
                                                            <option>Cincin</option>
                                                            <option>Anting</option>
                                                            <option>Gigi Palsu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Nama Jenis
                                                    </div>
                                                    <div class="col-sm-2">
                                                        @if($detailPenjualan != null)
                                                        <input type="text" name="namajenis" required readonly autofocus value={{$detailPenjualan->barangs->namajenis}}>
                                                        @else
                                                        <input type="text" name="namajenis" required autofocus>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-3">
                                                        Ukuran
                                                    </div>
                                                    <div class="col-lg-1">
                                                        @if($detailPenjualan != null)
                                                        <input type="text" name="ukuran" readonly value={{$detailPenjualan->barangs->ukuran}}>
                                                        @else
                                                        <input type="text" name="ukuran" required autofocus>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            @if($detailPenjualan != null)
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Berat Sebelumnya(gram)
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="beratasli" required readonly autofocus value={{$detailPenjualan->barangs->beratasli}}>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @if($detailPenjualan != null)
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Kadar Sebelumnya
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="beratasli" required readonly autofocus value={{$detailPenjualan->barangs->kadar}}>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    @if($detailPenjualan != null)
                                                    <div class="panel-heading col-sm-3">
                                                        Berat Sekarang (gram)
                                                    </div>
                                                    @else
                                                    <div class="panel-heading col-sm-3">
                                                        Berat (gram)
                                                    </div>
                                                    @endif
                                                    <div class="col-sm-2">
                                                        <input type="text" name="beratskrg" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-3">
                                                        Kadar Sekarang
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <input type="text" name="kadar" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-3">
                                                        Tanggal Pembelian
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <input type="text" name="tanggalbeli"  id="todaydate" required autofocus readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-3">
                                                        Kondisi
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="kondisi">
                                                            <option selected>Siap Jual</option>
                                                            <option>Sepuh</option>
                                                            <option>Lebur</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Harga (gram)
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="hargabeli" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-3">
                                                        Ongkos
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <input type="text" name="ognkos" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-3">
                                                        Ongkos Lain-Lain
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <input type="text" name="ognkoslain" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-3">
                                                        Sales
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <input type="text" name="namasales" value="{{$detailEmployeeJson->name}}" required autofocus readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="row">
                                                <div class="col-lg-12 text-right">
                                                    <div class="panel-heading col-lg-3">
                                                        <button type="Submit" class="btn btn-success">Submit and Print</button>
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
@include('sales.layouts.footer')

<script>
    var d = new Date();
    document.getElementById("todaydate").value = d.toDateString();
</script>