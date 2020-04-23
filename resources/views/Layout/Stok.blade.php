@extends('Layout.Home')
@section('content')
<div class="row">

<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Dasboard</h3>
							<p class="panel-subtitle">APRIL 2020</p>
						</div>
						<div class="panel-body">
                        <div class="col-lg-12">
						<div class="row">
						<div class="col-md-6">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">BIODATA</h3>
								</div>
								<div class="panel-body">
                                    <p>Nama : I Gede Pande Darma Suardika</p>
                                    <P>NIM : 1815051023</P>
                                    <P>Prodi : Pendidikan Teknik Informatika</P>
                                </div>
								
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
						<div class="col-md-6">
							<!-- MULTI CHARTS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Studi Kasus</h3>
								</div>
								<div class="panel-body">
                                    <p>Judul : Kasir</p>
                                    <p>Penjelasan : Mempermudah dalam manajemen data barang pada suatu toko</p>
								
								</div>
							</div>
                        </div>
                        <a href="{{route('Barang.create')}}">TAMBAH</a>
                        	<!-- END MULTI CHARTS -->
						<div class="col-lg-12">
                            <table class="table table-bordered">
                            <thead>
                                <tr><th>Nama</th><th>Harga</th><th>Kategori</th><th></th>></tr>
                            <tbody>
                                @foreach ( $barang as $in => $val)
                                <tr><td>{{$val->nama}}</td><td>{{$val->harga}}</td><td>{{$val->kategori}}</td>
                                <td><a href="{{route('Barang.edit',$val->id)}}">update</a>
                                <form action="{{route('Barang.destroy',$val->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type='sumbit'>delete</button>
                                <form>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </thead>
                            </table>    
                            {{$barang->links()}}
                        </div>
                        </div>
@endsection