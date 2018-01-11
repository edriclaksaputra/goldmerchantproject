<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Gold Merchant | Kasir</title>

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

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html" style="color: white">Arjuna Putra Gold Merchant  |  {{Auth::user()->job}}</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: white">
                            {{Auth::user()->job}}  |  {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Validasi Transaksi</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                List Transaksi
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Jenis Transaksi</th>
                                                <th>Kode Transaksi</th>
                                                <th>Kode Barang</th>
                                                <th>Jenis Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Berat</th>
                                                <th>Total Transaksi</th>
                                                <th>Sales</th>
                                                <th>Validasi</th>
                                                <th>Cancel</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>Jual</td>
                                                <td>FJ-150917-0001</td>
                                                <td>GL-0001</td>
                                                <td class="center">Gelang</td>
                                                <td class="center">Rantai Variasi</td>
                                                <td>1</td>
                                                <td>150000</td>
                                                <td>Budi</td>
                                                <td>
                                                    <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-circle disabled"><i class="fa fa-check"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>Beli</td>
                                                <td>FB-150917-0002</td>
                                                <td>KL-0001</td>
                                                <td class="center">Gigi Palsu</td>
                                                <td class="center">Milanio</td>
                                                <td>1</td>
                                                <td>-100000</td>
                                                <td>Ana</td>
                                                <td>
                                                    <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>Gadai</td>
                                                <td>NG-150917</td>
                                                <td>CN-0003</td>
                                                <td class="center">Cincin</td>
                                                <td class="center">Model Mata</td>
                                                <td>2</td>
                                                <td>150000</td>
                                                <td>Erik</td>
                                                <td><button type="button" class="btn btn-success">OK</button></td>
                                                <td><button type="button" class="btn btn-danger">Cancel</button></td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>Tebus</td>
                                                <td>TB-150917</td>
                                                <td>GL-0003</td>
                                                <td class="center">Kalung</td>
                                                <td class="center">Rantai Varias</td>
                                                <td>2</td>
                                                <td>-150000</td>
                                                <td>Silvi</td>
                                                <td>
                                                    <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>Jual</td>
                                                <td>FJ-150917-0001</td>
                                                <td>GL-0001</td>
                                                <td class="center">Gelang</td>
                                                <td class="center">Milanio</td>
                                                <td>1</td>
                                                <td>150000</td>
                                                <td>Budi</td>
                                                <td>
                                                    <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>Beli</td>
                                                <td>FB-150917-0002</td>
                                                <td>KL-0001</td>
                                                <td class="center">Kalung</td>
                                                <td class="center">Model Mata</td>
                                                <td>2</td>
                                                <td>150000</td>
                                                <td>Erik</td>
                                                <td>
                                                    <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>Gadai</td>
                                                <td>NG-150917</td>
                                                <td>CN-0001</td>
                                                <td class="center">Cincin</td>
                                                <td class="center">Rantai Varias</td>
                                                <td>1</td>
                                                <td>250000</td>
                                                <td>Erik</td>
                                                <td><button type="button" class="btn btn-success">OK</button></td>
                                                <td><button type="button" class="btn btn-danger">Cancel</button></td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>Tebus</td>
                                                <td>TB-150917</td>
                                                <td>GL-0001</td>
                                                <td class="center">Gelang</td>
                                                <td class="center">Milanio</td>
                                                <td>2</td>
                                                <td>-150000</td>
                                                <td>Ana</td>
                                                <td>
                                                    <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
