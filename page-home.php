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

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


								<section class="entry-content cf" itemprop="articleBody">
									   <?php
											  if ( have_rows( 'slider' ) ) : ?>

											  <div class="slider slider-wrap slide-fade" data-autoplay="true" data-slidespeed="7500" data-slidedots="true">
											  <div class="slider-list">

											    <?php while ( have_rows( 'slider' ) ) : the_row();
											      $image = get_sub_field( 'image' );
											      $caption = get_sub_field( 'caption' ); ?>

														<div class="slide" style="background-image:url('<?php echo esc_url( $image['sizes']['hero-image'] ); ?>');">
											      </div>

											    <?php endwhile; ?>

											  </div>
											  </div>

											 <?php endif; ?>

								</section>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>


				</div>

			</div>


<?php get_footer(); ?>
