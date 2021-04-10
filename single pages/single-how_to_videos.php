
<!DOCTYPE html>
<title>How To Video</title>
<?php get_header() ?>




<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-xxxlarge w3-theme-d5 d4t"><b>How To Video</b></h1>
    <hr style="width:50px;border:5px solid" class="w3-round d4t">
  </div>

	<div class="single-computer-resource-unit l3">
	<div class="resource-type">
		<div class="a-resource-type"><p class="small-side-padding"><?php the_field('resource_useh2_resource_used') ?></p></div>
		<div></div>
	</div>
  <div class="how-to-computer-resource-heading">
    <h3 class="bold d5t"><?php the_field('video_title') ?></h3>
		</div>
		<div class="twitter-handle">
	<p class="small-font align-left side-padding d5t bold"> by <a href="https://twitter.com/<?php the_field('author')?>" target="_blank"> <?php the_field('author')?></a></p>
		</div>

	<div class ="embed-video">
   <iframe width="95%" height="100%" src= 'https://www.youtube.com/embed/<?php the_field('video_link')?>?rel=0' frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>


	<div class="computer-resource-info">
	<p class="medium-font align-left side-padding"><?php the_field('video_description')?>
   </p>
	</div>
	</div>




<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="footer" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<?php get_footer() ?>

</body>
</html>
