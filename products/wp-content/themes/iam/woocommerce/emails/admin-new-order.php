<?php
/**
 * Admin new order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/admin-new-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates/Emails/HTML
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

 <p><?php printf( __( 'You have received an order from %s. The order is as follows:', 'woocommerce' ), $order->get_formatted_billing_full_name() ); ?></p>

 <p>
  <?php
  $items = $order->get_items();
  $array_pid = array();
  foreach ( $items as $item ) {
    $array_pid[] = $item['product_id'];
  }

  $UID = preg_replace('/[^0-9]/', '', get_post_meta( $order->id, 'IAM_User_ID', true ));

  if (($UID != "") && ($UID[0] == "3") && (strlen($UID) == "10")) {
    $TopDir = ($_SERVER['DOCUMENT_ROOT'] != dirname(__FILE__)) ? "http://" . $_SERVER['HTTP_HOST'] . "/" : "";
    if ($_SERVER['SERVER_NAME'] == "localhost") { $parts = explode("/", $_SERVER['REQUEST_URI']); $TopDir .= $parts[1] . "/"; }
    
    // IAM Pro
    if (in_array(12, $array_pid)) echo "Thank you for ordering Investment Account Manager Professional. You will receive your software activation code within 24 hours.  If you have any questions or concerns about your order, please <a href=\"" . $TopDir . "/contact-us.php\">contact us</a>.<br>";
    // IAM Pro Renewal
    if (in_array(17, $array_pid)) echo "Thank you for renewing your Investment Account Manager Professional Support Policy. You will receive your support renewal code within 24 hours.  If you have any questions or concerns about your order, please <a href=\"" . $TopDir . "/contact-us.php\">contact us</a>.<br>";
  } elseif (($UID != "") && ($UID[0] == "2") && (strlen($UID) == "10")) {
    require_once( trailingslashit( get_stylesheet_directory() ) . 'woocommerce/activation-code-sub.php' );
    $ActCodeArray = GetActCodes($UID);

    // IAM
    if (in_array(8, $array_pid)) echo "Thank you for ordering Investment Account Manager.<br><br>In the opening form after starting IAM, click on the 'software activation key' button, and then enter this code:<br><br>Software Activation: <strong>" . $ActCodeArray[0] . "</strong><br><br><br><br>If you have any questions, please let us know.<br><br>We appreciate your business, and hope that Investment Account Manager helps you to better manage your portfolios.<br><br>QUANT IX SOFTWARE, Inc.<br><br>";
    // IAM with QuoteMedia
    if (in_array(10, $array_pid)) echo "Thank you for ordering Investment Account Manager.<br><br>In the opening form after starting IAM, click on the 'software activation key' button, and then enter these codes:<br><br>Software Activation: <strong>" . $ActCodeArray[0] . "</strong><br><br>QuoteMedia Code: <strong>" . $ActCodeArray[1] . "</strong><br><br>If you have any questions, please let us know.<br><br>We appreciate your business, and hope that Investment Account Manager helps you to better manage your portfolios.<br><br>QUANT IX SOFTWARE, Inc.<br><br>";
    // Support Renewal
    if (in_array(14, $array_pid)) echo "Thank you for renewing your Investment Account Manager Support Policy.<br><br>After starting IAM, please select the Help Menu | Product Support and enter the following renewal code:<br><br>Tech Support Activation Code: <strong>" . $ActCodeArray[2] . "</strong><br><br>If you have any questions, please let us know.<br><br>We appreciate your business, and hope that Investment Account Manager helps you to better manage your portfolios.<br><br>QUANT IX SOFTWARE, Inc.<br><br>";
    // Support Renewal with QuoteMedia
    if (in_array(16, $array_pid)) echo "Thank you for renewing your Investment Account Manager Support Policy, along with the QuoteMedia data feed.<br><br>After starting IAM, please select the Help Menu | Product Support and enter the following renewal code:<br><br>Tech Support Activation Code: <strong>" . $ActCodeArray[2] . "</strong><br><br>QuoteMedia Code: <strong>" . $ActCodeArray[3] . "</strong><br><br>If you have any questions, please let us know.<br><br>We appreciate your business, and hope that Investment Account Manager helps you to better manage your portfolios.<br><br>QUANT IX SOFTWARE, Inc.<br><br>";
  } else {
    echo "Sorry, you did not provide a proper User Identification Number so we could not give you your activation code at this time. Please contact customer service to get your code.<br>";
  }
  ?>
</p>

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

 <?php

 /*
  * @hooked WC_Emails::order_details() Shows the order details table.
  * @since 2.5.0
  */
 //do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

 /*
  * @hooked WC_Emails::order_meta() Shows order meta data.
  */
 do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

 /*
  * @hooked WC_Emails::customer_details() Shows customer details
  * @hooked WC_Emails::email_address() Shows email address
  */
 do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

if ( get_post_meta( $order->id, 'IAM_User_ID', true ) != "" ) : ?>
<strong>IAM USER ID:</strong> <?php echo get_post_meta( $order->id, 'IAM_User_ID', true ); ?>
<?php endif;

 /*
  * @hooked WC_Emails::email_footer() Output the email footer
  */
 do_action( 'woocommerce_email_footer', $email );
