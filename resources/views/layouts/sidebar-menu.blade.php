<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="nav side-menu"></div>
    <div class="menu_section">
      <ul class="nav side-menu">

        <li><a href="/"><i class="fa fa-home"></i> Home </a></li>

        <li><a><i class="fa fa-edit"></i> Management <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li "{{Request::path() == 'management.user' ? 'active' : ''}}"><a href="/user">User Management</a></li>
            <li "{{Request::path() == 'management.role' ? 'active' : ''}}"><a href="/role">Role Management</a></li>
          </ul>
        </li>


        <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li "{{Request::path() == 'noOfUser' ? 'active' : ''}}"><a href="/noOfUser">Number of users by role</a></li>
          </ul>
        </li>

        <li "{{Request::path() == 'systemStatus' ? 'active' : ''}}"><a href="/status"><i class="fa fa-desktop"></i> System Status </a></ul>
        </ul>

  </div>
</div>