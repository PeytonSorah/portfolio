
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<div class="gallery">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>

								<div class="image-link">
				          <a href="<?php the_permalink() ?>">
					          <div class="square-image" style="background-image: url(<?php echo $src[0]; ?>)"></div>			            
					          <section class="link-text">
					          	<!-- <h2 class="white-ribbon">Latest Work</h2> -->
				          		<h3 class="date"><?php echo get_the_date('m / d'); ?></h3>
					            <h2><?php echo get_the_title(); ?></h2>
					            <p><?php the_excerpt(); ?></p>
					          </section>
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
