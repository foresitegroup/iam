<?php
/* Modify product page layout */
function woocommerce_template_product_description() {
  woocommerce_get_template( 'single-product/tabs/description.php' );
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 7 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );


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
  if (!$_POST['iamuid']) {
    wc_add_notice( __( 'Please enter a User ID Number.' ), 'error' );
  } else {
    if ($_POST['iamuid'][0] != "2" && $_POST['iamuid'][0] != "3") wc_add_notice( __( 'User ID Number must start with a 2 or a 3.' ), 'error' );
    if (strlen(preg_replace('/[^0-9]/', '', $_POST['iamuid'])) != 10) wc_add_notice( __( 'User ID Number must be 10 digits.' ), 'error' );
  }
}

/* Display User ID on admin order page */
add_action( 'woocommerce_admin_order_data_after_billing_address', 'iam_uid_display_admin_order_meta', 10, 1 );
function iam_uid_display_admin_order_meta($order){
  echo '<p><strong>'.__('IAM User ID').':</strong> ' . get_post_meta( $order->id, 'IAM_User_ID', true ) . '</p>';
}


function my_thumbnail_size() {
  set_post_thumbnail_size();
}
add_action('after_setup_theme', 'my_thumbnail_size', 11);


/* Save User ID to order */
/* and copy order data to registration table */
function add_neworders ($order_id) {
  global $woocommerce;
  $order = new WC_Order( $order_id );
  
  // Get the product ID
  $items = $order->get_items();
  $array_pid = array();
  foreach ( $items as $item ) {
    $array_pid[] = $item['product_id'];
  }

  $qmcode = "";
  $renewal_code = "";

  // Add the User ID to WooCommerce table
  if ( ! empty( $_POST['iamuid'] ) ) {
    $iamuid = preg_replace('/[^0-9]/', '', sanitize_text_field( $_POST['iamuid'] ));
    $iamuid_formatted = substr_replace($iamuid, '_', 4, 0);
    $iamuid_formatted = substr_replace($iamuid_formatted, '_', -3, 0);
    add_post_meta( $order_id, 'IAM_User_ID', $iamuid_formatted );

    // Get the QM code
    if (($iamuid != "") && ($iamuid[0] == "2") && (strlen($iamuid) == "10")) {
      require_once( trailingslashit( get_stylesheet_directory() ) . 'woocommerce/activation-code-sub.php' );
      $ActCodeArray = GetActCodes($iamuid);

      // QM code
      if (in_array(10, $array_pid)) $qmcode = $ActCodeArray[1];
      if (in_array(16, $array_pid)) $qmcode = $ActCodeArray[3];
      
      // Renewal code
      if (in_array(14, $array_pid) || in_array(16, $array_pid)) $renewal_code = $ActCodeArray[2];
    }
  }
  
  // Set the renewal date if it exists
  $support_renewal_date = (in_array(14, $array_pid) || in_array(16, $array_pid) || in_array(17, $array_pid)) ? $support_renewal_date = strtotime($order->order_date) : "";

  // Get the order date and convert to epoch time
  $purch_date = strtotime($order->order_date);

  global $wpdb;
  
  $TheTable = (in_array(12, $array_pid) || in_array(17, $array_pid)) ? "registration_pro" : "registration";
  
  // Is this a new customer or existing?
  $results = $wpdb->get_results( "SELECT * FROM " . $TheTable . " ORDER BY purch_date DESC", ARRAY_A );
  $exists = "";
  foreach($results as $row) {
    $sn = preg_replace('/[^0-9]/', '', $row['serial_number']);
    if ($sn == $iamuid) $exists = $row['id'];
  }
  
  if ($exists != "") {
    // Update the data
    $wpdb->update($TheTable, array(
      'email' => $order->billing_email,
      'firstname' => $order->billing_first_name,
      'lastname' => $order->billing_last_name,
      'company' => $order->billing_company,
      'address' => $order->billing_address_1,
      'city' => $order->billing_city,
      'state' => $order->billing_state,
      'zip' => $order->billing_postcode,
      'phone' => $order->billing_phone,
      'support_renewal_date' => $support_renewal_date,
      'renewal_code' => $renewal_code,
      'qm_code' => $qmcode
    ),
    array( 'id' => $exists )
    );
  } else {
    // Insert the data
    $wpdb->insert($TheTable, array(
      'email' => $order->billing_email,
      'firstname' => $order->billing_first_name,
      'lastname' => $order->billing_last_name,
      'company' => $order->billing_company,
      'address' => $order->billing_address_1,
      'city' => $order->billing_city,
      'state' => $order->billing_state,
      'zip' => $order->billing_postcode,
      'phone' => $order->billing_phone,
      'serial_number' => $iamuid_formatted,
      'purch_date' => $purch_date,
      'support_renewal_date' => $support_renewal_date,
      'renewal_code' => $renewal_code,
      'qm_code' => $qmcode
    ));
  }
}
add_action( 'woocommerce_checkout_order_processed', 'add_neworders' );


// Make "more" link go to top of page instead of anchor
function remove_more_link_scroll( $link ) {
  $link = preg_replace( '|#more-[0-9]+|', '', $link );
  return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );


// Wrap video embed code in DIV for responsive goodness
add_filter( 'embed_oembed_html', 'my_oembed_filter', 10, 4 ) ;
function my_oembed_filter($html, $url, $attr, $post_ID) {
  $return = '<div class="video">'.$html.'</div>';
  return $return;
}
?>