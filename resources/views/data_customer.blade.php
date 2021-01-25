@extends('layout.app')

@section('title','Data Customer')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Customer</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Customer</h4>
 				 </div>

 				 @if (session('status'))
				   <script>
				   	swal("Sukses!", "{{session('status')}}", "success");
				   </script>
				@endif

                <div class="card-body">
            	<a href="{{url('tambah/customer')}}" class="btn btn-primary mb-3">Tambah Data Customer</a>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Email</th>
                                <th>Full Name</th>
                                <th>Phone</th>
                                 <th>Alamat</th>
                                <th>Provinsi</th>
                                 <th>Kabupaten</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                 
                                <th>No</th>
                                <th>Email</th>
                                <th>Full Name</th>
                                <th>Phone</th>
                                 <th>Alamat</th>
                                <th>Provinsi</th>
                                 <th>Kabupaten</th>
                                <th>Opsi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        	<?php $no = 1; ?>
                        	@foreach($customer as $data)
                        	<tr>
                        		<td>{{$no++}}</td>
                        		<td>{{$data->email}}</td>
                        		<td>{{$data->full_name}}</td>
                        		<td>{{$data->phone}}</td>
                        		<td>{{$data->alamat}}</td>
                        		<td>{{$data->provinsi}}</td>
                        		<td>{{$data->kabupaten}}</td>
                        		<td>
                        			<a href="{{url('')}}/customer/{{$data->id}}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                        			<a href="{{url('')}}/customer/{{$data->id}}/edit" class="btn btn-primary"><i class="fas fa-pen"></i></a>

                        			<form method="post" action="customer/{{$data->id}}">
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