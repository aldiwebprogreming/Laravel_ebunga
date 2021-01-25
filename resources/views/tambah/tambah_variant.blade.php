@extends('layout.app')

@section('title','Tambah Produk')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Produk</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah Produk</h4>
 				 </div>
                <div class="card-body">


                      
                    <form method="POST" action="{{url('')}}/variant/tambah/store" enctype="multipart/form-data">
                        @csrf
                           <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kd Variant</label>
                              <input type="text" class="form-control" name="kd_variant"  placeholder="" required="" value="<?= $kd_variant; ?>" readonly="">
                              
                            </div>
 
                            <div class="mb-3">
                              <label for="" class="form-label">Kd Produk</label>
                             <select class="form-control" name="kd_produk">
                              <option>--Pilih kode produk--</option>
                               <?php foreach ($produk as $data) { ?>

                               <option><?= $data->kd_produk; ?></option> 

                             <?php } ?>
                             </select>
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Nama Variant</label>
                              <input type="text" name="nama_variant" class="form-control" placeholder="Masukan nama variant produk">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Deks Variant</label>
                              <textarea class="form-control" name="deks_variant" style="height: 50px;"></textarea>
                            </div>

                            


                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="/variant" class ="btn btn-success"> Kembali </a>
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

