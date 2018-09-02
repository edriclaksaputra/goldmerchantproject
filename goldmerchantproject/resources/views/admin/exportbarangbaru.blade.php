@include('admin.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Export Data Barang Baru</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                <h4> {{ session('error') }} </h4>
                            </div>
                        @endif
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-10">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Data Barang Baru
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
                                <form action="/exportbarangbaru.downloadexcel" method="get"  enctype="multipart/form-data">
                                    <button type="submit" class="btn btn-success col-lg-2">Download File Excel</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
        <!-- /#wrapper -->
@include('admin.layouts.footer')