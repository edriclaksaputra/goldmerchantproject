@include('admin.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Selamat datang admin {{ Auth::user()->name }}</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Mind Map Halaman Admin
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <!-- <h3>1. Penjualan</h3>
                                    <p>Menginput No Faktur, nama konsumen, memilih barang yang akan dibeli beserta harga yang harus dibayar</p> -->
                                    <h3>1. Input Barang Baru</h3>
                                    <tr>Menginput barang baru beserta detail barang ke stock dalam.</tr>
                                    <h3>2. Input Baki</h3>
                                    <p>Barang dari stock dalam akan dioper menjadi stock luar dalam baki yang siap di pajang untuk langsung dijual.</p>
                                    <h3>3. Data Baki</h3>
                                    <p>Memberikan detail barang apa saja yang terdapat dalam baki</p>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    </div>
                </div>
        <!-- /#wrapper -->
@include('admin.layouts.footer')