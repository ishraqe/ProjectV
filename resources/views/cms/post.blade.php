    @extends('cms.layout.master')
     @section('post')
     class="active"
     @endsection
      @section('title')
      	Post
      @endsection
       @section('content')
       <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       <h2>
       	Post
       </h2>
       @include('cms.complements.post')<br>
       <hr>
        @if($post->isEmpty())
        <p>It's empty</p>
         @else
         @foreach($post as $post)
         <a href="/cms/post/list/{{$post->id}}">
			<div class="col-sm-5 col-md-3 ">
			  <div class="thumbnail">
				<div style="background-image: url({{ URL::to('/') }}/albuns/post/{{$post->cover}});background-position: center center;background-size: cover;">
				<img class="img-responsive" src="{{ URL::to('/') }}/fundo.png" alt="...">
				  </div>
				<div class="caption">
					<h5>{{$post->title}}</h5></a>
				<p>{{$post->created_at->toFormattedDateString()}}</p>
				
				<a href="/cms/post/edit/{{$post->id}}" class="btn btn-default" role="button">Edit</a>
				 <a href="/cms/post/del/{{$post->id}}"  class="btn btn-default col-md-offset-1" role="button">Delete</a>
				
			  </div>
		  </div>
		  </div>

         @endforeach
         @endif
       </div>
       @endsection