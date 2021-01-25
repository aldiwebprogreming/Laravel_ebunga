@extends('layout.app')

@section('title','Edit Customer')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Eidt Oprator</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Oprator </h4>
 				 </div>
                <div class="card-body">
            	
                    <form method="POST" action="{{url('')}}/oprator/{{$oprator->id}}/update">
                     
                        @csrf
                        
                         <div class="mb-3">
                              <label for="" class="form-label">Username</label>
                              <input type="text" class="form-control" name="username"  placeholder="Masukan username" required="" value="{{$oprator->username}}">
                                
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control" name="nama_lengkap"  placeholder="Masukan nama lengakap" required="" value="{{$oprator->nama_lengkap}}">
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">No HP</label>
                              <input type="number" name="hp" class="form-control" required="" value="{{$oprator->hp}}">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Alamat</label>
                              <textarea class="form-control" name="alamat" placeholder="Masukan alamat" required="">{{$oprator->alamat}}</textarea>
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Posisi</label>
                             <select class="form-control" name="posisi">
                              <?php 
                                  if ($oprator->posisi == 'Admin') {
                                    echo '<option>Admin</option>';
                                     echo '<option>Super Admin</option>';
                                  } else {
                                     
                                      echo '<option>Super Admin</option>';
                                      echo '<option>Admin</option>';
                                  }

                               ?>
                             </select>
                               
                            </div>

                          

                            <div class="mb-3">
                              <label for="" class="form-label">Bio</label>
                             <textarea class="form-control" name="bio" placeholder="Masukan biodata">{{$oprator->bio}}</textarea>
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Active</label>

                                 <select class="form-control" name="active">
                                 <?php 

                                    if ($oprator->active == '1') {
                                      echo '<option value="1">Y</option>';
                                       echo '<option value="0">N</option>';
                                    } else {
                                       echo '<option value="0">N</option>';
                                        echo '<option value="1">Y</option>';
                                    }

                                  ?>


                                 </select>
                               
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

