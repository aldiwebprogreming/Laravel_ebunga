<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        return view('data_customer',['customer'=>$customer]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $provinsi = Provinsi::all();
        return view('tambah.tambah_customer',['provinsi'=>$provinsi]);
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
        'email' => 'required',
        'full_name' => 'required',
        'phone' => 'required|max:13|min:11',
        'birth_date' => 'required',
        'alamat' => 'required',

    ]);

     
        $input = DB::table('tbl_customer')->insert([

                'email' => $request->email,
                'full_name' => $request->full_name,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'birth_date'=> $request->birth_date,
                'alamat'=> $request->alamat,
                'kelurahan' => $request->kelurahan,
                'kecamatan' => $request->kecamatan,
                'kabupaten' =>$request->kabupaten,
                'provinsi' =>$request->provinsi,
                'active' =>1

            ]);   

        return redirect('/')->with('status','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {   
        $id_prov = $customer['provinsi'];
        $id_kab = $customer['kabupaten'];
        $id_kec = $customer['kecamatan'];
        $id_kel = $customer['kelurahan'];

        $prov = DB::table('tbl_provinsi')->where('id_prov', $id_prov)->get();
        $kab = DB::table('tbl_kabupaten')->where('id_kab', $id_kab)->get();
        $kec = DB::table('tbl_kecamatan')->where('id_kec', $id_kec)->get();
        $kel = DB::table('tbl_kelurahan')->where('id_kel', $id_kel)->get();
        
        return view('detail_customer',['customer'=>$customer,'prov'=>$prov,'kab'=>$kab,'kec'=>$kec,'kel'=>$kel]);
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {   $provinsi = Provinsi::all();

        $id_prov = $customer['provinsi'];
        $id_kab = $customer['kabupaten'];
        $id_kec = $customer['kecamatan'];
        $id_kel = $customer['kelurahan'];

        $prov = DB::table('tbl_provinsi')->where('id_prov', $id_prov)->get();
        $kab = DB::table('tbl_kabupaten')->where('id_kab', $id_kab)->get();
        $kec = DB::table('tbl_kecamatan')->where('id_kec', $id_kec)->get();
        $kel = DB::table('tbl_kelurahan')->where('id_kel', $id_kel)->get();

        return view('edit_customer',['customer'=>$customer,'provinsi'=>$provinsi,'prov'=>$prov,'kab'=>$kab,'kec'=>$kec,'kel'=>$kel ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $id = $customer['id'];


        DB::table('tbl_customer')->where('id',$id)->update([
            'email' => $request->email,
            'full_name'=>$request->full_name,
            'phone'=>$request->phone,
            'birth_date'=>$request->birth_date,
            'alamat'=>$request->alamat,
            'kelurahan'=>$request->kelurahan,
            'kecamatan'=>$request->kecamatan,
            'kabupaten'=>$request->kabupaten,
            'provinsi'=>$request->provinsi,
            'active'=>$request->active
    ]);

      
        
         return redirect('/')->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer = Customer::find($customer->id);

        $customer->delete();
         return redirect('/')->with('status','Data berhasil dihapus');
    }
}
