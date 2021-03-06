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

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <form action="/usercheck" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <ul class="nav" id="side-menu">
                                <li class="sidebar-search">
                                    <div class="input-group custom-search-form">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                    </div>
                                    <!-- /input-group -->
                                </li>
                                <li>
                                    <a><i class="fa fa-dollar"></i> <button type="submit" onclick="setPage('jual')" style="background: none; border:none"> Penjualan</button></a>
                                </li>
                                <li>
                                    <a><i class="fa fa-plus"></i> <button type="submit" onclick="setPage('beli')" style="background: none; border:none"> Pembelian</button></a>
                                </li>
                                <li>
                                    <a><i class="fa fa-credit-card"></i> <button type="submit" onclick="setPage('gadai')" style="background: none; border:none"> Gadai</button></a>
                                </li>
                                <li>
                                    <a><i class="fa fa-history"></i> <button type="submit" onclick="setPage('tebus')" style="background: none; border:none;"> Tebus Gadai</button></a>
                                </li>
                                <li style="background-color: #eee">
                                    <a href="salescekbarang"><i class="fa fa-search"></i> Cek Detail Barang</a>
                                </li>
                            </ul>
                            <input type="hidden" name="page" id="idpage">
                        </form>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
            </nav>
<script>
    function setPage(page) {
        document.getElementById("idpage").value = page;
    }
</script>