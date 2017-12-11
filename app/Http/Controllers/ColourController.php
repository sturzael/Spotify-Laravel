<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\BlogPosts;
use App\Colours;
use App\Identity;
class ColourController extends Controller {
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
    public function create() {
        return view("colours.create");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $post = Colours::findOrFail(1);
        $post->text_colour = $request->text_colour;
        $post->header_colour = $request->header_colour;
        $post->block_colour = $request->block_colour;
        $post->deal_colour = $request->deal_colour;
        $post->oncolour_text_colour = $request->oncolour_text_colour;
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
        $post = Colours::where('id', "=", 1)->firstOrFail();
        return view('home', compact('post'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $id = preg_replace('/[^1-2]/', '', url()->current());
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
    public function update(Request $request, $id) {
        return redirect()->route('colours.edit', $id);
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
