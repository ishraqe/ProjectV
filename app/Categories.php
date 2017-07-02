<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Posts;
class Categories extends Model
{
    //
	protected $fillable = ['category'];
	
	public static function recent(){
		return Categories::latest()->get();

	}
	public function posts(){
		return $this->hasMany(Posts::class);
	}
}
