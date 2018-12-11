@extends('layouts.app')


@section('content')
    @include('admin.includes.errors')
  <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Teacher's Info </h3>
        </div>
    
        <div class="panel-body">
        <form action="{{route('teacher.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="form-group col-md-6">
                    <strong><label for="status">Teacher's Name:</label></strong>
                    <input type="text" name="teacher_name" id="teacher_name" required class="form-control">

                </div>
                <div class="form-group col-md-6">
                    <strong><label for="address">Address</label></strong>
                    <input type="text" name="address" id="address" required class="form-control">
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-6">
                    <strong><label for="phoneno">Phone No:</label></strong>
                    <input type="text" name="phoneno" id="phoneno" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <strong><label for="email">Email</label></strong>
                    <input type="text" name="email" id="email" required class="form-control">
                </div>
            </div>            
            
            <div class="row">
                <div class="form-group col-md-6">
                    <strong><label for="image">Image</label></strong>
                    <input type="file" name="teacher_image" id="teacher_image" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    Image
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <strong><label for="status">Status</label></strong>
                    <select class="form-control" name="status" id="status">
                        <option value="1">Active</option>
                        <option value="0">InActive</option>
                       
                    </select>
                </div>
            </div> 
            
                          
                
            <div class="form-group">
              <div>
                <button type="submit" name="submit_menu" class="btn btn-success btn-lg">Save</button>
              </div>
            </div>
    
    
          </form>
        </div>
      </div>

@endsection