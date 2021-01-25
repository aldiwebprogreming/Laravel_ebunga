@extends('layout.app')

@section('title','Data Temp Order')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Order</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Order</h4>
 				 </div>

 				 @if (session('status'))
				   <script>
				   	swal("Sukses!", "{{session('status')}}", "success");
				   </script>
				@endif

                <div class="card-body">
            	<a href="{{url('tambah/torder')}}" class="btn btn-primary mb-3">Tambah Data Temp Order</a>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kd Temp Order</th>
                                <th>Customer</th>
                                <th>Waktu</th>
                                 <th>Kd Product</th>
                                <th>Qt</th>
                                 <th>Total</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                               <th>No</th>
                                <th>Kd Temp Order</th>
                                <th>Customer</th>
                                <th>Waktu</th>
                                 <th>Kd Product</th>
                                <th>Qt</th>
                                 <th>Total</th>
                                <th>Opsi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        	<?php $no = 1; ?>
                        	@foreach($order as $data)
                        	<tr>
                        		<td>{{$no++}}</td>
                        		<td>{{$data->kd_temp}}</td>
                        		<td>{{$data->customer}}</td>
                        		<td>{{$data->waktu}}</td>
                        		<td>{{$data->kd_product}}</td>
                        		<td>{{$data->qt}}</td>
                        		<td>{{$data->total}}</td>
                        		<td>
                        			<a href="{{url('')}}/torder/{{$data->id}}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                        			<a href="{{url('')}}/torder/{{$data->id}}/edit" class="btn btn-primary"><i class="fas fa-pen"></i></a>

                        			<form method="post" action="torder/{{$data->id}}">
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