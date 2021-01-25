<?php

namespace App\Http\Controllers;

use App\Oprator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OpratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $oprator = Oprator::all();
        return view('data_oprator',['oprator'=>$oprator]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah.operator');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
        'username' => 'required',
        'nama_lengkap' => 'required',
        'hp' => 'required|max:13|min:11',
        'alamat' => 'required',
        'bio' => 'required',

          ]);   


        $input = DB::table('tbl_operator')->insert([

                'username' => $request->username,
                'nama_lengkap' => $request->nama_lengkap,
                'hp' => $request->hp,
                'alamat' => $request->alamat,
                'posisi'=> $request->posisi,
                'bio'=> $request->bio,
                'active' => 1,
               

            ]);   

        return redirect('/oprator')->with('status','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Oprator  $oprator
     * @return \Illuminate\Http\Response
     */
    public function show(Oprator $oprator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Oprator  $oprator
     * @return \Illuminate\Http\Response
     */
    public function edit(Oprator $oprator)
    {
        return view('editoprator',['oprator'=>$oprator]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Oprator  $oprator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oprator $oprator)
    {
        
         $id = $oprator['id'];


        DB::table('tbl_operator')->where('id',$id)->update([
            'username' => $request->username,
            'nama_lengkap'=>$request->nama_lengkap,
            'hp'=>$request->hp,
            'alamat'=>$request->alamat,
            'posisi'=>$request->posisi,
            'bio'=>$request->bio,
            'active' => $request->active
    ]);

             return redirect('/oprator')->with('status','Data berhasil diubah');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Oprator  $oprator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oprator $oprator)
    {
        $oprator = Oprator::find($oprator->id);

        $oprator->delete();
         return redirect('/oprator')->with('status','Data berhasil dihapus');
    }
}
