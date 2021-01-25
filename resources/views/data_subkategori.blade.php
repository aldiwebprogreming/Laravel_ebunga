@extends('layout.app')

@section('title','Sub Kategori')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Sub Kategori</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Sub Kategori</h4>
                 </div>

                 @if (session('status'))
                   <script>
                    swal("Sukses!", "{{session('status')}}", "success");
                   </script>
                @endif

                <div class="card-body">
                <a href="{{url('')}}/subkategori/tambah" class="btn btn-primary mb-3">Tambah Sub Kategori</a>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                               <tr>
                                  <th>No</th>
                                  <th>Kode Sub Kategori</th>
                                  <th>Nama kategori</th>
                                  <th>Slug</th>
                                  <th>Kode Kategori</th>
                                  <th>Opsi</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                  <th>No</th>
                                  <th>Kode Sub Kategori</th>
                                  <th>Nama kategori</th>
                                  <th>Slug</th>
                                  <th>Kode Kategori</th>
                                  <th>Opsi</th>
                              </tr>
                          </tfoot>
                          <tbody>

                              <?php 
                              $no = 1;
                            ?>
                              @foreach($subkategori as $data)
                              <tr>
                                  <td><?= $no++; ?></td>
                                  <td><?= $data->kd_sub_kategori ?></td>
                                  <td><?= $data->nama_kategori ?></td>
                                  <td><?= $data->slug ?></td>
                                  <td><?= $data->kd_kategori ?></td>
                                <td>
                                    <!-- <a href="{{url('')}}/oprator/{{$data->id}}" class="btn btn-success"><i class="fas fa-eye"></i></a> -->
                                    <a href="{{url('')}}/subkategori/{{$data->id}}/edit" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                     <a href="{{url('')}}/subkategori/{{$data->id}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>

                                    <form method="post" action="subkategori/{{$data->id}}">
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