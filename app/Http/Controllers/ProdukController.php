<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produk = Produk::all();
        return view('data_produk',['produk'=>$produk]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('tambah.tambah_produk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

         $this->validate($request, [
            'foto' => 'required',
           
        ]);

        $file = $request->file('foto');
        $tujuan_upload = 'gambar_produk';
        $file->move($tujuan_upload,$file->getClientOriginalName());

        if ($file == true) {

             $nama_produk = trim($request->nama_produk);
                $out = explode(" ",  strtolower($nama_produk));
                $slug = implode("-", $out);
            
             $input = DB::table('tbl_produk')->insert([

                'kd_produk' => $request->kd_produk,
                'nama_produk' => $request->nama_produk,
                'slug' => $slug,
                'deks_produk' => $request->deks_produk,
                'kategori' => $request->kategori,
                'sub_kategori' => $request->sub_kategori,
                'id_branch' => $request->id_branch,
                'id_seller' => $request->id_seller,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'active' => 1,
                'foto_utama'=> $file->getClientOriginalName()
              
                 

            ]);   

        return redirect('/produk')->with('status','Data berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        return view('detail_produk',['produk'=>$produk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        

        return view('edit_produk',['produk'=>$produk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
         $id = $produk['id'];

         $this->validate($request, [
            'foto' => 'required'
          
        ]);

        $file = $request->file('foto');
        $tujuan_upload = 'gambar_produk';
        $file->move($tujuan_upload,$file->getClientOriginalName());

            if ($file == true) {

                  $nama_produk = trim($request->nama_produk);
                $out = explode(" ",  strtolower($nama_produk));
                $slug = implode("-", $out);
            
               DB::table('tbl_produk')->where('id',$id)->update([

                'kd_produk' => $request->kd_produk,
                'nama_produk' => $request->nama_produk,
                'slug' => $slug,
                'deks_produk' => $request->deks_produk,
                'kategori' => $request->kategori,
                'sub_kategori' => $request->sub_kategori,
                'id_branch' => $request->id_branch,
                'id_seller' => $request->id_seller,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'active' => $request->active,
                'foto_utama'=> $file->getClientOriginalName()
                    

            ]);   

        return redirect('/produk')->with('status','Data berhasil diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        

        $produk = Produk::find($produk->id);

        $produk->delete();
         return redirect('/produk')->with('status','Data berhasil dihapus');
    }
}
