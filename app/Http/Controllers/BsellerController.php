<?php

namespace App\Http\Controllers;

use App\Bseller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class BsellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bseller = bseller::all();
        return view('data_bseller',['bseller'=>$bseller]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah.tambah_branch_seller');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $input = DB::table('tbl_branch_seller')->insert([

                'kd_branch' => $request->kd_branch,
                'nama_branch' => $request->nama_branch,
                'id_seller' => $request->id_seller,
                'alamat' => $request->alamat,
                'phone'=> $request->phone,
                'email'=> $request->email,
                'waktu_pengajuan' => $request->waktu_pengajuan,
                'waktu_approve' => $request->waktu_approve,
                'status_branch' =>$request->status_branch,
                'active' =>1

            ]);   

        return redirect('/bseller')->with('status','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bseller  $bseller
     * @return \Illuminate\Http\Response
     */
    public function show(Bseller $bseller)
    {

        
        $alamat = $bseller['alamat'];

         $id_kel = substr($alamat, 0, 10);
         $id_kec = substr($alamat,11,6);
         $id_kab = substr($alamat,11,4);
         $id_prov = substr($alamat,23,2);

        

         $kel =DB::table('tbl_kelurahan')->where('id_kel',$id_kel)->get();
         foreach ($kel as $id_kel) {
         }
             $kec =DB::table('tbl_kecamatan')->where('id_kec',$id_kec)->get();
         foreach ($kec as $id_kec) {
         }

            $kab =DB::table('tbl_kabupaten')->where('id_kab',$id_kab)->get();
         foreach ($kab as $id_kab) {
         }
          $prov =DB::table('tbl_provinsi')->where('id_prov',$id_prov)->get();
         foreach ($prov as $id_prov) {
         }
            $kelurahan =  $id_kel->nama;
            $kecamatan =  $id_kec->nama;
            $kabupaten = $id_kab->nama;
            $provinsi  = $id_prov->nama;

        return view('detail_branch_seller',['bseller'=>$bseller,'kel'=>$kelurahan,'kec'=>$kecamatan,'kab'=>$kabupaten,'prov'=>$provinsi]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bseller  $bseller
     * @return \Illuminate\Http\Response
     */
    public function edit(Bseller $bseller)
    {
        

        return view('edit_branch_seller',['bseller'=>$bseller]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bseller  $bseller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bseller $bseller)
    {
        
          $id = $bseller['id'];


        DB::table('tbl_branch_seller')->where('id',$id)->update([


                'kd_branch' => $request->kd_branch,
                'nama_branch' => $request->nama_branch,
                'id_seller' => $request->id_seller,
                'alamat' => $request->alamat,
                'phone'=> $request->phone,
                'email'=> $request->email,
                'waktu_pengajuan' => $request->waktu_pengajuan,
                'waktu_approve' => $request->waktu_approve,
                'status_branch' =>$request->status_branch,
                'active' =>$request->active

    ]);

         return redirect('/bseller')->with('status','Data berhasil diubah');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bseller  $bseller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bseller $bseller)
    {
            $id = $bseller['id'];
              DB::table('tbl_branch_seller')->where('id',$id)->delete();
               return redirect('/bseller')->with('status','Data berhasil dihapus');
    



    }


    function disable (Bseller $bseller){

        $id = $bseller['id'];
        
        DB::table('tbl_branch_seller')->where('id',$id)->update([


                'status_branch' =>'active',
        

    ]);

        return redirect('/bseller')->with('status','Branc seller berhasil di activekan');
    }


    function active(Bseller $bseller){


        $id = $bseller['id'];

        DB::table('tbl_branch_seller')->where('id',$id)->update([

            'status_branch'=> 'disable',
        ]);

        return redirect('/bseller')->with('status','Branch seller berhasil di disable');

    }


    function cetak_pdf(){

        $bseller = Bseller::all();

        $pdf = PDF::loadview('cetak.cetak_bseller',['bseller'=>$bseller])->setpaper('A4','landscape');

        return $pdf->stream();
}

}
