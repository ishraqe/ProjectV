
@include('cms.layout.header')

  @include('cms.layout.nav')
 	@include('cms.layout.side')
 
    @yield('content')
       
   
     @include('cms.layout.footer')