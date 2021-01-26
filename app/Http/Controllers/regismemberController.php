<?php

namespace App\Http\Controllers;

use App\Regismember;
use Illuminate\Http\Request;

class regismemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regismember = Regismember::all();
        return view('data_registrasi_member',['regismember'=>$regismember]);
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
     * @param  \App\Regismember  $regismember
     * @return \Illuminate\Http\Response
     */
    public function show(Regismember $regismember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Regismember  $regismember
     * @return \Illuminate\Http\Response
     */
    public function edit(Regismember $regismember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Regismember  $regismember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regismember $regismember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Regismember  $regismember
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regismember $regismember)
    {
        //
    }
}
