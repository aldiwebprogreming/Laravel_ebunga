@extends('layout.app')

@section('title','Oprator')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Operator</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Operator</h4>
 				 </div>

 				 @if (session('status'))
				   <script>
				   	swal("Sukses!", "{{session('status')}}", "success");
				   </script>
				@endif

                <div class="card-body">
            	<a href="{{url('')}}/oprator/tambah" class="btn btn-primary mb-3">Tambah Operator</a>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Nomor Hp</th>
                                 <th>Alamat</th>
                                <th>Posisi</th>
                                 <th>Bio</th>
                                <th>Active</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                 <th>No</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Nomor Hp</th>
                                 <th>Alamat</th>
                                <th>Posisi</th>
                                 <th>Bio</th>
                                <th>Active</th>
                                  <th>Opsi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        	<?php $no = 1; ?>
                        	@foreach($oprator as $data)
                        	<tr>
                        		<td>{{$no++}}</td>
                        		<td>{{$data->username}}</td>
                        		<td>{{$data->nama_lengkap}}</td>
                        		<td>{{$data->hp}}</td>
                        		<td>{{$data->alamat}}</td>
                        		<td>{{$data->posisi}}</td>
                        		<td>{{$data->bio}}</td>
                                <td>{{$data->active}}</td>
                        		<td>
                        			<!-- <a href="{{url('')}}/oprator/{{$data->id}}" class="btn btn-success"><i class="fas fa-eye"></i></a> -->
                        			<a href="{{url('')}}/oprator/{{$data->id}}/edit" class="btn btn-primary"><i class="fas fa-pen"></i></a>

                        			<form method="post" action="oprator/{{$data->id}}">
                        				@method('delete')
                        				@csrf
                        				<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
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