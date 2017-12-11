<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\BlogPosts;
use App\Colours;
use App\Identity;
// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;
use App\Images;
class ImagesController extends Controller {
    public function __construct() {
        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'update', 'delete']]);
        // $this->middleware('auth', ['except'=> 'index', 'show']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posts = Images::all();
        return view("home", compact("posts"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view("images.create");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        die('dsa');
        $post = Images::findOrFail(1);
        $post->home_image = $request->home_image;
        $filename = uniqid();
        $post->home_image = $filename;
        $manager = new ImageManager();
        $uploadedImage = $manager->make($request->home_image);
        $uploadedImage->save('images/uploads/' . $filename . '-large.jpg', 100);
        $post->update();
        return redirect()->route('home', $post);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $post = Images::where('id', "=", 1)->firstOrFail();
        return view('home', compact('post'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $post = Images::where('id', "=", 1)->firstOrFail();
        $identity = Identity::where('id', "=", 1)->firstOrFail();
        $colours = Colours::where('id', "=", 1)->firstOrFail();
        return view('images.edit', compact('post', 'colours', 'identity'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $post = Images::findOrFail(1);
        $manager = new ImageManager();
        if ($request->block1_image) {
            $secondary_home = preg_replace('/ /', '', $post->block1_image);
            $uploadedImage3 = $manager->make($request->block1_image);
            $uploadedImage3->save('images/uploads/' . $secondary_home . '.jpg', 100);
        };
        if ($request->home_image) {
            $filename = preg_replace('/ /', '', $post->home_image);
            $uploadedImage = $manager->make($request->home_image);
            $uploadedImage->save('images/uploads/' . $filename . '.jpg', 100);
        }
        if ($request->block2_image) {
            $block2 = preg_replace('/ /', '', $post->block2_image);
            $uploadedImage3 = $manager->make($request->block2_image);
            $uploadedImage3->save('images/uploads/' . $block2 . '.png', 100);
        }
        if ($request->page_image) {
            $pagename = preg_replace('/ /', '', $post->page_image);
            $uploadedImage2 = $manager->make($request->page_image);
            $uploadedImage2->save('images/uploads/' . $pagename . '.jpg', 100);
        }
        if ($request->block3_image) {
            $block3 = preg_replace('/ /', '', $post->block3_image);
            $uploadedImage4 = $manager->make($request->block3_image);
            $uploadedImage4->save('images/uploads/' . $block3 . '.jpg', 100);
        }
        if ($request->block4_image) {
            $block4 = preg_replace('/ /', '', $post->block4_image);
            $uploadedImage5 = $manager->make($request->block4_image);
            $uploadedImage5->save('images/uploads/' . $block4 . '.png', 100);
        }
        $post->update();
        return redirect()->route('home');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //

    }
}
