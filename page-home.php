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
															<!-- <div class="caption"> <h3><?php echo $caption; ?></h3> </div> -->
											      </div>

											    <?php endwhile; ?>

											  </div>

											 <?php endif; ?>

								</section>

								<div class="gallery">

								<?php 
				          $args = array(
				          'numberposts' => 6,
				          'posts_per_page' => 6,
				          'orderby' => 'post_date',
				          'order' => 'DESC',
				          'post_type' => 'portfolio',
				          );
				          $the_query = new WP_Query( $args );
				          if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				          <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>


									<div class="image-link">
					          <a href="<?php the_permalink() ?>">
						          <div class="square-image" style="background-image: url(<?php echo $src[0]; ?>)"></div>			            
					          </a>
					        </div>

								<?php endwhile; ?>
											        
					      </div>


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
													<p><?php _e( 'This is the error message in the custom posty type archive template.', 'bonestheme' ); ?></p>
											</footer>
										</article>

								<?php endif; ?>

						</main>


				</div>

			</div>


<?php get_footer(); ?>



