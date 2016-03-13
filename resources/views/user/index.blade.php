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
                              <td>{{$user->created_at}}</td>
                              <td>{{$user->updated_at}}</td>
                              <td><a class="btn btn-lg btn-block btn-warning" href="{{URL::to('user/' . $user->id . '/edit')}}" role="button">
                                <span class='glyphicon glyphicon-pencil'></span></a></td>
                              <td><a class="btn btn-lg btn-block btn-danger" href="{{URL::to('user/' . $user->id . '/delete')}}" role="button">
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
