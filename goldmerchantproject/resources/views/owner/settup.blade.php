@include('owner.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Set-Up</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Set-Up Panel
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#profile" data-toggle="tab">Profile</a>
                                    </li>
                                    <li><a href="#account" data-toggle="tab">Account</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="profile">
                                        <h4>Profile Tab</h4>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="panel-heading col-sm-3">
                                                    Nama Toko
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" name="stokLimit">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="panel-heading col-sm-3">
                                                    Alamat
                                                </div>
                                                <div class="col-sm-5">
                                                    <textarea class="form-control" rows="3"></textarea>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="panel-heading col-sm-3">
                                                    Nomor Telepon
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" name="stokLimit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="account">
                                        <h4>Account Tab</h4>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="panel-heading col-sm-3">
                                                    Kode Account
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" name="stokLimit">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="panel-heading col-sm-3">
                                                    Username
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" name="stokLimit">
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="panel-heading col-sm-3">
                                                    Password
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="password" name="stokLimit">
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="panel-heading col-sm-3">
                                                    Nama Karyawan
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" name="stokLimit">
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="panel-heading col-sm-3">
                                                    Tipe
                                                </div>
                                                <div class="col-sm-4">
                                                    <select class="form-control">
                                                        <option>Tipe A</option>
                                                        <option selected>Tipe B</option>
                                                        <option>Tipe C</option>
                                                        <option>Tipe D</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 text-center">
                                                    <button type="button" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
                                            <div class="row col-lg-12">
                                                <br>
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Kode Account</th>
                                                            <th>Username</th>
                                                            <th>Password</th>
                                                            <th>Nama Karyawan</th>
                                                            <th>Tipe</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>ACC-001</td>
                                                            <td>donnys</td>
                                                            <td>donnysu</td>
                                                            <td class="center">Donny</td>
                                                            <td class="center">Owner</td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>ACC-002</td>
                                                            <td>eriklokasurya</td>
                                                            <td>eriklokaloka123</td>
                                                            <td class="center">Erik</td>
                                                            <td class="center">Sales</td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>ACC-003</td>
                                                            <td>silvisilvi</td>
                                                            <td>silvilolol123</td>
                                                            <td class="center">Silvi</td>
                                                            <td class="center">Sales</td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>ACC-004</td>
                                                            <td>budibudi</td>
                                                            <td>budianduk123</td>
                                                            <td class="center">Budi</td>
                                                            <td class="center">Kasir</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
@include('owner.layouts.footer')