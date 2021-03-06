@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/chosen/chosen.css')}}" media="screen" title="no title" charset="utf-8">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create User</div>

                <div class="panel-body">
                    <form  action="{{url('user')}}" method="POST">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="username">UserName</label>
                            <input type="text" name="username" class="form-control" placeholder="UserName">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="**********">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="roles">Roles</label>
                            <select multiple name="roles[]" class="form-control select-roles" >
                              <option value=""></option>
                              @foreach($roles as $role)
                              <option value="{{$role->id}}">{{$role->display_name}}</option>
                              @endforeach
                            </select>

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <input type="submit" class="btn btn-lg btn-block btn-primary" name="submit" value="Submit">
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>
<script src="{{asset('js/chose.js')}}"></script>
@endsection
