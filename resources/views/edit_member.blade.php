@extends('layout.app')

@section('title','Edit member')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Edit Member</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Member</h4>
 				 </div>
                <div class="card-body">
            	
                    <form method="POST" action="{{url('')}}/member/{{$member->id}}/update">
                     
                        @csrf
                       
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Userame</label>
                              <input type="text" class="form-control" name="username"  required="" value="<?= $member->username ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Full Name</label>
                              <input type="text" class="form-control" name="full_name"  required="" value="<?= $member->full_name ?>">
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email"  required="" value="<?= $member->email ?>">
                           
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Phone</label>
                              <input type="number" class="form-control" name="phone" required="" value="{{$member->phone}}">
                            </div>

                             <?php foreach ($country as $data) {
                                  
                                } ?>

                            <div class="mb-3">
                              <label for="" class="form-label">Country</label>
                              <select class="form-control" name="country">
                                <option value="{{$data->id}}">{{$data->name_country}}</option>
                              </select>
                            </div>



                                 <?php foreach ($prov as $prov) {
                                  
                                } ?>


                              <div class="mb-3">
                              <label for="" class="form-label">Provinsi</label>
                                <select class="form-control" name="provinsi" id="prov">
                                  <option value="<?= $prov->id_prov ?>">{{$prov->nama}}</option>
                                  @foreach($prov2 as $prov2)
                                  <option value="<?= $prov2->id_prov ?>"><?= $prov2->nama ?></option>
                                  @endforeach
                                </select>
                            </div>

                            @foreach($kab as $kab)@endforeach
                            <div class="mb-3">
                              <label for="" class="form-label">Kabupaten</label>
                                <select class="form-control" name="kabupaten" id="kab">
                                  <option value="{{$kab->id_kab}}"> {{$kab->nama}}</option>
                                </select>
                            </div>
                            @foreach($kec as $kec)@endforeach 
                            <div class="mb-3">
                              <label for="" class="form-label">Kecamatan</label>
                                <select class="form-control" name="kecamatan" id="kec">
                                  <option value="<?= $kec->id_kec ?>">{{$kec->nama}}</option>
                                </select>
                            </div>

                            @foreach($kel as $kel)@endforeach
                            <div class="mb-3">
                              <label for="" class="form-label">Kelurahan</label>
                                <select class="form-control" name="kelurahan" id="kel">
                                  <option value="<?= $kel->id_kel ?>"> {{$kel->nama}} </option>
                                </select>
                            </div>

                              <div class="mb-3">
                              <label for="" class="form-label">Postal Code</label>
                              <input type="number" class="form-control" name="postal_code" required="" value="{{$member->postal_code}}">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Alamat</label>
                              <textarea class="form-control" name="alamat"><?= $member->alamat ?></textarea>
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Ktp</label>
                              <input type="number" class="form-control" name="ktp" required="" value="{{$member->ktp}}">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Npwp</label>
                              <input type="number" class="form-control" name="npwp" required="" value="{{$member->npwp}}">
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Siup</label>
                              <input type="number" class="form-control" name="siup" required="" value="{{$member->siup}}">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Status</label>
                              <select class="form-control" name="status">
                               <?php 

                                  if ($member->status == 1) {
                                      echo "<option value='1'>Y</option>";
                                      echo "<option value='0'>N</option>";
                                  } else {
                                    echo "<option value='0'>N</option>";
                                    echo "<option value='1'>Y</option>";
                                  } 

                                ?>
                              </select>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Suspend</label>
                              <input type="number" class="form-control" name="suspend" required="" value="{{$member->suspend}}">
                            </div>



                            <div class="mb-3">
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                                <a href="{{url('/member')}}" class ="btn btn-success"> Kembali </a>
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

