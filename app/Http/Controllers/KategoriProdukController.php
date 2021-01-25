<?php

namespace App\Http\Controllers;

use App\Kproduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //;
        $kproduk = Kproduk::all();
        return view('data_kategori',['kategori'=>$kproduk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah.tambah_kategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('tbl_kategori_produk')->insert([

            'kd_kategori' =>$request->kd_kategori,
            'nama_kategori' => $request->nama_kategori,
            'deks' => $request->deks,
            'active' => 1,



        ]);

        return redirect('/kategori')->with('status','Data berhasil ditambahkan');
    }

  
    public function show(Kproduk $kproduk)
    {
        //
    }

  
    public function edit(Kproduk $kproduk)
    {
        return view('edit_kategori',['kategori'=>$kproduk]);
    }

  
    public function update(Request $request, Kproduk $kproduk)
    {
        $id = $kproduk['id'];

        DB::table('tbl_kategori_produk')->where('id',$id)->update([
             'kd_kategori' =>$request->kd_kategori,
            'nama_kategori' => $request->nama_kategori,
            'deks' => $request->deks,
           
        ]);

        return redirect('/kategori')->with('status',"Data berhasil diubah");
    }

  
    public function destroy(Kproduk $kproduk)
    {
        $id = $kproduk['id'];

        DB::table('tbl_kategori_produk')->where('id',$id)->delete();

        return redirect('/kategori')->with('status','Data berhasil dihapus');
    }
}
