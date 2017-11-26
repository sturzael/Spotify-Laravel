<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPosts;
use Intervention\Image\ImageManager;
class BlogController extends Controller
{

    public function __construct(){
      $this->middleware('auth', ['only' =>['create', 'store', 'edit', 'update', 'delete']]);
      $this->middleware('auth', ['except'=> 'index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("blog.index");
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
      'post_title' => 'required |min:5|max:255',
      'post_description' =>'required',
      'image_name' => 'required'
    ]);
    $newPost = new BlogPosts();
    $newPost ->post_title = $request->post_title;
    $newPost ->post_description = $request->post_description;
    $filename= uniqid();
    $newPost->image_name = $filename;
    $manager = new ImageManager();
    $uploadedImage = $manager->make($request->image_name);

        $uploadedImage->fit(300, 200, function($constraint){
            $constraint->upsize();
        });

        $uploadedImage->save('images/uploads/'.$filename.'-thumb.jpg', 100);

        $uploadedImage -> resize(500,null, function($constraint){
          $constraint->aspectRatio();
        });
        $uploadedImage->save('images/uploads/'.$filename.'-large.jpg', 100);
        $newPost->save();
        return redirect()->('blog.show', $newPost);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = BlogPosts::where('id', "=", $id)->firstOrFail();
      return view('blog.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
