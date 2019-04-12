

  <!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>responsive navigation.</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/style.scss" type="text/css">


</head>

<body>

  <nav role="navigation" class="nav">

  <a class="menu-toggle" href="#head-nav">
    <span aria-hidden="true" class="icon-menu"></span><span class="menu-toggle-text"> menu</span>
  </a>

  <ul id="main-menu" class="top-nav menu clearfix">
    <li class="menu-item">
      <a href="<?php echo site_url('HomeCont/home'); ?>">Home</a>
    </li>
    <li class="menu-item">
      <a href="<?php echo site_url(); ?>/LoginCont">Login</a>
    </li>
  </ul>

</nav>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type='text/javascript' src="<?php echo base_url(); ?>/css/index.js"></script>
</body>
</html>
