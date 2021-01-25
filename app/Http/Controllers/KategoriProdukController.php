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
     * @param  \App\Kproduk  $kproduk
     * @return \Illuminate\Http\Response
     */
    public function show(Kproduk $kproduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kproduk  $kproduk
     * @return \Illuminate\Http\Response
     */
    public function edit(Kproduk $kproduk)
    {
        return view('editkategori',['kategori'=>$kategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kproduk  $kproduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kproduk $kproduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kproduk  $kproduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kproduk $kproduk)
    {
        //
    }
}
