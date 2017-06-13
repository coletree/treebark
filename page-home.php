<?php
/*
 Template Name: New Home Page
*/
?>

<?php get_header(); ?>


	<div id="homePage-content" class="wrap cf">


		<div id="homePage" class="m-all cf" role="main">


			<!-- <div id="newestPostWrap">

				<div id="newestPost">

					<?php $the_query = new WP_Query(array('showposts' => '1')); ?>

					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

		                <header class="article-header">
		                  
		                	<h1 class="h2 entry-title">
		                    	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		                	</h1>

	                    	<div class="entry-meta-date">
	                        	<a href="<?php the_permalink(); ?>" title="" rel="bookmark">
	                        		<?php the_time('Y-m-d'); ?>
	                        	</a>
	                    	</div>

		                </header>


		                <section class="entry-content cf" itemprop="articleBody">

		                  <?php
		                    // the content (pretty self explanatory huh)
		                    the_content();

		                    /*
		                     * Link Pages is used in case you have posts that are set to break into
		                     * multiple pages. You can remove this if you don't plan on doing that.
		                     *
		                     * Also, breaking content up into multiple pages is a horrible experience,
		                     * so don't do it. While there are SOME edge cases where this is useful, it's
		                     * mostly used for people to get more ad views. It's up to you but if you want
		                     * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
		                     *
		                     * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
		                     * 使用<!--nextpage-->标签来把文章分页
		                    */
		                    wp_link_pages( array(
		                      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
		                      'after'       => '</div>',
		                      'link_before' => '<span>',
		                      'link_after'  => '</span>',
		                    ) );
		                  ?>

		                </section><?php // end article section ?>

              		</article> <?php // end article ?>
							
					<?php endwhile;?>

				</div>

			</div> -->


			<div class="homePostListWrap">

				<div class="homePostList">

					<!-- <div class="homePostListTitle"><span>Recent Posts</span></div> -->
						
					<ul id="post-thoughs" class="postListSection cf">

						<?php $the_query = new WP_Query(array('showposts' => '10','offset' => '0')); ?>

						<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

						<li class="postListItem cf">

							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="linkWrap" >

								<?php if ( has_post_thumbnail()) : ?>
								<div class="featurePic">
									  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
									    <?php the_post_thumbnail('small'); ?>
									  </a>
								</div>
								<?php else : ?>
								<?php endif; ?>
								
								<div class="listItemContent">

									<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

									<p class="listItemSummary">
										<?php echo mb_strimwidth(strip_tags(apply_filters('the_excerpt', $post->post_content)), 0, 200,"...");?>
									</p>

									<p class="listItemMeta">
										<?php the_time('Y-m-d', '<span>', '</span>'); ?>
										&nbsp; - &nbsp;
										<?php the_category(', '); ?>
									</p>

								</div>

							</a>
							
						</li>

						<?php endwhile;?>
						
					</ul>

					<div class="homeNav">

						<a href="http://www.coletree.com/weblog/category/thoughs/">
							<span>思考</span>
							<span class="count">(<?php echo get_category(3)->count;?>)</span>
						</a>
						✣
						<a href="http://www.coletree.com/weblog/category/recommend/">
							<span>发现</span>
							<span class="count">(<?php echo get_category(13)->count;?>)</span>
						</a>
						✣
						<a href="http://www.coletree.com/weblog/category/journal/">
							<span>行摄</span>
							<span class="count">(<?php echo get_category(16)->count;?>)</span>
						</a>

					</div>

				</div>

			</div>


		</div>


		<?php get_sidebar(); ?>


	</div>


<?php get_footer(); ?>