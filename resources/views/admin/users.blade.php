@extends('layouts.adminlayout')

@section('content')



 <!-- partial:partials/_settings-panel.html -->
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Striped Table</h4>
            <p class="card-description">
              Add class <code>.table-striped</code>
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
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
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user )
                        
                   
                  <tr>
                    
                    <td>
                      {{ $user->id }}
                    </td>
                    <td class="py-1">
                      <img src="../../images/faces/face1.jpg" alt="image"/>
                    </td>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    
                  </tr> @endforeach
     
        
             
            
                </tbody>
              </table>
            </div>
          </div>
        </div>



    @endsection