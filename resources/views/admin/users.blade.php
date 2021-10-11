@extends('layouts.adminlayout')

@section('content')



 <!-- partial:partials/_settings-panel.html -->
    <div class="col-lg-12 grid-margin stretch-card" style="margin-top:30px;">

        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Striped Table</h4>
            <p class="card-description">
              Add class <code>.table-striped</code>
            </p>
            <div class="table-responsive">
              <table id="table" class="table table-striped" style="width: 100%;">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                    Profile
                    </th>
                    <th>
                    Name

                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                      Action
                  </th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user )
                        
                   
                  <tr>
                    
                    <td>
                      {{ $user->id }}
                    </td>
                    <td class="py-1">
                      <img src="images/adminimage/profile_image/{{$user->Pimage}}" alt="image"/>
                    </td>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    
                    <td>
                      <div class="col-sm-12">
                        <a class="btn btn-info " target="__blank" href="{{ url('userprofile', $user->id) }}">view</a>
                      </div>
                    </br>
                  </br>
                      <div class="col-sm-12">
                        <a class="btn btn-info " style="background:red;" target="" href="{{ url('deleteuser', $user->id) }}">Delete</a>
                      </div>
                    </td>
                  </tr> @endforeach
     
        
             
            
                </tbody>
                <tfoot>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                    Profile
                    </th>
                    <th>
                    Name

                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                      Action
                  </th>
                    
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>


        <script type="">
          $(document).ready(function() {
              $('#table').DataTable();
          } );
  </script>
    @endsection