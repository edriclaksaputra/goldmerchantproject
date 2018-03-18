@include('owner.layouts.header')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Gelang Rantai Variasi</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <!-- /.panel-heading -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-5">
                                        <br>
                                        <div class="panel panel-primary col-lg-12">
                                            <br>
                                            <div class="panel-heading text-center">
                                                Gambar Terlampir
                                            </div>
                                            <div class="panel-body text-center">
                                                <img alt="icon" src="{{$detailbarang->foto}}" width="50%" height="50%" />
                                            </div>
                                            <!-- <div class="panel-footer">
                                                <div class="form-group">
                                                    <label>Ambil Gambar</label>
                                                    <input type="file">
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                    	<br>
                                    	<div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-sm-2">
                                                    Kode Barang
                                                </div>
                                                <div class="col-sm-1">
                                                    <input type="text" name="stokLimit" value="{{$detailbarang->id}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-sm-2">
                                                    Jenis
                                                </div>
                                                <div class="col-sm-3">
                                                    <select class="form-control">
                                                        <option selected>{{$detailbarang->jenis}}</option>
                                                        <option>Gelang</option>
                                                        <option>Kalung</option>
                                                        <option>Cincin</option>
                                                        <option>Anting</option>
                                                        <option>Gigi Palsu</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-sm-2">
                                                    Ukuran
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" name="stokLimit" value="{{$detailbarang->ukuran}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-sm-2">
                                                    Nama Barang
                                                </div>
                                                <div class="col-sm-1">
                                                    <input type="text" name="stokLimit" value="{{$detailbarang->namajenis}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-sm-2">
                                                    Berat Asli (gram)
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" name="stokLimit" value="{{$detailbarang->beratasli}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-sm-2">
                                                    Berat RU (gram)
                                                </div>
                                                <div class="col-sm-1">
                                                    <input type="text" name="stokLimit" value="{{$detailbarang->beratpembulatan}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Kadar
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="stokLimit" value="{{$detailbarang->kadar}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Supplier
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="stokLimit" value="{{$detailbarang->supplier}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Harga Jual
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="stokLimit" value="{{$detailbarang->hargagram}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Kondisi
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            @php ($status = false)
                                                            @foreach($kondisibarang as $kondisi)
                                                            @if($kondisi == 'Baru')
                                                            @php ($status = true)
                                                            @endif
                                                            @endforeach
                                                            @if($status == true)
                                                            <input type="checkbox" name="kondisi" value="Baru" checked>Baru
                                                            @else
                                                            <input type="checkbox" name="kondisi" value="Baru">Baru
                                                            @endif
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            @php ($status = false)
                                                            @foreach($kondisibarang as $kondisi)
                                                            @if($kondisi == 'Baru Sepuh')
                                                            @php ($status = true)
                                                            @endif
                                                            @endforeach
                                                            @if($status == true)
                                                            <input type="checkbox" name="kondisi" value="Baru Sepuh" checked>Baru Sepuh
                                                            @else
                                                            <input type="checkbox" name="kondisi" value="Baru Sepuh">Baru Sepuh
                                                            @endif
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            @php ($status = false)
                                                            @foreach($kondisibarang as $kondisi)
                                                            @if($kondisi == 'Pekok Kecil')
                                                            @php ($status = true)
                                                            @endif
                                                            @endforeach
                                                            @if($status == true)
                                                            <input type="checkbox" name="kondisi" value="Pekok Kecil" checked>Pekok Kecil
                                                            @else
                                                            <input type="checkbox" name="kondisi" value="Pekok Kecil">Pekok Kecil
                                                            @endif
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            @php ($status = false)
                                                            @foreach($kondisibarang as $kondisi)
                                                            @if($kondisi == 'Pekok Parah')
                                                            @php ($status = true)
                                                            @endif
                                                            @endforeach
                                                            @if($status == true)
                                                            <input type="checkbox" name="kondisi" value="Pekok Parah" checked>Pekok Parah
                                                            @else
                                                            <input type="checkbox" name="kondisi" value="Pekok Parah">Pekok Parah
                                                            @endif
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            @php ($status = false)
                                                            @foreach($kondisibarang as $kondisi)
                                                            @if($kondisi == 'Bengkok')
                                                            @php ($status = true)
                                                            @endif
                                                            @endforeach
                                                            @if($status == true)
                                                            <input type="checkbox" name="kondisi" value="Bengkok" checked>Bengkok
                                                            @else
                                                            <input type="checkbox" name="kondisi" value="Bengkok">Bengkok
                                                            @endif
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            @php ($status = false)
                                                            @foreach($kondisibarang as $kondisi)
                                                            @if($kondisi == 'Rusak')
                                                            @php ($status = true)
                                                            @endif
                                                            @endforeach
                                                            @if($status == true)
                                                            <input type="checkbox" name="kondisi" value="Rusak" checked>Rusak
                                                            @else
                                                            <input type="checkbox" name="kondisi" value="Rusak">Rusak
                                                            @endif
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                    	</div>
                                    	<div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Tanggal Masuk
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="stokLimit" value="{{$detailbarang->tanggalmasuk}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel-heading col-lg-2">
                                                    Baki
                                                </div>
                                                <div class="col-lg-2">
                                                    <select class="form-control" name="stokbarang">
                                                        <option selected>{{$detailbarang->stok}}</option>
                                                        <option>Dalam</option>
                                                        <option>Baki 1</option>
                                                        <option>Baki 2</option>
                                                        <option>Baki 3</option>
                                                        <option>Baki 4</option>
                                                        <option>Baki 5</option>
                                                        <option>Baki 6</option>
                                                        <option>Baki 7</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br><br>
                                        <div class="row">
                                            <div class="col-lg-12 text-right">
                                                <div class="panel-heading col-lg-2">
                                                    <button type="button" class="btn btn-success">Edit</button>
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