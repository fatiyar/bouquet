<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasirmodel;
use App\Models\Productmodel;
use Auth;

class Kasircontroller extends Controller
{
    public function __construct(){
        $this->Kasirmodel = new Kasirmodel();
        $this->Productmodel = new Productmodel();
    }

    public function index(){
        $data = [
            'kasir' => $this->Kasirmodel->alldata()
        ];
        return view('kasir.v_kasir', $data);
    }

    public function detailpesan($id_product){
        $data = [
            'product' => $this->Productmodel->detaildata($id_product),
        ];
        return view('kasir.v_detailpesan', $data);
    }

    public function update($id_product)
    {
        $id_produk = $this->Productmodel->detaildata($id_product);

        $data = [
            'stock'=> $id_produk->stock - Request()->stok,
        ];

        $this->Productmodel->editdata($id_product, $data);
        $datas = [
            'id_user' => Auth::user()->id,
            'id_product' => $id_produk->id_product,
            'total' => $id_produk->harga_product * Request()->stok,
        ];

        $this->Kasirmodel->insert($datas);
        return redirect()->route('kasir');
    }

    public function konfirmasi(){
        $data = [
            'kasir' => $this->Kasirmodel->alldatas()
        ];
        return view('kasir.v_konfirmasi', $data);
    }

    public function setujui($id_transaksi){
        $transaksi = $this->Kasirmodel->detaildata($id_transaksi);
        $data = [
            'konfirmasi' => 1,
        ];
        $this->Kasirmodel-> editdata($id_transaksi,$data);
        return redirect()->route('konfirmasi');
    }

    public function batalkan($id_transaksi){
        $transaksi = $this->Kasirmodel->detaildata($id_transaksi);
        $data = [
            'konfirmasi' => 0,
        ];
        $this->Kasirmodel-> editdata($id_transaksi,$data);
        return redirect()->route('konfirmasi');
    }
}
