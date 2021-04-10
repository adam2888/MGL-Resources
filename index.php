
<!DOCTYPE html>

<title>Year Groups</title>
<?php get_header() ?>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->



 <?php

while(have_posts()){
 the_post() ?>

	<?php the_content() ?>


	<?php } ?>






<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$('.tab-list').each(function(){                   // Find lists of tabs
  var $this = $(this);                            // Store this list
  var $tab = $this.find('li.active');             // Get the active list item
  var $link = $tab.find('a');                     // Get link from active tab
  var $panel = $($link.attr('href'));             // Get active panel

  $this.on('click', '.tab-control', function(e) { // When click on a tab
    e.preventDefault();                           // Prevent link behavior
    var $link = $(this),                          // Store the current link
        id = this.hash;                           // Get href of clicked tab

    if (id && !$link.is('.active')) {             // If not currently active
      $panel.delay("slow").removeClass('active');               // Make panel inactive
      $tab.delay("slow").removeClass('active');                 // Make tab inactive

      $panel = $(id).delay("slow").addClass('active');          // Make new panel active
      $tab = $link.parent().delay("slow").addClass('active');   // Make new tab active
    }
  });
});












</script>
<?php get_footer() ?>
</body>
</html>
