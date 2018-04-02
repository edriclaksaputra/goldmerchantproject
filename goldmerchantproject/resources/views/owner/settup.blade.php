@include('owner.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Set-Up</h1>
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
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Set-Up Panel
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#account" data-toggle="tab">Account</a>
                                    </li>
                                    <li><a href="#profile" data-toggle="tab">Profile</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="account">
                                        <h4>Account Tab</h4>
                                        <div class="col-lg-6">
                                            <form method="post" action="/settupemployee.addnewemployee" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="panel-heading col-sm-3">
                                                        Nama Karyawan
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="namakaryawan" autofocus required>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="panel-heading col-sm-3">
                                                        Passcode
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="passcode" autofocus required>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="panel-heading col-sm-3">
                                                        Jabatan
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="jabatan" autofocus required>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 text-center">
                                                        <button type="Submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="row col-lg-12">
                                                <br>
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-lg-1">Kode Account</th>
                                                            <th>Nama Karyawan</th>
                                                            <th>Passcode</th>
                                                            <th>Jabatan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($listemployee as $detailemployee)
                                                        <tr class="odd gradeX">
                                                            <td>{{$detailemployee->id}}</td>
                                                            <td>{{$detailemployee->name}}</td>
                                                            <td>{{$detailemployee->passcode}}</td>
                                                            <td class="center">{{$detailemployee->jabatan}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile">
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