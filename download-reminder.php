<?php
function SendReminder($database) {
  $link = "https://www.investmentaccountmanager.com/download-iam";

  $cutofftime = time() - 82800;

  include_once("inc/dbconfig.php");

  $result = $mysqli->query("SELECT * FROM $database WHERE reminder_sent = '' AND reminder_date <= '$cutofftime'");

  while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $link .= ($row['ima_version'] == "pro") ? "-pro.php" : ".php";

    $SendTo = $row['email'];
    $Subject = "Investment Account Manager Trial Download";
    $Header = "From: Investment Account Manager <techsupport@investmentaccountmanager.com>\r\n";
    $Message = "Hello.\n\nYou are receiving this email because you recently visited the IAM download page on a mobile device and requested a reminder to download the trial demo when you were at a desktop computer. If you did not make this request, we apologize for the mistake and you can simply ignore this email.\n\nTo download Investment Account Manager, please visit " . $link . " using a desktop computer and fill in the short form. We thank you for your interest.\n\nSincerely,\n\nThe Investment Account Manager Team\n";

    mail($SendTo, $Subject, $Message, $Header);

    $mysqli->query("UPDATE $database SET reminder_sent = 'yes' WHERE id = '" . $row['id'] . "'");
  }
}

SendReminder("download_reminder");
?>