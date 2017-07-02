<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Albuns;
class Photos extends Model
{
    //
	protected $fillable = ['image', 'album', 'title'];
	
	public function recent(){
		return Photos::latest()->get();
	}
	public function album(){
		return $this->belongsTo(Albuns::class,'albuns_id');
	}
	
}
