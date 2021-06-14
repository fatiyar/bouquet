<?php

namespace App\Http\Controllers;
use App\Models\Productmodel;

use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    public function __construct(){
        $this->Productmodel = new Productmodel();
    }
    public function index (){
        $data = [
            'product' => $this->Productmodel->alldata()
        ];
        return view('product.v_product', $data);
    }

    public function landing(){
        $data = [
            'product' => $this->Productmodel->alldata()
        ];
        return view('landing.v_content', $data);
    }

    public function detail($id_product)
    {
        if (!$this->Productmodel->detaildata($id_product)) {
            abort(404);
        }
        $data = [
        'product' => $this->Productmodel->detaildata($id_product),
    ];
    return view('product.v_detailproduct', $data);
    }

    public function add(){
        return view('product.v_addproduct');
    }

    public function insert(){
        Request()->validate([
           'id_product'=> 'required', 
           'nama_product'=> 'required', 
           'harga_product'=> 'required',
           'gambar'=> 'required|mimes:jpg,jpeg,bmp,png|max:1024',
           'kategori'=> 'required',
           'stock'=> 'required',
           'deskripsi'=> 'required',
        ],[
            'id_product.required'=> 'Wajib diisi !!',
            'nama_product.required'=> 'Wajib diisi !!',
            'harga_product.required'=> 'Wajib diisi !!',
            'gambar.required'=> 'Wajib diisi !!',
            'kategori.required'=> 'Wajib diisi !!',
            'stock.required'=> 'Wajib diisi !!',
            'deskripsi.required'=> 'Wajib diisi !!',
        ]);

        $file = Request()->gambar;
        $fileName = Request()->id_product.'.'.$file->extension();
        $file->move(public_path('gambar'), $fileName);

        $data = [
            'id_product'=> Request()->id_product,
            'nama_product'=> Request()->nama_product,
            'harga_product'=> Request()->harga_product,
            'gambar'=> $fileName,
            'kategori'=> Request()->kategori,
            'stock'=> Request()->stock,
            'deskripsi'=> Request()->deskripsi,
        ];

        $this->Productmodel->insert($data);

        return redirect()->route('product')->with('pesan','Data Berhasil Ditambahkan');
    }
    //ini fungsi untuk pindah ke form edit
    public function edit($id_product)
    {
        if (!$this->Productmodel->detaildata($id_product)) {
            abort(404);
        }
        $data = [
        'product' => $this->Productmodel->detaildata($id_product),
    ];
    return view('product.v_editproduct', $data);
    }

    public function update($id_product)
    {
            Request()->validate([
                'id_product'=> 'required', 
                'nama_product'=> 'required', 
                'harga_product'=> 'required',
                'kategori'=> 'required',
                'stock'=> 'required',
                'deskripsi'=> 'required',
             ],[
                 'id_product.required'=> 'Kode ini sudah ada',
                 'nama_product.required'=> 'Wajib diisi',
                 'harga_product.required'=> 'Wajib diisi',
                 'kategori.required'=> 'Wajib diisi',
                 'stock.required'=> 'Wajib diisi',
                 'deskripsi.required'=> 'Wajib diisi',
             ]);
             if (Request()->gambar <> "") {
                $file = Request()->gambar;
                $fileName = Request()->id_product.'.'.$file->extension();
                $file->move(public_path('gambar'), $fileName);
        
                $data = [
                    'id_product'=> Request()->id_product,
                    'nama_product'=> Request()->nama_product,
                    'harga_product'=> Request()->harga_product,
                    'gambar'=> $fileName,
                    'kategori'=> Request()->kategori,
                    'stock'=> Request()->stock,
                    'deskripsi'=> Request()->deskripsi,
                ];

                $this->Productmodel->editdata($id_product, $data);
             }else{
                $data = [
                    'id_product'=> Request()->id_product,
                    'nama_product'=> Request()->nama_product,
                    'harga_product'=> Request()->harga_product,
                    'kategori'=> Request()->kategori,
                    'stock'=> Request()->stock,
                    'deskripsi'=> Request()->deskripsi,
                ];

                $this->Productmodel->editdata($id_product, $data); 
             }

             return redirect()->route('product')->with('pesan', 'Data Berhasil Diubah');
             }

             public function delete($id_product){
                 $product = $this->Productmodel->detaildata($id_product);
                 if($product->gambar<>""){
                 unlink(public_path('gambar').'/'.$product->gambar);
             }
             $this->Productmodel->deletedata($id_product);
             return redirect()->route('product')->with('pesan', 'Data Berhasil Dihapus');
    }
}
