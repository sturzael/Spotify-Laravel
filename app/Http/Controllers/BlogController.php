<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPosts;
use App\Colours;
use App\Identity;
use Intervention\Image\ImageManager;
class BlogController extends Controller

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
        $posts = BlogPosts::paginate(6);

          $identity = Identity::where('id', "=", 1)->firstOrFail();
          $colours = Colours::where('id', "=", 1)->firstOrFail();

          return view('home', compact('post', 'colours', 'identity'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view("blog.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

    $this->validate($request, [
      'site_header' => 'required |min:2|max:25'
    ]);


      $id = $request->id;
      // die($id);
      $post = BlogPosts::findOrFail($id);


      $post ->site_header = $request->site_header;
      $post ->site_para_one_header = $request->site_para_one_header;
      $post ->site_para_one_sub_header_1 = $request->site_para_one_sub_header_1;
      $post ->site_para_one_sub_header_2 = $request->site_para_one_sub_header_2;
      $post ->site_para_one_sub_header_3 = $request->site_para_one_sub_header_3;
      $post ->site_para_one_text_1 = $request->site_para_one_text_1;
      $post ->site_para_one_text_2 = $request->site_para_one_text_2;
      $post ->site_para_one_text_3 = $request->site_para_one_text_3;

      $post ->site_para_two_header = $request->site_para_two_header;
      $post ->site_para_two_sub_header_1 = $request->site_para_two_sub_header_1;
      $post ->site_para_two_sub_header_2 = $request->site_para_two_sub_header_2;
      $post ->site_para_two_sub_header_3 = $request->site_para_two_sub_header_3;
      $post ->site_para_two_text_1 = $request->site_para_two_text_1;
      $post ->site_para_two_text_2 = $request->site_para_two_text_2;
      $post ->site_para_two_text_3 = $request->site_para_two_text_3;

      $post ->footer_small_text = $request->footer_small_text;
      $post ->footer_big_text = $request->footer_big_text;
      


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


      $post = BlogPosts::where('id', "=", $id)->firstOrFail();
      $identity = Identity::where('id', "=", 1)->firstOrFail();
      $colours = Colours::where('id', "=", 1)->firstOrFail();

      return view('home', compact('post', 'colours', 'identity'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



        $post = BlogPosts::where('id', "=", $id)->firstOrFail();
        $identity = Identity::where('id', "=", 1)->firstOrFail();
        $colours = Colours::where('id', "=", 1)->firstOrFail();


          return view('blog.edit',  compact('post', 'colours', 'identity'));
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
          $id = preg_replace('/[^1-2]/', '',url()->current());
      $post = BlogPosts::findOrFail($id);
      // $this->validate($request, [
      //   'post_title' => 'required |min:5|max:255',
      //   'post_description' =>'required'
      // ]);
      $post ->site_header = $request->site_header;
      // $post ->post_description = $request->post_description;

      $post->update();
        return redirect()->route('blog.edit', $id);
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
