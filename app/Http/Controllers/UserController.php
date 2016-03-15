<?php

namespace Users\Http\Controllers;

use Illuminate\Http\Request;

use Users\Http\Requests;

use Users\Http\Requests\UserRequest;

use Users\User;
use Users\Role;

use Redirect;

use Session;

class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

      return view('user.index',['users' => User::all()]);
  }

  public function create()
  {
    # code...
    return view('user.create',['roles' => Role::all()]);
  }

  public function store(UserRequest $request)
  {
    $user = User::create($request->all());
    $user->roles()->sync($request->roles);
    flash()->success('User Succesfully created');
    return Redirect::to('user');
  }

  public function show($id)
  {
    # code...
  }

  public function edit($id)
  {
      return view('user.edit',['user' => User::find($id),'roles' => Role::all()]);
  }

  public function update(Request $request, $id)
  {
      $user = User::find($id);
      $user->fill($request->all());
      $user->save();
      $user->roles()->sync($request->roles);
      flash()->success('User Succesfully Updated');
      return Redirect::to('user');
  }

  public function destroy($id)
  {
      User::destroy($id);
      flash()->success('User Succesfully Deleted');
      return Redirect::to('user');
  }
}
