              <?php
                /*
                 * This is the audio post format.
                */
              ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


                <header class="article-header">

                  <div class="journal-header">

                    <h1 class="h2 entry-title">

                      <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>

                      <p class="journal-meta">
                        <span class="place"><?php the_field('journal_place'); ?></span>
                        &bull;
                        <span class="date"><?php the_field('journal_date'); ?></span>
                      </p>

                    </h1>
                  </div>
                  
                  <!-- check if the post has a Post Thumbnail assigned to it. -->
                  <?php if ( has_post_thumbnail()) : ?>

                    <div class="feature-image" >
                      <?php the_post_thumbnail('full'); ?>
                    </div>

                  <?php else : ?>

                    <div class="feature-image" >
                      <?php the_post_thumbnail('full'); ?>
                    </div>
                    
                  <?php endif; ?>


                </header>


                <div class="entry-meta-wrap-bottom cf">
                  <span class="entry-meta-date"><?php the_time('Y-m-d'); ?></span>
                  <span class="entry-meta-author"><?php the_author(); ?></span>
                  <span class="entry-meta-edit"><?php edit_post_link(); ?></span>
                </div>


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
                     *
                    */
                    wp_link_pages( array(
                      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                      'after'       => '</div>',
                      'link_before' => '<span>',
                      'link_after'  => '</span>',
                    ) );
                  ?>
                </section> <?php // end article section ?>


                <div class="entry-meta-wrap cf">

                    <span class="entry-meta">

                      <span class="entry-meta-date">
                        <a href="<?php the_permalink(); ?>" title="" rel="bookmark">
                          <?php the_time('Y-m-d'); ?>
                        </a>
                      </span>

                      <span class="entry-meta-edit">
                        <?php edit_post_link(); ?>
                      </span>

                    </span>

                </div>


                <!-- 单篇文章最后/阅读数 -->
                <div class="post_view_count">阅读 <?php post_views('10', ''); ?></div>


                <!-- 单篇文章最后 -->
                <footer class="article-footer clearfix" id="single-article-footer">
                  <table>
                    <tbody>
                    <tr>
                      <td width="50%" valign="top">
                        <p>
                          <img src="<?php echo get_template_directory_uri(); ?>/library/images/qcode_weixin.png">
                        </p>
                      </td>
                      <td width="50%" valign="top">
                        <p>
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/qcode_dashang.png">
                        </p>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </footer> <?php // end article footer ?>


                <div class="single-volume-comment">
                  <?php comments_template(); ?>
                </div>


                <!-- 获取同分类的相关文章 -->
                <!-- <div id="related_article" class="clearfix">
                <ul id="cat_related">
                        <?php
                        global $post;
                        $cats = wp_get_post_categories($post->ID);
                        if ($cats) {
                            $args = array(
                              'category__in' => array( $cats[0] ),
                              'post__not_in' => array( $post->ID ),
                              'showposts' => 3,
                              'caller_get_posts' => 1
                          );
                      query_posts($args);

                      if (have_posts()) {

                    echo '<h4><span> ✣ &nbsp;&nbsp; Others Thoughs Post &nbsp;&nbsp; ✣ </span></h4>';

                        while (have_posts()) {
                          the_post(); update_post_caches($posts); ?>


                        <li class="relatedListItem cf">

                          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="linkWrap" >

                              <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

                              <p class="listItemSummary">
                                <?php echo mb_strimwidth(strip_tags(apply_filters('the_excerpt', $post->post_content)), 0, 160,"...");?>
                              </p>

                          </a>
                          
                        </li>

                    <?php
                        }
                      }
                      else {
                        echo '<li></li>';
                      }
                      wp_reset_query();
                    }
                    else {
                      echo '';
                    }
                    ?>
                </ul>
                </div> -->


                <div class="signle-showAll">
                  <a href="http://weblog.coletree.com/">
                    <span>查看历史文章</span>
                  </a>
                </div>


              </article> <?php // end article ?>