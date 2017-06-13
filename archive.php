<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap cf">

			<div id="main" class="archive-list m-all cf" role="main">

				<?php if (is_category()) { ?>
					<h1 class="archive-title h2">
						<span><?php _e( '✣', 'bonestheme' ); ?></span> <?php single_cat_title(); ?>
					</h1>

				<?php } elseif (is_tag()) { ?>
					<h1 class="archive-title h2">
						<span><?php _e( '✣', 'bonestheme' ); ?></span> <?php single_tag_title(); ?>
					</h1>

				<?php } elseif (is_author()) {
					global $post;
					$author_id = $post->post_author;
				?>
					<h1 class="archive-title h2">

						<span><?php _e( '✣', 'bonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>

					</h1>
				<?php } elseif (is_day()) { ?>
					<h1 class="archive-title h2">
						<span><?php _e( '时间:', 'bonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?>
					</h1>

				<?php } elseif (is_month()) { ?>
					<h1 class="archive-title h2">
						<span><?php _e( '月份:', 'bonestheme' ); ?></span> <?php the_time('F Y'); ?>
					</h1>

				<?php } elseif (is_year()) { ?>
					<h1 class="archive-title h2">
						<span><?php _e( '年:', 'bonestheme' ); ?></span> <?php the_time('Y'); ?>
					</h1>
				<?php } ?>


				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article class="postListItem cf">

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
								<?php echo mb_strimwidth(strip_tags(apply_filters('the_excerpt', $post->post_content)), 0, 164,"...");?>
							</p>

							<p class="listItemMeta">
								<?php the_time('Y-m-d', '<span>', '</span>'); ?>
							</p>

						</div>

					</a>
					
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
								<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>

				<?php endif; ?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>
