@extends('cms.layout.master')
     @section('dash')
     class="active"
     @endsection
      @section('title')
      	Home
      @endsection
       @section('content')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
           @if($album->isEmpty())
			  <div class="col-xs-6 col-sm-3 placeholder"><h4>
			  	Empty
			  </h4></div>
            @else
            @foreach($album->slice(0,4) as $album)
            <div class="col-xs-6 col-sm-3 placeholder">
             <a href="/photo/{{$album->id}}">
             <div class="img-thumbnail"  style="background-image: url({{ URL::to('/') }}/albuns/{{$album->id}}/thumb/{{$album->cover}});background-position: center center;
  			background-size: cover;">
              <img src="{{ URL::to('/') }}/fundo.png" width="200" height="200" class="img-responsive">
              </div>
             </a>
              <h4>{{$album->title}}</h4>
              <span class="text-muted">{{$album->created_at->toFormattedDateString()}}</span>
            </div>
            @endforeach
            @endif
          </div>

          <h2 class="sub-header">Posts</h2>
          @if($post->isEmpty())
          <h4>
			  	Empty
			  </h4>
          @else
          
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Title</th>
                  
                  <th>Created at</th>
            		<th>Option</th>
                </tr>
              </thead>
              @foreach($post->slice(0, 8) as $posts)
                <tr>
                  <td>{{$posts->id}}</td>
                  <td>{{$posts->title}}</td>
          
                  <td>{{$posts->created_at->toFormattedDateString()}}</td>
                  <td>
                  <a href="posts/edit/{{$posts->id}}" role="button">Edit </a>
         			<a href="posts/del/{{$posts->id}}" role="button"><span class="col-md-offset-1"></span> Delete</a>
       				 </td>
				  </tr>
               @endforeach
            </table>
          </div>
          
            @endif
        </div>
@endsection
     
