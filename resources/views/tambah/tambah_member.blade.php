@extends('layout.app')

@section('title','Tambah member')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah member</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah member</h4>
 				 </div>
                <div class="card-body">


                     
            	
                    <form method="POST" action="{{url('')}}/member/tambah/store" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-8 col-lg-8">

                          <div class="mb-3">
                              <label for="" class="form-label">Usernme</label>
                              <input type="text" class="form-control" name="username"  placeholder="Masukan username anda" required="" >
                                <?php echo form_error('username',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>


 
                            <div class="mb-3">
                              <label for="" class="form-label">Full Name</label>
                              <input type="text" class="form-control" name="full_name"  placeholder="Masukan full name" required="" >
                                <?php echo form_error('full_name',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email"  placeholder="Masukan email" required="">

                               <?php echo form_error('email',' <small class="text-danger pl-2">','</small>'); ?>
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Number Phone</label>
                              <input type="number" name="phone" class="form-control" minlength="11" maxlength="13" placeholder="Masukan nomor phone" required="">
                               <?php echo form_error('phone',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Country</label>
                              <select class="form-control" name="country">
                                 <option>--Pilih Country--</option>
                                <?php 

                                    foreach ($country as $data) {
                                 ?>

                                 <option value="<?= $data['id'] ?>"><?= $data['name_country'] ?></option>
                               <?php } ?>
                              </select>
                            </div>



                          

                            <div class="mb-3">
                              <label for="" class="form-label">Provinsi</label>
                             <select id="prov" class="form-control" name="provinsi">
                               <option>--Pilih Provinsi--</option>
                               <?php foreach ($provinsi as $data) { ?>
                                <option value="<?= $data['id_prov'] ?>"><?= $data['nama'] ?></option>
                              <?php } ?>
                             </select>
                               
                            </div>



                            <div class="mb-3">
                              <label for="" class="form-label">Kabupaten</label>
                             <select id="kab" class="form-control" name="kabupaten">
                               <option>--Pilih Kabupaten--</option>
                             </select>
                               
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Kecamatan</label>
                             <select id="kec" class="form-control" name="kecamatan">
                               <option>--Pilih Kecamatan--</option>
                             </select>
                               
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Kelurahan</label>
                             <select id="kel" class="form-control" name="kelurahan">
                               <option>--Pilih Keluarahan--</option>
                             </select>
                               
                            </div>


                              <div class="mb-3">
                              <label for="" class="form-label">Postal Code</label>
                                  <input type="number" name="postal_code" class="form-control" placeholder="Masukan postal code"  required="">  
                                   <?php echo form_error('postal_code',' <small class="text-danger pl-2">','</small>'); ?>                          
                              </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Alamat</label>
                                <textarea class="form-control" placeholder="Masuakan alamat sekarang" style="height: 50px;" name="alamat"  required=""></textarea>
                                 <?php echo form_error('alamat',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                               <div class="mb-3">
                              <label for="" class="form-label">Ktp</label>
                                  <input type="number" name="ktp" class="form-control" placeholder="Masuakan nomor ktp"  required="">     <?php echo form_error('ktp',' <small class="text-danger pl-2">','</small>'); ?>                       
                              </div>

                                 <div class="mb-3">
                              <label for="" class="form-label">NPWP</label>
                                  <input type="number" name="npwp" class="form-control" placeholder="Masukan nomor npwp"  required="">    <?php echo form_error('npwp',' <small class="text-danger pl-2">','</small>'); ?>                         
                              </div>

                                 <div class="mb-3">
                              <label for="" class="form-label">Siup</label>
                                  <input type="text" name="siup" class="form-control" placeholder="Masukan nomor siup"  required="">   <?php echo form_error('siup',' <small class="text-danger pl-2">','</small>'); ?>                          
                              </div>

                         <!-- <div class="mb-3">
                              <label for="" class="form-label">Status</label>
                                  <input type="" name="status" class="form-control">                            
                              </div> -->

                                <div class="mb-3">
                              <label for="" class="form-label">Suspend</label>
                                  <input type="number" name="suspend" class="form-control"  required="" placeholder="Masukan suspend">
                                 <?php echo form_error('suspend',' <small class="text-danger pl-2">','</small>'); ?>                            
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

