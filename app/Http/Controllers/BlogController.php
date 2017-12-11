<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\BlogPosts;
use App\Colours;
use App\Identity;
use App\Images;
use App\Plans;
use Intervention\Image\ImageManager;
class BlogController extends Controller {
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
        $posts = BlogPosts::paginate(6);
        $identity = Identity::where('id', "=", 1)->firstOrFail();
        $colours = Colours::where('id', "=", 1)->firstOrFail();
        $images = Images::where('id', "=", 1)->firstOrFail();
        $plans = Plans::where('id', "=", 1)->firstOrFail();
        return view('home', compact('post', 'colours', 'identity', 'images', 'plans'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view("blog.create");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, ['header' => 'required |min:2|max:25', 'para_one_header' => 'required|min:3|max:20', 'para_one_sub_header_1' => 'required|min:3|max:20', 'para_one_text_1' => 'required|min:3', 'para_one_sub_header_2' => 'required|min:3|max:20', 'para_one_text_2' => 'required|min:3', 'para_one_sub_header_3' => 'required|min:3|max:20', 'para_one_text_3' => 'required|min:3', 'para_two_header' => 'required|min:3|max:20', 'para_two_sub_header_1' => 'required|min:3|max:20', 'para_two_text_1' => 'required|min:3', 'para_two_sub_header_2' => 'required|min:3|max:20', 'para_two_text_2' => 'required|min:3', 'para_two_sub_header_3' => 'required|min:3|max:20', 'para_two_text_3' => 'required|min:3', 'footer_small_text' => 'required|min:5|max:40', 'footer_big_text' => 'required|min:5|max:40']);
        $id = $request->id;
        // die($id);
        $post = BlogPosts::findOrFail($id);
        $post->header = $request->header;
        $post->para_one_header = $request->para_one_header;
        $post->para_one_sub_header_1 = $request->para_one_sub_header_1;
        $post->para_one_sub_header_2 = $request->para_one_sub_header_2;
        $post->para_one_sub_header_3 = $request->para_one_sub_header_3;
        $post->para_one_text_1 = $request->para_one_text_1;
        $post->para_one_text_2 = $request->para_one_text_2;
        $post->para_one_text_3 = $request->para_one_text_3;
        $post->para_two_header = $request->para_two_header;
        $post->para_two_sub_header_1 = $request->para_two_sub_header_1;
        $post->para_two_sub_header_2 = $request->para_two_sub_header_2;
        $post->para_two_sub_header_3 = $request->para_two_sub_header_3;
        $post->para_two_text_1 = $request->para_two_text_1;
        $post->para_two_text_2 = $request->para_two_text_2;
        $post->para_two_text_3 = $request->para_two_text_3;
        $post->footer_small_text = $request->footer_small_text;
        $post->footer_big_text = $request->footer_big_text;
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
        $post = BlogPosts::where('id', "=", $id)->firstOrFail();
        $identity = Identity::where('id', "=", 1)->firstOrFail();
        $colours = Colours::where('id', "=", 1)->firstOrFail();
        $images = Images::where('id', "=", 1)->firstOrFail();
        $plans = Plans::where('id', "=", 1)->firstOrFail();
        return view('home', compact('post', 'colours', 'identity', 'images', 'plans'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $post = BlogPosts::where('id', "=", $id)->firstOrFail();
        $identity = Identity::where('id', "=", 1)->firstOrFail();
        $colours = Colours::where('id', "=", 1)->firstOrFail();
        return view('blog.edit', compact('post', 'colours', 'identity'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        return redirect()->route('blog.edit', $id);
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
