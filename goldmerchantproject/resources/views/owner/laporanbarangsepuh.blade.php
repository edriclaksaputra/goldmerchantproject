@include('owner.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Laporan Barang</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Laporan Barang
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li><a href="laporanbarang.dalam">Barang Dalam</a>
                                    </li>
                                    <li><a href="laporanbarang.baki">Barang Baki</a>
                                    </li>
                                    <li class="active"><a href="laporanbarang.sepuh">Barang Sepuh</a>
                                    </li>
                                    <li><a href="laporanbarang.rongsok">Barang Rongsok</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content col-lg-10">
                                    <div class="tab-pane fade in active">
                                        <h4>Barang Sepuh</h4>
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th class="col-lg-2">Tanggal Masuk</th>
                                                    <th class="col-lg-2">Jenis</th>
                                                    <th class="col-lg-2">Nama Jenis</th>
                                                    <th class="col-lg-2">Ukuran</th>
                                                    <th>Berat (gram)</th>
                                                    <th>Kadar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($barangsepuh as $detailbarangsepuh)
                                                <tr class="odd gradeX">
                                                    <td>{{ Carbon\Carbon::parse($detailbarangsepuh->tanggalmasuk)->formatLocalized('%A %d %B %Y') }}</td>
                                                    <td>{{$detailbarangsepuh->jenis}}</td>
                                                    <td>{{$detailbarangsepuh->namajenis}}</td>
                                                    <td>{{$detailbarangsepuh->ukuran}}</td>
                                                    <td>{{$detailbarangsepuh->beratasli}}</td>
                                                    <td>{{$detailbarangsepuh->kadar}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="col-lg-12">
                                            <div class="col-lg-7">
                                                
                                            </div>
                                            <div class="panel-heading col-lg-2 text-right">
                                                Berat Total (gram)
                                            </div>
                                            <div class="col-lg-2">
                                                <input style="text-align: center" type="text" name="stokLimit" value="{{$berattotal}}" required autofocus readonly>
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
@include('owner.layouts.footer')