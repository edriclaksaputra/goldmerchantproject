@include('admin.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Baki</h1>
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
                                List All of Data Baki
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <form method="post" action="/inputbaki.insertbarangbaki" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="col-lg-12">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-4 {{ $errors->has('tanggalkeluar') ? ' has-error' : '' }}">
                                                        Tanggal Keluar
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="tanggalkeluar" id="todaydate" required autofocus>
                                                        @if ($errors->has('tanggalkeluar'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('tanggalkeluar') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-4 {{ $errors->has('nomerbaki') ? ' has-error' : '' }}">
                                                        Baki
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="number" name="nomerbaki" required autofocus>
                                                        @if ($errors->has('nomerbaki'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('nomerbaki') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-4 {{ $errors->has('barcode') ? ' has-error' : '' }}">
                                                        Barcode
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="barcode" required autofocus>
                                                        @if ($errors->has('barcode'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('barcode') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-5">
                                                        Stok Limit :
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" name="stokLimit" value="35">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-5">
                                                        Barang Terjual :
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" name="stokLimit" value="15">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-lg-5">
                                                        Barang yang Harus Diisi :
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" name="stokLimit" value="20">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-4 text-center">
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <button type="Submit" class="btn btn-success btn-block">Proceed</button>
                                        </div>
                                        <div class="col-lg-4 text-center">
                                        </div>
                                        <br/><br/><br/>
                                    </div>
                                </form>
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Tanggal Keluar</th>
                                                <th>Kode Barang</th>
                                                <th>Jenis</th>
                                                <th>Nama</th>
                                                <th>Stok</th>
                                                <th>Cancel</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($listbarang as $listbarangdetail)
                                                <tr class="odd gradeX">
                                                    <form action="/inputbaki.cancelbarangbaki" method="post"  enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                        <td>{{$listbarangdetail->tanggalkeluar}}</td>
                                                        <td>{{$listbarangdetail->id}}</td>
                                                        <td>{{$listbarangdetail->jenis}}</td>
                                                        <td class="center">{{$listbarangdetail->namajenis}}</td>
                                                        <td class="center">{{$listbarangdetail->stok}}</td>
                                                        <td class="center"><button type="Submit" class="btn btn-danger">Cancel</button></td>
                                                        <input type="hidden" name="idbarangcancel" value="{{$listbarangdetail->id}}"> 
                                                    </form>
                                                </tr>
                                            @endforeach
                                        </tbody>
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
        <!-- /#wrapper -->
@include('admin.layouts.footer')
<script>
    var d = new Date();
    document.getElementById("todaydate").value = d.toDateString();
</script>