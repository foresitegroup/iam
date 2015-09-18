<?php
/**
 * Customer processing order email
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action('woocommerce_email_header', $email_heading); ?>

<p>
	<?php
	$UID = preg_replace('/[^0-9]/', '', get_post_meta( $order->id, 'IAM User ID', true ));
	if (($UID != "") && ($UID[0] == "1") && (strlen($UID) == "10")) {
		require_once( trailingslashit( get_stylesheet_directory() ) . 'woocommerce/activation-code-sub.php' );
	  $ActCodeArray = GetActCodes($UID);

	  $items = $order->get_items();
		$array_pid = array();
		foreach ( $items as $item ) {
			$array_pid[] = $item['product_id'];
		}
    
    // IAM
    if (in_array(8, $array_pid)) echo "Thank you for ordering Investment Account Manager.<br><br>In the opening form after starting IAM, click on the 'software activation key' button, and then enter this code:<br><br>Software Activation: <strong>" . $ActCodeArray[0] . "</strong><br><br>Please be sure to register your copy of IAM using this link:<br><a href=\"http://www.investmentaccountmanager.com/registration.php\">http://www.investmentaccountmanager.com/registration.php</a><br><br>If you have any questions, please let us know.<br><br>We appreciate your business, and hope that Investment Account Manager helps you to better manage your portfolios.<br><br>QUANT IX SOFTWARE, Inc.<br><br>";
    // IAM with QuoteMedia
		if (in_array(10, $array_pid)) echo "Thank you for ordering Investment Account Manager.<br><br>In the opening form after starting IAM, click on the 'software activation key' button, and then enter these codes:<br><br>Software Activation: <strong>" . $ActCodeArray[0] . "</strong><br><br>QuoteMedia Code: <strong>" . $ActCodeArray[1] . "</strong><br><br>Please be sure to register your copy of IAM using this link:<br><a href=\"http://www.investmentaccountmanager.com/registration.php\">http://www.investmentaccountmanager.com/registration.php</a><br><br>If you have any questions, please let us know.<br><br>We appreciate your business, and hope that Investment Account Manager helps you to better manage your portfolios.<br><br>QUANT IX SOFTWARE, Inc.<br><br>";
		// Support Renewal
		if (in_array(14, $array_pid)) echo "Thank you for renewing your Investment Account Manager Support Policy.<br><br>After starting IAM, please select the Help Menu | Product Support and enter the following renewal code:<br><br>Tech Support Activation Code: <strong>" . $ActCodeArray[2] . "</strong><br><br>If you have any questions, please let us know.<br><br>We appreciate your business, and hope that Investment Account Manager helps you to better manage your portfolios.<br><br>QUANT IX SOFTWARE, Inc.<br><br>";
		// Support Renewal with QuoteMedia
		if (in_array(16, $array_pid)) echo "Thank you for renewing your Investment Account Manager Support Policy, along with the QuoteMedia&trade; data feed.<br><br>After starting IAM, please select the Help Menu | Product Support and enter the following renewal code:<br><br>Tech Support Activation Code: <strong>" . $ActCodeArray[2] . "</strong><br><br>QuoteMedia Code: <strong>" . $ActCodeArray[3] . "</strong><br><br>If you have any questions, please let us know.<br><br>We appreciate your business, and hope that Investment Account Manager helps you to better manage your portfolios.<br><br>QUANT IX SOFTWARE, Inc.<br><br>";
	} else {
    echo "Sorry, you did not provide a proper User Identification Number so we could not give you your activation code at this time. Please contact customer service to get your code.<br>";
  }
	?>
	<?php //_e( "Your order has been received and is now being processed. Your order details are shown below for your reference:", 'woocommerce' ); ?>
</p>

<?php do_action( 'woocommerce_email_before_order_table', $order, $sent_to_admin, $plain_text ); ?>

<h2><?php printf( __( 'ORDER #%s', 'woocommerce' ), $order->get_order_number() ); ?></h2>

<table class="td" cellspacing="0" cellpadding="6" style="width: 100%; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;" border="0">
	<thead>
		<tr>
			<th class="td" scope="col" style="text-align:left; background: #F1F2F2;"><?php _e( 'ITEM NAME', 'woocommerce' ); ?></th>
			<th class="td" scope="col" style="text-align:center; background: #F1F2F2;"><?php _e( 'QTY', 'woocommerce' ); ?></th>
			<th class="td" scope="col" style="text-align:right; background: #F1F2F2;"><?php _e( 'ITEM PRICE', 'woocommerce' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php echo $order->email_order_items_table( $order->is_download_permitted(), true, $order->has_status( 'processing' ) ); ?>
	</tbody>
	<tfoot>
		<?php
			if ( $totals = $order->get_order_item_totals() ) {
				$i = 0;
				foreach ( $totals as $total ) {
					$i++;
					$lastone = count($totals);
					?><tr>
						<th class="td" scope="row" colspan="2" style="text-align:right; text-transform: uppercase; border: 0; <?php if ( ($i == 1) || ($i == $lastone) ) echo 'border-top: 1px solid #EBEBEB;'; ?>"><?php echo $total['label']; ?></th>
						<td class="td" style="text-align:right; border: 0; <?php if ( ($i == 1) || ($i == $lastone) ) echo 'border-top: 1px solid #EBEBEB;'; ?>"><?php echo $total['value']; ?></td>
					</tr><?php
				}
			}
		?>
	</tfoot>
</table>

<?php do_action( 'woocommerce_email_after_order_table', $order, $sent_to_admin, $plain_text ); ?>

<?php do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text ); ?>

<?php do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text ); ?>

<?php if ( get_post_meta( $order->id, 'IAM User ID', true ) != "" ) : ?>
<strong>IAM USER ID:</strong> <?php echo get_post_meta( $order->id, 'IAM User ID', true ); ?>
<?php endif; ?>

<?php do_action( 'woocommerce_email_footer' ); ?>
