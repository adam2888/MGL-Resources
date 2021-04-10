<!DOCTYPE html>
<title>How To Video</title>
<?php get_header() ?>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-xxxlarge w3-theme-d5 d4t"><b>How To Videos</b></h1>

    <hr style="width:50px;border:5px solid #2A5C9A " class="w3-round">
  </div>
<div class="unit-overview center ">
	<p class=" side-padding scheme-description white-text letter-spacing">The 'How To Video' series guides you step by step, through the latest technology used in the classroom.</p>


  <?php
  if ( is_user_logged_in() ) {
  echo do_shortcode( '[searchandfilter id="766"]' );
  echo '</div>';
  } else {
    echo '</div><br/><p class="bold letter-spacing scheme-description center d4t">To see all videos, please Login.</p>
';
  }
  ?>


<div class="computer-resource-units">
	<?php


	$foundationPosts = new WP_Query(array
  ('paged'=> get_query_var('paged',1),
   'post_type' => 'how_to_videos',

  ));


  while($foundationPosts -> have_posts()){
   $foundationPosts -> the_post();?>

	<div class="computer-resource-unit l3">
	<div class="resource-type">
		<div class="a-resource-type"><p class="small-side-padding"><?php the_field('resource_useh2_resource_used') ?></p></div>
		<div></div>
	</div>
  <div class="how-to-computer-resource-heading">
    <h3 class="bold d5t"><?php the_field('video_title') ?></h3>
		</div>
		<div class="twitter-handle">
        <a class="twitter-follow-button" data-show-count="false"
        href="https://twitter.com/<?php the_field('author')?>"
        data-size="large">
      Follow <?php the_field('author')?></a>
      </div>


	<div class ="embed-video">
   <iframe width="95%" height="100%" src= 'https://www.youtube.com/embed/<?php the_field('video_link')?>?rel=0' frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>


	<div class="computer-resource-info">
	<p class="medium-font align-left side-padding"><?php the_field('video_description')?>
   </p>
	</div>
	</div>
	<?php } ?>



</div>
	<div class="pagination">
  <?php echo paginate_links(array(
   'total' => $foundationPosts ->max_num_pages
)); ?>
	</div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->


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
