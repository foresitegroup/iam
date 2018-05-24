<?php
function SendReminder($database) {
  $link = "https://www.investmentaccountmanager.com/download-iam";

  $cutofftime = time() - 82800;

  include_once("inc/dbconfig.php");

  $result = $mysqli->query("SELECT * FROM $database WHERE reminder_sent = '' AND reminder_date <= '$cutofftime'");

  while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $link .= ($row['iam_version'] == "pro") ? "-pro.php" : ".php";

    $SendTo = $row['email'];
    $Subject = "Investment Account Manager Trial Download";
    $Header = "From: Investment Account Manager <techsupport@investmentaccountmanager.com>\r\n";
    $Message = "Hello.\n\nThank you for your interest in the Investment Account Manager 3 Individual investment software program. You are receiving this email because you recently visited our web site download page on a mobile device and requested a reminder to download the trial demo when you were at a desktop computer. If you did not make this request, we apologize for the mistake and you can simply ignore this email.\n\nTo download the free 90 day demo version of Investment Account Manager 3, please visit " . $link . " using a desktop computer. No credit card is required. During the free 90 day demo period, we offer free unlimited support to answer any questions you may have.  You'll also receive weekly email tips on learning IAM3 Individual during the free 90 day demo period. If we can answer any questions, please contact us.\n\nWe thank you for your interest.\n\nSincerely,\n\nQUANT IX SOFTWARE, Inc.\nProviding Investment Software Solutions to Investors Since 1985\nwww.investmentaccountmanager.com\n";

    mail($SendTo, $Subject, $Message, $Header);

    $mysqli->query("UPDATE $database SET reminder_sent = 'yes' WHERE id = '" . $row['id'] . "'");
  }
}

SendReminder("download_reminder");
?>