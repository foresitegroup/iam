<?php
/**
 * Admin new order email
 *
 * @author WooThemes
 * @package WooCommerce/Templates/Emails/HTML
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_email_header', $email_heading ); ?>

<p><?php printf( __( 'You have received an order from %s. The order is as follows:', 'woocommerce' ), $order->get_formatted_billing_full_name() ); ?></p>

<?php do_action( 'woocommerce_email_before_order_table', $order, true, false ); ?>

<h2><a class="link" href="<?php echo admin_url( 'post.php?post=' . $order->id . '&action=edit' ); ?>"><?php printf( __( 'Order #%s', 'woocommerce'), $order->get_order_number() ); ?></a> (<?php printf( '<time datetime="%s">%s</time>', date_i18n( 'c', strtotime( $order->order_date ) ), date_i18n( wc_date_format(), strtotime( $order->order_date ) ) ); ?>)</h2>

<table class="td" cellspacing="0" cellpadding="6" style="width: 100%; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;" border="0">
	<thead>
		<tr>
			<th class="td" scope="col" style="text-align:left; background: #F1F2F2; color: #555555;"><?php _e( 'ITEM NAME', 'woocommerce' ); ?></th>
			<th class="td" scope="col" style="text-align:center; background: #F1F2F2; color: #555555;"><?php _e( 'QTY', 'woocommerce' ); ?></th>
			<th class="td" scope="col" style="text-align:right; background: #F1F2F2; color: #555555;"><?php _e( 'ITEM PRICE', 'woocommerce' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php echo $order->email_order_items_table( false, true ); ?>
	</tbody>
	<tfoot>
		<?php
			if ( $totals = $order->get_order_item_totals() ) {
				$i = 0;
				foreach ( $totals as $total ) {
					$i++;
					$lastone = count($totals);
					?><tr>
						<th class="td" scope="col" colspan="2" style="font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; text-align:right; text-transform: uppercase; border: 0; <?php if ( ($i == 1) || ($i == $lastone) ) echo 'border-top: 1px solid #EBEBEB;'; ?>"><?php echo $total['label']; ?></th>
						<td class="td" scope="col" style="text-align:right; border: 0; <?php if ( ($i == 1) || ($i == $lastone) ) echo 'border-top: 1px solid #EBEBEB;'; ?>"><?php echo $total['value']; ?></td>
					</tr><?php
				}
			}
		?>
	</tfoot>
</table>

<?php do_action( 'woocommerce_email_after_order_table', $order, true, false ); ?>

<?php do_action( 'woocommerce_email_order_meta', $order, true, false ); ?>

<?php do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text ); ?>

<?php if ( get_post_meta( $order->id, 'IAM User ID', true ) != "" ) : ?>
<strong>IAM USER ID:</strong> <?php echo get_post_meta( $order->id, 'IAM User ID', true ); ?>
<?php endif; ?>

<?php do_action( 'woocommerce_email_footer' ); ?>
