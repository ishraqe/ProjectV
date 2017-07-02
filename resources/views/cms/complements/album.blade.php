<div class="col-md-2">
		<p><button type="button" style="float: right; background: #FFFFFF; border: #FFFBFB;"  data-toggle="modal" data-target="#myModal">Create a new album</button></p>
		
			</div>
		<!-- Modal -->
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create a new album</h4>
        </div>
        <div class="modal-body">
          <form action="/cms/album/save" enctype="multipart/form-data" method="post">
          {{csrf_field()}}
		  <div class="form-group">
			<label for="title">Title:</label>
			<input type="text" class="form-control" name="title" id="title" placeholder="Title">
		  </div>
		  <div class="form-group">
			<label for="text">Text:</label>
			<textarea class="form-control" placeholder="Text" name="body" rows="2"></textarea>
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