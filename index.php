<?php get_header(); ?>

			<div id="content" class="wrap">

				<div id="inner-content" class="cf">

						<div id="main" class="cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<!-- check if the post has a Post Thumbnail assigned to it. -->
								<?php if ( has_post_thumbnail()) : ?>
									
									<div class="feature-image" >
										<?php the_post_thumbnail('full'); ?>
									</div>

								<?php endif; ?>

								<header class="article-header">
									
									<h1 class="h2 entry-title">
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
									</h1>

								</header>
								
								<section class="entry-content cf">

									<?php the_content(); ?>

								</section>

								<footer class="article-footer cf">

									<span class="article-footer-wrap">

										<span>&bull;</span>

									</span>

								</footer>

							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">

										<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>

										<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>

										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>

									</article>

							<?php endif; ?>

						</div>

					<?php //get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
