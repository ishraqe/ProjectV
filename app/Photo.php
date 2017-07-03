<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Album;
class Photo extends Model
{
    //
	protected $fillable = ['image', 'album', 'title'];
	
	public function recent(){
		return Photo::latest()->get();
	}
	public function album(){
		return $this->belongsTo(Album::class,'album_id');
	}
	
}
