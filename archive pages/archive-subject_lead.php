<title>Subject Lead Area</title>
<?php get_header() ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->

  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-xxxlarge w3-theme-d5 d4t"><b>Subject Lead Area</b></h1>
    <hr style="width:50px;border:5px solid #2A5C9A " class="w3-round">
  </div>

  <section class="sl-page">

        <div class="tabs">

          <ul class="tab-list">
            <li class="active"><a class="tab-control" href="#tab-1"><p>National Curriculum</p></a></li>
            <li><a class="tab-control" href="#tab-2"><p>Computing Policies</p></a></li>
            <li><a class="tab-control" href="#tab-3"><p>Action Plans</p></a></li>
            <li><a class="tab-control" href="#tab-4"><p>Audits</p></a></li>
            <li><a class="tab-control" href="#tab-5"><p>School Awards</p></a></li>
            <li><a class="tab-control" href="#tab-6"><p>CPD</p></a></li>
            <li><a class="tab-control" href="#tab-7"><p>Ofsted</p></a></li>
          </ul>

          <div class="sl-tab-panel active" id="tab-1">
          <h2 class="sl-heading d4t"> National Curriculum Objectives</h2>
          <h3 class="sl-heading d4t">KS1</h3>
          <ul class="nc">
            <li>understand what algorithms are; how they are implemented as programs on digital
            devices; and that programs execute by following precise and unambiguous instructions</li>
            <li>Create and debug simple programs</li>
            <li>Use logical reasoning to predict the behaviour of simple programs</li>
            <li>Use technology purposefully to create, organise, store, manipulate and retrieve digital
            content</li>
            <li>Recognise common uses of information technology beyond school</li>
            <li>use technology safely and respectfully, keeping personal information private; identify
            where to go for help and support when they have concerns about content or contact on
            the internet or other online technologies.</li>
          </ul>
           <h3 class="sl-heading d4t">KS2</h3>
           <ul class="nc">
             <li>design, write and debug programs that accomplish specific goals, including controlling
             or simulating physical systems; solve problems by decomposing them into smaller
             parts</li>
             <li>use sequence, selection, and repetition in programs; work with variables and various
             forms of input and output</li>
             <li>use logical reasoning to explain how some simple algorithms work and to detect and
             correct errors in algorithms and programs</li>
             <li>understand computer networks including the internet; how they can provide multiple
             services, such as the world wide web; and the opportunities they offer for
             communication and collaboration</li>
             <li>use search technologies effectively, appreciate how results are selected and ranked,
             and be discerning in evaluating digital content</li>
             <li>select, use and combine a variety of software (including internet services) on a range of
             digital devices to design and create a range of programs, systems and content that
             accomplish given goals, including collecting, analysing, evaluating and presenting data
             and information</li>
             <li>use technology safely, respectfully and responsibly; recognise
             acceptable/unacceptable behaviour; identify a range of ways to report concerns about
             content and contact</li>
           </ul>
         </div>

          <div class="sl-tab-panel" id="tab-2">
            <h2 class="sl-heading d4t">Computer Policies</h2>
            <p>In this section you will find a number of policies which will support the leadership and management of computing. Policies reflect the values and philosophy of the school and set out a framework within which the teaching of computing can operate and offers school/subject leader’s necessary guidance.</p>
             <div class="sl-items-wrapper">

               <?php

               	$yearoverviewPosts = new WP_Query(array
                 ('posts_per_page' => -1,
                  'post_type' => 'computer_policy'

                 ));


               	while($yearoverviewPosts -> have_posts()){
                  $yearoverviewPosts -> the_post();?>


                <div class="sl-item-wrapper">
                  <div class="sl-icon-wrapper">
                    <a class="sl-icon-background  word download-button center" href="<?php the_field('link')?>" download ><i class="far fa-file fa-3x download-link "></i></a>

                  </div>
                  <div><p><?php the_field('policy_name')?></p></div>
                </div>
<?php } ?>


             </div>
           </div>


          <div class="sl-tab-panel" id="tab-3">
            <h2 class="sl-heading d4t">Action Plans</h2>
            <p>The following action plan template can be used ...</p>
             <div class="sl-items-wrapper">

               <?php
               	$yearoverviewPosts = new WP_Query(array
                 ('posts_per_page' => -1,
                  'post_type' => 'action_plans'

                 ));

               	while($yearoverviewPosts -> have_posts()){
                  $yearoverviewPosts -> the_post();?>

                <div class="sl-item-wrapper">
                  <div class="sl-icon-wrapper">
                    <a class="sl-icon-background  word download-button center" href="<?php the_field('document_link')?>" download ><i class="far fa-file fa-3x download-link "></i></a>
                  </div>
                  <div><p><?php the_field('name')?></p></div>
                </div>
             <?php  } ?>


             </div>
           </div>



          <div class="sl-tab-panel" id="tab-4">
            <h2 class="sl-heading d4t">Computer Audits</h2>
            <p>The following audits can be used ...</p>
             <div class="sl-items-wrapper">

               <?php
               	$yearoverviewPosts = new WP_Query(array
                 ('posts_per_page' => -1,
                  'post_type' => 'computing_audits'

                 ));

               	while($yearoverviewPosts -> have_posts()){
                  $yearoverviewPosts -> the_post();?>

                <div class="sl-item-wrapper">
                  <div class="sl-icon-wrapper">
                    <a class="sl-icon-background  word download-button center" href="<?php the_field('document_link')?>" download ><i class="far fa-file fa-3x download-link "></i></a>
                  </div>
                  <div><p><?php the_field('name')?></p></div>
                </div>
             <?php  } ?>


             </div>
           </div>


          <div class="sl-tab-panel" id="tab-5">
            <h2 class="sl-heading d4t">School Awards</h2>
            <p>Step by step guides on how your school can achive acredited awards.</p>
             <div class="sl-items-wrapper">

               <?php
               	$yearoverviewPosts = new WP_Query(array
                 ('posts_per_page' => -1,
                  'post_type' => ''

                 ));

               	while($yearoverviewPosts -> have_posts()){
                  $yearoverviewPosts -> the_post();?>


             <?php  } ?>


             </div>
           </div>



          </div>
          <div class="sl-tab-panel" id="tab-6">
            <h2 class="sl-heading d4t">CPD Courses</h2>
            <p>Step by step guides on how your school can achive acredited awards.</p>

<table id="courseTable">
               <tr>
                 <th>Course</th>
                 <th>Date</th>
                 <th>Time</th>
                 <th>Duration</th>
                 <th>Book</th>
               </tr>

               <tr>
                 <td>How to use Google Meet</td>
                 <td>7th October</td>
                  <td>15.45</td>
                   <td>30Mins</td>
                   <td><i class="fas fa-envelope"></i></td>
               </tr>

               <?php
                $yearoverviewPosts = new WP_Query(array
                 ('posts_per_page' => -1,
                  'post_type' => ''

                 ));

                while($yearoverviewPosts -> have_posts()){
                  $yearoverviewPosts -> the_post();?>
                  <table id="cpd-table">








             <?php  } ?>

  </table>

           </div>







          </div>
          <div class="sl-tab-panel" id="tab-7">

          </div>

        </div><!-- .tabs -->

      </section><!-- .page -->


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
