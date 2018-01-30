@include('sales.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tebus Peminjaman</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                @if (session('error'))
                    <div class="alert alert-danger">
                        <h4> {{ session('error') }} </h4>
                    </div>
                @endif
                @if (session('alert'))
                    <div class="alert alert-success">
                        <h4> {{ session('alert') }} </h4>
                    </div>
                @endif
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Input Barcode Gadai
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <form action="/tebus.detailtebus" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="panel-heading col-sm-2">
                                    Barcode Gadai :
                                    </div>
                                    <div class="col-sm-4 text-left">
                                        <input type="text" name="barcode" required autofocus size="35" >
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="Submit" class="btn btn-success">Proses</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
@include('sales.layouts.footer')