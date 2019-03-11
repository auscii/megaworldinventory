<?php
// $url_link = $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
// $file_name = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
?>
<ul class="nav nav-list">
  <?php //if($full_path === $current_path_index) { echo "active"; }?>
  <li class="">
    <a href="../index.php">
      <i class="menu-icon fa fa-tachometer"></i>
      <span class="menu-text"> Home </span>
    </a>
    <b class="arrow"></b>
  </li>

    <?php echo $full_path; ?>
  <li class="">
    <a href="#" class="dropdown-toggle">
      <i class="menu-icon fa fa-users"></i>
      <span class="menu-text"> Users </span>
      <b class="arrow fa fa-angle-down"></b>
    </a>
    <b class="arrow"></b>

    <ul class="submenu">
      <li class="">
        <a href="#">
          <i class="menu-icon fa fa-user"></i>
          Users Masterfile
        </a>
        <b class="arrow"></b>
      </li>

      <li class="">
        <a href="#">
          <i class="menu-icon fa fa-user"></i>
          Users Approval
        </a>
        <b class="arrow"></b>
      </li>
    </ul>
  </li>


  <li class="">
    <a href="components/m3g4w0rld_1nv3nt0ry.php">
      <i class="menu-icon fa fa-list"></i>
      <span class="menu-text"> Inventory </span>
    </a>
    <b class="arrow"></b>
  </li>

  <li class="">
    <a href="#" class="dropdown-toggle">
      <i class="menu-icon fa fa-file-o"></i>
      <span class="menu-text">
        Other Pages
        <span class="badge badge-primary">2</span>
      </span>
      <b class="arrow fa fa-angle-down"></b>
    </a>

    <b class="arrow"></b>

    <ul class="submenu">
      <li class="">
        <a href="#">
          <i class="menu-icon fa fa-caret-right"></i>
          FAQ
        </a>
        <b class="arrow"></b>
      </li>

      <li class="">
        <a href="#">
          <i class="menu-icon fa fa-caret-right"></i>
          Error 404
        </a>
        <b class="arrow"></b>
      </li>
    </ul>
  </li>
</ul><!-- /.nav-list -->
