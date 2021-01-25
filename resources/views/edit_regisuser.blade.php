@extends('layout.app')

@section('title','Edit Registrasi')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Edit Registrasi User</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Registrasi User</h4>
 				 </div>
                <div class="card-body">
            	
                    <form method="POST" action="{{url('')}}/regisuser/{{$regisuser->id}}/update">
                     
                        @csrf
                       
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kd Registrasi</label>
                              <input type="text" class="form-control" name="kd_registrasi"  required="" value="<?= $regisuser->kd_registrasi ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Token Registrasi</label>
                              <input type="text" class="form-control" name="token_registrasi"  required="" value="<?= $regisuser->token_registrasi ?>">
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="full_name"  required="" value="<?= $regisuser->full_name ?>">
                           
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Phone Number</label>
                              <input type="number" class="form-control" name="phone_number" required="" value="{{$regisuser->phone_number}}">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email"  required="" value="<?= $regisuser->email ?>">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Password Baru</label>
                              <input type="password" class="form-control" name="password"  required="" placeholder="Masukan password baru">
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Waktu Registrasi</label>
                              <input type="datetime-local" class="form-control" name="waktu_registrasi"  required="" value="<?= $regisuser->waktu_registrasi ?>">
                              <small><?= $regisuser->waktu_registrasi ?></small>
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Referall Code</label>
                              <input type="text" class="form-control" name="referall_code"   required="" value="<?= $regisuser->referall_code ?>">
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Status Aktivasi</label>
                              <input type="text" class="form-control" name="status_aktivasi" required="" value="<?= $regisuser->status_aktivasi ?>">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Waktu Aktivasi</label>
                              <input type="datetime-local" class="form-control" name="waktu_aktivasi"   required="" value="<?= $regisuser->waktu_aktivasi ?>">
                              <small><?= $regisuser->waktu_aktivasi ?></small>
                            </div>





                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="{{url('/regisuser')}}" class ="btn btn-success"> Kembali </a>
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

