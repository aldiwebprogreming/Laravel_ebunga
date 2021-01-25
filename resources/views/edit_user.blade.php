@extends('layout.app')

@section('title','Edit user')

@section('content')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Eidt User</h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit User</h4>
         </div>
                <div class="card-body">
              
                    <form method="POST" action="{{url('')}}/user/{{$user->id}}/update">
                     
                        @csrf
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Username</label>
                              <input type="text" class="form-control" name="username"  placeholder="Masukan username" required="" value="{{$user->username}}">
                               
                            </div>
 
                            <div class="mb-3">
                              <label for="" class="form-label">Type</label>
                             <select class="form-control" name="type">
                               <option>{{$user->type}}</option>
                                <option>Admin</option>
                                <option>Super Admin</option>
                                <option>Buyyer</option>
                                <option>Seller</option>
                             </select>
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Password Baru</label>
                              <input type="password" name="password" class="form-control" minlength="11" maxlength="13"value="{{$user->phone}}">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Last login</label>
                              <input type="datetime-local" name="last_login" class="form-control" value="{{$user->last_login}}">
                              <small>{{$user->last_login}}</small>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Active</label>
                            <select class="form-control" name="active">
                                <?php 

                                      if ($user->active == 1) {
                                        echo "<option value='1'>Y</option>";
                                         echo "<option value='0'>N</option>";
                                      } else {
                                             echo "<option value='0'>N</option>";
                                            echo "<option value='1'>Y</option>";
                                        
                                      }

                                 ?>
                            </select>
                            </div>
                         
                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="{{url('/user')}}" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
               
            </div>
    </div>
</div>

</div>


  </section>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
        
       
      </script>

  @endsection

