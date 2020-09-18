<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
             <li class=active><a class="nav-link" href="{{route('home')}}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

            <li class="menu-header">Starter</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i> <span>Post</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('post.index')}}">list Post</a></li>
                <li><a class="nav-link" href="{{route('post.tampil_hapus')}}">Post yang dihapus</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-clipboard"></i> <span>Kategory</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('category.index')}}">list Kategory</a></li>
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-bookmark"></i> <span>Tags</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('tag.index')}}">list Tags</a></li>
              </ul>
            </li>

            <li class="dropdown">
             <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span>user</span></a>
             <ul class="dropdown-menu">
               <li><a class="nav-link" href="{{route('user.index')}}">list User</a></li>
             </ul>
           </li>
           
           <li class="dropdown">
             <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span>Iklan</span></a>
             <ul class="dropdown-menu">
               <li><a class="nav-link" href="{{route('iklan.index')}}">list Iklan</a></li>
             </ul>
           </li>
            <li class=active><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
         </aside>
