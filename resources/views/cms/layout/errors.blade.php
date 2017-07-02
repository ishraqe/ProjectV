	@if($errors->all())
<div id="message" class="fixed-top col-md-3 col-md-offset-8 col-xs-offset-7" style="z-index: 20; position:absolute;">
     	<div class="alert  alert-danger">
   	
 		@foreach($errors->all() as $error)
 		<center>{{$error}}</center>
 		@endforeach
 	
 	</div>
 	
</div>
 	@endif
 	@if(Session::has('delete_message'))
   <div id="message" class="fixed-top col-md-3 col-md-offset-8 col-xs-offset-7" style="z-index: 20; position:absolute;">
     	<div class="alert  alert alert-danger">
    		{!! session('delete_message') !!}
   		 </div>
   		 </div>
	@endif
	@if(Session::has('save_message'))
   <div id="message" class="fixed-top col-md-3 col-md-offset-8 col-xs-offset-7" style="z-index: 20; position:absolute;">
     	<div class="alert alert-success">
    		{!! session('save_message') !!}
   		 </div>
   		 </div>
	@endif