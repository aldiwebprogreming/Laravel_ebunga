@extends('layout.app')

@section('title','Tambah Branch Seller')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Branch Seller</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah Branch Seller</h4>
 				 </div>
                <div class="card-body">

            	
                    <form method="POST" action="{{url('')}}/bseller/tambah/store">
                        @csrf
                         <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kode Branch</label>
                              <input type="text" class="form-control" name="kd_branch"  value="{{old('kd_branch)')}}">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Branch</label>
                              <input type="text" class="form-control" name="nama_branch"  placeholder="Masukan nama branch" value="{{old('nama_branch')}}">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Id Sellers</label>
                              <input type="text" class="form-control" name="id_seller"  placeholder="Masukan id seller" value="{{old('id_seller')}}">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Alamat</label>
                              <textarea class="form-control" name="alamat"></textarea>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Phone</label>
                             <input type="number" name="phone" class="form-control" value="{{old('phone')}}">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">email</label>
                             <input type="email" name="email" class="form-control" value="{{old('email')}}">
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Waktu Pengajuan</label>
                             <input type="datetime-local" name="waktu_pengajuan" class="form-control" value="{{old('waktu_pengajuan')}}">
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Waktu Approve</label>
                             <input type="datetime-local" name="waktu_approve" class="form-control" value="{{old('waktu_approve')}}">
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Status Branch</label>
                                <select class="form-control" name="status_branch">
                                  <option>Disable</option>
                                  <option>Active</option>
                                </select>
                            </div>
                           

                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="{{url('/tambah')}}" class ="btn btn-success"> Kembali </a>
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

