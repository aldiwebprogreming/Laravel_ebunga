<?php

namespace App\Http\Controllers;

use App\Subkategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubkategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $subkategori = Subkategori:: all();
        return view('data_subkategori',['subkategori'=>$subkategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('tambah.tambah_subkategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required',
            'kd_sub_kategori' => 'required',
            'nama_kategori' => 'required',
            'kd_kategori' => 'required',
        ]);

        $file = $request->file('foto');
        $tujuan_upload = 'gambar_subkategori';
        $file->move($tujuan_upload,$file->getClientOriginalName());

        if ($file == true) {

             $nama_kategori = trim($request->nama_kategori);
                $out = explode(" ",  strtolower($nama_kategori));
                $slug = implode("-", $out);
            
             $input = DB::table('tbl_sub_kategori')->insert([

                'kd_sub_kategori' => $request->kd_sub_kategori,
                'nama_kategori' => $request->nama_kategori,
                'slug' => $slug,
                'kd_kategori' => $request->kd_kategori,
                'foto'=> $file->getClientOriginalName(),
                'aktif'=> 1,
                 

            ]);   

        return redirect('/subkategori')->with('status','Data berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subkategori  $subkategori
     * @return \Illuminate\Http\Response
     */
    public function show(Subkategori $subkategori)
    {
        return view('detail_subkategori',['subkategori'=>$subkategori]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subkategori  $subkategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Subkategori $subkategori)
    {
        return view('edit_subkategori',['subkategori'=>$subkategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subkategori  $subkategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subkategori $subkategori)
    {
        //

        $id = $subkategori['id'];

         $this->validate($request, [
            'foto' => 'required',
            'kd_sub_kategori' => 'required',
            'nama_kategori' => 'required',
            'kd_kategori' => 'required',
        ]);

        $file = $request->file('foto');
        $tujuan_upload = 'gambar_subkategori';
        $file->move($tujuan_upload,$file->getClientOriginalName());

            if ($file == true) {

             $nama_kategori = trim($request->nama_kategori);
                $out = explode(" ",  strtolower($nama_kategori));
                $slug = implode("-", $out);
            
               DB::table('tbl_sub_kategori')->where('id',$id)->update([

                'kd_sub_kategori' => $request->kd_sub_kategori,
                'nama_kategori' => $request->nama_kategori,
                'slug' => $slug,
                'kd_kategori' => $request->kd_kategori,
                'foto'=> $file->getClientOriginalName(),
                'aktif'=> 1,
                 

            ]);   

        return redirect('/subkategori')->with('status','Data berhasil diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subkategori  $subkategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subkategori $subkategori)
    {
          $subkategori = Subkategori::find($subkategori->id);

        $subkategori->delete();
         return redirect('/subkategori')->with('status','Data berhasil dihapus');
    }
}
