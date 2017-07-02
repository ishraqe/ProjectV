<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;
class Albuns extends Model
{
    //
	protected $fillable = ['title', 'image', 'body'];
	
	public static function recent(){
		return Albuns::latest()->get();
		
	}
	public function photo(){
		return $this->hasMany(Photos::class);
	}
	
	
	public static function cover($file){
		//here I get the last data
		$album = Albuns::all()->last();
		//here I create the folder
		$path = public_path().'/albuns/' . $album->id;
		File::makeDirectory($path, $mode = 0777, true, true);
		//here I create the thumb
		$thumb = public_path().'/albuns/' .$album->id.'/thumb';
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
