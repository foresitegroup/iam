<?php
/**
 * Thankyou page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

echo "<article style=\"padding-top: 2em;\">";

if ( $order ) : ?>

	<?php if ( $order->has_status( 'failed' ) ) : ?>

		<p><?php _e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction.', 'woocommerce' ); ?></p>

		<p><?php
			if ( is_user_logged_in() )
				_e( 'Please attempt your purchase again or go to your account page.', 'woocommerce' );
			else
				_e( 'Please attempt your purchase again.', 'woocommerce' );
		?></p>

		<p>
			<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'woocommerce' ) ?></a>
			<?php if ( is_user_logged_in() ) : ?>
			<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php _e( 'My Account', 'woocommerce' ); ?></a>
			<?php endif; ?>
		</p>

	<?php else : ?>

		<h2 style="text-transform: uppercase;"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Your order has been received.', 'woocommerce' ), $order ); ?></h2>
    
    <div class="iamuid">
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
		    if (in_array(8, $array_pid)) echo "Thank you for ordering Investment Account Manager. In the opening form after starting IAM, click on the \"software activation key\" button, and then enter this code:<br>Software Activation: <strong>" . $ActCodeArray[0] . "</strong><br>";
		    // IAM with QuoteMedia
				if (in_array(10, $array_pid)) echo "Thank you for ordering Investment Account Manager. In the opening form after starting IAM, click on the \"software activation key\" button, and then enter these codes:<br>Software Activation: <strong>" . $ActCodeArray[0] . "</strong><br>QuoteMedia Code: <strong>" . $ActCodeArray[1] . "</strong><br>";
				// Support Renewal
				if (in_array(14, $array_pid)) echo "Thank you for renewing your Investment Account Manager Support Policy. After starting IAM, please select the Help Menu | Product Support and enter the following renewal code:<br>Tech Support Activation Code: <strong>" . $ActCodeArray[2] . "</strong><br>";
				// Support Renewal with QuoteMedia
				if (in_array(16, $array_pid)) echo "Thank you for renewing your Investment Account Manager Support Policy, along with the QuoteMedia&trade; data feed. After starting IAM, please select the Help Menu | Product Support and enter the following renewal codes:<br>Tech Support Activation Code: <strong>" . $ActCodeArray[2] . "</strong><br>QuoteMedia Code: <strong>" . $ActCodeArray[3] . "</strong><br>";
			} else {
		    echo "Sorry, you did not provide a proper User Identification Number so we could not give you your activation code at this time. Please contact customer service to get your code.<br>";
		  }
			?>
		</div>

	  <div>
			<div class="two-col" style="font-weight: bold; text-transform: uppercase;">
				ORDER NUMBER: <?php echo $order->get_order_number(); ?>
				<?php if ( $order->payment_method_title ) : ?>
				  <br>
					<?php _e( 'Payment Method:', 'woocommerce' ); ?>
					<?php echo $order->payment_method_title; ?>
				</li>
				<?php endif; ?>
			</div>
			<div class="two-col" style="font-weight: bold; text-transform: uppercase; text-align: right;">
				<?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?>
			</div>
			<div style="clear: both;"></div>
		</div>

<!-- 		<ul class="order_details">
			<li class="order">
				<?php //_e( 'Order Number:', 'woocommerce' ); ?>
				<strong><?php //echo $order->get_order_number(); ?></strong>
			</li>
			<li class="date">
				<?php //_e( 'Date:', 'woocommerce' ); ?>
				<strong><?php //echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?></strong>
			</li>
			<li class="total">
				<?php //_e( 'Total:', 'woocommerce' ); ?>
				<strong><?php //echo $order->get_formatted_order_total(); ?></strong>
			</li>
			<?php //if ( $order->payment_method_title ) : ?>
			<li class="method">
				<?php //_e( 'Payment Method:', 'woocommerce' ); ?>
				<strong><?php //echo $order->payment_method_title; ?></strong>
			</li>
			<?php //endif; ?>
		</ul>
		<div class="clear"></div> -->

	<?php endif; ?>

	<?php //do_action( 'woocommerce_thankyou_' . $order->payment_method, $order->id ); ?>
	<?php do_action( 'woocommerce_thankyou', $order->id ); ?>

<?php else : ?>

	<p><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), null ); ?></p>

<?php endif; ?>

</article>

<div class="darkgray store-title">
  <article>
    <h2>VISIT OUR <a href="#" class="whitelink">TUTORIAL</a> PAGE FOR ADDED SUPPORT.</h2>
  </article>
</div>