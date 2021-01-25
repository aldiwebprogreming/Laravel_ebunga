@extends('layout.app')

@section('title','Edit temp order')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Eidt Temp Order</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Temp Orsder</h4>
 				 </div>
                <div class="card-body">
            	
                    <form method="POST" action="{{url('')}}/torder/{{$order->id}}/update">
                     
                        @csrf
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kd Temp</label>
                              <input type="text" class="form-control" name="kd_temp"  placeholder="Masukan kode temp" required="" value="{{$order->kd_temp}}">
                               
                            </div>
 
                            <div class="mb-3">
                              <label for="" class="form-label">Customer</label>
                              <input type="text" class="form-control" name="customer"  placeholder="Masukan customer" required="" value="{{$order->customer}}">
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Waktu</label>
                              <input type="date" name="waktu" class="form-control" value="{{$order->waktu}}">
                              <small>{{$order->waktu}}</small>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Kd Produk</label>
                              <input type="text" name="kd_product" class="form-control" value="{{$order->kd_product}}">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Qt</label>
                              <input type="number" name="qt" class="form-control" value="{{$order->qt}}">
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Total</label>
                               <input type="number" name="total" class="form-control" value="{{$order->total}}">
                            </div>


                           


                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="{{url('/torder')}}" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
               
            </div>
    </div>
</div>

</div>


  </section>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

  @endsection

