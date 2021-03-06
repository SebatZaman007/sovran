<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('mainlogo.index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mainlogo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('home.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('videoposter.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Video Poster</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('videoarea.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Video Area</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('ecommrceedgelarge.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ecommrce Area</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('ecommrceedgesmall.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ecommrce Area Small</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('about.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('aboutcontent.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Content</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('member.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('marchent.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marchent
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('memberfacility.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Memberfacility</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('network.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Network</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('networklist.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Network List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('shoppingcoin.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Shoppingcoin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('shoppingcoinlist.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Shoppingcoin List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('privacy.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Privacy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('privacylist.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Privacy List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('comingsoon.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Comingsoon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('joinus.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Join Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('features.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Features</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('footerleft.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Footer Left</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('footerlink.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Footer Link</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Blog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('adminblog.index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
