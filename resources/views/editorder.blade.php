@extends('layout.app')

@section('title','Edit Customer')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Eidt Customer Order</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Customer Order</h4>
 				 </div>
                <div class="card-body">
            	
                    <form method="POST" action="{{url('')}}/order/{{$order->id}}/update">
                     
                        @csrf
                        
                         <div class="mb-3">
                              <label for="" class="form-label">Kode Order</label>
                             <input type="text" name="kd_order" class="form-control" placeholder="Masukan kode order" required="" value="{{$order->kd_order}}">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Customer</label>
                              <input type="text" name="customer" placeholder="Masukan customer" class="form-control" required="" value="{{$order->customer}}">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Total Item</label>
                               <input type="number" name="total_item" placeholder="Masukan total item" class="form-control" required="" maxlength="10" value="{{$order->total_item}}">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Total Charge</label>
                               <input type="number" name="total_charge" placeholder="Masukan total change" class="form-control" required="" maxlength="10" value="{{$order->total_charge}}">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Disc</label>
                               <input type="number" name="disc" placeholder="Masukan disc" class="form-control" required="" maxlength="10" value="{{$order->disc}}">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Order Time</label>
                               <input type="datetime-local" name="oder_time" placeholder=" " class="form-control" required="" value="{{$order->oder_time}}">
                               <small>{{$order->order_time}}</small>
                            </div>


                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="{{url('/')}}" class ="btn btn-success"> Kembali </a>
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
<script>
        
        $(document).ready(function(){

          $('#prov').change(function(){

             var id = $(this).val();

             $("#kab").load("{{url('')}}/get/get1.php?id="+id);
          });

        });


         $(document).ready(function(){

          $('#kab').change(function(){

             var kab = $(this).val();

            $("#kec").load("{{url('')}}/get/get2.php?id="+kab);

          });

        });


        $(document).ready(function(){

          $('#kec').change(function(){

             var kel = $(this).val();

            $("#kel").load("{{url('')}}/get/get3.php?id="+kel);

          });

        });

      </script>

  @endsection

