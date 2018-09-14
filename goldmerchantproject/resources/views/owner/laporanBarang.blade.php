@include('owner.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Laporan Barang</h1>
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
                            <div class="panel-heading">
                                Laporan Barang
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="laporanbarang.dalam">Barang Dalam</a>
                                    </li>
                                    <li><a href="laporanbarang.baki">Barang Baki</a>
                                    </li>
                                    <li><a href="laporanbarang.sepuh">Barang Sepuh</a>
                                    </li>
                                    <li><a href="laporanbarang.rongsok">Barang Rongsok</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content col-lg-10">
                                    <div class="tab-pane fade in active" id="barangdalam">
                                        <h4>Barang Dalam</h4>
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th class="col-lg-2">Tanggal Masuk</th>
                                                    <th class="col-lg-2">Kode Barang</th>
                                                    <th class="col-lg-2">Jenis</th>
                                                    <th class="col-lg-2">Nama Jenis</th>
                                                    <th>Berat (gram)</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($barangdalam as $detailbarang)
                                                    <tr class="odd gradeX">
                                                        <form method="post" action="/laporanbarang.dalam.edit" enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            <td>{{ Carbon\Carbon::parse($detailbarang->tanggalmasuk)->formatLocalized('%A %d %B %Y') }}</td>
                                                            <td>{{$detailbarang->id}}</td>
                                                            <td>{{$detailbarang->jenis}}</td>
                                                            <td>{{$detailbarang->namajenis}}</td>
                                                            <td>{{$detailbarang->beratasli}}</td>
                                                            <td>
                                                                <button type="submit" class="btn btn-info">Edit Barang</button>
                                                                <input type="hidden" name="idbarang" value="{{$detailbarang->id}}">
                                                            </td>
                                                        </form>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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