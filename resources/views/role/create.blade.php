@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/chosen/chosen.css')}}" media="screen" title="no title" charset="utf-8">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create Role</div>

                <div class="panel-body">
                    <form  action="{{url('role')}}" method="POST">
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
                            <label for="display_name">Display Name</label>
                            <input type="text" name="display_name" class="form-control" placeholder="Display Name">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="description">Description</label>
                              <input type="text" name="description" class="form-control" placeholder="Description" >
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="permissions">Permissions</label>
                            <select multiple name="permissions[]" class="form-control select-roles" >
                              <option value=""></option>
                              @foreach($permissions as $permission)
                              <option value="{{$permission->id}}">{{$permission->display_name}}</option>
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
