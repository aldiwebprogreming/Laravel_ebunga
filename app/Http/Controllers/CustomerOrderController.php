<?php

namespace App\Http\Controllers;

use App\CustomerOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $customer_order = CustomerOrder::all();
        return view('customer_order',['customer_order'=>$customer_order]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CustomerOrder  $customerOrder
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerOrder $customerOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerOrder  $customerOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerOrder $customerOrder)
    {
        return view('editorder',['order'=>$customerOrder]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerOrder  $customerOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerOrder $customerOrder)
    {
         $id = $customerOrder['id'];


        DB::table('tbl_customer_order')->where('id',$id)->update([
            'kd_order' => $request->kd_order,
            'customer'=>$request->customer,
            'total_item'=>$request->total_item,
            'total_charge'=>$request->total_charge,
            'disc'=>$request->disc,
            'order_time'=>$request->order_time
    ]);

             return redirect('/order')->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerOrder  $customerOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerOrder $customerOrder)
    {
          $customerOrder = CustomerOrder::find($customerOrder->id);

        $customerOrder->delete();
         return redirect('/order')->with('status','Data berhasil dihapus');
    }
}
