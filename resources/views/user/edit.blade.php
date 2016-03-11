@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit User</div>

                <div class="panel-body">
                    <form  action="{{URL::to('user/' . $user->id .'/update')}}" method="PUT">
                      {!! csrf_field() !!}
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
