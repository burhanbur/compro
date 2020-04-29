  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url() ?>" class="nav-link"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
      </li>
      <li class="nav-item dropdown">
        <a href="javascript:void(0);" class="nav-link" data-toggle="dropdown">
          <i class="fa fa-users"></i>
          Users
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
          <a href="<?php echo base_url() ?>admin/users/user" class="dropdown-item">
            User
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url() ?>admin/users/role" class="dropdown-item">
            Role
          </a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a href="javascript:void(0);" class="nav-link" data-toggle="dropdown">
          <i class="fa fa-cogs"></i>
          Settings
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
          <a href="<?php echo base_url() ?>admin/setting/general" class="dropdown-item">
            General
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url() ?>admin/setting/mail" class="dropdown-item">
            Mail
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url() ?>admin/setting/media" class="dropdown-item">
            Media
          </a>
          <div class="dropdown-divider"></div>
        </div>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>home/logout">
          <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout
        </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <div class="nav-link" id="watch"></div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>