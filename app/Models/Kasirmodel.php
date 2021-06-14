<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class Kasirmodel extends Model
{
    use HasFactory;

    public function alldata(){
        return DB::table('kasir')->where('id_user', Auth::user()->id)->get();
    }

    public function alldatas(){
        return DB::table('kasir')->get();
    }

    public function detaildata($id_transaksi)
    {
        return  DB::table('kasir')->where('id_transaksi', $id_transaksi)->first();
    }

    public function insert($datas){
        return DB::table('kasir')->insert($datas);
    }

    public function editdata($id_transaksi,$data){
        return DB::table('kasir')->where('id_transaksi', $id_transaksi)->update($data);
    }
     
    public function deletedata($id_transaksi){
        return DB::table('kasir')->where('id_transaksi', $id_transaksi)->delete();
    } 

}
