@extends('landing.v_landing')

@section('title',' Add Product')
@section('halaman','Add Product')

@section('content')

<div class="card-deck">
@foreach($product as $data)
<div class="card" style="width: 10rem;">
  <img src="{{url('gambar/'.$data->gambar)}}" class="card-img-top" alt="...">
  <div class="card-body">
  <!-- <p>{{$data->id_product}}</p> -->
        <p> Nama Produk= {{$data->nama_product}}</p>
        <p> Rp.{{number_format($data->harga_product)}}</p>
        <p>{{$data->deskripsi}}</p>
        <p>{{$data->kategori}}</p>
        <p>{{$data->stock}}</p>
        <a href="/kasir/detail/{{$data->id_product}}" class="btn btn-primary"><span> Pesan </span></a>
  </div>
  </div>
  @endforeach
</div>

    
@endsection