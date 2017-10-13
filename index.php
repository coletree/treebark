<?php get_header(); ?>


<div id="content" class="wrap">

	<div id="inner-content" class="cf">

		<div id="leftContent" class="" role="main">

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


			<!-- 查看更多文章按钮 -->
			<!-- <div class="homeMore">
				<a href="http://www.coletree.com/weblog/page/2/"><span>查看历史文章...</span></a>
			</div> -->


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

		<?php get_sidebar(); ?>

	</div>

</div>


<?php get_footer(); ?>