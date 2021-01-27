@extends('layout.app')

@section('title','Laporan Seller')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Laporan Seller</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Laporan Seller</h4>
                 </div>

                 @if (session('status'))
                   <script>
                    swal("Sukses!", "{{session('status')}}", "success");
                   </script>
                @endif

                <div class="card-body">
             <!--    <a href="{{url('')}}/variant/tambah" class="btn btn-primary mb-3">Tambah Variant</a> -->

                <a href="{{url('seller/cetak/pdf')}}" class="btn btn-danger mb-3"><i class="fas fa-print"></i> Cetak PDF</a>

                 

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                              <tr>
                                <th>Username</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Country</th>
                                <th>Provinsi</th>
                                <th>Kabupten</th>
                                <th>Kecamatan</th>
                                <th>Kelurahan</th>
                                <th>Alamat</th>
                                <th>Postal Code</th>
                                <th>Ktp</th>
                                <th>Npwp</th>
                                <th>Siup</th>
                                 <th>Status</th>
                                  <th>Active</th>
                                <th>Suspend</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                 <th>Username</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Country</th>
                                <th>Provinsi</th>
                                <th>Kabupten</th>
                                <th>Kecamatan</th>
                                <th>Kelurahan</th>
                                <th>Alamat</th>
                                <th>Postal Code</th>
                                <th>Ktp</th>
                                <th>Npwp</th>
                                <th>Siup</th>
                                 <th>Status</th>
                                   <th>Active</th>
                                <th>Suspend</th>
                              </tr>
                          </tfoot>
                          <tbody>

                              <?php 
                              $no = 1;
                            ?>
                              @foreach($seller as $data)
                              <tr>
                                 <td><?= $no++; ?></td>
                                  <td><?= $data->username ?></td>
                                  <td><?= $data->full_name ?></td>
                                  <td><?= $data->email ?></td>
                                  <td><?= $data->phone ?></td>
                                  <td><?= $data->country ?></td>
                                   <td><?= $data->provinsi ?></td>
                                    <td><?= $data->kabupaten ?></td>
                                     <td><?= $data->kecamatan ?></td>
                                      <td><?= $data->kelurahan ?></td>
                                       <td><?= $data->alamat ?></td>
                                        <td><?= $data->postal_code ?></td>
                                         <td><?= $data->ktp ?></td>
                                          <td><?= $data->npwp ?></td>
                                           <td><?= $data->siup ?></td>
                                            <td><?= $data->status ?></td>
                                             <td><?= $data->active ?></td>
                                             <td><?= $data->suspend ?></td>

                                
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