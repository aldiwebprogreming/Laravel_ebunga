<?php

namespace App\Http\Controllers;

use App\Regisuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class RegisuserController extends Controller
{
 
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
        return view('tambah.tambah_registrasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = DB::table('tbl_registrasi_user')->insert([

            'kd_registrasi' => $request->kd_registrasi,
            'token_registrasi'=>$request->token_registrasi,
            'full_name'=>$request->full_name,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email,
            'password'=>$request->password,
            'waktu_registrasi'=>$request->waktu_registrasi,
            'referall_code'=>$request->referall_code,
            'status_aktivasi'=>'disable',
       

        ]);

        return redirect('/regisuser')->with('status','Data berhasil ditambahkan');
    }


    public function show(Regisuser $regisuser)
    {
        return view('detail_registrasi',['regisuser'=>$regisuser]);
    }

 
    public function edit(Regisuser $regisuser)
    {
        return view('edit_regisuser',['regisuser'=>$regisuser]);
    }

   
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


  
    public function destroy(Regisuser $regisuser)
    {
        $regisuser = Regisuser::find($regisuser->id);

        $regisuser->delete();
         return redirect('/regisuser')->with('status','Data berhasil dihapus');
    }

     function cetak(){

        $regisuser = regisuser::all();

        $data['judul'] = "REGISTRASI MEMBER";
        $data['footer'] = "Laporan data registrasi member ebunga dicetak pada tanggal";
        $pdf = PDF::loadview('cetak.cetak_registrasi_member',['regismember'=>$regisuser],$data)->setpaper('A4','landscape');
        return $pdf->stream();
}

}
