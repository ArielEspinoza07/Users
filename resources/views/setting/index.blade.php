@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.partial.settings')
        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                  <form  action="{{url('setting/store')}}" method="POST">
                      {!! csrf_field() !!}
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group ">
                            <input type="hidden" name="id" value="{!! Auth::user()->id !!}">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{!! Auth::user()->name !!}" placeholder="Name">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group ">
                            <label for="username">UserName</label>
                            <input type="text" name="username" class="form-control" value="{!! Auth::user()->username !!}">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group ">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="{!! Auth::user()->email !!}">
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
