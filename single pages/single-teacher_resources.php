
<!DOCTYPE html>
<title>Teacher Resource</title>
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
    <h1 class="w3-xxxlarge w3-theme-d5 d4t"><b>Teaching Resource</b></h1>
    <hr style="width:50px;border:5px solid" class="w3-round d4t">
  </div>
	
<p class="scheme-description">Resources to support teachers with technology in the classroom</p>
	
<div class="single-computer-resource-unit l3">
	<div class="resource-type">
		<div class="a-resource-type"><p><?php the_field('tr_type_of_resource') ?></p></div>
		<div></div>
	</div>
    <h3 class="d5t"><?php the_field('name') ?></h3>
	<p class="small-font align-left side-padding d5t bold"> by <a href="https://twitter.com/<?php the_field('author')?>" target="_blank"> <?php the_field('author')?></a></p>
	<br/>
	
	
	<img class="resource-image" src=<?php the_field('image')?>>
	
		
	<div class="computer-resource-info">
	
	<p class=" medium-font align-left side-padding"><?php the_field('description')?></p>
	</div>
	
	<?php if( get_field('link_to_resource') ){ ?>
		<div class="computer-resource-download">
		<p class="button-font bold "><a class="no-underline" href="<?php the_field('link_to_resource')?>"target="_blank"?>View</a></p> 
		</div>
	
	
	<?} else {?>
	
	<?php } ?>
	 <?php if( get_field('download_link') ){ ?>
		<div class="computer-resource-download">
		<p class="button-font bold "><a class="no-underline" href="<?php the_field('download_link')?>" download?>Download</a></p> 
		</div>
	
	
	<?} else {?>
	
	<?php } ?>
	
	
	
	
	</div>
  

<!-- End page content -->
</div>

<!-- W3.CSS Container -->



</body>
</html>
