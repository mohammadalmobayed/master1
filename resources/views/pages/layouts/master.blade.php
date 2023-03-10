
@include('pages.layouts.head')

<div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">

      <div class="sidebarContainer">
      <ul class="nav">
        
        <li class="nav-item">
          <a class="nav-link" href="{{route('home.index')}}">
            <i class="fa-solid fa-table menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            <div class="badge badge-info badge-pill">2</div>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="fa-solid fa-house menu-icon"></i>
            <span class="menu-title">Housing</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu" >
              <li class="nav-item"> <a class="nav-link" href="{{route('housingA.index')}}">Housing A</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('housingB.index')}}">Housing B</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('housingHidab.index')}}">Housing Al-Hidab</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('housingInfo.index')}}">Housing Info</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('user.index')}}">
            <i class="fa-solid fa-users menu-icon"></i>
            <span class="menu-title">Users</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('deanship.index')}}">
            <i class="fa-solid fa-user-tie menu-icon"></i>
            <span class="menu-title">Deanship</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('finance.index')}}">
            <i class="fa-solid fa-dollar-sign menu-icon"></i>
            <span class="menu-title">Finance</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('profile.index')}}">
            <i class="fa-solid fa-address-card menu-icon"></i>
            <span class="menu-title">Profile</span>
          </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="fa-solid fa-arrow-right-from-bracket menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
            </li>
    
      </ul>
    </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="#"><img src="assets/image/aut_logo_white.png" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="#"><img src="assets/images/aut_logo_white.png" alt="logo"/></a>
          </div>
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Welcome @yield('user')</h4>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <h4 class="mb-0 font-weight-bold d-none d-xl-block">Jan 22, 2023</h4>
            </li>
            <li class="nav-item dropdown mr-1">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-calendar mx-0"></i>
                <span class="count bg-info">1</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              </div>
            </li>
            <li class="nav-item dropdown mr-2">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-open mx-0"></i>
                <span class="count bg-danger">1</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
               
        </div>
      </nav>
@yield('content')
    </div>
    <!-- page-body-wrapper ends -->
  </div>



@include('pages.layouts.footer-scripts')
    
