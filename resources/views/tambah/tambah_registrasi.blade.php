@extends('layout.app')

@section('title','Tambah Registrasi')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Registrasi</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah Registrasi</h4>
 				 </div>
                <div class="card-body">


                     
            	
                    <form method="POST" action="{{url('')}}/registrasi/tambah/store" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-8 col-lg-8">
                          <div class="mb-3">
                              <label for="" class="form-label">Kd Registrasi</label>
                              <input type="text" class="form-control" name="kd_registrasi"  placeholder="Masukan kode registrasi" required="">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Token Registrasi</label>
                              <input type="text" class="form-control" name="token_registrasi"  placeholder="Masukan token registrasi" required="">
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="full_name"  placeholder="Masukan full name" required="">
                            </div>


                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" name="phone_number"  placeholder="Masukan phone number" required="" minlength="11" maxlength="13">
                            </div>

                             <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email"  placeholder="Masukan email" required="">
                            </div>

                             <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password"  placeholder="Masukan password" required="" min="4">
                            </div>

                           <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Referall Code</label>
                                <input type="text" class="form-control" name="referall_code"  placeholder="Masukan referall code" required="" min="4">
                            </div>

                             

                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="{{url('/registrasi')}}" class ="btn btn-success"> Kembali </a>
                                </div>
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

