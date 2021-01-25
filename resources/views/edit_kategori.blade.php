@extends('layout.app')

@section('title','Edit kategori')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Eidt Kategori</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Kategori</h4>
         </div>
                <div class="card-body">
              
                    <form method="POST" action="{{url('')}}/kategori/{{$kategori->id}}/update" enctype="multipart/form-data">
                     
                        @csrf

                        <div class="col-md-8 col-lg-8">
                         <div class="mb-3">
                              <label for="" class="form-label">Kode Katagori</label>
                              <input type="text" class="form-control" name="kd_kategori"  placeholder="Masukan Kode Katagori" required="" value="{{$kategori->kd_kategori}}">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Katagori</label>
                              <input type="text" class="form-control" name="nama_kategori"  placeholder="Masukan nama Katagori" required="" value="{{$kategori->nama_kategori}}">
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deks">{{$kategori->deks}}</textarea>
                           
                            </div>


                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Active</label>
                             <select class="form-control" neme="active">
                                <?php 

                                  if ($kategori->active == 1) {
                                    echo "<option value='1'>Y</option>";
                                    echo "<option value='0'>N</option>";
                                  } else{

                                    echo "<option value='0'>N</option>";
                                    echo "<option value='1'>Y</option>";
                                  }
                                 ?>
                             </select>
                           
                            </div>
                      

                       
                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Edit">
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

