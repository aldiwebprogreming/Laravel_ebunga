<?php

namespace App\Http\Controllers;

use App\Muser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Muser::all();
        return view('data_user',['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('tambah.tambah_user');
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

 
             $input = DB::table('tbl_user')->insert([

                'username' => $request->username,
                'type' => $request->type,
                'password' => $request->password,
                'active' => 1
                 

            ]);   

        return redirect('/user')->with('status','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Muser  $muser
     * @return \Illuminate\Http\Response
     */
    public function show(Muser $muser)
    {
        //

        return view('edit_user',['user'=>$muser]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Muser  $muser
     * @return \Illuminate\Http\Response
     */
    public function edit(Muser $muser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Muser  $muser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Muser $muser)
    {
        //

         $id = $muser['id'];


        DB::table('tbl_user')->where('id',$id)->update([

            'username' => $request->username,
            'type'=>$request->type,
            'password'=>$request->password,
            'last_login'=>$request->last_login,
            'active'=>$request->active

        ]);

          return redirect('/user')->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Muser  $muser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Muser $muser)
    {
        //

           $muser = Muser::find($muser->id);

        $muser->delete();
         return redirect('/user')->with('status','Data berhasil dihapus');
    }

    function pilih($type){


        return $type;
    }
}
