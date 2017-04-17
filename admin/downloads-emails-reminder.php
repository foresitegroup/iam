<?php
function SendReminder($database) {
  $cutofftime = time() - 82800;

  include_once("../inc/dbconfig.php");

  $result = $mysqli->query("SELECT * FROM $database WHERE reminder_sent = '' AND download_date <= '$cutofftime'");

  while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $SendTo = $row['email'];
    $Subject = "Investment Account Manager v3 Trial";
    // $Header = "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $Header = "From: Peter Willms <techsupport@investmentaccountmanager.com>\r\n";
    $Message = "\nHi,\n\nMy name is Peter Willms, one of the developers of Investment Account Manager (IAM).\n\nI would like to personally thank you for taking the time to download our Free 90 Day Trial Version.  If during this trial period you have any questions, please feel free to email me directly or call toll free 800-247-6354 for assistance.\n\nWhile you are using the 90 day free trial, we will be sending you informative emails with the goal of helping you to learn and utilize IAM. Be sure to add our email address techsupport@investmentaccountmanager.com to your safe senders list.\n\nOur website also provides many Video Tutorials to help you learn IAM, as well as How To's and FAQs found at http://www.investmentaccountmanager.com/learn.php.\n\nOur team is keenly knowledgeable about IAM, and we're confident as you use the 90 day free trial, you'll learn why our existing customers have come to rely on IAM for their portfolio management needs.  So, if you get stuck along the way, please don't hesitate to contact us.  We are here to help.\n\nThank you again for your consideration.\n\nSincerely,\n\nPeter Willms\n";

    mail($SendTo, $Subject, $Message, $Header);

    $mysqli->query("UPDATE $database SET reminder_sent = 'yes' WHERE id = '" . $row['id'] . "'");
  }
}

SendReminder("downloads");
// SendReminder("downloads_pro");
?>