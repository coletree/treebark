              <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf post_thoughs_format'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


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



                <footer class="article-footer" id="single-article-footer">

                    <!-- 单篇文章最后 -->
                    <!-- JiaThis Button BEGIN -->
                    <div class="jiathis_style">
                    <a class="jiathis_button_weixin"></a>
                    <a class="jiathis_button_tsina"></a>
                    <a class="jiathis_button_douban"></a>
                    <a class="jiathis_button_twitter"></a>
                    <a class="jiathis_button_googleplus"></a>
                    <a href="http://www.jiathis.com/share?uid=1725925" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank"></a>
                    </div>
                    <script type="text/javascript" >
                    var jiathis_config={
                      data_track_clickback:true,
                      summary:"",
                      ralateuid:{
                        "tsina":"coletree"
                      },
                      appkey:{
                        "tsina":"3982599182"
                      },
                      shortUrl:false,
                      hideMore:true
                    }
                    </script>
                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1725925" charset="utf-8"></script>
                    <!-- JiaThis Button END -->

                </footer> <?php // end article footer ?>


                <div id="related_article" class="clearfix">

                <!-- 获取同分类的相关文章 -->
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

                </div>


                <?php comments_template(); ?>


              </article> <?php // end article ?>