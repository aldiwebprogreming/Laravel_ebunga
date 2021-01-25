@extends('layout.app')

@section('title','Data Customer')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Customer</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah Customer</h4>
 				 </div>
                <div class="card-body">
            	
                    <form method="POST" action="{{url('')}}/tambah/store">
                        @csrf
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Email</label>
                              <input type="text" class="form-control" name="email"  placeholder="Masukan email" value="{{old('email')}}">
                                @error('email')
                                    <smal class="text-danger"> {{ $message }} </smal>
                                @enderror
                            </div>
 
                            <div class="mb-3">
                              <label for="" class="form-label">Full Name</label>
                              <input type="text" class="form-control" name="full_name"  placeholder="Masukan full name" value="{{old('full_name')}}">
                                @error('full_name')
                                    <smal class="text-danger"> {{ $message }} </smal>
                                @enderror
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Number Phone</label>
                              <input type="number" name="phone" class="form-control" value="{{old('phone')}}">
                              @error('phone')
                                    <smal class="text-danger"> {{ $message }} </smal>
                                @enderror
                            </div>
                            

                             <div class="mb-3">
                              <label for="" class="form-label">Birth Date</label>
                              <input type="date" name="birth_date" class="form-control">
                            </div>
                          

                             <div class="mb-3">
                              <label for="" class="form-label">Gender</label>
                            <select class="form-control" name="gender">
                              <option>laki-laki</option>
                              <option>perempuan</option>
                            </select>
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Alamat</label>
                                <textarea class="form-control" placeholder="Masuakan alamat sekarang" style="height: 50px;" name="alamat"></textarea>
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Provinsi</label>
                             <select id="prov" class="form-control" name="provinsi">
                               <option>--Pilih Provinsi--</option>
                               @foreach($provinsi as $data)
                               <option value="{{$data->id_prov}}">{{$data->nama}}</option>
                               @endforeach
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

