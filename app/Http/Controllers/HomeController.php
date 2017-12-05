<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPosts;
use App\Colours;
use App\Identity;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $identity = Identity::where('id', "=", 1)->firstOrFail();
      $colours = Colours::where('id', "=", 1)->firstOrFail();
      $post = BlogPosts::where('id', "=", 1)->firstOrFail();
      return view('home', compact('post', 'colours'));
    }
}
