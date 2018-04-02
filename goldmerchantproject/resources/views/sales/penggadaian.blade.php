@include('sales.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Gadai Barang</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="col-lg-12">
                    @if (session('alert'))
                        <div class="alert alert-success">
                            <h4> {{ session('alert') }} </h4>
                        </div>
                    @endif
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Input Detail Gadai
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <div class="col-lg-4">
                                        
                                    </div>
                                    <form action="/gadai.inputdetailgadai" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Tanggal
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="tanggalgadai" id="todaydate" required autofocus readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Nama
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="nama" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Alamat
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="alamat" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        No. Telp
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="notelp" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3 {{ $errors->has('totalpinjam') ? ' has-error' : '' }}">
                                                        Uang Pinjam
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="totalpinjam" required autofocus>
                                                        @if ($errors->has('totalpinjam'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('totalpinjam') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Jaminan
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="jaminan" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Berat
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="berat" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Bunga Pinjaman
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="bunga" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Sales
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="namasales" value="{{$employeeDetail->name}}" required autofocus readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="col-lg-6 text-right">
                                                        <button type="Submit" class="btn btn-success">Submit and Print</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="col-lg-4">
                                        
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
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
@include('sales.layouts.footer')

<script>
    var d = new Date();
    document.getElementById("todaydate").value = d.toDateString();
</script>