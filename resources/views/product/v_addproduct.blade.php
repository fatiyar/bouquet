@extends('layout.v_template')

@section('title',' Add Product')
@section('halaman','Add Product')

@section('content')
 <form action="/product/insert" method="POST" enctype="multipart/form-data">
 @csrf
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
    <label for="exampleInputNamaproduct">Nama Product</label>
    <input type="Text" class="form-control" id="nama_product" name="nama_product" placeholder="Masukan Nama Produk" value="{{old('nama_product')}}">
    <div class="text-danger">
    @error('nama_product')
    {{$message}}
    @enderror
    </div>
  </div>

  <div class="form-group">
    <label for="exampleInputNamaproduct">Harga</label>
    <input type="Text" class="form-control" id="harga_product" name="harga_product" placeholder="Masukan Harga" value="{{old('harga_product')}}">
    <div class="text-danger">
    @error('harga_product')
    {{$message}}
    @enderror
    </div>
     </div>

  <div class="form-group">
    <label for="exampleInputNamaproduct">Gambar</label>
    <input type="file" class="form-control" name="gambar" placeholder="Masukan gambar" value="{{old('gambar')}}">
    <div class="text-danger">
    @error('gambar')
    {{$message}}
    @enderror
    </div>
  </div>

  <div class="form-group">
    <label for="exampleInputNamaproduct">Kategori</label>
    <input type="Text" class="form-control" id="kategori" name="kategori" placeholder="Masukan Kategori" value="{{old('kategori')}}">
    <div class="text-danger">
    @error('kategori')
    {{$message}}
    @enderror
    </div>
  </div>

  <div class="form-group">
    <label for="exampleInputNamaproduct">Stock</label>
    <input type="Text" class="form-control" id="stock" name="stock" placeholder="Masukan Stock" value="{{old('stock')}}">
    <div class="text-danger">
    @error('stock')
    {{$message}}
    @enderror
    </div>
  </div>

  <div class="form-group">
    <label for="exampleInputNamaproduct">Deskripsi</label>
    <input type="Text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi" value="{{old('deskripsi')}}">
    <div class="text-danger">
    @error('deskripsi')
    {{$message}}
    @enderror
    </div>
  </div>

  <div class="form-group">
  <button class="btn btn-primary btn-sm">Simpan</button>
  </div>

 </form>
@endsection