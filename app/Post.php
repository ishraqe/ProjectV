<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Post extends Model
{
    //
	protected $fillable = ['title', 'category', 'body', 'cover'];
	
	public static function recent(){
		return Post::latest()->get();
	}
	public function category(){
		return $this->belongsTo(Category::class, 'category_id');
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
