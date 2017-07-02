@extends('cms.layout.master')
@section('post')
     class="active"
 @endsection
@section('title')
      	{{$post->title}}
@endsection
      
@section('content')
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">{{$post->title}}</h1>
	 <form action="/cms/post/save" enctype="multipart/form-data" method="post">
          {{csrf_field()}}
		  <div class="form-group">
			<label for="title">Title:</label>
			<input type="text" class="form-control" name="title" value="{{$post->title}}" id="title" placeholder="Title">
		  </div>
		  <div class="form-group">
		  <label for="sel1">Category:</label>
		  <select class="form-control" name="category" id="sel1">

	    @foreach($category as $category)
		    <option value="{{$category->id}}">{{$category->title}}</option>
		@endforeach
		  </select>
		    </div>
		  <div class="form-group">
			<label for="text">Text:</label>
			<textarea name="body" class="form-control" placeholder="Text" rows="4">{{$post->body}}</textarea>
		  </div>
		  <div class="form-group">
			<label for="exampleInputFile">Cover</label>
			<input type="file" style="border:#CBCBCB solid 1px; border-radius: 3px; padding: 3px;" name="image" id="exampleInputFile" accept=".jpg,.JPG, .png, .PNG, .gif, .GIF">
		  </div>
		  	<button type="submit" class="btn col-md-offset-5 btn-default">Submit</button>
		  	<br>
		  	
			</form>
</div>
@endsection