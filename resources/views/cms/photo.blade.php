@extends('cms.layout.master')
     @section('album')
     class="active"
     @endsection
      @section('title')
      	Album
      @endsection
       @section('content')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="row">
 	<div style="height: 300px; background-image: url({{ URL::to('/') }}/albuns/{{$album->id}}/thumb/{{$album->cover}});background-position: center center;background-size: cover; background-repeat: no-repeat;
    background-attachment: fixed;">
				<img class="img-responsive" height="320" src="{{ URL::to('/') }}/fundo.png" alt="...">
				  </div>
 </div>
        <h2>Album - {{$album->title}}</h2>
<p>{!!$album->body!!}</p>
		<button type="button" style=" background: #FFFFFF; border: #FFFBFB;"  data-toggle="modal" data-target="#myModal">Add Images</button>
		<!-- Modal -->
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Images</h4>
        </div>
        <div class="modal-body">
          <form action="/cms/photo/save/{{$album->id}}" enctype="multipart/form-data" method="post">
          {{csrf_field()}}
		  <div class="form-group">
			<label for="title">Title:</label>
			<input type="text" class="form-control" name="title" id="title" placeholder="Title">
		  </div>
		  <div class="form-group">
			<label for="exampleInputFile">File input</label>
			<input type="file" style="border:#CBCBCB solid 1px; border-radius: 3px; padding: 3px;" name="image[]" id="upload" accept=".jpg,.JPG, .png, .PNG, .gif, .GIF" multiple>
		  </div>
		  	<button type="submit" class="btn col-md-offset-5 btn-default">Submit</button>
		  	<br>
			</form>

        </div>

      </div>

    </div>
  </div>
  <br>


  	<div class="row row-eq-height">
  	<hr>
@foreach($album->photo as $photo)
	
           
             <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
               
               <br>
               <div>
                      
              
                        <a href="del/{{$photo->id}}" role="button">Delete</a>
                        <small class='text-muted col-md-offset-7'>{{$photo->description}}</small>
                <a class="thumbnail fancybox" rel="ligthbox" href="{{URL::to('/') }}/albuns/{{$photo->albuns_id}}/{{$photo->image}}">
                      <div style="background-image: url({{ URL::to('/') }}/albuns/{{$photo->albuns_id}}/{{$photo->image}}); background-position: center center;background-size: cover; background-repeat: no-repeat;">
                    <img class="img-responsive" alt="" src="{{ URL::to('/') }}/fundo.png" />
					</div>  </a>
                    
                    </div> <!-- text-right / end -->
                	
		</div>   	


@endforeach


</div>
@endsection