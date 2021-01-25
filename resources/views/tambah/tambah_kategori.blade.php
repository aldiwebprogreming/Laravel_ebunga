@extends('layout.app')

@section('title','Tambah kategori')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah kategori</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah kategori</h4>
 				 </div>
                <div class="card-body">


                     
            	
                    <form method="POST" action="{{url('')}}/kategori/tambah/store" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-8 col-lg-8">
                         <div class="mb-3">
                              <label for="" class="form-label">Kode Katagori</label>
                              <input type="text" class="form-control" name="kd_kategori"  placeholder="Masukan Kode Katagori" required="">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Katagori</label>
                              <input type="text" class="form-control" name="nama_kategori"  placeholder="Masukan nama Katagori" required="">
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deks"></textarea>
                           
                            </div>
                         
                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="{{url('/kategori')}}" class ="btn btn-success"> Kembali </a>
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

