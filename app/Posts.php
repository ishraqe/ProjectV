<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categories;
class Posts extends Model
{
    //
	protected $fillable = ['title', 'category', 'body', 'cover'];
	
	public static function recent(){
		return Posts::latest()->get();
	}
	public function category(){
		return $this->belongsTo(Categories::class, 'categories_id');
	}
	
	public static function cover($file){
		
			$path = public_path().'/albuns/post/';
			$extension = $file->getClientOriginalExtension();
			$filename = str_random(12).".{$extension}";
			try{
				$file->move($path, $filename);
				return $filename;
			}catch(\Exception $e){
				return null;	
			}
			

	}
}
