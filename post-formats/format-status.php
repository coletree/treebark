              <?php
                /*
                 * This is the status post format.
                */
              ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


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

                  <div class="entry-meta-wrap-bottom cf" style="font-weight:normal;font-size:14px;">
                    <span class="entry-meta-date"><?php the_time('Y-m-d'); ?></span>
                    <span class="entry-meta-author"><?php the_author(); ?></span>
                    <span class="entry-meta-edit"><?php edit_post_link(); ?></span>
                  </div>

                </section> <?php // end article section ?>


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


                <div class="signle-showAll">
                  <a href="http://weblog.coletree.com/">
                    <span>查看历史文章</span>
                  </a>
                </div>
                

              </article> <?php // end article ?>