<?php

namespace Users\Http\Controllers;

use Illuminate\Http\Request;

use Users\Http\Requests;

//use Users\Http\Requests\UserRequest;

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
    return view('permission.index',['permissions' => Permission::paginate(10)]);
  }

  public function create()
  {
    return view('permission.create');
  }

  /**
   * @param Request $request
   * @return mixed
     */
  public function store(Request $request)
  {
    Permission::create($request->all());
    flash()->success('Permission Succesfully created');
    return Redirect::to('permission');
  }

  public function edit($id)
  {
    return view('permission.edit',['permission' => Permission::find($id)]);
  }

  public function update(Request $request,$id)
  {
      $permission = Permission::find($id);
      $permission->fill($request->all());
      $permission->save();
      flash()->success('Permission Succesfully Updated');
      return Redirect::to('permission');
  }

  public function destroy($id)
  {
      Permission::destroy($id);
      flash()->success('Permission Succesfully Deleted');
      return Redirect::to('permission');
  }
}
