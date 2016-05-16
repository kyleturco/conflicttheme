<?php
/*
Template Name: Bio Page
*/
?>

<?php get_header(); ?>

<div id="content">
  <div class="about-section">
    <div class="container">
      <div id="inner-content">
        <h1 class="text-white text-center">About Kimberly Best, RN, MA</h2>
      </div>
    </div>
  </div>
  <div class="bio-text">
    <div class="container">
      <div class="col-md-3 pull-left">
        <img class="about-photo" src="<?php echo get_template_directory_uri(); ?>/library/images/kimberly-best-headshot.jpg">
      </div>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="bio-content col-md-9 pull-right">
        <?php the_content(); ?>
      </div>
      <?php endwhile; else : ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<div class="clearfix"></div>

<?php get_footer(); ?>
