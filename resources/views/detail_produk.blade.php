@extends('layout.app')

@section('title','Detail Produk')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Produk</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Detail Produk</h4>
         </div>
                <div class="card-body">
              

                             <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kode Produk</strong></label>
                             <p>"<?= $produk->kd_produk ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Nama Produk</strong></label>
                             <p><?= $produk->nama_produk ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label"><strong>Deskripsi Produk</strong></label>
                             <p><?= $produk->deks_produ ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kategori</strong></label>
                              <select class="form-control" name="kategori">
                                <option><?= $produk->kategori ?></option>
                              </select>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label"> <strong>Sub Kategori</strong></label>
                              <p><?= $produk->sub_kategori ?></p>
                            </div>
                            <hr>
                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Id Branch</strong></label>
                             <p><?= $produk->id_branch ?></p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Id Seller</strong></label>
                             <p><?= $produk->id_seller ?></p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Harga</strong></label>
                             <p><?= $produk->harga ?></p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Stok</strong></label>
                             <p><?= $produk->stok ?></p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Foto utama</strong></label>
                                <br>
                               <img src="{{url('')}}/gambar_produk/{{$produk->foto_utama}}" style="height: 100px; width: 100px;">
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Active</strong></label>
                                 <p><?= $produk->active ?></p>
                            </div>
                            <hr>


                            <div class="mb-3">
                               
                                <a href="{{url('/produk')}}" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                          </div>
               
            </div>
    </div>
</div>

</div>


  </section>
</div>


  @endsection

