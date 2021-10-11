@extends('layouts.adminlayout')
@section('content')
    
<div class="col-lg-12 grid-margin stretch-card" style="margin-top:30px;">
  
  <div class="card">
            <div class="card-body ">
               <h4 class="card-title">Add discussion</h4>
        
              <form class="form-inline" action="{{ url('adddiscussion') }}" method="post">
                @csrf
                <label class="sr-only" for="inlineFormInputName2">Discussion type</label>

                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" name="discussion_type" placeholder="eg laravel">
              
                <div class="input-group mb-2 mr-sm-2">

                  <select class="form-select"  name="status" aria-label="Default select example">
                
                      <option hidden>Select a status</option>
                      <option value="active">active</option>
                      <option value="deactive">deactive</option>
                      
                    </select>
                    
                </div>
              
                <button type="submit" class="btn btn-primary mb-2">Add</button>
              </form>
           </div>
    
  


       {{-- <----------------------------------------------Discussion TABLE--------------------------------> --}}
  <div class="">
    <div class="card ">
      <div class="card-body">
        <div class="row">
      <h4 class="card-title">Discussions Type</h4>
    
      <div class="table-responsive">
            <table id="table" class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Discussion</th>
                  <th>Status</th>
                  <th>Action</th> 
                </tr>
              </thead>
              <tbody>
                  @foreach ($discussion_type as $discussion_type )
                <tr>
                  
                  <td>
                    {{ $discussion_type->id }}
                  </td>
                  
                  <td>
                      {{ $discussion_type->discussion_type }}
                  </td>
                  <td>
                      {{ $discussion_type->status }}
                  </td>
                  
                  <td>
                   <div class="col-sm-12">
                      <a class="btn btn-info " style="background:red;" target="" href="{{ url('deletediscussion',$discussion_type->id) }}">Delete</a>
                    </div>
                  </td>
                </tr> @endforeach
              </tbody>
               <tfoot>
                <tr>
                  <th>#</th>
                  <th>Discussion</th>
                  <th>Status</th>
                  <th>Action</th> 
                </tr>
              </tfoot>
            </table>
      </div>
    </div>
{{-- 
<div class="col">
            <label>Bloodhound</label>
            <div id="bloodhound">
              <input class="typeahead" type="text" placeholder="States of USA">
            </div> --}}
@endsection