<?php

namespace App\Http\Controllers;

use App\Seller;
use Illuminate\Http\Request;
use PDF;

class SellerController extends Controller
{
  
    public function index()
    {
        $seller = Seller::all();
        return view('data_seller',['seller'=>$seller]);
        
    }


    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $seller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        //
    }

     function cetak(){

        $seller = seller::all();

        $data['judul'] = "SELLER EBUNGA";
        $data['footer'] = "Laporan data seller ebunga dicetak pada tanggal";
        $pdf = PDF::loadview('cetak.cetak_seller',['seller'=>$seller],$data)->setpaper('LEGAL','landscape');
        return $pdf->stream();
}


}
