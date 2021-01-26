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
        return view('detail_branch_seller',['bseller'=>$bseller]);
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
        $pdf = PDF::loadview('cetak_bseller',['bseller'=>$bseller]);

       $data = json_encode($bseller);
        
      echo $data->alamat;
        
}

}
