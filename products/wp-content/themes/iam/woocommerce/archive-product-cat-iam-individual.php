<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<div class="darkgray store-title mb">
  <article>
    <h1>IAM INDIVIDUAL</h1>
  </article>
</div>

<article>
	<ul class="products">
    <?php
    $args = array( 'post_type' => 'product', 'posts_per_page' => 0, 'product_cat' => 'iam-individual', 'orderby' => 'menu_order', 'order' => 'asc' );
    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();
      global $product;
      wc_get_template_part( 'content', 'product' );
    endwhile;

    wp_reset_query();
    ?>
  </ul>
</article>

<div class="darkgray store-title">
  <article>
    <h1>YOUR TRUSTED PARTNER SINCE 1985.</h1>
  </article>
</div>

<?php get_footer( 'shop' ); ?>