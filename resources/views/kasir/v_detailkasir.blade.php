@extends('layout.v_template')

@section('title','Detail Kasir')
@section('halaman','Detail Kasir')
@section('content')

<table class="table">
<tr>
    <th width="150px">ID transaksi</th>
    <th width="30px">:</th>
    <th>{{$kasir->id_transaksi}}</th>
</tr>

<tr>
    <th width="150px">ID user</th>
    <th width="30px">:</th>
    <th>{{$kasir->id_user}}</th>
</tr>

<tr>
    <th width="150px">ID produk</th>
    <th width="30px">:</th>
    <th>{{$kasir->id_product}}</th>
</tr>

<tr>
    <th width="150px">Total</th>
    <th width="30px">:</th>
    <th>{{$kasir->total}}</th>
</tr>

<tr>
    <th width="150px">Status</th>
    <th width="30px">:</th>
    <th>{{$kasir->status}}</th>
</tr>

<tr>
    <th width="150px">Konfirmasi</th>
    <th width="30px">:</th>
    <th>{{$kasir->konfirmasi}}</th>
</tr>

<tr>
    <th width="150px">Stok</th>
    <th width="30px">:</th>
    <th>{{$kasir->stock}}</th>
</tr>

<tr>
    <th width="150px">Deskripsi</th>
    <th width="30px">:</th>
    <th>{{$kasir->deskripsi}}</th>
</tr>

<tr>
      <th><a href="/product" class="btn btn-success tbn-sm"> Kembali </a></th>
    </tr>
</table>
@endsection