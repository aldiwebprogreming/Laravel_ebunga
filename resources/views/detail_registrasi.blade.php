@extends('layout.app')

@section('title','Detail Registrasi')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Registrasi User</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Detail Registrasi User</h4>
         </div>
                <div class="card-body">

                       
              
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kode Registrasi</strong></label>
                             <p></p>
                             <hr>
                                
                            </div>
 
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Token Registrasi</strong></label>
                             <p><?= $regisuser->token_registrasi ?></p>
                             <hr>
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Full Name</strong></label>
                             <p><?= $regisuser->full_name ?></p>
                             <hr>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Phone Number</label>
                             <p><?= $regisuser->phone_number ?></p>
                             <hr>
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Email</label>
                              <p><?= $regisuser->email ?></p>
                              <hr>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Waktu Registrasi</label>
                             <p><?= $regisuser->waktu_registrasi ?></p>
                             <hr>
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Referall Code</label>
                            <p><?= $regisuser->referall_code ?></p>
                            <hr>
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Status Aktivasi</label>
                              <p><?= $regisuser->status_aktivasi ?></p>
                              <hr>
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Waktu Aktivasi</label>
                              <p><?= $regisuser->waktu_aktivasi ?></p>
                              <hr>
                               
                            </div>

                        

                            <div class="mb-3">
                                
                                <a href="{{url('')}}/regisuser" class ="btn btn-success"> Kembali </a>
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

