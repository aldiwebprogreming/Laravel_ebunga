<?php

namespace App\Http\Controllers;

use App\Bseller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bseller  $bseller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bseller $bseller)
    {
        //
    }
}
