<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Categories;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       	$post = Posts::recent();
		$category = Categories::recent();
		return view('cms.post', compact('post', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {	
		
		$file = Posts::cover($request->file('image'));
		if(!$file)return back()->withErrors(['message' => 'Ops, something went wrong']);
		$save =Posts::create([
			'category_id' =>request('category'),
			'title' => request('title'),
			'body' => request('body'),
			'cover' => $file]
					 );
		if($save){
		\Session::flash('save_message','Post created with sucess');
			return redirect('/cms/post');
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
		$post = Posts::find($id);
		
		return view('cms.listPost', compact('post'));
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
		$post = Posts::find($id);
		$category = Categories::recent();
		return view('cms.editPost', compact('post', 'category'));
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
		$post = Posts::find($id);
		$image = $post->image;
		$path = public_path().'/albuns/post/'.$image;
		File::delete($path);
		$delete = Posts::find($id)->delete();
		if($delete){
		\Session::flash('delete_message','Post deleted');
		}
		return redirect('/cms/post');
    }
}
