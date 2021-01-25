<?php

namespace App\Http\Controllers;

use App\Regisuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regisuser = Regisuser::all();
        return view('data_registrasi_user',['regisuser'=>$regisuser]);
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
     * @param  \App\Regisuser  $regisuser
     * @return \Illuminate\Http\Response
     */
    public function show(Regisuser $regisuser)
    {
        return view('detail_registrasi',['regisuser'=>$regisuser]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Regisuser  $regisuser
     * @return \Illuminate\Http\Response
     */
    public function edit(Regisuser $regisuser)
    {
        return view('edit_regisuser',['regisuser'=>$regisuser]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Regisuser  $regisuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regisuser $regisuser)
    {
          $id = $regisuser['id'];


        DB::table('tbl_registrasi_user')->where('id',$id)->update([

            'kd_registrasi' => $request->kd_registrasi,
            'token_registrasi'=>$request->token_registrasi,
            'full_name'=>$request->full_name,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email,
            'password'=>$request->password,
            'waktu_registrasi'=>$request->waktu_registrasi,
            'referall_code'=>$request->referall_code,
            'status_aktivasi'=>$request->status_aktivasi,
            'waktu_aktivasi'=>$request->waktu_aktivasi
    ]);

      
        
         return redirect('/regisuser')->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Regisuser  $regisuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regisuser $regisuser)
    {
        $regisuser = Regisuser::find($regisuser->id);

        $regisuser->delete();
         return redirect('/regisuser')->with('status','Data berhasil dihapus');
    }
}
