  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() ?>admin/home" class="brand-link">
      <img src="<?php echo base_url() ?>assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"> Sprigan<b style="color: red">X</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assets/admin/avatar/<?php if ($admin->avatar) { echo $admin->avatar; } else { echo 'bmafazi.jpg'; } ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="javascript:void(0);" class="d-block"><?php echo $admin->name ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview <?php if ($this->uri->segment(2) == 'home') { echo 'menu-open'; } ?>">
            <a href="<?php echo base_url() ?>admin/home" class="nav-link <?php if ($this->uri->segment(2) == 'home') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if ($this->uri->segment(2) == 'news') { echo 'menu-open'; } ?>">
            <a href="<?php echo base_url() ?>admin/news" class="nav-link <?php if ($this->uri->segment(2) == 'news') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                News
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if ($this->uri->segment(2) == 'blog') { echo 'menu-open'; } ?>">
            <a href="<?php echo base_url() ?>admin/blogs" class="nav-link <?php if ($this->uri->segment(2) == 'blogs') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-rss"></i>
              <p>
                Blogs
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if ($this->uri->segment(2) == 'testimonial') { echo 'menu-open'; } ?>">
            <a href="<?php echo base_url() ?>admin/testimonials" class="nav-link <?php if ($this->uri->segment(2) == 'testimonials') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-quote-right"></i>
              <p>
                Testimonials
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if ($this->uri->segment(2) == 'service') { echo 'menu-open'; } ?>">
            <a href="<?php echo base_url() ?>admin/services" class="nav-link <?php if ($this->uri->segment(2) == 'service') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Services
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if ($this->uri->segment(2) == 'media') { echo 'menu-open'; } ?>">
            <a href="<?php echo base_url() ?>admin/media" class="nav-link <?php if ($this->uri->segment(2) == 'media') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-save"></i>
              <p>
                Media
              </p>
            </a>
          </li>
          <li class="nav-item <?php if ($this->uri->segment(2) == 'mailbox') { echo 'menu-open'; } ?>">
            <a href="<?php echo base_url() ?>admin/mailbox/inbox" class="nav-link <?php if ($this->uri->segment(2) == 'mailbox') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Mailbox
              </p>
            </a>
          </li>          
          <li class="nav-item has-treeview <?php if ($this->uri->segment(2) == 'report') { echo 'menu-open'; } ?>">
            <a href="<?php echo base_url() ?>admin/visitors" class="nav-link <?php if ($this->uri->segment(2) == 'report') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Visitors
              </p>
            </a>
          </li>
          <!-- <li class="nav-header">SYSTEM MANAGEMENT</li>
          <li class="nav-item has-treeview <?php if ($this->uri->segment(2) == 'users') { echo 'menu-open'; } ?>">
            <a href="javascript:void(0);" class="nav-link <?php if ($this->uri->segment(2) == 'users') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>admin/users/user" class="nav-link <?php if ($this->uri->segment(3) == 'user') { echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>admin/users/role" class="nav-link <?php if ($this->uri->segment(3) == 'role') { echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Role</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item <?php if ($this->uri->segment(2) == 'setting') { echo 'menu-open'; } ?>">
            <a href="javascript:void(0);" class="nav-link <?php if ($this->uri->segment(2) == 'setting') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>admin/setting/general" class="nav-link <?php if ($this->uri->segment(3) == 'general') { echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>admin/setting/mail" class="nav-link <?php if ($this->uri->segment(3) == 'mail') { echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>admin/setting/media" class="nav-link <?php if ($this->uri->segment(3) == 'media') { echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Media</p>
                </a>
              </li>
            </ul>
          </li> -->          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>