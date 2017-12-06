<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPosts;
use App\Identity;
class AdminController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }


  public function index(){
  $identity = Identity::where('id', "=", 1)->firstOrFail();
    return view('admin.index',  compact('identity'));
  }
}
