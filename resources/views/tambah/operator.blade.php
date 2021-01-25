@extends('layout.app')

@section('title','Data Customer')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Operator</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah Operator</h4>
 				 </div>

         
                <div class="card-body">
            	
                    <form method="POST" action="{{url('')}}/oprator/tambah/store">
                        @csrf
                        
                          <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Username</label>
                              <input type="text" class="form-control" name="username"  placeholder="Masukan username">
                               @error('username')
                                    <smal class="text-danger"> {{ $message }} </smal>
                                @enderror
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control" name="nama_lengkap"  placeholder="Masukan nama lengakap">
                               @error('namae_lengkap')
                                    <smal class="text-danger"> {{ $message }} </smal>
                                @enderror
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">No HP</label>
                              <input type="number" name="hp" class="form-control" >
                                 @error('hp')
                                    <smal class="text-danger"> {{ $message }} </smal>
                                @enderror
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Alamat</label>
                              <textarea class="form-control" name="alamat" placeholder="Masukan alamat"></textarea>
                                @error('alamat')
                                    <smal class="text-danger"> {{ $message }} </smal>
                                @enderror
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Posisi</label>
                             <select class="form-control" name="posisi">
                              <option>-- Pilih Posisi --</option>
                               <option>Admin</option>
                               <option>Super Admin</option>
                             </select>
                               
                            </div>

                          

                            <div class="mb-3">
                              <label for="" class="form-label">Bio</label>
                             <textarea class="form-control" name="bio" placeholder="Masukan biodata"></textarea>
                                @error('bio')
                                    <smal class="text-danger"> {{ $message }} </smal>
                                @enderror
                            </div>
                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="{{url('/oprator')}}" class ="btn btn-success"> Kembali </a>
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

