@include('sales.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Pembelian</h1>
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
                                Input Barcode Penjualan
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <form action="/detailpembelianbarang" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="panel-heading col-sm-2">
                                    Barcode Penjualan :
                                    </div>
                                    <div class="col-sm-4 text-left">
                                        <input type="text" name="barcode" required autofocus size="35">
                                    </div>
                                    <input type="hidden" name="detailEmployee" value="{{session('employeeDetail')}}">
                                    <div class="col-sm-2">
                                        <button type="Submit" class="btn btn-success">Proses</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.panel-body -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
@include('sales.layouts.footer')
<script>
    var berat = document.getElementById("beratasli").value;
    var harga = document.getElementById("hargagram").value;
    document.getElementById("totalharga").value = (berat*harga);

</script>
<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#uploadphoto')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<script>
    var d = new Date();
    document.getElementById("todaydate").value = d.toDateString();
</script>
<script>
    function generatenota() {
    }     
</script>