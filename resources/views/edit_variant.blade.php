@extends('layout.app')

@section('title','Edit Variant')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Edit Variant</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Variant</h4>
 				 </div>
                <div class="card-body">
            	
                    <form method="POST" action="{{url('')}}/variant/{{$variant->id}}/update">
                     
                        @csrf
                        
                         <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kd Variant</label>
                              <input type="text" class="form-control" name="kd_variant"  placeholder="" required="" value="<?= $variant->kd_variant ?>" readonly="">
                              
                            </div>
 
                            <div class="mb-3">
                              <label for="" class="form-label">Kd Produk</label>
                             <select class="form-control" name="kd_produk">
                              <option>{{$variant->kd_product}}</option>
                               <?php foreach ($produk as $data) { ?>

                               <option><?= $data->kd_produk; ?></option> 

                             <?php } ?>
                             </select>
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Nama Variant</label>
                              <input type="text" name="nama_variant" class="form-control" placeholder="Masukan nama variant produk" value="{{$variant->nama_variant}}">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Deks Variant</label>
                              <textarea class="form-control" name="deks_variant" style="height: 50px;">{{$variant->deks_variant}}</textarea>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Active</label>
                              <select class="form-control" name="active">
                               <?php if ($variant->active == 1) {
                                 echo "<option value='1'>Y</option>";
                                 echo "<option value='0'>N</option>";
                               } else{
                                       echo "<option value='0'>N</option>";
                                     echo "<option value='1'>Y</option>";
                                
                               }?>
                              </select>
                            </div>

                


                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="{{url('/variant')}}" class ="btn btn-success"> Kembali </a>
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

