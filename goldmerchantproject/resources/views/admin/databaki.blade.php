@include('admin.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Baki</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Input Data Baki
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <form action="/databaki.detail" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="panel-heading col-sm-2">
                                    Nomor Baki :
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="nomorbaki">
                                            <option value="Luar1">Baki 1</option>
                                            <option value="Luar2">Baki 2</option>
                                            <option value="Luar3">Baki 3</option>
                                            <option value="Luar4">Baki 4</option>
                                            <option value="Luar5">Baki 5</option>
                                            <option value="Luar6">Baki 6</option>
                                            <option value="Luar7">Baki 7</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="Submit" class="btn btn-success">Proses</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                @if($databaki != null)
                <div class="row">
                    <div class="col-lg-11">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                List Data Baki
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Tanggal Keluar</th>
                                                <th>Kode Barang</th>
                                                <th>Jenis</th>
                                                <th>Nama</th>
                                                <th>Berat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($databaki as $detaildatabaki)
                                            <tr class="gradeX">
                                                <td class="col-sm-2">{{$detaildatabaki->tanggalkeluar}}</td>
                                                <td class="col-sm-2">{{$detaildatabaki->id}}</td>
                                                <td class="center">{{$detaildatabaki->jenis}}</td>
                                                <td class="center">{{$detaildatabaki->namajenis}}</td>
                                                <td class="center">{{$detaildatabaki->beratasli}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="panel-heading col-sm-5">
                                        Stok Limit :
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="stokLimit" value="35" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="panel-heading col-sm-5">
                                        Barang Terjual :
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="stokLimit" value="15" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="panel-heading col-sm-5">
                                        Barang yang Harus Diisi :
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="stokLimit" value="20" disabled>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                @endif
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
@include('admin.layouts.footer')