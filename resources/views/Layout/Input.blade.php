@extends('Layout.Home')
@section('content')
<div class="row">

<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">INPUT BARANG</h3>
							
						</div>
                        <form action=" {{(isset($barang))?route('Barang.update',$barang->id):route('Barang.store')}}" method="POST">
						@csrf
                        @if(isset($barang))?@method('PUT')@endif
                        <div class="panel">
								<div class="panel-body">
									<input class="form-control input-lg" value="{{(isset($barang))?$barang->nama:old('nama')}}" name="nama" placeholder="Nama Barang" type="text">
									@error ('nama')<small style="color:red">{{$message}}</small>@enderror
                                    <br>
									<input class="form-control input-lg" value="{{(isset($barang))?$barang->harga:old('harga')}}" name="harga" placeholder="Harga Barang" type="text">
									@error ('harga')<small style="color:red">{{$message}}</small>@enderror
                                    <br>
									<p>KATEGORI</p>
									<br>
                                    <div class="form-group">
									<select name="kategori" class="form-control input-lg">
										<option value="Buah">Buah</option>
										<option value="Pakaian">Pakaian</option>
										<option value="Bumbu">Bumbu</option>
                                        <option value="Sayur">Sayur</option>
										<option value="Perkakas">Perkakas</option>
										<option value="Daging">Daging</option>s
									</select>
                                    </div>
								</div>
                        <div class="from-group">
                            <button type="submit">SIMPAN</button>
                        </div>
						</div>    
                        </div>
                        </form>
                        </div>
@endsection