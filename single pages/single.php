<?php get_header() ?>
<div class="single-league-wrapper">
<div class="blog-banner">
  
</div>
<br>

<?php while(have_posts()){
   the_post();?>
<div class="blog-container">
  <h2 class="subheading full-width no-side-padding"><?php the_title() ?></h2>

  <div class="full-blog-content">
  <p><?php the_content()  ?></p>
  <br>
</div>

<?php  } ?>
</div>
</div>
<?php get_footer()?>
