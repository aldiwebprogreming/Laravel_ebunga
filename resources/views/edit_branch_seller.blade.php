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
            	
                    <form method="POST" action="{{url('')}}/regisuser/{{$bseller->id}}/update">
                     
                        @csrf
                       
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kd Branch</label>
                              <input type="text" class="form-control" name="kd_branch"  required="" value="<?= $bseller->kd_branch ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Branch</label>
                              <input type="text" class="form-control" name="nama_branch"  required="" value="<?= $bseller->nama_branch ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Id Seller</label>
                                <input type="text" class="form-control" name="id_seller"  required="" value="<?= $bseller->id_seller ?>">
                           
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Alamat</label>
                              <input type="text" class="form-control" name="alamat" required="" value="{{$bseller->alamat}}">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Phone</label>
                              <input type="email" class="form-control" name="email"  required="" value="<?= $bseller->phone ?>">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Emaik</label>
                              <input type="email" class="form-control" name="email"  required="" placeholder="Masukan email" value="{{$bseller->email}}">
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Waktu Pengajuan</label>
                              <input type="datetime-local" class="form-control" name="waktu_pengajuan"  required="" value="<?= $bseller->waktu_pengajuan ?>">
                            
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Waktu Approve</label>
                              <input type="datetime-local" class="form-control" name="waktu_apporve"   required="" value="<?= $bseller->waktu_apporve ?>">
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Status Branch</label>
                             <select class="form-control" name="status_branch">
                                <option></option>
                             </select>
                            </div>

                               
                              <div class="mb-3">
                              <label for="" class="form-label">Active</label>
                             <select class="form-control" name="active">
                                <option></option>
                             </select>
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

