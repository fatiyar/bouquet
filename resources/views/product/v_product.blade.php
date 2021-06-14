
@extends('layout.v_template')

@section('title','Product')
@section('halaman','Product')

@section('content')
<a href="/product/add" class="btn btn-primary">Add Product</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id Product</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Gambar</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Kategori</th>
      <th scope="col">Stok</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $no=1 ?>
      @foreach($product as $data)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$data->id_product}}</td>
        <td>{{$data->nama_product}}</td>
        <td>{{$data->harga_product}}</td>
        <td><img src="{{url('gambar/'.$data->gambar)}}" width="150px"></td>
        <td>{{$data->deskripsi}}</td>
        <td>{{$data->kategori}}</td>
        <td>{{$data->stock}}</td>
        <td>
        <a href="/product/detail/{{$data->id_product}}" class="btn btn-success">detail</a>
        <a href="/product/edit/{{$data->id_product}}"class="btn btn-warning">edit</a>
        <a href="/product/delete/{{$data->id_product}}"class="btn btn-danger">delete</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection