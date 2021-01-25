@extends('layout.app')

@section('title','Data user')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data User</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data User</h4>
                 </div>

                 @if (session('status'))
                   <script>
                    swal("Sukses!", "{{session('status')}}", "success");
                   </script>
                @endif

                <div class="card-body">
                <a href="{{url('')}}/user/tambah" class="btn btn-primary mb-3">Tambah User</a>

                  <select style="margin-left: 50%;" id="pilih_user">
                      <label>Pilih data user</label>
                     <option>all</option>
                      <option>buyyer</option>
                      <option>seller</option>
                      <option>admin</option>
                      <option>super admin</option>
                      
                 </select>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                               <tr>
                                  <th>No</th>
                                  <th>Username</th>
                                  <th>Type</th>
                                  <th>Last Login</th>
                                  <th>Active</th>
                                  <th>Opsi</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                  <th>No</th>
                                  <th>Username</th>
                                  <th>Type</th>
                                  <th>Last Login</th>
                                  <th>Active</th>
                                  <th>Opsi</th>
                              </tr>
                          </tfoot>
                          <tbody>

                              <?php 
                              $no = 1;
                            ?>
                              @foreach($user as $data)
                              <tr>
                                  <td><?= $no++; ?></td>
                                  <td><?= $data->username ?></td>
                                  <td><?= $data->type ?></td>
                                  <td><?= $data->last_login ?></td>
                                  <td><?= $data->active ?></td>
                                <td>
                                    <!-- <a href="{{url('')}}/oprator/{{$data->id}}" class="btn btn-success"><i class="fas fa-eye"></i></a> -->
                                    <a href="{{url('')}}/user/{{$data->id}}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                 <!--     <a href="{{url('')}}/subkategori/{{$data->id}}" class="btn btn-primary"><i class="fas fa-eye"></i></a> -->

                                    <form method="post" action="user/{{$data->id}}">
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