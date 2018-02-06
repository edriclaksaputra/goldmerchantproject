@include('kasir.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Validasi Transaksi</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        @if (session('alert'))
                            <div class="alert alert-success">
                                <h4> {{ session('alert') }} </h4>
                            </div>
                        @elseif (session('warning'))
                            <div class="alert alert-warning">
                                <h4> {{ session('warning') }} </h4>
                            </div>
                        @endif
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                List Transaksi
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th class="col-lg-1">Jenis</th>
                                                <th>Kode Transaksi</th>
                                                <th>Kode Barang</th>
                                                <th>Jenis Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Berat</th>
                                                <th>Total Transaksi</th>
                                                <th>Sales</th>
                                                <th>Validasi</th>
                                                <th>Cancel</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($listPenjualan as $listPenjualandetail)
                                            <tr class="odd gradeX" style="background-color: #FFEBCD">
                                                <form action="/validasitransaksi.validasi" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                    <td style="text-align: center">Jual</td>
                                                    <td style="text-align: center">{{$listPenjualandetail->id}}</td>
                                                    <td style="text-align: center">{{$listPenjualandetail->barangs_id}}</td>
                                                    <td style="text-align: center">{{$listPenjualandetail->barangs->jenis}}</td>
                                                    <td style="text-align: center">{{$listPenjualandetail->barangs->namajenis}}</td>
                                                    <td style="text-align: center">{{$listPenjualandetail->barangs->beratasli}}</td>
                                                    <td style="text-align: center">{{$listPenjualandetail->barangs->totalharga}}</td>
                                                    <td style="text-align: center">{{$listPenjualandetail->namasales}}</td>
                                                    <td style="text-align: center"><button type="submit" class="btn btn-success" name="result" value="accept">YES</button></td>
                                                    <td style="text-align: center"><button type="button" class="btn btn-danger" name="result" value="cancel" data-toggle="modal" data-target="#cancel" onclick="insertdetailcancel('penjualan', {{$listPenjualandetail->id}})">CANCEL</button></td>
                                                    <input type="hidden" name="jenis" value="penjualan">
                                                    <input type="hidden" name="idtransaksi" value={{$listPenjualandetail->id}}>
                                                </form>
                                            </tr>
                                            @endforeach
                                            @foreach($listPembelian as $listPembeliandetail)
                                            <tr class="odd gradeX" style="background-color: #F0F8FF ">
                                                <form action="/validasitransaksi.validasi" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                    <td style="text-align: center">Beli</td>
                                                    <td style="text-align: center">{{$listPembeliandetail->id}}</td>
                                                    <td style="text-align: center">--</td>
                                                    <td style="text-align: center">{{$listPembeliandetail->jenis}}</td>
                                                    <td style="text-align: center">{{$listPembeliandetail->namajenis}}</td>
                                                    <td style="text-align: center">{{$listPembeliandetail->beratasli}}</td>
                                                    <td style="text-align: center">{{$listPembeliandetail->totalharga}}</td>
                                                    <td style="text-align: center">{{$listPembeliandetail->namasales}}</td>
                                                    <td style="text-align: center"><button type="submit" class="btn btn-success" name="result" value="accept">YES</button></td>
                                                    <td style="text-align: center"><button type="button" class="btn btn-danger" name="result" value="cancel" data-toggle="modal" data-target="#cancel" onclick="insertdetailcancel('pembelian', {{$listPembeliandetail->id}})">CANCEL</button></td>
                                                    <input type="hidden" name="jenis" value="pembelian">
                                                    <input type="hidden" name="idtransaksi" value={{$listPembeliandetail->id}}>
                                                </form>
                                            </tr>
                                            @endforeach
                                            @foreach($listGadai as $listGadaidetail)
                                            <tr class="odd gradeX" style="background-color: #FAFAD2 ">
                                                <form action="/validasitransaksi.validasi" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                    <td style="text-align: center">Gadai</td>
                                                    <td style="text-align: center">{{$listGadaidetail->id}}</td>
                                                    <td style="text-align: center">--</td>
                                                    <td style="text-align: center">{{$listGadaidetail->namabarang}}</td>
                                                    <td style="text-align: center">--</td>
                                                    <td style="text-align: center">--</td>
                                                    <td style="text-align: center">{{$listGadaidetail->totalpinjam}}</td>
                                                    <td style="text-align: center">{{$listGadaidetail->salesgadai}}</td>
                                                    <td style="text-align: center"><button type="submit" class="btn btn-success" name="result" value="accept">YES</button></td>
                                                    <td style="text-align: center"><button type="button" class="btn btn-danger" name="result" value="cancel" data-toggle="modal" data-target="#cancel" onclick="insertdetailcancel('gadai', {{$listGadaidetail->id}})">CANCEL</button></td>
                                                    <input type="hidden" name="jenis" value="gadai">
                                                    <input type="hidden" name="idtransaksi" value={{$listGadaidetail->id}}>
                                                </form>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
                <div class="modal fade" id="cancel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Cancel Transaksi</h4>
                            </div>
                            <div class="modal-body">
                                Apakah anda yakin akan meng-cancel transaksi ? Record transaksi akan dihapus dari database (!)
                            </div>
                            <div class="modal-footer">
                                <form action="/validasitransaksi.validasi" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                    <button type="submit" class="btn btn-primary">Ya</button>
                                    <input type="hidden" id="jenis" name="jenis">
                                    <input type="hidden" id="idtransaksi" name="idtransaksi">
                                </form>
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
@include('kasir.layouts.footer')
<script>
    function insertdetailcancel(jenis, transaksiid) {

        document.getElementById('jenis').value = jenis;
        document.getElementById('idtransaksi').value = transaksiid;
    }
</script>