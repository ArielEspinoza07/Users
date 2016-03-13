@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.partial.settings')
        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">Change password</div>

                <div class="panel-body">
                  <form  action="{{URL::to('setting/' . $user->id .'/update')}}" method="PUT">
                    {!! csrf_field() !!}
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <input type="hidden" name="id" value="{!! Auth::user()->id !!}">
                          <label for="password">Old Password</label>
                          <input type="password" name="password" class="form-control" value="" placeholder="*******************">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label for="password">New Password</label>
                          <input type="password" name="password" class="form-control" value="" placeholder="*******************">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label for="password">Confirm new Password</label>
                          <input type="password" name="password" class="form-control" value="" placeholder="*******************">
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
