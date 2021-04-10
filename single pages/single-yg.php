<!DOCTYPE html>
<title>How To Video</title>
<?php get_header() ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-xxxlarge w3-theme-d5 d4t"><b>Scheme of Work</b></h1>
    <hr style="width:50px;border:5px solid #2A5C9A " class="w3-round">
  </div>
	
	<p class="  scheme-description">Our Scheme of Work lessons contains lesson plans with resources and assessment material</p>

	 
	
	<div class="scheme-of-work">

 <?php  
	
while(have_posts()){
 the_post() ?>  
		
	<p><?php echo get_the_content() ?></p>
	
	
	<?php } ?>
	
		
	
	</div>
	</div>
	
  

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
function navFunction(){
document.getElementById('nav-links').classList.toggle('open');
};

function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */

	
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
	
	
	
	
	
	
</script>
<a href='https://www.freepik.com/free-photos-vectors/background'>Background vector created by freepik - www.freepik.com</a>
</body>
</html>





	


