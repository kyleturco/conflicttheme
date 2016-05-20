			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
        <div id="main-footer">
          <div id="inner-footer" class="container cf">
						<div class="footer-left">
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
						</div>
						<div class="footer-right">
							<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
								<?php wp_nav_menu(array(
								 'container' => false,                           // remove nav container
								 'container_class' => 'menu cf',                 // class of container (should you choose to use it)
								 'menu' => __( 'The Main Menu', 'conflicttheme' ),  // nav name
								 'menu_class' => 'nav top-nav cf',               // adding custom nav class
								 'theme_location' => 'main-nav',                 // where it's located in the theme
								 'before' => '',                                 // before the menu
											 'after' => '',                                  // after the menu
											 'link_before' => '',                            // before each link
											 'link_after' => '',                             // after each link
											 'depth' => 0,                                   // limit the depth of the nav
								 'fallback_cb' => ''                             // fallback function (if there is one)
								)); ?>
							</nav>
						</div>
					</div>
        </div>
			</footer>
		</div>
		<?php // all js scripts are loaded in library/bones.php ?>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<?php wp_footer(); ?>
	</body>
</html> <!-- end of site. what a ride! -->
