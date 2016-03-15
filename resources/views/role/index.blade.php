@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Roles</div>

                <div class="panel-body">
                  <div class="row ">
                    <div class="col-md-6">
                      <a class="btn btn-lg btn-block btn-info" href="{{url('/role/create')}}" role="button">Create Role</a>
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
                              <th>Permissions</th>
                              <th>created_at</th>
                              <th>updated_at</th>
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($roles as $role)
                              <tr>
                                <td>{{$role->id}}</td>
                                <td>{{$role->name}}</td>
                                <td>{{$role->display_name}}</td>
                                <td>{{$role->description}}</td>
                                <td>
                                  <ul>
                                  @foreach($role->permissions as $permission)
                                  <li>{{$permission->display_name}}</li>
                                  @endforeach
                                  </ul>
                                </td>
                                <td>{{$role->created_at}}</td>
                                <td>{{$role->updated_at}}</td>
                                <td><a class="btn btn-lg btn-block btn-warning" href="{{URL::to('role/' . $role->id . '/edit')}}" role="button">
                                  <span class='glyphicon glyphicon-pencil'></span></a></td>
                                  <td>
                                    <form  action="{{URL::to('role/' . $role->id )}}" method="POST">
                                      <input name="_method" type="hidden" value="DELETE">
                                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                                      <button class="btn btn-lg btn-block btn-danger" type="submit" name="submit">
                                        <span class='glyphicon glyphicon-trash'></span></button>
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
        </div>
    </div>
</div>
@endsection
