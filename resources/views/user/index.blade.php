@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <div class="panel-body">
                  <div class="row ">
                    <div class="col-md-6">
                      <a class="btn btn-lg btn-block btn-info" href="{{url('/user/create')}}" role="button">Create User</a>
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
                              <th>Username</th>
                              <th>Email</th>
                              <th>Roles</th>
                              <th>created_at</th>
                              <th>updated_at</th>
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($users as $user)
                            <tr>
                              <td>{{$user->id}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->username}}</td>
                              <td>{{$user->email}}</td>
                              <td>
                                <ul>
                                @foreach($user->roles as $role)
                                <li>{{$role->display_name}}</li>
                                @endforeach
                                </ul>
                              </td>
                              <td>{{$user->created_at}}</td>
                              <td>{{$user->updated_at}}</td>
                              <td><a class="btn btn-lg btn-block btn-warning" href="{{URL::to('user/' . $user->id . '/edit')}}" role="button">
                                <span class='glyphicon glyphicon-pencil'></span></a></td>
                              <td>
                                <form  action="{{URL::to('user/' . $user->id )}}" method="POST">
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
