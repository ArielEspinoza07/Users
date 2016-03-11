@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Permissions</div>

                <div class="panel-body">
                  <div class="row ">
                    <div class="col-md-6">
                      <a class="btn btn-lg btn-block btn-info" href="{{url('/role/create')}}" role="button">Create Permission</a>
                    </div>
                  </div>
                   <div class="row space">
                    <div class="col-md-12 col-sm-6 col-xs-12">
                      <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Display_Name</th>
                              <th>Description</th>
                              <th>created_at</th>
                              <th>updated_at</th>
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($permissions as $permission)
                              <tr>
                                <td>{{$permission->id}}</td>
                                <td>{{$permission->name}}</td>
                                <td>{{$permission->display_name}}</td>
                                <td>{{$permission->description}}</td>
                                <td>{{$permission->created_at}}</td>
                                <td>{{$permission->updated_at}}</td>
                                <td><a class="btn btn-lg btn-block btn-warning" href="{{URL::to('role/' . $permission->id . '/edit')}}" role="button">
                                  <span class='glyphicon glyphicon-pencil'></span></a></td>
                                <td><a class="btn btn-lg btn-block btn-danger" href="{{URL::to('role/' . $permission->id . '/delete')}}" role="button">
                                  <span class='glyphicon glyphicon-trash'></span></a></td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
