			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="cf">

					<div id="footerWidget" class="clearfix">


						<div class="footer-first-widget footer-widget" >

							<h4 class="widgetTitle">做过有趣的事情</h4>

							<ul class="footer-nav cf" id="">
								<li class=""><a href="http://www.coletree.com/upload/v2/main.html">晓禾依树纪念站</a></li>
								<li class=""><a href="http://www.coletree.com/weblog/places/">共同走过的地方</a></li>
								<li class=""><a href="http://www.coletree.com/weblog/cd/">私人唱片收藏库</a></li>
								<li class=""><a href="http://baby.coletree.com/">我们的鱼里</a></li>
							</ul>

						</div>


						<div class="footer-second-widget footer-widget" >

							<h4 class="widgetTitle">关注&订阅电台</h4>

							<ul class="footer-nav cf" id="">
								<li class=""><a href="https://itunes.apple.com/cn/podcast/xiao-he-yi-shu-dian-tai/id785370614" target="_blank">iTunes 订阅电台</a></li>
								<li class=""><a href="http://eepurl.com/cTYlg" target="_blank">邮件订阅电台</a></li>
								<li class=""><a href="http://www.coletree.com/podcast/feed/" target="_blank">Rss阅读器订阅</a></li>
								<li class=""><a href="http://weibo.com/coletree/" target="_blank">关注新浪微博</a></li>
							</ul>
							
						</div>


						<div class="footer-last-widget footer-widget" >

							<h4 class="widgetTitle">支助网站维护开支</h4>

							<p>网站开支每年约人民币2000元。赞助方式有捐款，购买二手杂货，购买广告位，工作服务。<a href="">了解详情></a></p>

							<img src="<?php bloginfo('template_url'); ?>/library/images/donate_cat.png">

						</div>

						
					</div>

					

					<div class="footer-bottom clearfix">

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
							'link_before' => '-',                            //before each link
							'link_after' => '',                              //after each link
							'depth' => 0,                                    //limit the depth of the nav
							'fallback_cb' => 'bones_footer_links_fallback'   //fallback function
							));
							?>
					    </div>

					    <div class="copyright">
					    	© 2006- <?php echo date('Y'); ?> 晓禾依树
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


		<!--google统计代码-->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-8039100-1']);
		  _gaq.push(['_setDomainName', 'coletree.com']);
		  _gaq.push(['_trackPageview']);
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>

	</body>

</html> <!-- end of site. what a ride! -->
