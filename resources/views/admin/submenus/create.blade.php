@extends('layouts.app')


@section('content')
    @include('admin.includes.errors')
  <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Create a new Sub Menu </h3>
        </div>
    
        <div class="panel-body">
        <form action="{{route('submenu.store')}}" method="post">
            {{csrf_field()}}
    
            <div class="form-group">
                    <strong><label for="status">Select Main Menu:</label></strong>
                    <select class="form-control" name="mainmenu" id="mainmenu">
                            
                             @foreach($mainmenus as $mainmenu)
                              <option value="{{$mainmenu->id}}">{{$mainmenu->menu_name}}</option>
                            @endforeach
                 
                          </select>
                  </div>

            <div class="form-group">
              <strong><label for="sub_menu_name">Sub Menu Name</label></strong>
              <input type="text" name="sub_menu_name" id="submenu" required class="form-control">
            </div>
    
            <div class="form-group">
                    <strong><label for="status">Status</label></strong>
                    <select class="form-control" name="status" id="status">
    
                            <option value="1">Active</option>
                            <option value="0">InActive</option>


                            {{-- @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach --}}
                
                          </select>
                  </div>
                          
                
            <div class="form-group">
              <div>
                <button type="submit" name="submit_menu" class="btn btn-success btn-lg">Create SubMenu</button>
              </div>
            </div>
    
    
          </form>
        </div>
      </div>

@endsection