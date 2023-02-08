      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="<?=base_url().'assets/front/'?>images/newlogo.png" class="header-logo" /> <span
                class="logo-name">TEHAMASPACE</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="<?=base_url()?>admin/dashboard" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="list"></i><span>Categories</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=base_url()?>admin/categories">Categories</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/categories/add">Add Cateogry</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/categories/add">Edit Cateogry</a></li>
              </ul>
            </li>
            
             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="package"></i><span>Courses</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=base_url()?>admin/courses">Courses</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/courses/add">Add Course</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/courses/edit">Edit Course</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="package"></i><span>Instructors</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=base_url()?>admin/products">Instructors</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/products/add">Add Instructor</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/products/add">Edit Instructor</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="package"></i><span>Emails</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=base_url()?>admin/products">Emails</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/products/add">Compose mail</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="package"></i><span>User Roles</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=base_url()?>admin/roles">User Roles</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/products/add">Add Role</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/products/add">Edit Role</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="package"></i><span>Messages</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=base_url()?>admin/products">Messages</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/products/add">Add Message</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/products/add">Edit Message</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="package"></i><span>Members</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=base_url()?>admin/products">Members</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/products/add">Add Member</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/products/add">Edit Member</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="package"></i><span>Partiners</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=base_url()?>admin/products">Partiners</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/products/add">Add Partiner</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/products/add">Edit Partiner</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="<?=base_url()?>admin/orders" class="nav-link"><i data-feather="monitor"></i><span>Enronlled Courses</span></a>
            </li>

            <li class="dropdown">
              <a href="<?=base_url()?>admin/orders" class="nav-link"><i data-feather="monitor"></i><span>Watch history</span></a>
            </li>

            <li class="menu-header">System Users</li>
            
             <li class="dropdown">
              <a href="<?=base_url()?>admin/profile" class="nav-link"><i data-feather="user"></i><span>Profile</span></a>
            </li>

             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="user-check"></i><span>Admins</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=base_url()?>admin/admins">Admins</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/admins/add">Add Admin</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/admins/add">Edit Admin</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="users"></i><span>Customers</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=base_url()?>admin/customers">Customers</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/customers/add">Add Customer</a></li>
                <li><a class="nav-link" href="<?=base_url()?>admin/customers/add">Edit Customer</a></li>
              </ul>
            </li>

            <li class="menu-header">Settings</li>

            <li class="dropdown">
              <a href="<?=base_url()?>admin/orders" class="nav-link"><i data-feather="image"></i><span>Slider Images</span></a>
            </li>

            <li class="dropdown">
              <a href="<?=base_url()?>admin/backup" class="nav-link"><i data-feather="hard-drive"></i><span>Database Backup</span></a>
            </li>

            <li class="dropdown">
              <a href="<?=base_url()?>admin/orders" class="nav-link"><i data-feather="settings"></i><span>System setting</span></a>
            </li>
            <li class="dropdown">
              <a href="<?=base_url()?>logout" class="nav-link"><i data-feather="power"></i><span>Logout</span></a>
            </li>

          </ul>
        </aside>
      </div>
