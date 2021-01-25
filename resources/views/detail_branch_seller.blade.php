@extends('layout.app')

@section('title','Detail Branch Seller')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Branch Seller</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Detail Branch Seller</h4>
         </div>
                <div class="card-body">
              
                   <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kd Branch</strong></label>
                              <p>{{$bseller->kd_branch}}</p>
                            </div>
                            <hr>
 
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Nama Branch</strong></label>
                              <p>{{$bseller->nama_branch}}</p>
                               
                            </div>
                            <hr>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Id Seller</strong></label>
                             <p>{{$bseller->id_seller}}</p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Phone</strong></label>
                             <p>{{$bseller->phone}}</p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Email</strong></label>
                              <p>{{$bseller->email}}</p>
                            </div>
                            <hr>


                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Waktu Pengajuan</strong></label>
                               <p>{{$bseller->waktu_pengajuan}}</p>
                            </div>
                            <hr>


                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Waktu Approve</strong></label>
                               <p>{{$bseller->waktu_approve}}</p>
                            </div>
                            <hr>


                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Status Branch</strong></label>
                               <p>{{$bseller->status_branch}}</p>
                            </div>
                            <hr>


                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Active</strong></label>
                               <p>{{$bseller->active}}</p>
                            </div>
                            <hr>

                          

                            <div class="mb-3">
                               
                                <a href="{{url('/bseller')}}" class ="btn btn-success"> Kembali </a>
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

