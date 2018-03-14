<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="darkgray store-title mb">
			  <article>
			    <h1>BLOG</h1>
			  </article>
			</div>
      
      <div id="news-index-wrap">
	      <div id="news-index">
					<?php if ( have_posts() ) : ?>
						<?php
						// Start the loop.
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );

						// End the loop.
						endwhile;

						

					// If no content, include the "No posts found" template.
					else :
						get_template_part( 'content', 'none' );

					endif;
					?>
				</div>

				<div id="news-index-sidebar">
					<h1>ALL POSTS</h1>

					<?php
					$all_posts = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1));

					if ( $all_posts->have_posts() ) :
					?>
					  <ul>
					    <?php while ($all_posts->have_posts()) : $all_posts->the_post(); ?>
					      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					    <?php endwhile; ?>
					  </ul>
					<?php else : ?>
					  <p><?php _e( 'Sorry, no posts were found.' ); ?></p>
					<?php endif; ?>

					<?php wp_reset_postdata(); ?>
				</div>

				<?php
				// Previous/next page navigation.
				the_posts_pagination( array(
					'prev_text'          => __( 'Prev', 'twentyfifteen' ),
					'next_text'          => __( 'Next', 'twentyfifteen' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
				) );
				?>
			</div>
	    
	    <div class="gray bt footer">
			  <article>
			    <h2>YOUR TRUSTED PARTNER SINCE 1985</h2>
			  </article>
			</div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
