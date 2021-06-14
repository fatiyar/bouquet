@extends('layout.v_template')

@section('title','Kasir')
@section('halaman','Kasir')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">No </th>
      <th scope="col">Id Transaksi</th>
      <th scope="col">Id User</th>
      <th scope="col">Id Product</th>
      <th scope="col">Total</th>
      <th scope="col">Konfirmasi</th>
    </tr>
  </thead>
  <tbody>
      <?php $no=1 ?>
      @foreach($kasir as $data)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$data->id_transaksi}}</td>
        <td>{{$data->id_user}}</td>
        <td>{{$data->id_product}}</td>
        <td>{{$data->total}}</td>
        <td>{{$data->konfirmasi}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection