<div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li @yield('index')><a href="/cms/dash">Overview <span class="sr-only">(current)</span></a></li>
            <li @yield('post')><a href="/cms/post">Posts</a></li>
            <li @yield('album')><a href="/cms/album">Album</a></li>
            <li @yield('profile')><a href="/cms/profile">Profile</a></li>
          </ul>
          
        </div>