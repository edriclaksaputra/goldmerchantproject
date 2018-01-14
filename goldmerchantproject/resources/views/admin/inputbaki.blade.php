@include('admin.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Baki</h1>
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
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                List barang dalam
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-4">
                                                    Tanggal Keluar
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="tanggalkeluar" id="todaydate" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-sm-4">
                                                    Baki
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="number" name="nomerbaki" id="stokbaki" required autofocus value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="dataTable_wrapper">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th class="col-sm-2">Kode Barang</th>
                                                        <th class="col-sm-2">Jenis</th>
                                                        <th class="col-sm-3">Nama Jenis</th>
                                                        <th>Stok</th>
                                                        <th>Tambah ke Baki</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($listbarang as $listbarangdetail)
                                                        <tr class="odd gradeX">
                                                            <td><label id="idbarang{{$loop->iteration}}">{{$listbarangdetail->id}}</label></td>
                                                            <td>{{$listbarangdetail->jenis}}</td>
                                                            <td class="center">{{$listbarangdetail->namajenis}}</td>
                                                            <td class="center">{{$listbarangdetail->stok}}</td>
                                                            <td class="center"><button type="button" class="btn btn-info" onclick="addBarangBaki(document.getElementById('todaydate').value, document.getElementById('stokbaki').value, document.getElementById('idbarang{{$loop->iteration}}').innerHTML, '{{$listbarangdetail->jenis}}', '{{$listbarangdetail->namajenis}}')">Proses ke Baki</button></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-5">
                                                    Stok Limit :
                                                </div>
                                                <div class="col-lg-7">
                                                    <input type="text" name="stokLimit" value="35">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-5">
                                                    Barang Terjual :
                                                </div>
                                                <div class="col-lg-7">
                                                    <input type="text" name="stokLimit" value="15">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-5">
                                                    Barang yang Harus Diisi :
                                                </div>
                                                <div class="col-lg-7">
                                                    <input type="text" name="stokLimit" value="20">
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                List barang baki
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-10">
                                    <form action="/inputbaki.insertbarangbaki" method="post"  enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th class="col-sm-2">Tanggal Keluar</th>
                                                    <th class="col-sm-2">Kode Barang</th>
                                                    <th>Jenis</th>
                                                    <th>Nama Jenis</th>
                                                    <th>Baki</th>
                                                    <th>Cancel</th>
                                                </tr>
                                            </thead>
                                            <tbody class="form-group" id="tablebarangbaki">
                                                    <!-- Diisi lewat JavaScript -->
                                            </tbody>
                                        </table>
                                        <br><br>
                                        <div class="col-lg-12 text-right">
                                            <div class="col-lg-10"></div>
                                            <button type="Submit" class="btn btn-info col-lg-2">Submit</button>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </form>
                                </div>
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
@include('admin.layouts.footer')
<script>
    var d = new Date();
    document.getElementById("todaydate").value = d.toDateString();
</script>

<script>
    var counter = 0;
    function addBarangBaki(tanggalkeluar,nomerbaki,kodebarang,jenis,namajenis){
        var table = document.getElementById('tablebarangbaki');
        var row = table.insertRow(this);

        var cell0 = row.insertCell(0);
        var cell1 = row.insertCell(1);
        var cell2 = row.insertCell(2);
        var cell3 = row.insertCell(3);
        var cell4 = row.insertCell(4);
        var cell5 = row.insertCell(5);

        cell0.innerHTML = '<label>'+tanggalkeluar+'</label><input type="hidden" name="tanggalkeluar['+counter+']" value="'+tanggalkeluar+'">';
        cell1.innerHTML = '<label>'+kodebarang+'</label><input type="hidden" name="kodebarang['+counter+']" value="'+kodebarang+'" id="kodebarang"><input type="hidden" name="counter" value="'+counter+'">';
        cell2.innerHTML = '<label>'+jenis+'</label>';
        cell3.innerHTML = '<label>'+namajenis+'</label>';
        cell4.innerHTML = '<label>'+nomerbaki+'</label><input type="hidden" name="nomerbaki['+counter+']" value="'+nomerbaki+'">';
        cell5.innerHTML = '<button type="button" class="btn btn-danger" onclick="deleterow(this)"> Cancel Barang</button>';

        counter++;
    }
</script>

<script>
    function deleterow(rownumber) {
        var i = rownumber.parentNode.parentNode.rowIndex;
        var row = i-1;
        document.getElementById("tablebarangbaki").deleteRow(row);
    }
</script>