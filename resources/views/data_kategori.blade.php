@extends('layout.app')

@section('title','Data Kategori Produk')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Kategori</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Kategori</h4>
 				 </div>

 				 @if (session('status'))
				   <script>
				   	swal("Sukses!", "{{session('status')}}", "success");
				   </script>
				@endif

                <div class="card-body">
            	<a href="{{url('')}}/kategori/tambah" class="btn btn-primary mb-3">Tambah Kategori Produk</a>
                <a href="{{url('')}}/kategori/cetak" class="btn btn-danger mb-3"><i class="fas fa-print"></i> Cetak PDF</a>

                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Kategori</th>
                                                <th>Nama kategori</th>
                                                <th>Deks</th>
                                                <th>Active</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Kategori</th>
                                                <th>Nama kategori</th>
                                                <th>Deks</th>
                                                <th>Active</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($kategori as $data) { ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data->kd_kategori ?></td>
                                                <td><?= $data->nama_kategori ?></td>
                                                <td><?= $data->deks ?></td>
                                                <td><?= $data->active ?></td>
                                                <td>

                                            <a href="{{url('')}}/kategori/{{$data->id}}/edit" class="btn btn-primary"><i class="fas fa-pen"></i></a>

                                            <form method="post" action="kategori/{{$data->id}}">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                                </td>
                                              
                                            </tr>

                                        <?php } ?>
                                            
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