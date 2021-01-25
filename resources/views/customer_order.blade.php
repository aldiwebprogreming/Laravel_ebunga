@extends('layout.app')

@section('title','Data Customer Order')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Customer Order</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Customer Order</h4>
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
                                <th>Kode Order</th>
                                <th>Customer</th>
                                <th>Total Item</th>
                                 <th>Total Charge</th>
                                <th>Disc</th>
                                 <th>Order Time</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                 
                                <th>No</th>
                                <th>Kode Order</th>
                                <th>Customer</th>
                                <th>Total Item</th>
                                 <th>Total Charge</th>
                                <th>Disc</th>
                                 <th>Order Time</th>
                                <th>Opsi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        	<?php $no = 1; ?>
                        	@foreach($customer_order as $data)
                        	<tr>
                        		<td>{{$no++}}</td>
                        		<td>{{$data->kd_order}}</td>
                        		<td>{{$data->customer}}</td>
                        		<td>{{$data->total_item}}</td>
                        		<td>{{$data->total_charge}}</td>
                        		<td>{{$data->disc}}</td>
                        		<td>{{$data->order_time}}</td>
                        		<td>
                        			<!-- <a href="{{url('')}}/customer/{{$data->id}}" class="btn btn-success"><i class="fas fa-eye"></i></a> -->
                        			<a href="{{url('')}}/order/{{$data->id}}/edit" class="btn btn-primary"><i class="fas fa-pen"></i></a>

                        			<form method="post" action="order/{{$data->id}}">
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