@extends('layout.app')

@section('title','Detail member')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Member</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Detail Member</h4>
         </div>
                <div class="card-body">

              

                             <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Username</strong></label>
                             <p>"<?= $member->username ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Full Name</strong></label>
                             <p><?= $member->full_name ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label"><strong>Email</strong></label>
                             <p><?= $member->email ?></p>
                            </div>
                            <hr>


                             <?php foreach ($country as $negara) {
                                  # code...
                                } ?>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Country</strong></label>
                              <p>{{$negara->name_country}}</p>
                            </div>

                                <?php foreach ($prov as $prov) {
                                  # code...
                                } ?>

                             <div class="mb-3">
                              <label for="" class="form-label"> <strong>Provinsi</strong></label>
                              <p><?= $prov->nama ?></p>
                            </div>
                            <hr>

                             <?php foreach ($kab as $kab) {
                                  # code...
                                } ?>
                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Kabupaten</strong></label>
                             <p><?= $kab->nama ?></p>
                            </div>
                            <hr>

                             <?php foreach ($kec as $kec) {
                                  # code...
                                } ?>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Kecamatan</strong></label>
                             <p><?= $kec->nama ?></p>
                            </div>
                            <hr>


                             <?php foreach ($kel as $kel) {
                                  # code...
                                } ?>


                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Kelurahan</strong></label>
                             <p><?= $kel->nama ?></p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Postal Code</strong></label>
                             <p><?= $member->postal_code ?></p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Alamat</strong></label>
                                 <p><?= $member->alamat ?></p>
                           
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>KTP</strong></label>
                             <p><?= $member->ktp ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Npwp</strong></label>
                             <p><?= $member->npwp ?></p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Siup</strong></label>
                             <p><?= $member->siup ?></p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Status</strong></label>
                             <p><?= $member->siup ?></p>
                            </div>
                            <hr>


                            <div class="mb-3">
                               
                                <a href="{{url('/member')}}" class ="btn btn-success"> Kembali </a>
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

