<?php

namespace Users\Http\Controllers;

use Illuminate\Http\Request;

use Users\Http\Requests;
use Users\Http\Requests\ProfileRequest;
use Users\Http\Requests\PasswordRequest;

use Users\User;

use Redirect;


class SettingController extends Controller
{
    public function index()
    {
      return view('setting.index');
    }

    public function edit($id)
    {
      $user = User::find($id);
      return view('setting.edit',['user' => $user]);
    }

    public function show()
    {
      # code...
    }

    public function store(Request $request)
    {
      # code...

    }

    public function update(Request $request, $id)
    {
      # code...
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        return Redirect::to('setting');
    }


}
