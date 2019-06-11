<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="icon" href="<?php echo base_url(); ?>/cssfarmie/img/core-img/favicon.ico">
  
  </head>
  <body>
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

      <!-- Navbar Area -->
      <div class="famie-main-menu">
        <div class="classy-nav-container breakpoint-off">
          <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="famieNav">
              <!-- Nav Brand -->
              <a href="home.php" class="nav-brand"><img src=<?=base_url("cssfarmie/img/core-img/logo.png")?>></a>
              <!-- Navbar Toggler -->
              <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
              </div>
              <!-- Menu -->
              <div class="classy-menu">
                <!-- Close Button -->
                <div class="classycloseIcon">
                  <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <!-- Navbar Start -->
                <div class="classynav">
                  <ul>
                    <li><a href="<?php echo site_url('UserCont/Cobak'); ?>">Home</a></li>
                    <li><a href="<?php echo site_url('UserCont/about'); ?>">About</a></li>
                    <li><a href="<?php echo site_url('LoginCont'); ?>">Login</a></li>
                  </ul>
                </div>
                <!-- Navbar End -->
              </div>
            </nav>

            <!-- Search Form -->
            <div class="search-form">
              <form action="#" method="get">
                <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                <button type="submit" class="d-none"></button>
              </form>
              <!-- Close Icon -->
              <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
            </div>
          </div>
        </div>
      </div>
    </header>
  </body>
</html>
