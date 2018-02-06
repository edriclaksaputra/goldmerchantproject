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
                                                <td>Jual</td>
                                                <td>{{$listPenjualandetail->id}}</td>
                                                <td>{{$listPenjualandetail->barangs_id}}</td>
                                                <td class="center">{{$listPenjualandetail->barangs->jenis}}</td>
                                                <td class="center">{{$listPenjualandetail->barangs->namajenis}}</td>
                                                <td>{{$listPenjualandetail->barangs->beratasli}}</td>
                                                <td>{{$listPenjualandetail->barangs->totalharga}}</td>
                                                <td>{{$listPenjualandetail->namasales}}</td>
                                                <td style="text-align: center"><button type="button" class="btn btn-success">YES</button></td>
                                                <td style="text-align: center"><button type="button" class="btn btn-danger">CANCEL</button></td>
                                            </tr>
                                            @endforeach
                                            @foreach($listPembelian as $listPembeliandetail)
                                            <tr class="odd gradeX" style="background-color: #7FFFD4">
                                                <td>Beli</td>
                                                <td>{{$listPembeliandetail->id}}</td>
                                                <td>--</td>
                                                <td class="center">{{$listPembeliandetail->jenis}}</td>
                                                <td class="center">{{$listPembeliandetail->namajenis}}</td>
                                                <td>{{$listPembeliandetail->beratasli}}</td>
                                                <td>{{$listPembeliandetail->totalharga}}</td>
                                                <td>{{$listPembeliandetail->namasales}}</td>
                                                <td style="text-align: center"><button type="button" class="btn btn-success">YES</button></td>
                                                <td style="text-align: center"><button type="button" class="btn btn-danger">CANCEL</button></td>
                                            </tr>
                                            @endforeach
                                            @foreach($listGadai as $listGadaidetail)
                                            <tr class="odd gradeX" style="background-color: #98FB98">
                                                <td>Gadai</td>
                                                <td>{{$listGadaidetail->id}}</td>
                                                <td>--</td>
                                                <td class="center">{{$listGadaidetail->namabarang}}</td>
                                                <td class="center">--</td>
                                                <td>--</td>
                                                <td>{{$listGadaidetail->totalpinjam}}</td>
                                                <td>{{$listGadaidetail->salesgadai}}</td>
                                                <td style="text-align: center"><button type="button" class="btn btn-success">YES</button></td>
                                                <td style="text-align: center"><button type="button" class="btn btn-danger">CANCEL</button></td>
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
            </div>
            <!-- /#page-wrapper -->

        </div>
@include('kasir.layouts.footer')