<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $member = Member::all();

        return view('data_member',['member'=>$member]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $country = DB::table('tbl_country_support')->get();
        $prov = DB::table('tbl_provinsi')->get();
       return view('tambah.tambah_member',['country'=>$country,'prov'=>$prov]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {   
        $id_count = $member['country'];
        $id_prov = $member['provinsi'];
        $id_kab = $member['kabupaten'];
        $id_kec = $member['kecamatan'];
        $id_kel = $member['kelurahan'];

        $negara = DB::table('tbl_country_support')->where('id', $id_count)->get();
        $prov = DB::table('tbl_provinsi')->where('id_prov', $id_prov)->get();
        $kab = DB::table('tbl_kabupaten')->where('id_kab', $id_kab)->get();
        $kec = DB::table('tbl_kecamatan')->where('id_kec', $id_kec)->get();
        $kel = DB::table('tbl_kelurahan')->where('id_kel', $id_kel)->get();
        
        return view('detail_member',['member'=>$member,'prov'=>$prov,'kab'=>$kab,'kec'=>$kec,'kel'=>$kel,'country'=>$negara]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        
         $id_count = $member['country'];
        $id_prov = $member['provinsi'];
        $id_kab = $member['kabupaten'];
        $id_kec = $member['kecamatan'];
        $id_kel = $member['kelurahan'];

        $negara = DB::table('tbl_country_support')->where('id', $id_count)->get();
        $prov = DB::table('tbl_provinsi')->where('id_prov', $id_prov)->get();
        $kab = DB::table('tbl_kabupaten')->where('id_kab', $id_kab)->get();
        $kec = DB::table('tbl_kecamatan')->where('id_kec', $id_kec)->get();
        $kel = DB::table('tbl_kelurahan')->where('id_kel', $id_kel)->get();

        $prov2 = DB::table('tbl_provinsi')->get();
        
        return view('edit_member',['member'=>$member,'prov'=>$prov,'kab'=>$kab,'kec'=>$kec,'kel'=>$kel,'country'=>$negara,'prov2'=>$prov2]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
     
        $id = $member['id'];


        $update = DB:: table('tbl_member')->where('id',$id)->update([

            'username' =>$request->username,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'postal_code' => $request->postal_code,
            'alamat' => $request->alamat,
            'ktp' => $request->ktp,
            'npwp' => $request->npwp,
            'siup' => $request->siup,
            'status' => $request->status,
            'suspend' => $request->suspend,
        ]);

        
            return redirect('/member')->with('status','Data berhasil diubah');
     

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
