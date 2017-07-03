@extends('cms.layout.master')
     @section('album')
     class="active"
     @endsection
      @section('title')
      	Album
      @endsection
       @section('content')
       <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       <h2>
       	Albuns
       </h2>
       @include('cms.complements.album')<br>
       <hr>
       
       @if($album->isEmpty())
       <p>It's empty</p>
 
       @else
             @foreach($album as $album)
			  <a href="/cms/photo/{{$album->id}}">
				<div class="col-sm-6 col-md-4 ">
				  <div class="thumbnail">
			<div style="background-image: url({{ URL::to('/') }}/albuns/{{$album->id}}/thumb/{{$album->cover}}); 
				background-position: center center;background-size: cover;">
					<img class="img-responsive" src="{{ URL::to('/') }}/fundo.png" alt="...">
					  </div>
					<div class="caption">
					<h3>{{$album->title}}</h3>
					<p>{{$album->created_at->toFormattedDateString()}}</p></a>
					@include('cms.complements.editA')	
					  <a href="albuns/del/{{$album->id}}" class="btn btn-default col-md-offset-1" role="button">Delete</a>
				  </div>
			  </div>
			  </div>
  
   @endforeach
          
            @endif
       </div>
       @endsection