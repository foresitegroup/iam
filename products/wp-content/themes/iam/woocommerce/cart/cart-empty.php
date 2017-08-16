<?php
/**
 * Empty cart page
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.1.0
 */

//header('Location: '. wc_get_page_permalink( 'shop' ));

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

print "<article style=\"margin-top: 2em;\">";

wc_print_notices();

?>

<p class="cart-empty"><?php _e( 'Your cart is currently empty.', 'woocommerce' ) ?></p>

<?php do_action( 'woocommerce_cart_is_empty' ); ?>

<p class="return-to-shop"><a class="button wc-backward" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>"><?php _e( 'Return To Shop', 'woocommerce' ) ?></a></p>

</article>

<div class="darkgray store-title">
  <article>
    <h1>YOUR TRUSTED PARTNER SINCE 1985.</h1>
  </article>
</div>