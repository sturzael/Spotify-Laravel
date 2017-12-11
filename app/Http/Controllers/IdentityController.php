<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\BlogPosts;
use App\Colours;
use App\Identity;
class IdentityController extends Controller {
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
        $posts = Identity::all();
        return view("home", compact("posts"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view("identity.create");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, ['Title' => 'required |min:2|max:50', 'Meta_Desc' => 'required|min:2|max:200', 'page_name' => 'required |min:2|max:30', ]);
        $post = Identity::findOrFail(1);
        $post->Title = $request->Title;
        $post->Meta_Desc = $request->Meta_Desc;
        $post->page_name = $request->page_name;
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
        $post = Identity::where('id', "=", 1)->firstOrFail();
        return view('home', compact('post'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $post = Identity::where('id', "=", 1)->firstOrFail();
        $identity = Identity::where('id', "=", 1)->firstOrFail();
        $colours = Colours::where('id', "=", 1)->firstOrFail();
        return view('identity.edit', compact('post', 'colours', 'identity'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        return redirect()->route('identity.edit', $id);
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
