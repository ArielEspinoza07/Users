@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard of {{Auth::user()->name}}</div>

                <div class="panel-body">
                    You are logged in! {{Auth::user()->username}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
