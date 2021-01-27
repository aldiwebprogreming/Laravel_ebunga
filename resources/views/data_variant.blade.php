@extends('layout.app')

@section('title','Data Variant')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Variant</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Variant</h4>
                 </div>

                 @if (session('status'))
                   <script>
                    swal("Sukses!", "{{session('status')}}", "success");
                   </script>
                @endif

                <div class="card-body">
                <a href="{{url('')}}/variant/tambah" class="btn btn-primary mb-3">Tambah Variant</a>

                <a href="{{url('variant/cetak/pdf')}}" class="btn btn-danger mb-3"><i class="fas fa-print"></i> Cetak PDF</a>

                 

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                               <tr>
                                  <th>No</th>
                                  <th>Kd Variant</th>
                                  <th>Kd Product</th>
                                  <th>Nama Variant</th>
                                  <th>Deks Variant</th>
                                  <th>Active</th>
                                  <th>Opsi</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                 <th>No</th>
                                  <th>Kd Variant</th>
                                  <th>Kd Product</th>
                                  <th>Nama Variant</th>
                                  <th>Deks Variant</th>
                                  <th>Active</th>
                                  <th>Opsi</th>
                              </tr>
                          </tfoot>
                          <tbody>

                              <?php 
                              $no = 1;
                            ?>
                              @foreach($variant as $data)
                              <tr>
                                  <td><?= $no++; ?></td>
                                  <td><?= $data->kd_variant ?></td>
                                  <td><?= $data->kd_product ?></td>
                                  <td><?= $data->nama_variant ?></td>
                                  <td><?= $data->deks_variant ?></td>
                                  <td><?= $data->active ?></td>
                                <td>
                                    <!-- <a href="{{url('')}}/oprator/{{$data->id}}" class="btn btn-success"><i class="fas fa-eye"></i></a> -->
                                    <a href="{{url('')}}/variant/{{$data->id}}/edit" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                 <!--     <a href="{{url('')}}/subkategori/{{$data->id}}" class="btn btn-primary"><i class="fas fa-eye"></i></a> -->

                                    <form method="post" action="variant/{{$data->id}}">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger" ><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            
                          @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>

</div>


</section>
      </div>


      <script>
        $(document).ready(function(){

    $("#pilih_user").change(function(){

      var a = $(this).val();

      $.get("{{url('')}}user/pilih_data/status/"+a, function(data, success){

        $("#data").html(data);

      });
    });

  });
      </script>


  @endsection