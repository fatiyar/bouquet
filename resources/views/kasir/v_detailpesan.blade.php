@extends('layout.v_template')

@section('title','Detail Pesan')
@section('halaman','Detail Pesan')
@section('content')
<table class="table">
<tr>
    <th width="150px">ID produk</th>
    <th width="30px">:</th>
    <th>{{$product->id_product}}</th>
</tr>

<tr>
    <th width="150px">Nama produk</th>
    <th width="30px">:</th>
    <th>{{$product->nama_product}}</th>
</tr>

<tr>
    <th width="150px">Harga Produk</th>
    <th width="30px">:</th>
    <th>{{$product->harga_product}}</th>
</tr>

<tr>
    <th width="150px">Gambar</th>
    <th width="30px">:</th>
    <th><img src="{{url('gambar/'.$product->gambar)}}" width="250"></td>
</tr>

<tr>
    <th width="150px">Kategori</th>
    <th width="30px">:</th>
    <th>{{$product->kategori}}</th>
</tr>

<tr>
    <th width="150px">Stok</th>
    <th width="30px">:</th>
    <th>{{$product->stock}}</th>
</tr>

<tr>
    <th width="150px">Deskripsi</th>
    <th width="30px">:</th>
    <th>{{$product->deskripsi}}</th>
</tr>

<tr>
      
<form action="/kasir/update/{{$product->id_product}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="mb-3">
    <label for="" class="form-label">Jumlah Pesan</label>
    <input type="text" class="form-control" id="stok" name="stok" placeholder="Masukkan Jumlah Pesan">
  </div>
  <button type="submit" class="btn btn-primary">Pesan</button>
</form>
      
    </tr>
</table>

@endsection