@extends('layout.app')

@section('title','Edit Customer')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Eidt Customer</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Customer</h4>
 				 </div>
                <div class="card-body">
            	
                    <form method="POST" action="{{url('')}}/customer/{{$customer->id}}/update">
                     
                        @csrf
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Email</label>
                              <input type="text" class="form-control" name="email"  placeholder="Masukan email" required="" value="{{$customer->email}}">
                               
                            </div>
 
                            <div class="mb-3">
                              <label for="" class="form-label">Full Name</label>
                              <input type="text" class="form-control" name="full_name"  placeholder="Masukan full name" required="" value="{{$customer->full_name}}">
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Number Phone</label>
                              <input type="number" name="phone" class="form-control" minlength="11" maxlength="13"value="{{$customer->phone}}">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Birth Date</label>
                              <input type="date" name="birth_date" class="form-control" value="{{$customer->birth_date}}">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Gender</label>
                            <select class="form-control" name="gender"><
                              <option>{{$customer->gender}}</option>
                              <option>laki-laki</option>
                              <option>perempuan</option>
                            </select>
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Alamat</label>
                                <textarea class="form-control" placeholder="Masuakan alamat sekarang" style="height: 50px;" name="alamat">{{$customer->alamat}}</textarea>
                            </div>


                             <?php foreach ($prov as $id_prov) {
                              
                            } ?>
                            <div class="mb-3">
                              <label for="" class="form-label">Provinsi</label>
                             <select id="prov" class="form-control" name="provinsi">
                               <option value="{{$id_prov->id_prov}}">{{$id_prov->nama}}</option>
                               @foreach($provinsi as $data)
                               <option value="{{$data->id_prov}}">{{$data->nama}}</option>
                               @endforeach
                             </select>
                               
                            </div>

                              <?php foreach ($kab as $id_kab) {
                              
                            } ?>

                            <div class="mb-3">
                              <label for="" class="form-label">Kabupaten</label>
                             <select id="kab" class="form-control" name="kabupaten">
                              <option value="{{$id_kab->id_kab}}">{{$id_kab->nama}}</option>
                             </select>
                               
                            </div>


                             <?php foreach ($kec as $id_kec) {
                              
                            } ?>
                             <div class="mb-3">
                              <label for="" class="form-label">Kecamatan</label>
                             <select id="kec" class="form-control" name="kecamatan">
                              <option value="{{$id_kec->id_kec}}">{{$id_kec->nama}}</option>
                             </select>
                               
                            </div>

                               <?php foreach ($kel as $id_kel) {
                              
                            } ?>
                             <div class="mb-3">
                              <label for="" class="form-label">Kelurahan</label>
                             <select id="kel" class="form-control" name="kelurahan">
                               <option value="{{$id_kel->id_kel}}">{{$id_kel->nama}}</option>
                             </select>
                               
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Active</label>
                             <select id="kel" class="form-control" name="active">
                              <?php 
                                if ($customer->active == 1) {
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
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="{{url('/')}}" class ="btn btn-success"> Kembali </a>
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

