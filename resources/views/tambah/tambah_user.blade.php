@extends('layout.app')

@section('title','Tambah user')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah User</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah User</h4>
 				 </div>

         
                <div class="card-body">
            	
                    <form method="POST" action="{{url('')}}/user/tambah/store">
                        @csrf
                        
                          <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Username</label>
                              <input type="text" class="form-control" name="username"  placeholder="Masukan username">
                               @error('username')
                                    <smal class="text-danger"> {{ $message }} </smal>
                                @enderror
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Type</label>
                              <select class="form-control" name="type">
                                <option>--Pilih Type User--</option>
                                <option>Admin</option>
                                <option>Super Admin</option>
                                <option>Buyyer</option>
                                <option>Seller</option>
                              </select>
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Password</label>
                              <input type="password" name="password" class="form-control" >
                                 @error('password')
                                    <smal class="text-danger"> {{ $message }} </smal>
                                @enderror
                            </div>

                          
                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="{{url('/oprator')}}" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
               
            </div>
    </div>
</div>

</div>


  </section>
</div>



  @endsection

