<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Albuns;
use App\Photos;
class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, $id)
    {
//		$files = $request->file('image');
//		$album = Albuns::find($id);
//		$path = public_path().'/albuns/' . $album->id;
//		if(!empty($files)):
//			foreach($files as $file):
//    		$extension = $file->getClientOriginalExtension();
//    		$filename = str_random(12).".{$extension}";
//			$upload_success = $file->move($path, $filename);
		
			Photos::create(['albuns_id'=>$id, 'image'=> 'teste', 'title'=>$request->title]);
		
//			endforeach;
//		endif;
//		
		return redirect('/photo/'.$album);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$album = Albuns::find($id);
		return view('cms.photo', compact('album'));
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
