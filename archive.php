<?php
/*
*/
?>

<?php get_header(); ?>


<div id="content">

	<div id="inner-content" class="wrap cf">

		<div>
			<?php if (is_category()) { ?>
				<h1 class="archive-title h2">
					"<?php single_cat_title(); ?>"下的所有文章...
				</h1>

			<?php } elseif (is_tag()) { ?>
				<h1 class="archive-title h2">
					"<?php single_tag_title(); ?>"下的所有文章...
				</h1>

			<?php } elseif (is_author()) {
				global $post;
				$author_id = $post->post_author;
			?>
				<h1 class="archive-title h2">

					<span><?php _e( '✣', 'bonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?> 的所有文章...

				</h1>
			<?php } elseif (is_day()) { ?>
				<h1 class="archive-title h2">
					<span><?php _e( '时间:', 'bonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?> 的所有文章...
				</h1>

			<?php } elseif (is_month()) { ?>
				<h1 class="archive-title h2">
					<span><?php _e( '月份:', 'bonestheme' ); ?></span> <?php the_time('F Y'); ?> 的所有文章...
				</h1>

			<?php } elseif (is_year()) { ?>
				<h1 class="archive-title h2">
					<span><?php _e( '年:', 'bonestheme' ); ?></span> <?php the_time('Y'); ?> 的所有文章...
				</h1>
			<?php } ?>
		</div>

		<div id="leftContent" class="" role="">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<!-- 状态短文形式 -->
				<?php if ( has_post_format( 'status' )) { ?>
					<article <?php post_class('postListItem'); ?>>

						<a class="listItemContent" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							<div class="listItemSummary">
								<?php the_content(); ?>
								<div class="listItemMeta">
									<?php the_time('Y-m-d', '<span>', '</span>'); ?>&nbsp;-&nbsp;<?php the_author(); ?>
								</div>
							</div>
						</a>
						
					</article>
				<?php 
				}

				// 单图形式
				else if (has_post_format('image')) { ?>
					<article <?php post_class('postListItem'); ?>>

						<a class="listItemContent" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							<div class="listItemSummary">
								<img src="<?php echo get_content_first_image(get_the_content()); ?>" alt="<?php the_title_attribute(); ?>" />
								<p>
									<?php echo mb_strimwidth(strip_tags(apply_filters('the_excerpt', $post->post_content)), 0, 240,"...");?>
								</p>
								<div class="listItemMeta">
									<?php the_time('Y-m-d', '<span>', '</span>'); ?>&nbsp;-&nbsp;<?php the_author(); ?>
								</div>
							</div>
						</a>
						
					</article>
					<?php 
				} 
				
				// 视频形式
				else if (has_post_format('video')) { ?>
					<article <?php post_class('postListItem'); ?>>

						<div class="listItemContent">
							<div class="listItemSummary">
								<?php the_content(); ?>
								<div class="listItemMeta">
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
										<?php the_time('Y-m-d', '<span>', '</span>'); ?>
									</a>
									&nbsp;-&nbsp;<?php the_author(); ?>
								</div>
							</div>
						</div>

					</article>
					<?php 
				} 
				
				// 音频形式
				else if ( has_post_format( 'audio' )) { ?>
					<article <?php post_class('postListItem'); ?>>

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
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php the_time('Y-m-d', '<span>', '</span>'); ?>
								</a>
								&nbsp;-&nbsp;
								<?php the_author(); ?>发布在&nbsp;“<?php the_category(', '); ?>”
							</div>
						</footer>
						
					</article>
					<?php 
				}

				else { ?>
					<article <?php post_class('postListItem'); ?>>

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
								<?php echo mb_strimwidth(strip_tags(apply_filters('the_excerpt', $post->post_content)), 0, 200,"...");?>
							</p>
						</a>

						<footer>
							<div class="listItemMeta">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php the_time('Y-m-d', '<span>', '</span>'); ?>
								</a>
								&nbsp;-&nbsp;
								<?php the_author(); ?>发布在&nbsp;“<?php the_category(', '); ?>”
							</div>
						</footer>
						
					</article>
					<?php 
				} ?>

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

		<?php get_sidebar(); ?>

	</div>

</div>


<?php get_footer(); ?>