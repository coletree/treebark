<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<h1 class="archive-title">
						<span><?php _e( 'Search Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?>
					</h1>

					<div id="leftContent" class="" role="">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article class="postListItem cf">

							<?php if ( has_post_thumbnail()) : ?>
							<header class="featurePic">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
									<?php the_post_thumbnail('large'); ?>
								</a>
							</header>
							<?php else : ?>
							<?php endif; ?>
							
							<a class="listItemContent" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
								<h3><?php the_title(); ?></h3>
								<p class="listItemSummary">
									<?php echo mb_strimwidth(strip_tags(apply_filters('the_excerpt', $post->post_content)), 0, 240,"...");?>
								</p>
							</a>

							<footer>
								<div class="listItemMeta">
									<?php the_time('Y-m-d', '<span>', '</span>'); ?>&nbsp;-&nbsp;发布于“<?php the_category(', '); ?>”
								</div>
							</footer>
							
						</article>

						<?php endwhile; ?>

						
						<?php bones_page_navi(); ?>


							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the search.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>


						<?php get_sidebar(); ?>


					</div>

			</div>

<?php get_footer(); ?>
