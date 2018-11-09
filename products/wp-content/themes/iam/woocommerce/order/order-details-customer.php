<?php
/**
 * Order Customer Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-customer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$show_shipping = ! wc_ship_to_billing_address_only() && $order->needs_shipping_address();
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
			<?php if ( $order->get_billing_phone() ) : ?>
				<tr>
					<th><?php _e( 'PHONE: ', 'woocommerce' ); ?></th>
					<td><?php echo esc_html( $order->get_billing_phone() ); ?></td>
				</tr>
			<?php endif; ?>

			<?php if ( $order->get_billing_email() ) : ?>
				<tr>
					<th><?php _e( 'EMAIL: ', 'woocommerce' ); ?></th>
					<td><?php echo esc_html( $order->get_billing_email() ); ?></td>
				</tr>
			<?php endif; ?>

			<?php if ( get_post_meta( $order->id, 'IAM_User_ID', true ) != "" ) : ?>
				<tr>
					<th>IAM USER ID: </th>
					<td><?php echo get_post_meta( $order->id, 'IAM_User_ID', true ); ?></td>
				</tr>
			<?php endif; ?>

			<?php if ( $order->get_customer_note() ) : ?>
				<tr>
					<th><?php _e( 'NOTE: ', 'woocommerce' ); ?></th>
					<td><?php echo wptexturize( $order->get_customer_note() ); ?></td>
				</tr>
			<?php endif; ?>

			<?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>
		</table>
		
	</div>

	<div style="clear: both;"></div>
</div>
