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
                                <div class="dataTable_wrapper col-lg-10">
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
                                            @foreach($listpenjualan as $detailpenjualan)
                                            <tr class="odd gradeX">
                                                <td>{{ Carbon\Carbon::parse($detailpenjualan->tanggal)->formatLocalized('%A %d %B %Y') }}</td>
                                                <td>{{$detailpenjualan->id}}</td>
                                                <td>{{$detailpenjualan->barangs->jenis}}</td>
                                                <td>{{$detailpenjualan->barangs->namajenis}}</td>
                                                <td>{{number_format($detailpenjualan->barangs->beratasli, 0)}}</td>
                                                <td>Rp {{ number_format($detailpenjualan->barangs->totalharga, 2)}}</td>
                                                <td>{{$detailpenjualan->namasales}}</td>
                                                <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" onclick="notadetail('{{$detailpenjualan->barangs->foto}}', '{{$detailpenjualan->id}}', '{{ Carbon\Carbon::parse($detailpenjualan->tanggal)->formatLocalized('%A %d %B %Y') }}', '{{$detailpenjualan->nama}}', '{{$detailpenjualan->alamat}}', '{{$detailpenjualan->barangs->id}}', '{{$detailpenjualan->barangs->jenis}}', '{{$detailpenjualan->barangs->namajenis}}', '{{$detailpenjualan->barangs->beratasli}}', 'Rp {{number_format($detailpenjualan->barangs->hargagram,2)}}', '{{$detailpenjualan->barangs->supplier}}', '{{$detailpenjualan->barangs->kadar}}', 'Rp {{number_format($detailpenjualan->barangs->totalharga,2)}}', '{{$detailpenjualan->namasales}}')">Detail Nota</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="row col-lg-12">
                                        <div class="col-lg-6 text-left">
                                            <a href="#" style="text-decoration: none"><button type="button" class="btn btn-success">Lihat Grafik</button></a>
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
                                <h4 class="modal-title" id="myModalLabel">Nota Penjualan <label id="namabarang"></label></h4>
                            </div>
                            <div class="modal-body">
                                <div class="panel panel-primary col-lg-12">
                                    <div class="panel-body text-center">
                                        <img alt="gambarbarang" id='gambarbarang' width="50%" height="50%" />
                                    </div>
                                </div>
                                <table class="table table-striped col-lg-12">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Kode Nota</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" id="kodenota" readonly></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Tanggal</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" id="tanggal" readonly size="30"></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Nama Customer</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" id="namacust" readonly></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Alamat Customer</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" id="alamatcust" readonly></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Kode Barang</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" id="kodebarang" readonly></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Jenis</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" id="jenis" readonly></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Nama Jenis</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" id="namajenis" readonly></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Berat (gram)</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" id="beratgram" readonly></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Harga</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" id="hargagram" readonly></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Supplier</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" id="supplier" readonly></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Kadar</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" id="kadar" readonly></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Total Harga</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" id="totalharga" readonly></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="panel-heading col-lg-8">Sales</div>
                                            </td>
                                            <td>
                                                <div class="col-lg-4"><input type="text" id="namasales" readonly></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Aksi</button>
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
<script>
  function notadetail(gambarbarang, kodenota, tanggal, namacust, alamatcust, kodebarang, jenis, namajenis, berat, harga, suplier, kadar, totalharga, namasales) {
    var element = document.getElementById("namabarang");
    element.innerHTML = namajenis;

    document.getElementById('gambarbarang').src = gambarbarang;
    document.getElementById('kodenota').value = kodenota;
    document.getElementById('tanggal').value = tanggal;
    document.getElementById('namacust').value = namacust;
    document.getElementById('alamatcust').value = alamatcust;
    document.getElementById('kodebarang').value = kodebarang;
    document.getElementById('jenis').value = jenis;
    document.getElementById('namajenis').value = namajenis;
    document.getElementById('beratgram').value = berat;
    document.getElementById('hargagram').value = harga;
    document.getElementById('supplier').value = suplier;
    document.getElementById('kadar').value = kadar;
    document.getElementById('totalharga').value = totalharga;
    document.getElementById('namasales').value = namasales;
  }
</script>