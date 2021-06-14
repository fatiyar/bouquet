@extends('layout.v_template')

@section('title','Detail Product')
@section('halaman','Detail Product')
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
      <th><a href="/product" class="btn btn-success tbn-sm"> Kembali </a></th>
    </tr>
</table>
@endsection