@extends('layout.app')

@section('title','Edit produk')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Eidt Produk</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Produk</h4>
         </div>
                <div class="card-body">
              
                    <form method="POST" action="{{url('')}}/produk/{{$produk->id}}/update" enctype="multipart/form-data">
                     
                        @csrf


                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kode Produk</label>
                              <input type="text" class="form-control" name="kd_produk" readonly="" value="<?= $produk->kd_produk ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Produk</label>
                              <input type="text" class="form-control" name="nama_produk"  placeholder="Masukan nama produk" required="" value="<?= $produk->nama_produk ?>">
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Produk</label>
                              <textarea class="form-control" id="" rows="3" name="deks_produk"><?= $produk->deks_produk ?></textarea>
                           
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Kategori</label>
                              <select class="form-control" name="kategori">
                                <option><?= $produk->kategori ?></option>
                              </select>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label"> Sub Kategori</label>
                              <select class="form-control" name="sub_kategori">
                                <option><?= $produk->sub_kategori ?></option>
                              </select>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Id Branch</label>
                              <input type="text" class="form-control" name="id_branch"  placeholder="Masukan id branch" required="" value="<?= $produk->id_branch ?>">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Id Seller</label>
                              <input type="text" class="form-control" name="id_seller"  placeholder="Masukan id seller" required="" value="<?= $produk->id_seller ?>">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Harga</label>
                              <input type="number" class="form-control" name="harga"  placeholder="Masukan harga produk " required="" value="<?= $produk->harga ?>">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Stok</label>
                              <input type="number" class="form-control" name="stok"  placeholder="Masukan stok produk " required="" value="<?= $produk->stok ?>">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Foto utama</label>
                              <input type="file" class="form-control" name="foto"  required="" value="">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Active</label>
                                <select class="form-control" name="active">
                                  <?php if ($produk->active == 1 ) { ?>
                                    <option value="1">Y</option>
                                      <option value="0">N</option>

                                    <?php } else { ?>

                                      <option value="0">N</option>
                                      <option value="1">Y</option>

                                    <?php } ?>
                                </select>
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
        
       
      </script>

  @endsection

