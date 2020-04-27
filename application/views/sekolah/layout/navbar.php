<!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
	<div class="ecaps-page-wrapper">
  <!-- Sidemenu Area -->
  <div class="ecaps-sidemenu-area" style="<?php if($this->session->userdata('logged_in') == FALSE){ echo 'display: none!important;';} else { echo 'display: none!important;'; } ?>" >
    <!-- Desktop Logo -->
    <div class="ecaps-logo">
      <a href="index.html"><img class="desktop-logo" src="<?=base_url()?>assets/images/logo.png"
          style="max-height: 60px;" alt="Desktop Logo"> <img class="small-logo"
          src="<?=base_url()?>assets/images/favicon.png" style="max-height: 60px;" alt="Mobile Logo"></a>
    </div>

    <!-- Side Nav -->
    <div class="ecaps-sidenav" id="ecapsSideNav">
      <!-- Side Menu Area -->
      <div class="side-menu-area">
        <!-- Sidebar Menu -->
        <nav>
          <ul class="sidebar-menu" data-widget="tree">
            <li class=""><a href="<?=base_url();?>sekolah"><i class="zmdi zmdi-view-dashboard"></i><span>BERANDA</span></a>
            </li>
			<li class="treeview">
              <a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span>Manajemen Siswa</span> <i
                  class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url()?>sekolah/siswa">Siswa Data</a></li>
                <li><a href="<?=base_url()?>sekolah/siswa_alamat">Siswa Alamat</a></li>
                <li><a href="#">Siswa Prestasi</a></li>
                <li><a href="#">Siswa Wali</a></li>
                <li><a href="#">Siswa Tambahan</a></li>
              </ul>
			  <li class=""><a href="<?=base_url();?>sekolah/out"><i class="zmdi zmdi-view-dashboard"></i><span>KELUAR</span></a>
            </li>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <!-- Page Content -->
  <div class="ecaps-page-content">
    <!-- Top Header Area -->
    <header class="top-header-area d-flex align-items-center justify-content-between" style="<?php if($this->session->userdata('logged_in') == FALSE){ echo 'display: none!important;';} else { echo 'display: none!important;'; } ?>" >>
      <div class="left-side-content-area d-flex align-items-center">
        <!-- Mobile Logo -->
        <div class="mobile-logo mr-3 mr-sm-4">
          <a href="index.html"><img src="<?=base_url();?>assets/images/favicon.png" alt="Mobile Logo"
              style="max-height: 60px;"></a>
        </div>

        <!-- Triggers -->
        <div class="ecaps-triggers mr-1 mr-sm-3">
          <div class="menu-collasped" id="menuCollasped">
            <i class="zmdi zmdi-menu"></i>
          </div>
          <div class="mobile-menu-open" id="mobileMenuOpen">
            <i class="zmdi zmdi-menu"></i>
          </div>
        </div>

        <!-- Left Side Nav -->
        <ul class="left-side-navbar d-flex align-items-center" style="display:none!important;">
          <li class="hide-phone app-search">
            <form class="input-group" role="search">
              <input type="text" class="form-control" placeholder="Search Projects.." aria-label="search">
            </form>
          </li>
        </ul>
      </div>

      <div class="right-side-navbar d-flex align-items-center justify-content-end">
        <!-- Mobile Trigger -->
        <div class="right-side-trigger" id="rightSideTrigger">
          <i class="ti-align-left"></i>
        </div>

        <!-- Top Bar Nav -->
        <ul class="right-side-content d-flex align-items-center">
          <!-- Full Screen Mode -->
          <li class="full-screen-mode ml-1">
            <a href="javascript:" id="fullScreenMode"><i class="zmdi zmdi-fullscreen"></i></a>
          </li>

          <li class="nav-item dropdown" style="display:none!important;">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false"><i class="zmdi zmdi-shopping-basket" aria-hidden="true"></i></button>

            <div class="dropdown-menu dropdown-menu-right">
              <!-- Top Message Area -->
              <div class="top-message-area">
                <!-- Heading -->
                <div class="top-message-heading">
                  <div class="heading-title">
                    <h6>Messages</h6>
                  </div>
                  <span>5 New</span>
                </div>
                <div class="message-box" id="messageBox">
                  <a href="#" class="dropdown-item">
                    <img src="img/member-img/1.png" alt="">
                    <span class="message-text">
                      <span>6-hour video course on Angular</span>
                      <span>3 min ago</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item dropdown" style="display:none!important;">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false"><i class="zmdi zmdi-volume-up" aria-hidden="true"></i> <span
                class="active-status"></span></button>
            <div class="dropdown-menu dropdown-menu-right">
              <!-- Top Notifications Area -->
              <div class="top-notifications-area">
                <!-- Heading -->
                <div class="notifications-heading">
                  <div class="heading-title">
                    <h6>Notifications</h6>
                  </div>
                  <span>5 New</span>
                </div>

                <div class="notifications-box" id="notificationsBox">
                  <a href="#" class="dropdown-item"><i class="ti-face-smile bg-success"></i><span>We've got something
                      for you!</span></a>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item dropdown">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false"><img src="<?=base_url()?>assets/img/member-img/3.png" alt=""></button>
            <div class="dropdown-menu dropdown-menu-right">
              <!-- User Profile Area -->
              <div class="user-profile-area">
                <div class="user-profile-heading">
                  <!-- Thumb -->
                  <div class="profile-img">
                    <img class="chat-img mr-2" src="<?=base_url()?>assets/img/member-img/3.png" alt="">
                  </div>
                  <!-- Profile Text -->
                  <div class="profile-text">
                    <h6>Admin</h6>
                    <span>Super</span>
                  </div>
                </div>
                <a href="<?=base_url()?>sign/out" class="dropdown-item"><i class="ti-unlink profile-icon bg-warning" aria-hidden="true"></i>
                  Sign-out</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </header>
