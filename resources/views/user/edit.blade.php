@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/chosen/chosen.css')}}" media="screen" title="no title" charset="utf-8">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit User</div>

                <div class="panel-body">
                    <form  action="{{URL::to('user/' . $user->id )}}" method="POST">
                      <input name="_method" type="hidden" value="PUT">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="hidden" name="id" value="{!! $user->id !!}">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{!! $user->name !!}" placeholder="Name">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="username">UserName</label>
                            <p class="form-control-static">{!! $user->username !!}</p>
                            <input type="hidden" name="username" value="{!! $user->username !!}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="email">Email</label>
                            <p class="form-control-static">{!! $user->email !!}</p>
                            <input type="hidden" name="email" value="{!! $user->email !!}">
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
                      <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-lg btn-block btn-primary">Submit</button>
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
