<?php

namespace App\Http\Controllers;

use App\Torder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class TorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $order = Torder::all();
        return view('data_temp_order',['order'=>$order]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah.tambah_temp_order');
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
            'kd_temp' => 'required',
            'customer' => 'required',
            'waktu' => 'required',
            'kd_product' => 'required',
            'qt' => 'required',
            'total' => 'required',
        ]);


        $input = DB::table('tbl_temp_order')->insert([

                'kd_temp' => $request->kd_temp,
                'customer' => $request->customer,
                'waktu' => $request->waktu,
                'kd_product' => $request->kd_product,
                'qt'=> $request->qt,
                'total'=> $request->total,
                
               

            ]);   

        return redirect('/torder')->with('status','Data berhasil ditambahkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Torder  $torder
     * @return \Illuminate\Http\Response
     */
    public function show(Torder $torder)
    {
        return view('detail_temp_order',['order'=>$torder]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Torder  $torder
     * @return \Illuminate\Http\Response
     */
    public function edit(Torder $torder)
    {
        //

        return view('edit_temp_order',['order'=>$torder]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Torder  $torder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Torder $torder)
    {

        $id = $torder['id'];
       
      DB::table('tbl_temp_order')->where('id',$id)->update([

            'kd_temp' => $request->kd_temp,
            'customer' => $request->customer,
            'waktu' => $request->waktu,
            'kd_product' => $request->kd_product,
            'qt' => $request->qt,
             'total' => $request->total

       ]);

     return redirect('/torder')->with('status','Data berhasil diubah');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Torder  $torder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Torder $torder)
    {

        $id = $torder['id'];
      DB::table('tbl_temp_order')->where('id',$id)->delete();
       return redirect('/torder')->with('status','Data berhasil dihapus');
    }

    function cetak(){

        $torder = torder::all();

        $data['judul'] = "TEMP ORDER";
        $data['footer'] = "Laporan data temp order ebunga dicetak pada tanggal";
        $pdf = PDF::loadview('cetak.cetak_order',['order'=>$torder],$data)->setpaper('A4','landscape');
        return $pdf->stream();
}

}
