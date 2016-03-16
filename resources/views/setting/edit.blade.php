@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.partial.settings')
        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">Change password</div>

                <div class="panel-body">
                  <form  action="{{URL::to('setting/' . $user->id .'')}}" method="POST">
                      <input name="_method" type="hidden" value="PUT">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label for="oldpassword">Old Password</label>
                          <input type="password" name="oldpassword" class="form-control" value="" placeholder="*******************">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label for="newpassword">New Password</label>
                          <input type="password" name="newpassword" class="form-control" value="" placeholder="*******************">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label for="confpassword">Confirm new Password</label>
                          <input type="password" name="confpassword" class="form-control" value="" placeholder="*******************">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3 col-md-offset-4">
                        <button type="submit" class="btn btn-lg btn-block btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
