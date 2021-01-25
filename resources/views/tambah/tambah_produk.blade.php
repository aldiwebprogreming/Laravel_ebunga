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


                        <?php 

                            $rand = mt_rand(1000, 10000);
                            $string = "EBUNGA";
                            $kode = $string.$rand;

                         ?>       
            	
                    <form method="POST" action="{{url('')}}/produk/tambah/store" enctype="multipart/form-data">
                        @csrf
                         <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kode Produk</label>
                              <input type="text" class="form-control" name="kd_produk" readonly="" value="<?= $kode; ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Produk</label>
                              <input type="text" class="form-control" name="nama_produk"  placeholder="Masukan nama produk" required="">
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Produk</label>
                              <textarea class="form-control" id="" rows="3" name="deks_produk"></textarea>
                           
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Kategori</label>
                              <select class="form-control" name="kategori">
                                <option>--Pilih Kategori--</option>
                              </select>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label"> Sub Kategori</label>
                              <select class="form-control" name="sub_kategori">
                                <option value="">--Pilih Sub Kategori--</option>
                                <option>3</option>
                              </select>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Id Branch</label>
                              <input type="text" class="form-control" name="id_branch"  placeholder="Masukan id branch" required="">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Id Seller</label>
                              <input type="text" class="form-control" name="id_seller"  placeholder="Masukan id seller" required="">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Harga</label>
                              <input type="number" class="form-control" name="harga"  placeholder="Masukan harga produk " required="">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Stok</label>
                              <input type="number" class="form-control" name="stok"  placeholder="Masukan stok produk " required="">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Foto utama</label>
                              <input type="file" class="form-control" name="foto"  required="">
                            </div>


                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="{{url('/produk')}}" class ="btn btn-success"> Kembali </a>
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

