			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="cf">

					<div id="footerWidget" class="clearfix">
						<div class="other-links">
					    	<?php
							wp_nav_menu(array(
							'container' => '',                               //remove nav container
							'container_class' => 'footer-links cf',          //class of container (should you choose to use it)
							'menu' => __( 'Footer Links', 'bonestheme' ),    //nav name
							'menu_class' => 'footer-nav cf',            	 //adding custom nav class
							'theme_location' => 'footer-links',              //where it's located in the theme
							'before' => '',                                  //before the menu
							'after' => '',                                   //after the menu
							'link_before' => '',                            //before each link
							'link_after' => '',                              //after each link
							'depth' => 0,                                    //limit the depth of the nav
							'fallback_cb' => 'bones_footer_links_fallback'   //fallback function
							));
							?>
						</div>
					</div>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>

		<?php wp_footer(); ?>

		<!--附加js代码-->
		<script src="<?php bloginfo('template_url'); ?>/library/js/jquery-1.9.0.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_url'); ?>/library/js/init.js" type="text/javascript"></script>

	</body>

</html>