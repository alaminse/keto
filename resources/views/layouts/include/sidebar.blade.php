<div>
    <div class="logo-wrapper"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid for-light" src="{{ asset("public/backend/assets/images/logo/logo.png")}}" alt=""><img class="img-fluid for-dark" src="{{ asset("public/backend/assets/images/logo/logo_dark.png")}}" alt=""></a>
      <div class="back-btn"><i class="fa fa-angle-left"></i></div>
      <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
    </div>
    <div class="logo-icon-wrapper"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid" src="{{ asset("public/backend/assets/images/logo/logo-icon.png")}}" alt=""></a></div>
    <nav class="sidebar-main">
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
      <div id="sidebar-menu">
        <ul class="sidebar-links" id="simple-bar">
          <li class="back-btn"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid" src="{{ asset("public/backend/assets/images/logo/logo-icon.png")}}" alt=""></a>
            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
          </li>

          <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.dashboard') }}"><i data-feather="home"> </i><span>Dashboard</span></a></li>

          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title" href="#"><i data-feather="users"></i><span>Users              </span></a>
            <ul class="sidebar-submenu">
              <li><a href="{{ route('admin.doctor_list') }}">Doctor List</a></li>
              <li><a href="{{ route('admin.user_list') }}">User List</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
  </div>
