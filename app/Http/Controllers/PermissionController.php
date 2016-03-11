<?php

namespace Users\Http\Controllers;

use Illuminate\Http\Request;

use Users\Http\Requests;

use Users\Http\Requests\UserRequest;

use Users\Permission;

use Redirect;

use Session;

class PermissionController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    return view('permission.index',['permissions' => Permission::all()]);
  }
}
