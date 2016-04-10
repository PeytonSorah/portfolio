
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

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                <header class="article-header entry-header">

                  <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

                </header> <?php // end article header ?>

                <section class="entry-content cf" itemprop="articleBody">
                 
                   <?php
                    if ( have_rows( 'flex' ) ) :
                      while ( have_rows( 'flex' ) ) : the_row();
                        get_template_part( 'library/templates/flex-content-loop' );
                      endwhile;
                    endif;
                    ?>

                </section> <?php // end article section ?>

              </article> <?php // end article ?>
