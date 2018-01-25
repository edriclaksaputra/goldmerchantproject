@include('sales.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Jenis Pembelian</h1>
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
                        <!-- /.panel-heading -->
                        <div class="row col-lg-12">
                            <a href="pembeliandalam"><button type="button" class="btn btn-success">Pembelian barang toko</button></a>
                            <span>*Barang yang akan dibeli adalah barang yang berasal dari toko Arjuna</span>
                        </div>
                        <br><br><br>
                        <div class="row col-lg-12">
                            <form action="/detailpembelianbarang" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <button type="Submit" class="btn btn-warning">Pembelian barang luar</button>
                                <input type="hidden" name="barcode" value="0">
                                <span>*Barang bukan dari toko Arjuna</span>
                            </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->
        </div>
@include('sales.layouts.footer')