<?php
/**
 * Output a single payment method
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<li class="payment_method_<?php echo $gateway->id; ?>">
	<input id="payment_method_<?php echo $gateway->id; ?>" type="radio" class="input-radio" name="payment_method" value="<?php echo esc_attr( $gateway->id ); ?>" <?php checked( $gateway->chosen, true ); ?> data-order_button_text="<?php echo esc_attr( $gateway->order_button_text ); ?>" style="float: left;" />
  <label for="payment_method_<?php echo $gateway->id; ?>" style="display: inline-block; float: left;"><span></span>
    <?php //echo $gateway->get_title(); ?> <?php //echo $gateway->get_icon(); ?>
  </label>
	<?php if ( $gateway->has_fields() || $gateway->get_description() ) : ?>
	  <?php $gateway->payment_fields(); ?>
	<?php endif; ?>
</li>
