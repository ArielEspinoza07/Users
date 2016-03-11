<?php

namespace Users\Http\Controllers;

use Illuminate\Http\Request;

use Users\Http\Requests;

use Users\Http\Requests\UserRequest;

use Users\Role;

use Redirect;

use Session;

class RoleController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    return view('role.index',['roles' => Role::all()]);
  }
}
