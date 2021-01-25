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
              
                    <form method="POST" action="{{url('')}}/produk/{{$produk->id}}/update" enctype="multipart/form-data">
                     
                        @csrf


                       


                       
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

