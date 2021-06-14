@extends('layout.v_template')

@section('title','Konfirmasi')
@section('halaman','Konfirmasi')

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
      <th scope="col">Aksi</th>
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
        <td>
        <a href="/konfirmasi/setujui/{{$data->id_transaksi}}" class="btn btn-success">Setujui</a>
        <a href="/konfirmasi/batalkan/{{$data->id_transaksi}}"class="btn btn-danger">Batalkan</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection