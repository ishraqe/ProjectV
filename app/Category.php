<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Category extends Model
{
    //
	protected $fillable = ['category'];
	
	public static function recent(){
		return Category::latest()->get();

	}
	public function post(){
		return $this->hasMany(Post::class);
	}
}
