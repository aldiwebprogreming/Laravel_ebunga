@extends('layout.app')

@section('title','Data Registrasi')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Registrasi User</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Registrasi User</h4>
 				 </div>

 				 @if (session('status'))
				   <script>
				   	swal("Sukses!", "{{session('status')}}", "success");
				   </script>
				@endif

                <div class="card-body">
            	<!-- <a href="{{url('tambah/customer')}}" class="btn btn-primary mb-3">Tambah Data Customer</a> -->

                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kd Registrasi</th>
                                                <th>Token Registrasi</th>
                                                <th>Full Name</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kd Registrasi</th>
                                                <th>Token Registrasi</th>
                                                <th>Full Name</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            ?>

                                            @foreach($regisuser as $data)

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data->kd_registrasi ?></td>
                                                <td><?= $data->token_registrasi ?></td>
                                                <td><?= $data->full_name ?></td>
                                                <td><?= $data->phone_number ?></td>
                                                <td><?= $data->email ?></td>
                                                <td>
                                                   

                                                    <form method="post" action="regisuser/{{$data->id}}">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                    
                                                    <a href="{{url('')}}/regisuser/{{$data->id}}/edit" class="btn btn-info"><i class="fas fa-pen"></i></a>

                                                     <a href="{{url('')}}/regisuser/{{$data->id}}" class="btn btn-success"><i class="fas fa-eye"></i></a>

                                              
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