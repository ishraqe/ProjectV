<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Albuns;
use File;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album = Albuns::recent();
		return view('cms.album', compact('album'));
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
        $album = Albuns::create(['title' => $request->title, 'body'=>$request->body, 'cover'=>'oi']);
		$album = Albuns::all()->last();
		$filename = Albuns::cover($request->file('image'));
		$save=Albuns::where('id', $album->id)->update(array('cover' => $filename));
		if($save){
		\Session::flash('save_message','Album created with sucess');
		}
		return redirect('/cms/album');
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
		$id = Albuns::find($id)->id;
		$path = public_path().'/albuns/' . $id;
		$success = File::deleteDirectory($path);
		if(Albuns::find($id)->delete()){
		\Session::flash('delete_message','successfully deleted.');
		}
		return redirect('/cms/album');
    }
}
