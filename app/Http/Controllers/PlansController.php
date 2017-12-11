<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPosts;
use App\Colours;
use App\Identity;
use App\Plans;
class PlansController extends Controller
{


        public function __construct(){
          $this->middleware('auth', ['only' =>['create', 'store', 'edit', 'update', 'delete']]);
          // $this->middleware('auth', ['except'=> 'index', 'show']);
        }
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $posts = Plans::all();
            return view("home", compact("posts"));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
              return view("plans.create");

        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request){

              $this->validate($request, [
                'plan_name' => 'required |min:4|max:20',
                    'plan_price' => 'required |max:6',

                  'plan_name2' => 'required |min:4|max:20',
        'plan_price2' => 'required |max:6',
                    'plan_name3' => 'required |min:4|max:20',
                            'plan_price3' => 'required |max:6',
              ]);
          $post = Plans::findOrFail(1);
          $post->plan_name = $request->plan_name;
              $post->plan_price = $request->plan_price;
              $post->plan_name2 = $request->plan_name2;
              $post->plan_price2 = $request->plan_price2;
              $post->plan_name3 = $request->plan_name3;
              $post->plan_price3 = $request->plan_price3;

            $post->update();
            return redirect()->route('home', $post);
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
          // if(Request::path() === '/blog/1'){
          //   $id = 1;
          // } elseif (Request::path() === '/blog/2') {
          //     $id = 2;
          // }


          $post = Plans::where('id', "=", 1)->firstOrFail();
          return view('home', compact('post'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $post = Plans::where('id', "=", 1)->firstOrFail();
            $identity = Identity::where('id', "=", 1)->firstOrFail();
            $colours = Colours::where('id', "=", 1)->firstOrFail();

              return view('plans.edit',  compact('post', 'colours', 'identity'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            return redirect()->route('plans.edit', $id);
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }
    }
