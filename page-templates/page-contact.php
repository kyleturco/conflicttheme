<?php
/*
Template Name: Conctact Page
*/
?>

<?php get_header(); ?>

<div class="contact-header">
  <div class="container">
    <div id="inner-content">
      <h1 class="text-white text-center">Contact Kim</h2>
    </div>
  </div>
</div>
<div id="contact-section">
  <div class="container">
    <div id="contact-section-content" class="inner-content">
      <div class="col-md-5 no-left-pad">
        <div class="icon-section">
          <div class="icon-1 clearfix">
            <i class="fa fa-phone-square"></i><h4 class="contact-item">615.438.6942</h4>
          </div>
          <div class="icon-2 clearfix">
            <i class="fa fa-envelope"></i><a href="mailto:kim@bestconflictsolutions.com"><h4 class="contact-item">kim@bestconflictsolutions.com</h4></a>
          </div>
        </div>
      </div>
      <div class="form-container col-md-7 no-left-pad">
        <?php echo do_shortcode( '[contact-form-7 id="22" title="Contact"]' ); ?>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<div class="clearfix"></div>

<?php get_footer(); ?>
