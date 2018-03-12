@include('sales.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Validasi Pegawai</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                @if ($error != null)
                    <div class="alert alert-danger">
                        <h4> {{$error}} </h4>
                    </div>
                @endif
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Input Sandi Pegawai
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <form action="/usercheck.validation" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="panel-heading col-sm-2">
                                    Sandi Pegawai :
                                    </div>
                                    <div class="col-sm-4 text-left">
                                        <input type="text" name="passcode" required autofocus size="35" >
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="Submit" class="btn btn-success">Login</button>
                                    </div>

                                    <input type="hidden" name="page" value="{{$page}}">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
@include('sales.layouts.footer')