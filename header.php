<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <title>Home</title>
    <?php wp_head(); ?>
  </head>

  <body class="background-gradient">
  <nav class="w3-sidebar w3-theme-d4 d5  w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft " style="width:100%;font-size:14px ">Close Menu</a>
  <div class="w3-container">
    <div class="website-logo"></div>
  </div>


<?php
if ( is_user_logged_in() ) {
		echo '<a class="logs" href="'.wp_logout_url().'" title="Logout">Logout</a>';
	} else {
		echo '<a class="logs" href="'.wp_login_url().'" title="Login">Login</a>';
}
?>



	  <br>
	  <br>
  <div class="w3-bar-block">

    <a href="<?php echo site_url() ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white letter-spacing ">Home</a>
    <a href="<?php echo site_url('/year-groups') ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white letter-spacing ">Scheme of Work</a>

    <a href="<?php echo site_url('/teacher_resources') ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white letter-spacing ">Teaching Resources</a>
	 <button class="dropdown-btn w3-bar-item w3-button w3-hover-white letter-spacing ">Video Content
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container  margin-top">
    <a class="block drop-down" href="<?php echo site_url('/how_to_videos') ?>">How To Videos</a>
    <a class="block drop-down" href="<?php echo site_url('/online_lessons') ?>">Online Lessons</a>
  </div>
<a href="<?php echo site_url('/subject_lead') ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white letter-spacing ">Subject Lead Area</a>

  </div>

</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large d5 w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button d5 w3-margin-right" onclick="w3_open()">☰</a>
<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="MGL Logo"  height="45" >
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

	  <script>
	  document.getElementById('logs').onclick = function(){

	  window.location.reload(true);

	  }



	  </script>
