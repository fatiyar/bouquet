@extends('layout.v_template')

@section('title',' Add Kasir')
@section('halaman','Add Kasir')

@section('content')
<form action="/product/insert" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label for="exampleInputNamaproduct">ID Transaksi</label>
    <input type="Text" class="form-control" id="id_transaksi" name="id_transaksi" placeholder="Masukan ID Transaksi" value="{{old('id_product')}}">
    <div class="text-danger">
    @error('id_transaksi')
    {{$message}}
    @enderror
    </div>
</div>

<div class="form-group">
    <label for="exampleInputNamaproduct">ID User</label>
    <input type="Text" class="form-control" id="id_user" name="id_user" placeholder="Masukan ID User" value="{{old('id_product')}}">
    
    <div class="text-danger">
    @error('id_user')
    {{$message}}
    @enderror
    </div>
</div>

<div class="form-group">
    <label for="exampleInputNamaproduct">ID Product</label>
    <input type="Text" class="form-control" id="id_product" name="id_product" placeholder="Masukan ID" value="{{old('id_product')}}">
    <div class="text-danger">
    @error('id_product')
    {{$message}}
    @enderror
    </div>
</div>

<div class="form-group">
    <label for="exampleInputNamaproduct">Total</label>
    <input type="Text" class="form-control" id="total" name="total" placeholder="Masukan Total" value="{{old('nama_product')}}">
    <div class="text-danger">
    @error('total')
    {{$message}}
    @enderror
    </div>
</div>

<div class="form-group">
    <label for="exampleInputNamaproduct">Status</label>
    <input type="Text" class="form-control" id="status" name="status" placeholder="Masukan Status" value="{{old('harga_product')}}">
    <div class="text-danger">
    @error('status')
    {{$message}}
    @enderror
    </div>
</div>

<div class="form-group">
    <label for="exampleInputNamaproduct">Konfirmasi</label>
    <input type="Text" class="form-control" id="konfirmasi" name="konfirmasi" placeholder="Masukan Konfirmasi" value="{{old('kategori')}}">
    <div class="text-danger">
    @error('konfirmasi')
    {{$message}}
    @enderror
    </div>
</div>

<div class="form-group">
  <button class="btn btn-primary btn-sm">Simpan</button>
</div>

 </form>
@endsection