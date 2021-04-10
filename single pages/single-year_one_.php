<!DOCTYPE html>
<title>Year 1 MGL</title>
<?php get_header() ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-xxxlarge w3-theme-d5 d4t"><b>Year 1 Unit</b></h1>
    <hr style="width:50px;border:5px solid; " class="w3-round d4t">
  </div>


<div class="single-computer-resource-units">

	<div class="single-computer-resource-unit l3">
    <div class="resource-type">
  		<div class="band bold"><p>Unit <?php the_field('unit_code')?></p></div>
  		<div></div>
  	</div>
      <div class="unit-heading-wrap">
      <h3 class="d5t bold side-padding"><?php the_field('name')?></h3>
  	</div>

  	<div class="number-lessons"><p class=" bold side-padding "><?php the_field('number_of_lessons')?></p></div>
  	<div class="unit-description-wrap side-padding">
  <div class="medium-font"><p><?php the_field('unit_description')?></p></div>
  	</div>
  <img class="resource-image" src=<?php the_field('image')?>


  		<?php if( get_field('resources') ){ ?>>

       <div class="unit-download">
         <div class=unit-download-i>
  		   <div class="download-heading "> <p class="  ">View</p></div>
  	<div class="bt-background pdf"><a class="unit-download-button" href="<?php the_field('pdf_link')?>" target="_blank"><i class="far fa-file-pdf fa-lg "></i></a></div>
  		</div>
  		<div class=unit-download-i>
  			<div class="download-heading  "><p class="  ">Download</p></div>
  	<div class="bt-background word"><a class="unit-download-button" href="<?php the_field('word_link_')?>"  ><i class="far fa-file-word fa-lg download-link "></i></a></div>
  		 </div>

  		<div class=unit-download-i>
  			<div class="download-heading "><p class="  ">Resources</p></div>
  	<a class="bt-background unit-download-button lr" href="<?php the_field('resources')?>" download><i class="far fa-folder-open fa-lg download-link"></i></a>
  		</div>




    <?php } else { ?>>

  	 <div class="unit-download-nr">
         <div class=unit-download-i>
  		   <div class="download-heading"> <p class="  ">View</p></div>
  	<a class="bt-background unit-download-button pdf" href="<?php the_field('pdf_link')?>" target="_blank"><i class="far fa-file-pdf fa-lg "></i></a>
  		</div>

  		<div class=unit-download-i>
  			<div class="download-heading word "><p class="  ">Download</p></div>
  	<a class="bt-background unit-download-button" href="<?php the_field('word_link_')?>"  ><i class="far fa-file-word fa-lg download-link "></i></a>
  		 </div>
</div>



  		 <?php } ?>




      </div>
  </div>


</div>





<!-- End page content -->
</div>

<!-- W3.CSS Container -->
