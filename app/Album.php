<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;
class Album extends Model
{
    //
	protected $fillable = ['title', 'image', 'body'];
	
	public static function recent(){
		return Album::latest()->get();
		
	}
	public function photo(){
		return $this->hasMany(Photo::class);
	}
	
	
	public static function cover($file){
		//here I get the last data
		$album = Album::all()->last();
		//here I create the folder
		$path = public_path().'/album/' . $album->id;
		File::makeDirectory($path, $mode = 0777, true, true);
		//here I create the thumb
		$thumb = public_path().'/album/' .$album->id.'/thumb';
		File::makeDirectory($path, $mode = 0777, true, true);
		
		$extension = $file->getClientOriginalExtension();
		$filename = str_random(12).".{$extension}";
		
		try{
				$file->move($thumb, $filename);
				
		
				return $filename;
			}catch(\Exception $e){
				return null;	
			}
	}
}
