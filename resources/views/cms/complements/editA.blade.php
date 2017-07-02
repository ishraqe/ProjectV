
		<button type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#teste{{$album->id}}">Edit</button>

		<!-- Modal -->
   <div class="modal fade" id="teste{{$album->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Album</h4>
        </div>
        <div class="modal-body">
          <form action="\album\edit\{{$album->id}}" enctype="multipart/form-data" method="post">
          {{csrf_field()}}
		  <div class="form-group">
			<label for="title">Title:</label>
			<input type="text" class="form-control" value="{{$album->title}}" name="title" id="title" placeholder="Title">
		  </div>
		  <div class="form-group">
			<label for="text">Text:</label>
			<textarea class="form-control" value="{{$album->description}}" placeholder="Text" name="body" rows="2"></textarea>
		  </div>
		  <div class="form-group">
			<label for="exampleInputFile">File input</label>
			<input type="file" style="border:#CBCBCB solid 1px; border-radius: 3px; padding: 3px;" name="image" id="exampleInputFile" accept=".jpg,.JPG, .png, .PNG, .gif, .GIF">
		  </div>
		  	<button type="submit" class="btn col-md-offset-5 btn-default">Submit</button>
		  	<br>
		  
			</form>
        </div>
        
      </div>
      
    </div>
  </div>