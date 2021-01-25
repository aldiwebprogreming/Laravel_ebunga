@extends('layout.app')

@section('title','Edit Subkategori')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Edit Sub Kategori</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Sub Kategori</h4>
 				 </div>
                <div class="card-body">
            	
                    <form method="POST" action="{{url('')}}/subkategori/{{$subkategori->id}}/update" enctype="multipart/form-data">
                     
                        @csrf
                       
                           <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kode  Sub Kategori</label>
                              <input type="text" class="form-control" name="kd_sub_kategori"  placeholder="Masukan Kode Sub Katagori"  value="{{$subkategori->kd_sub_kategori}}">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Kategori</label>
                              <input type="text" class="form-control" name="nama_kategori"  placeholder="Masukan nama Katagori" required=""  value="{{$subkategori->nama_kategori}}">
                            </div>
<!-- 
                            <div class="mb-3">
                              <label for="" class="form-label">Slug</label>
                              <input type="text" class="form-control" name="slug"  placeholder="Masukan slug " required="">
                            </div> -->

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Kode Kategori</label>
                              <select name="kd_kategori" class="form-control">
                              <option>{{$subkategori->kd_kategori}}</option>
                              </select>
                           
                            </div>

                              <div class="mb-3">
                                <label> Foto Sub Kategori</label>
                                <input type="file" name="foto" class="form-control" required="">
                              </div>


                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="{{url('/subkategori')}}" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
               
            </div>
    </div>
</div>

</div>


  </section>
</div>



  @endsection

