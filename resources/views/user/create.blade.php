@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create User</div>

                <div class="panel-body">
                    <form  action="{{url('user/store')}}" method="POST">
                      {!! csrf_field() !!}
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
