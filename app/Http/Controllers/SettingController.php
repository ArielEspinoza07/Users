<?php

namespace Users\Http\Controllers;

use Illuminate\Http\Request;

use Users\Http\Requests;


class SettingController extends Controller
{
    public function index()
    {
      return view('setting.index');
    }

    public function edit()
    {
      return view('setting.edit');
    }
}
