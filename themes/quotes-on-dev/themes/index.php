<?php
/**
 * The main template file.
 *
 * @package QuotesOnDev_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main home-page" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
				$args = array( 
					'posts_per_page' => 1,
					'orderby' => 'rand' 
				); 
				$post = new WP_Query( $args );
			?>
			<?php if ( $post->have_posts() ) : ?>
				<div class="content-wrapper">
					<?php $post->the_post(); ?>
					<?php get_template_part( 'template-parts/content' ); ?>
				</div>
				
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
				<h2>Nothing found!</h2>
			<?php endif; ?>

			<div class="button-wrapper">
				<button id="show-post">Show me another!</button>
			</div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
