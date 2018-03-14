<?php
/**
 * Customer completed order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-completed-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email );


foreach($order->get_used_coupons() as $coupon) {
  query_posts(array('post_type' => 'shop_coupon','s' => $coupon,'posts_per_page' => 1));
  while (have_posts()): the_post(); $realcoupon = get_the_title(); endwhile;

  $decrypt = openssl_decrypt($realcoupon,"AES-128-ECB","IAMreferral");
  if ($decrypt) $referrer_email = $decrypt;
}

$coupon_code = openssl_encrypt($referrer_email,"AES-128-ECB","IAMreferralreward");

$coupon = array(
  'post_title' => $coupon_code,
  'post_excerpt' => 'Coupon code to thank '.$referrer_email,
  'post_status' => 'publish',
  'post_author' => 1,
  'post_type' => 'shop_coupon'
);
          
$new_coupon_id = wp_insert_post($coupon);

update_post_meta($new_coupon_id, 'discount_type', 'percent');
update_post_meta($new_coupon_id, 'coupon_amount', '25');
update_post_meta($new_coupon_id, 'expiry_date', date('Y-m-d', strtotime('+1 year')));
update_post_meta($new_coupon_id, 'individual_use', 'yes');
update_post_meta($new_coupon_id, 'product_ids', '16');
update_post_meta($new_coupon_id, 'exclude_product_ids', '');
update_post_meta($new_coupon_id, 'usage_limit', '1');
update_post_meta($new_coupon_id, 'apply_before_tax', 'yes');
update_post_meta($new_coupon_id, 'free_shipping', 'no');
update_post_meta($new_coupon_id, 'customer_email', $referrer_email);
?>

<p>
  Thank you for referring a friend! Since they used the coupon code you sent them for a new IAM3 Individual software activation, we're sending one for you to use on your next technical support renewal for IAM3 Individual. This one time use code is good for 25% off of <strong>1 Year Technical Support Renewal</strong>. You will need to use <strong><?php echo $referrer_email; ?></strong> as your billing email when you check out and the code expires one year from today.<br>
  <br>

  <strong>Coupon Code:</strong> <code style="display: inline-block; background: #DDDDDD; color: #000000; padding: 0 10px;"><?php echo $coupon_code; ?></code>
</p>

<?php

/**
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
//do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
//do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
//do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );
