<?php

namespace App\Http\Controllers;

use App\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class VariantController extends Controller
{
   
    public function index()
    {

        $variant = Variant::all();
        return view('data_variant',['variant'=>$variant]);
    }

   
    public function create()
    {
        $kode = mt_rand(1000,10000);
        $kode1 = mt_rand(1000,10000);
        $kd_variant = "EBUNGA_VAR_EBUNGA".$kode."_".$kode1;
        $produk = DB::table('tbl_produk')->get();

        return view('tambah.tambah_variant',['kd_variant'=>$kd_variant,'produk'=>$produk]);
    }

 
    public function store(Request $request)
    {
       DB::table('tbl_variant')->insert([

            'kd_variant'=>$request->kd_variant,
            'kd_product' =>$request->kd_produk,
            'nama_variant'=>$request->nama_variant,
            'deks_variant' =>$request->deks_variant,
            'active' => 1

       ]);

       return redirect('/variant')->with('status','Data berhasil ditambah');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function show(Variant $variant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function edit(Variant $variant)
    {
        
        $produk = DB::table('tbl_produk')->get();
        return view('edit_variant',['produk'=>$produk,'variant'=>$variant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variant $variant)
    {
        $id = $variant['id'];

        $update = DB:: table('tbl_variant')->where('id',$id)->update([

            'kd_variant' =>$request->kd_variant,
            'kd_product' => $request->kd_produk,
            'nama_variant'=>$request->nama_variant,
            'deks_variant' =>$request->deks_variant,
            'active' => $request->active,


        ]);


        if ($update == true) {
            return redirect('/variant')->with('status','Data berhasil diubah');
        } else{

            return redirect('/variant')->with('error','Data gagal untuk diubah');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Variant $variant)
    {
        $id = $variant['id'];
        DB::table('tbl_variant')->where('id',$id)->delete();
        return redirect('/variant')->with('status','Data berhasil dihapus');
    }

     function cetak(){

        $variant = variant::all();

        $data['judul'] = "VARIANT PRODUK";
        $data['footer'] = "Laporan data variant produk ebunga dicetak pada tanggal";
        $pdf = PDF::loadview('cetak.cetak_variant',['variant'=>$variant],$data)->setpaper('A4','landscape');
        return $pdf->stream();
}

}
