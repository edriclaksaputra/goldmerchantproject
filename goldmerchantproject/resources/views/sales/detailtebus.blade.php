@include('sales.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tebus</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Input Barcode Gadai
                            </div>
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <div class="col-lg-4">
                                        
                                    </div>
                                    <div class="col-lg-4">
                                        <form action="/tebus.detailtebus.checkouttebus" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="barcode" value={{$detailgadai->id}}>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Tanggal Tebus
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="tanggaltebus" id="todaydate" required autofocus readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Barcode Gadai
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="barcode" required autofocus value={{$detailgadai->id}}>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Tanggal Gadai
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="tanggalgadai" required autofocus readonly value={{$detailgadai->tanggalgadai}}>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Nama
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="namapenggadai" required readonly autofocus value={{$detailgadai->namapenggadai}}>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Alamat
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="alamat" required autofocus readonly value={{$detailgadai->alamat}}>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Pinjam
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="totalpinjam" required autofocus readonly value={{$detailgadai->totalpinjam}}>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Jaminan
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="jaminan" required autofocus readonly value={{$detailgadai->namabarang}}>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Bunga
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="bunga" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Total Bayar
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="totalbayar" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel-heading col-sm-3">
                                                        Sales
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="text" name="salestebus" value="{{$detailEmployeeJson->name}}" required autofocus readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="col-lg-6 text-right">
                                                        <button type="Submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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