<?php
/* Modify product page layout */
function woocommerce_template_product_description() {
  woocommerce_get_template( 'single-product/tabs/description.php' );
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 7 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );


/* Modify cart coupon layout */
function fg_wc_cart_totals_coupon_label( $coupon ) {
  if ( is_string( $coupon ) )
    $coupon = new WC_Coupon( $coupon );

  $couponlink = '<a href="' . esc_url( add_query_arg( 'remove_coupon', urlencode( $coupon->code ), defined( 'WOOCOMMERCE_CHECKOUT' ) ? WC()->cart->get_checkout_url() : WC()->cart->get_cart_url() ) ) . '" class="fg-woocommerce-remove-coupon" data-coupon="' . esc_attr( $coupon->code ) . '">' . __( '[Remove]', 'woocommerce' ) . '</a>';

  echo apply_filters( 'woocommerce_cart_totals_coupon_label', 'Coupon:' . ' ' . $coupon->code . ' ' . $couponlink, $coupon );
}


/* Checkout page modifications */
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_login_form', 10 );
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );

remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
add_action( 'fg_woocommerce_checkout_payment', 'woocommerce_checkout_payment', 10 );

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
  $fields['billing']['billing_first_name']['placeholder'] = 'First Name *';
  $fields['billing']['billing_last_name']['placeholder'] = 'Last Name *';
  $fields['billing']['billing_company']['placeholder'] = 'Company';
  $fields['billing']['billing_email']['placeholder'] = 'Email *';
  $fields['billing']['billing_phone']['placeholder'] = 'Phone *';
  $fields['billing']['billing_address_1']['placeholder'] = 'Street Address *';
  unset($fields['billing']['billing_address_2']);
  $fields['billing']['billing_city']['placeholder'] = 'City *';
  $fields['billing']['billing_postcode']['placeholder'] = 'Zip *';
  return $fields;
}

add_filter('woocommerce_enable_order_notes_field', '__return_false');


/* IAM User ID Number */
//add_action( 'woocommerce_after_order_notes', 'iam_uid' );
add_action( 'fg_woocommerce_checkout_before_customer_details', 'iam_uid' );
function iam_uid( $checkout ) {
  echo '
  <div id="iam_uid" style="margin: 2em 0 2.5em;">
    <h3>' . __('IAM USER IDENTIFICATION NUMBER') . '</h3>
    If ordering <strong>a new software activation key</strong>, please enter the user identification number of the IAM demo you have downloaded. It can be found by starting IAM, and then clicking on the software activation key.<br>
    <br>
    If ordering <strong>technical support renewal</strong> for your copy of IAM, please enter the user identification number of your copy of IAM. It can be found by starting IAM, and then selecting the Help Menu | About Screen.
    ';

  woocommerce_form_field( 'iamuid', array(
      'type'          => 'text',
      'class'         => array('my-field-class form-row-wide'),
      'label'         => __('IAM User Identification Number'),
      'placeholder'   => __('Enter User Identification Number Here'),
      ), $checkout->get_value( 'iamuid' ));

  echo '</div><hr><br>';
}


/* Validate required User ID field */
add_action('woocommerce_checkout_process', 'iam_uid_process');
function iam_uid_process() {
  // Check if set, if its not set add an error.
  if ( ! $_POST['iamuid'] )
    wc_add_notice( __( 'Please enter a User ID Number.' ), 'error' );
}


/* Save User ID to order */
add_action( 'woocommerce_checkout_update_order_meta', 'iam_uid_update_order_meta' );
function iam_uid_update_order_meta( $order_id ) {
  if ( ! empty( $_POST['iamuid'] ) ) {
    update_post_meta( $order_id, 'IAM User ID', sanitize_text_field( $_POST['iamuid'] ) );
  }
}


/* Display User ID on admin order page */
add_action( 'woocommerce_admin_order_data_after_billing_address', 'iam_uid_display_admin_order_meta', 10, 1 );
function iam_uid_display_admin_order_meta($order){
  echo '<p><strong>'.__('IAM User ID').':</strong> ' . get_post_meta( $order->id, 'IAM User ID', true ) . '</p>';
}


//add_action( 'fg_woocommerce_review_order_after_order_total', 'woocommerce_checkout_coupon_form', 10 );
?>