@include('sales.layouts.header')
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html" style="color: white">Toko Mas Arjuna Putra</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-right navbar-top-links">
                    <li style="color: white"><i class="fa fa-home fa-fw"></i>Welcome Sales !</li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-sign-out"></i>logout
                        </a>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Main Menu</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <div class="row show-grid">
                                        <div class="col-lg-12"><a href="penjualan" style="text-decoration: none"><button type="button" class="btn btn-primary btn-lg btn-block"> JUAL</button></a></div>
                                        <div class="col-lg-12"><a href="#" style="text-decoration: none"><button type="button" class="btn btn-success btn-lg btn-block">BELI *belum aktif</button></a></div>
                                        <div class="col-lg-12"><a href="#" style="text-decoration: none"><button type="button" class="btn btn-warning btn-lg btn-block">TEBUS *belum aktif</button></a></div>
                                        <div class="col-lg-12"><a href="#" style="text-decoration: none"><button type="button" class="btn btn-info btn-lg btn-block">GADAI *belum aktif</button></a></div>
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