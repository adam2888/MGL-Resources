<!DOCTYPE html>
<title>Online Lessons</title>
<?php get_header() ?>



<!-- !PAGE CONTENT! -->
<div class="w3-main " style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container " style="margin-top:80px" id="showcase">
    <h1 class="w3-xxxlarge w3-theme-d5 d4t"><b>Online Lessons</b></h1>
    <hr class="w3-round">

  </div>
<div class="unit-overview center ">
	<p class=" side-padding scheme-description white-text letter-spacing">The Online Lessons below, can be used in the classroom or sent out to pupils to follow independently at home.</p>

  <?php
  if ( is_user_logged_in() ) {
  echo do_shortcode( '[searchandfilter id="776"]');
  echo '</div>';
  } else {
    echo '</div><br/><p class="bold letter-spacing scheme-description center d4t">To see all videos, please Login.</p>
';

  }
  ?>

<div class="computer-resource-units">
	<?php


	$foundationPosts = new WP_Query(array
  ( 'paged'=> get_query_var('paged',1),
   'post_type' => 'online_lessons',


  ));


  while($foundationPosts -> have_posts()){
   $foundationPosts -> the_post();?>

	<div class="computer-resource-unit l3">
	<div class="resource-type">
		<div class="a-resource-type"><p class="small-side-padding"><?php the_field('ol_resource_used') ?></p></div>
		<div></div>
	</div>
    <div class="how-to-computer-resource-heading">
    <h3 class="bold d5t"><?php the_field('lesson_name') ?></h3>
	</div>
	<div class="twitter-handle">
      <a class="twitter-follow-button" data-show-count="false"
      href="https://twitter.com/<?php the_field('author')?>"
      data-size="large">
    Follow <?php the_field('author')?></a>
    </div>




<div class ="embed-video">
   <iframe width="95%"  src= 'https://www.youtube.com/embed/<?php the_field('video_link')?>?rel=0' frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>


	<div class="computer-resource-info">
	<p class="medium-font align-left side-padding"><?php the_field('lesson_description')?></p>
	</div>

	</div>
	<?php } ?>



</div>



</div>
</div>
	<div class="pagination">
  <?php echo paginate_links(array(
   'total' => $foundationPosts ->max_num_pages
)); ?>
	</div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->

	 </footer>

   <script>window.twttr = (function(d, s, id) {
     var js, fjs = d.getElementsByTagName(s)[0],
       t = window.twttr || {};
     if (d.getElementById(id)) return t;
     js = d.createElement(s);
     js.id = id;
     js.src = "https://platform.twitter.com/widgets.js";
     fjs.parentNode.insertBefore(js, fjs);

     t._e = [];
     t.ready = function(f) {
       t._e.push(f);
     };

     return t;
   }(document, "script", "twitter-wjs"));</script>

<?php get_footer()?>


</body>
</html>
