<?php

namespace Users\Http\Controllers;

use Illuminate\Http\Request;

use Users\Http\Requests;

use Users\Http\Requests\UserRequest;

use Users\Role;
use Users\Permission;

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

  public function create()
  {
    # code...
    return view('role.create',['permissions' => Permission::all()]);
  }

  public function store(Request $request)
  {
    $role = Role::create($request->all());
    $role->permissions()->sync($request->permissions);
    flash()->success('Role Succesfully created');
    return Redirect::to('role');
  }

  public function show($id)
  {
    # code...
  }

  public function edit($id)
  {
      return view('role.edit',['role' => Role::find($id),'roles' => Role::all()]);
  }

  public function update(Request $request, $id)
  {
      $role = Role::find($id);
      $role->fill($request->all());
      $role->save();
      $role->permissions()->sync($request->permissions);
      flash()->success('Role Succesfully Updated');
      return Redirect::to('role');
  }

  public function destroy($id)
  {
      User::destroy($id);
      flash()->success('Role Succesfully Deleted');
      return Redirect::to('role');
  }
}
