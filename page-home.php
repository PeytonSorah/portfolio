<?php
/*
 Template Name: Home Template
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

								<section class="entry-content cf" itemprop="articleBody">
									   <?php
											  if ( have_rows( 'slider' ) ) : ?>

											  <div class="slider-wrap">

											    <?php while ( have_rows( 'slider' ) ) : the_row();
											      $image = get_sub_field( 'image' );
											      $caption = get_sub_field( 'caption' ); ?>

														<div class="slide" style="background-image:url('<?php echo $image[url]; ?>');">
															<div class="caption"> <h3><?php echo $caption; ?></h3> </div>
											      </div>

											    <?php endwhile; ?>

											  </div>

											 <?php endif; ?>

								</section>

								<section class="home-news">

						      <div class="home-news-wrap">
						        <?php 
						          $args = array(
						          'numberposts' => 2,
						          'posts_per_page' => 2,
						          'orderby' => 'post_date',
						          'order' => 'DESC',
						          'post_type' => 'portfolio',
						          );
						          $the_query = new WP_Query( $args );
						          if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						          <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>

						        <div class="home-news-item">
						          <a href="<?php the_permalink() ?>">
							          <div class="squarephoto" style="background: url(<?php echo $src[0]; ?> ) !important;"></div>			            
							          <section class="home-news-item-text">
						          		<h2 class="white-ribbon"><?php the_date('m / d'); ?> </h2>
							            <h3><?php echo get_the_title(); ?></h3>
							            <p><?php the_excerpt(); ?></p>
							          </section>
						          </a>
						        </div>

						        <?php endwhile; ?>
						        <?php else : ?>
						        <?php get_template_part( 'library/post-not-found' ); ?>
						        <?php endif; ?>

						        <a href="<?php echo esc_url( home_url() ); ?>/portfolio">
						        	see more work
						        </a>

						    </div>
						  </section>

						</main>


				</div>

			</div>


<?php get_footer(); ?>
