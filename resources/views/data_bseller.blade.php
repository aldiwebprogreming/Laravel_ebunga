@extends('layout.app')

@section('title','Data branch seller')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Branch Seller</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Branch Seller</h4>
                 </div>

                 @if (session('status'))
                   <script>
                    swal("Sukses!", "{{session('status')}}", "success");
                   </script>
                @endif

                <div class="card-body">
                <a href="{{url('')}}/branch/tambah" class="btn btn-primary mb-3">Tambah Branch Seller</a>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                                <tr>
                                                <th>No</th>
                                                <th>Kode Branch</th>
                                                <th>Nama Branch</th>
                                                <th>Id Seller</th>
                                                <th>Status</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Branch</th>
                                                <th>Nama Branch</th>
                                                <th>Id Seller</th>
                                                <th>Status</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                          ?>

                                          @foreach($bseller as $data)

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data->kd_branch ?></td>
                                                <td><?= $data->nama_branch ?></td>
                                                <td><?= $data->id_seller ?></td>
                                               <td>
                                                  
                                                    <?php 

                                                        if ($data->status_branch == 'active') { ?>

                                                           <form method="post" action="bseller/{{$data->id}}/active">
                                                             @csrf
                                                            <input type="submit" class="btn btn-primary" value="Active">
                                                          </form>


                                                        <?php } else { ?>
                                                          <form method="post" action="bseller/{{$data->id}}/disable">
                                                              @csrf
                                                            <input type="submit" class="btn btn-danger" value="Disabele">
                                                          </form>
                                                          
                                                        <?php } ?>

                                               </td>
                                <td>
                                    <!-- <a href="{{url('')}}/oprator/{{$data->id}}" class="btn btn-success"><i class="fas fa-eye"></i></a> -->
                                    <a href="{{url('')}}/bseller/{{$data->id}}/edit" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                     <a href="{{url('')}}/bseller/{{$data->id}}" class="btn btn-success"><i class="fas fa-eye"></i></a>

                                    <form method="post" action="bseller/{{$data->id}}">
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
  @endsection