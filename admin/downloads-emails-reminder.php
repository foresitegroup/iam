<?php
function SendReminder($database) {
  $cutofftime = time() - 82800;

  include_once("../inc/dbconfig.php");

  $result = $mysqli->query("SELECT * FROM $database WHERE reminder_sent = '' AND download_date <= '$cutofftime'");

  while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $SendTo = $row['email'];
    $Subject = "Investment Account Manager v3 Trial";
    $From = "From: Peter Willms <peterwillms@investmentaccountmanager.com>\r\n";
    $Message = "\nHi,\n\nMy name is Peter Willms, one of the founders of QUANT IX SOFTWARE, the developer of Investment Account Manager.\n\nI would like to personally thank you for taking the time to download our trial version, and encourage you to utilize IAM over the next 30 days. If during this trial period you have any questions, please feel free to email me directly, or to use our toll free line (800-247-6354) to get help. Our website also provides many "How To" topics: (https://www.investmentaccountmanager.com/how-to.php), as well as video tutorials to help you learn Investment Account Manager (https://www.investmentaccountmanager.com/video-tutorials.php).\n\nWe also offer Go-To-Meeting sessions for your convenience. Our team is keenly knowledgeable about IAM, and we hope to help you see why so many of our existing customers have come to rely on Investment Account Manager for their portfolio management needs. So, if you get stuck along the way, please don't hesitate to contact us.  We are here to help.\n\nThank you again for your consideration.\n\nSincerely,\n\nPeter Willms\n";

    mail($SendTo, $Subject, $Message, $From);

    $mysqli->query("UPDATE $database SET reminder_sent = 'yes' WHERE id = '" . $row['id'] . "'");
  }
}

SendReminder("downloads");
// SendReminder("downloads_pro");
?>