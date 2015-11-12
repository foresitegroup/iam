<?php
/**
 * Order Customer Details
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<h2 style="margin: 2em 0 0.1em;"><?php _e( 'CUSTOMER DETAILS', 'woocommerce' ); ?></h2>

<div>
	<div class="two-col">
		<?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() ) : ?>
		  <h3 style="margin: 0.1em 0; text-transform: uppercase;"><?php _e( 'Billing Address', 'woocommerce' ); ?></h3>
		<?php endif; ?>
		<?php echo ( $address = $order->get_formatted_billing_address() ) ? $address : __( 'N/A', 'woocommerce' ); ?>

    <?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() ) : ?>
		  <h3 style="margin: 2em 0 0.1em; text-transform: uppercase;"><?php _e( 'Shipping Address', 'woocommerce' ); ?></h3>
		  <?php echo ( $address = $order->get_formatted_shipping_address() ) ? $address : __( 'N/A', 'woocommerce' ); ?>
		<?php endif; ?>
	</div>

	<div class="two-col">
		<table class="shop_table shop_table_responsive customer_details">
			<?php if ( $order->billing_phone ) : ?>
				<tr>
					<th><?php _e( 'PHONE: ', 'woocommerce' ); ?></th>
					<td><?php echo esc_html( $order->billing_phone ); ?></td>
				</tr>
			<?php endif; ?>

			<?php if ( $order->billing_email ) : ?>
				<tr>
					<th><?php _e( 'EMAIL: ', 'woocommerce' ); ?></th>
					<td><?php echo esc_html( $order->billing_email ); ?></td>
				</tr>
			<?php endif; ?>

			<?php if ( get_post_meta( $order->id, 'IAM User ID', true ) != "" ) : ?>
				<tr>
					<th>IAM USER ID: </th>
					<td><?php echo get_post_meta( $order->id, 'IAM User ID', true ); ?></td>
				</tr>
			<?php endif; ?>

			<?php if ( $order->customer_note ) : ?>
				<tr>
					<th><?php _e( 'NOTE: ', 'woocommerce' ); ?></th>
					<td><?php echo wptexturize( $order->customer_note ); ?></td>
				</tr>
			<?php endif; ?>

			<?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>
		</table>
		
	</div>

	<div style="clear: both;"></div>
</div>