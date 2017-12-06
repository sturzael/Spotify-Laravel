<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPosts;
use App\Colours;
use App\Identity;
class ColourController extends Controller
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
        $identity = Identity::where('id', "=", 1)->firstOrFail();
        $colours = Colours::where('id', "=", 1)->firstOrFail();
        $post = BlogPosts::where('id', "=", 1)->firstOrFail();
        return view('home', compact('post', 'colours', 'identity'));
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
            return view("colours.create");

      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request){




        $post = Colours::findOrFail(1);
        $post ->text_colour = $request->text_colour;
            $post ->header_colour = $request->header_colour;
            $post ->block_colour = $request->block_colour;
                $post ->deal_colour = $request->deal_colour;
                  $post ->oncolour_text_colour = $request->oncolour_text_colour;

        // $post ->site_para_one_header = $request->site_para_one_header;
        // $post ->site_para_one_sub_header_1 = $request->site_para_one_sub_header_1;
        // $post ->site_para_one_sub_header_2 = $request->site_para_one_sub_header_2;
        // $post ->site_para_one_sub_header_3 = $request->site_para_one_sub_header_3;
        // $post ->site_para_one_text_1 = $request->site_para_one_text_1;
        // $post ->site_para_one_text_2 = $request->site_para_one_text_2;
        // $post ->site_para_one_text_3 = $request->site_para_one_text_3;
        //
        // $post ->site_para_two_header = $request->site_para_two_header;
        // $post ->site_para_two_sub_header_1 = $request->site_para_two_sub_header_1;
        // $post ->site_para_two_sub_header_2 = $request->site_para_two_sub_header_2;
        // $post ->site_para_two_sub_header_3 = $request->site_para_two_sub_header_3;
        // $post ->site_para_two_text_1 = $request->site_para_two_text_1;
        // $post ->site_para_two_text_2 = $request->site_para_two_text_2;
        // $post ->site_para_two_text_3 = $request->site_para_two_text_3;
        //
        // $post ->footer_small_text = $request->footer_small_text;
        // $post ->footer_big_text = $request->footer_big_text;


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


        $post = Colours::where('id', "=", 1)->firstOrFail();
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
        $id = preg_replace('/[^1-2]/', '',url()->current());
          $post = Colours::where('id', "=", 1)->firstOrFail();
          $identity = Identity::where('id', "=", 1)->firstOrFail();
            return view('colours.edit', compact('post', 'identity'));
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

        $post = Colours::findOrFail(1);
        // $this->validate($request, [
        //   'post_title' => 'required |min:5|max:255',
        //   'post_description' =>'required'
        // ]);
        $post ->text_colour = $request->text_colour;
        // $post ->post_description = $request->post_description;
        // if ($request->image) {
        //       $filename = $post->image_name;
        //       unlink('/images/uploads/'.$filename.'-large.jpg');
        //       unlink('/images/uploads/'.$filename.'-thumb.jpg');
        //       $manager = new ImageManager();
        //       $uploadedImage = $manager->make($request->image_name);
        //
        //           $uploadedImage->fit(300, 200, function($constraint){
        //               $constraint->upsize();
        //           });
        //
        //           $uploadedImage->save('images/uploads/'.$filename.'-thumb.jpg', 100);
        //
        //           $uploadedImage -> resize(500,null, function($constraint){
        //           $constraint->aspectRatio();
        //           });
        //           $uploadedImage->save('images/uploads/'.$filename.'-large.jpg', 100);
        //
        // }
        $post->update();
          return redirect()->route('colours.edit', $id);
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
