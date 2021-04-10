<title>Teacher Resources</title>
<?php get_header() ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->

  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-xxxlarge w3-theme-d5 d4t"><b>Teaching Resources</b></h1>
    <hr style="width:50px;border:5px solid #2A5C9A " class="w3-round">
  </div>
<div class="unit-overview center ">
	<p class="side-padding scheme-description white-text letter-spacing">The resources below, aim to support you with using technology in the classroom.</p>

	<?php
if ( is_user_logged_in() ) {
	echo do_shortcode( '[searchandfilter id="777"]' );
  echo '</div>';
	} else {
		echo '</div><br/><p class="bold letter-spacing scheme-description center d4t">To see all resources, please Login.</p>
';
}
?>





<div class="computer-resource-units">
	<?php






	$foundationPosts = new WP_Query(array
  (
	  'paged'=> get_query_var('paged',1),


   'post_type' => 'teacher_resources',


  ));


  while($foundationPosts -> have_posts()){
   $foundationPosts -> the_post();?>

	<div class="computer-resource-unit l3">
	<div class="resource-type">
		<div class="a-resource-type"><p class="small-side-padding"><?php the_field('tr_type_of_resource')?></p></div>

	</div>

	<div class="computer-resource-heading">
    <h3 class="bold d5t"><?php the_field('name') ?></h3>
	</div>
	<div class="twitter-handle">
      <a class="twitter-follow-button" data-show-count="false"
      href="https://twitter.com/<?php the_field('author')?>"
      data-size="large">
    Follow <?php the_field('author')?></a>
    </div>

	<br/>


	<div class="resource-image-wrap">
	<img class="resource-image" src=<?php the_field('image')?>>
	</div>



	<div class="computer-resource-info">
		<p class="align-left side-padding"><?php the_field('description')?></p>
	</div>

			 <?php if( get_field('link_to_resource') ){ ?>
		<div class="computer-resource-download">
		<p class="button-font bold "><a class="no-underline" href="<?php the_field('link_to_resource')?>" target="_blank"?>View</a></p>
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




	<?php } ?>



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
