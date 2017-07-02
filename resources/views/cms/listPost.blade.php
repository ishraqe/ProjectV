@extends('cms.layout.master')
@section('post')
     class="active"
 @endsection
@section('title')
      	{{$post->title}}
@endsection
      
@section('content')
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 <div class="row">
 	<div style="height: 300px; background-image: url({{ URL::to('/') }}/albuns/post/{{$post->cover}});background-position: center center;background-size: cover; background-repeat: no-repeat;
    background-attachment: fixed;">
				<img class="img-responsive" height="320" src="{{ URL::to('/') }}/fundo.png" alt="...">
				  </div>
 </div>
	<h2>{{$post->title}}</h2>
	<p>{{$post->created_at->toFormattedDateString()}}</p>
	{!!$post->body!!}
	<a href="/cms/posts/edit/{{$post->id}}" class="btn btn-default" role="button">Edit</a>
				 <a href="/cms/posts/del/{{$post->id}}"  class="btn btn-default col-md-offset-1" role="button">Delete</a>
</div>
@endsection