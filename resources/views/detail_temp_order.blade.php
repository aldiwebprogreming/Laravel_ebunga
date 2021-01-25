@extends('layout.app')

@section('title','Detail Temp Oeder')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Temp Order</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Detail Temp Order</h4>
         </div>
                <div class="card-body">
              
                   <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kd Temp</strong></label>
                              <p>{{$order->kd_temp}}</p>
                            </div>
                            <hr>
 
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Customer</strong></label>
                              <p>{{$order->customer}}</p>
                               
                            </div>
                            <hr>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Waktu</strong></label>
                             <p>{{$order->waktu}}</p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Kd product</strong></label>
                             <p>{{$order->kd_product}}</p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Qt</strong></label>
                              <p>{{$order->qt}}</p>
                            </div>
                            <hr>


                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Total</strong></label>
                               <p>{{$order->total}}</p>
                            </div>
                            <hr>

                           

                            <div class="mb-3">
                               
                                <a href="{{url('/torder')}}" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                          </div>
               
            </div>
    </div>
</div>

</div>


  </section>
</div>


  @endsection

