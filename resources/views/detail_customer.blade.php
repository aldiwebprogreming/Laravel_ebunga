@extends('layout.app')

@section('title','Data Customer')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Customer</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Detail Customer</h4>
         </div>
                <div class="card-body">
              
                   <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Email</strong></label>
                              <p>{{$customer->email}}</p>
                            </div>
                            <hr>
 
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Full Name</strong></label>
                              <p>{{$customer->full_name}}</p>
                               
                            </div>
                            <hr>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Number Phone</strong></label>
                             <p>{{$customer->phone}}</p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Birth Date</strong></label>
                             <p>{{$customer->birth_date}}</p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Gender</strong></label>
                              <p>{{$customer->gender}}</p>
                            </div>
                            <hr>


                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Alamat</strong></label>
                               <p>{{$customer->alamat}}</p>
                            </div>
                            <hr>

                            <?php foreach ($prov as $id_prov) {
                              
                            } ?>
                             
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Provinsi</strong></label>
                               <p>{{$id_prov->nama}}</p>
                            </div>
                            <hr>

                              <?php foreach ($kab as $id_kab) {
                              
                            } ?>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kabupaten</strong></label>
                              <p>{{$id_kab->nama}}</p>
                               
                            </div>
                             <hr>

                               <?php foreach ($kec as $id_kec) {
                              
                            } ?>
                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Kecamatan</strong></label>
                              <p>{{$id_kec->nama}}</p>
                               
                            </div>
                            <hr>

                              <?php foreach ($kel as $id_kel) {
                              
                            } ?>
                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Kelurahan</strong></label>
                                <p>{{$id_kel->nama}}</p>
                               
                            </div>
                             <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Active</strong></label>
                               <p>{{$customer->active}}</p>
                               
                            </div>
                              <hr>


                            <div class="mb-3">
                               
                                <a href="{{url('/')}}" class ="btn btn-success"> Kembali </a>
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

