<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<div id="content">
  <div id="home-hero-section">
    <div class="container">
      <div id="inner-content">
        <h1 class="text-white text-center">Mediation, Conflict Management</h1>
        <p class="text-white text-center bonus-line"><i>and</i></p>
        <h1 class="text-white text-center">Conflict Coaching</h1>
        <h3 class="text-white text-center">Qualified help achieving the Best outcomes for life's conflicts</h3>
        <div class="btn-primary home-hero-btn"><a href="get_template_directory_uri(); ?>/services">View Services</a></div>

        </div>
      </div>
    </div>
  </div>
  <div class="about-section-homepage">
    <div class="container">
      <div id="inner-content">
        <div class="col-md-3">
          <img class="about-photo" src="<?php echo get_template_directory_uri(); ?>/library/images/kimberly-best-headshot.jpg">
        </div>
        <div class="col-md-9">
          <h2 class="text-white">About Kimberly Best, RN, MA</h2>
          <p class="text-white">
            I understand how challenging difficult life situations can be and the importance of
            handling them in a manner that will achieve the best possible outcome for all involved. A strong education
            combined with personal experience in a wide range of conflict gives me both knowledge and perspective for
            satisfying mediation, conflict management, and communication resolution.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>

<?php get_footer(); ?>
