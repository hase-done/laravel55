<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id='noname', $pass='unknown') {
      // return "hello index id = {$id} pass = {$pass}";
      $data = ['msg' => $id];
      return view('hello.index', $data);
    }
}
