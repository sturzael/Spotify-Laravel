<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPosts;
use App\Colours;
use App\Identity;


// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;
use App\Images;

class ImagesController extends Controller
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
            $posts = Images::all();
            return view("home", compact("posts"));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
              return view("images.create");

        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request){


          die('dsa');

          $post = Images::findOrFail(1);
          $post->home_image = $request->home_image;

          $filename= uniqid();
          $post->home_image = $filename;
          $manager = new ImageManager();
          $uploadedImage = $manager->make($request->home_image);

          $uploadedImage->save('images/uploads/'.$filename.'-large.jpg', 100);
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


          $post = Images::where('id', "=", 1)->firstOrFail();
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
            $post = Images::where('id', "=", 1)->firstOrFail();
            $identity = Images::where('id', "=", 1)->firstOrFail();
            $colours = Colours::where('id', "=", 1)->firstOrFail();

              return view('images.edit',  compact('post', 'colours', 'identity'));
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

          $post = Images::findOrFail(1);
          $filename = preg_replace('/ /', '',$post->home_image);
              $manager = new ImageManager();
            $uploadedImage = $manager->make($request->home_image);
            die($filename);
          $uploadedImage->save('images/uploads/'.$filename.'.jpg', 100);



                // $filename = $post->home_image;
                // unlink('/images/uploads/'.$filename.'.jpg');
                // $manager = new ImageManager();
                // $uploadedImage = $manager->make($request->home_image);
                //
                //     $uploadedImage->save('images/'.$filename.'.jpg');


          // }
          $post->update();
          return redirect()->route('home');
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
