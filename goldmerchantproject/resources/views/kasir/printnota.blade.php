<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Arjuna Gold Merchant</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <div id="page-wrapper">
                <!-- /.row -->
                <div class="row" id="page-print">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading">
                                TOKO MAS <div style="float: right">Jatibarang - {{ \Carbon\Carbon::parse($transaksi->tanggal)->toFormattedDateString()}}</div><br>
                                <strong style="font-size: 20px">ARJUNA PUTRA</strong><div style="float: right">KEPADA YTH.</div> <br>
                                <i>Jual beli perhiasan mas intan dll</i><div style="float: right">Saudara {{$transaksi->nama}}</div><br>
                                Jl. Raya TImur No. 33 Jatibarang - Brebes<br>
                                <p class="fa fa-facebook-square"> arjuna putra</p>&nbsp&nbsp&nbsp&nbsp<p class="fa fa-instagram"> tokomasarjunaputrajtb</p>
                            </div> -->
                            <br><br><br>
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="col-lg-4" style="text-align: center">Gambar</th>
                                                <th style="text-align: center">Nama Barang</th>
                                                <th style="text-align: center">Berat</th>
                                                <th style="text-align: center">Harga per Gram</th>
                                                <th style="text-align: center">Kadar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX" style="background-color: #fff">
                                                <td style="text-align: center"><img alt="foto produk" src="{{$transaksi->barangs->foto}}" width="50%" height="50%" /></td>
                                                <td style="text-align: center">{{$transaksi->barangs->namajenis}}</td>
                                                <td style="text-align: center">{{$transaksi->barangs->beratpembulatan}} gram</td>
                                                <td style="text-align: center">Rp {{number_format($transaksi->barangs->hargagram,2,'.',',')}}</td>
                                                <td style="text-align: center">{{$transaksi->barangs->kadar}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="col-lg-2" style="float: right"><strong style="font-size: 12px">Rp {{number_format($transaksi->barangs->totalharga,2,'.',',')}}</strong></div>
                                    <div class="col-lg-1" style="float: right"><strong style="font-size: 12px">Jumlah</strong></div>
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
                <button type="button" class="btn btn-success col-lg-1" onclick="printDiv('page-print')">Print Nota</button>&nbsp&nbsp
                <a href="/validasitransaksi.printbackfunc"><button type="button" class="btn btn-warning">Kembali</button></a>
            </div>
            <!-- /#page-wrapper -->
        </div>
@include('kasir.layouts.footer')
<script>
    function insertdetailcancel(jenis, transaksiid) {

        document.getElementById('jenis').value = jenis;
        document.getElementById('idtransaksi').value = transaksiid;
    }
</script>
<script>
    function printDiv(divName){
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>