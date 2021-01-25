@extends('layout.app')

@section('title','Data produk')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Produk</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Produk</h4>
                 </div>

                 @if (session('status'))
                   <script>
                    swal("Sukses!", "{{session('status')}}", "success");
                   </script>
                @endif

                <div class="card-body">
                <a href="{{url('')}}/produk/tambah" class="btn btn-primary mb-3">Tambah Produk</a>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                                <tr>
                                                <th>No</th>
                                                <th>Kode Produk</th>
                                                <th>Nama Produk</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                 <th>No</th>
                                                <th>Kode Produk</th>
                                                <th>Nama Produk</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                          ?>

                                          @foreach($produk as $data)

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data->kd_produk ?></td>
                                                <td><?= $data->nama_produk ?></td>
                                                <td><?= $data->harga ?></td>
                                                <td><?= $data->stok ?></td>
                                <td>
                                    <!-- <a href="{{url('')}}/oprator/{{$data->id}}" class="btn btn-success"><i class="fas fa-eye"></i></a> -->
                                    <a href="{{url('')}}/produk/{{$data->id}}/edit" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                     <a href="{{url('')}}/produk/{{$data->id}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>

                                    <form method="post" action="produk/{{$data->id}}">
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