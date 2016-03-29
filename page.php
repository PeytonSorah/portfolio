<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" role="main" itemscope itemprop="mainContentOfPage">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						    <article>

						      <header class="article-header entry-header">
						        <h2 class="page-title"><?php the_title(); ?></h2>
						      </header>

						      <section class="entry-content">
						        <?php
						        if ( have_rows( 'flex' ) ) :
						          while ( have_rows( 'flex' ) ) : the_row();
						            get_template_part( 'library/templates/flex-content-loop' );
						          endwhile;
						        endif;
						        ?>
						      </section>

						    </article> <?php // end article ?>

							<?php endwhile; endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
