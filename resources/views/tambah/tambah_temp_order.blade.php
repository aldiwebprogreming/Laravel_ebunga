@extends('layout.app')

@section('title','Tambah temp order')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Temp Order</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah Temp Order</h4>
 				 </div>
                <div class="card-body">
            	
                    <form method="POST" action="{{url('')}}/torder/store">
                        @csrf
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kd temp</label>
                              <input type="text" class="form-control" name="kd_temp"  placeholder="Masukan kode temp" value="{{old('kd_temp')}}">
                                @error('kd_temp')
                                    <smal class="text-danger"> {{  $message }} </smal>
                                @enderror
                            </div>
 
                            <div class="mb-3">
                              <label for="" class="form-label">Customer</label>
                              <input type="text" class="form-control" name="customer"  placeholder="Masukan nama customer" value="{{old('customer')}}">
                                @error('customer')
                                    <smal class="text-danger"> {{  $message }} </smal>
                                @enderror
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Waktu</label>
                              <input type="datetime-local" name="waktu" class="form-control" value="{{old('waktu')}}">
                              @error('waktu')
                                    <smal class="text-danger"> {{ $message }} </smal>
                                @enderror
                            </div>
                            

                             <div class="mb-3">
                              <label for="" class="form-label">Kd Product</label>
                              <input type="text" name="kd_product" class="form-control" value="{{old('kd_product')}}">
                              @error('kd_product')
                               <smal class="text-danger"> {{ $message }} </smal>
                              @enderror
                            </div>
                          

                            <div class="mb-3">
                              <label for="" class="form-label">Qt</label>
                              <input type="number" name="qt" class="form-control" value="{{old('qt')}}">
                              @error('qt')
                               <smal class="text-danger"> {{ $message }} </smal>
                              @enderror
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Total</label>
                               <input type="number" name="total" class="form-control" value="{{old('total')}}">
                               @error('total')
                                <small class="text-danger">{{$message}}</small>
                               @enderror


                           

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

