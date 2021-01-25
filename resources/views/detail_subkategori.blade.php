@extends('layout.app')

@section('title','Detail subkategori')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Sub Kategori</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Detail Sub Kategori</h4>
         </div>
                <div class="card-body">
              
                   <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kd Sub Kategori</label>
                              <p>{{$subkategori->kd_sub_kategori}}</p>
                            </div>
                            <hr>
 
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Nama Kategori</strong></label>
                              <p>{{$subkategori->nama_kategori}}</p>
                               
                            </div>
                            <hr>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Slug</strong></label>
                             <p>{{$subkategori->slug}}</p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Nama Kategori</strong></label>
                             <p>{{$subkategori->nama_kategori}}</p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Foto</strong></label>
                              <br>
                              <img src="{{url('')}}/gambar_subkategori/{{$subkategori->foto}}" style="height: 100px; width: 100px;">
                            </div>
                            <hr>


                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Aktive</strong></label>
                               <p>{{$subkategori->aktif}}</p>
                            </div>
                            <hr>

                           


                            <div class="mb-3">
                               
                                <a href="{{url('/subkategori')}}" class ="btn btn-success"> Kembali </a>
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

