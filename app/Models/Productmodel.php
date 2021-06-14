<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Productmodel extends Model
{
    use HasFactory;

    public function alldata(){
        return DB::table('product')->get();
    }

    public function detaildata($id_product)
    {
        return  DB::table('product')->where('id_product', $id_product)->first();
    }

    public function insert($data){
        return DB::table('product')->insert($data);
    }

    public function editdata($id_product,$data){
        return DB::table('product')->where('id_product', $id_product)->update($data);
    }
     
    public function deletedata($id_product){
        return DB::table('product')->where('id_product', $id_product)->delete();
    } 


}
