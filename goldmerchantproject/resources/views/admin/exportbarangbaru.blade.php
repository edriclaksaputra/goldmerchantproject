@include('admin.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Barang Baru</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-10">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                List Barang Baru
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th class="col-lg-2">Kode Barang</th>
                                                <th>Jenis</th>
                                                <th>Nama</th>
                                                <th>Berat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($barangbaru as $barangbarudetail)
                                            <tr class="gradeX">
                                                <td>{{$barangbarudetail->id}}</td>
                                                <td>{{$barangbarudetail->jenis}}</td>
                                                <td class="center">{{$barangbarudetail->namajenis}}</td>
                                                <td class="center">{{$barangbarudetail->beratpembulatan}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                                <button></button>
                            </div>
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
        <!-- /#wrapper -->
@include('admin.layouts.footer')