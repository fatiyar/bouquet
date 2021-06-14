@extends('layout.v_template')

@section('title','Edit Product')
@section('halaman','Edit Product')

@section('content')

<form action="/product/update/{{$product->id_product}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
      <div class="row">
        <div class="col-sm-6">

        <div class="form-group">
          <label>Product</label>
          <input type="Text" class="form-control" name="id_product" id="id_product" value="{{$product->id_product}}" readonly>
          <div class="text-danger">
            @error('id_product')
            {{$message}}
            @enderror
          </div>
        </div>
        
        <div class="form-group">
          <label>Nama Product</label>
          <input type="Text" class="form-control" name="nama_product" id= "nama_product" value="{{$product->nama_product}}">
          <div class="text-danger">
            @error('nama_product')
            {{$message}}
            @enderror
          </div>
        </div>
        
        <div class="form-group">
          <label>Harga</label>
          <input type="Text" class="form-control" name="harga_product" id="harga_product" value="{{$product->harga_product}}">
          <div class="text-danger">
            @error('harga_product')
            {{$message}}
            @enderror
          </div>
        </div>

        <div class="col-sm 12">
          <div class="col-sm-4">
            <img src="{{ url('gambar/'.$product->gambar) }}" width="250px">
          </div>
          <div class="com-sm-8">
          <div class="form-group">
            <label>Ubah Gambar</label>
            <input type="File" class="form-control" name="gambar" id="gambar" value="{{$product->gambar}}">
            <div class="text-danger">
              @error('gambar')
                {{$message}}
              @enderror
            </div>
        </div>
          </div>
        </div>
        

        <div class="form-group">
          <label>Kategori</label>
          <input type="Text" class="form-control" name="kategori" id="kategori" value="{{$product->kategori}}">
          <div class="text-danger">
            @error('kategori')
            {{$message}}
            @enderror
          </div>
        </div>
        
        <div class="form-group">
          <label>Stok</label>
          <input type="Text" class="form-control" name="stock" id="stock" value="{{$product->stock}}">
          <div class="text-danger">
            @error('stock')
            {{$message}}
            @enderror
          </div>
        </div>

        <div class="form-group">
          <label>Description</label>
          <input type="Text" class="form-control" name="deskripsi" id="deskripsi" value="{{$product->deskripsi}}">
          <div class="text-danger">
            @error('deskripsi')
            {{$message}}
            @enderror
          </div>
        </div>

        <div class="form-group">
          <button class="btn btn-primary btn-sm"> Simpan </button>
        </div>
        

        </div>
      </div>
    </div>
</form>
@endsection