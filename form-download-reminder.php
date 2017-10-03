<?php
session_start();

$salt = "ForesiteGroupInvestmentAccountManagerDownloadForm";

include_once "inc/dbconfig.php";

if ($_POST['confirmationCAP'] == "") {
  if (
      $_POST[md5('reminder-email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
     )
  {
    $now = time();

    $mysqli->query("INSERT INTO download_reminder (email,iam_version,reminder_date) VALUES ('".$_POST[md5('reminder-email' . $_POST['ip'] . $salt . $_POST['timestamp'])]."','".$_POST['iam_version']."','$now')");
    
    $feedback = "Thank you for your interest in Investment Account Manager. You will receive your reminder email in about 24 hours.";
    
    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 200 OK");
      echo $feedback;
    }
  } else {
    $feedback = "Some required information is missing! Please go back and make sure all required fields are filled.";

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 500 Internal Server Error");
      echo $feedback;
    }
  }
}

if (empty($_REQUEST['src'])) {
  $_SESSION['feedback'] = $feedback;
  header("Location: " . $_POST['referrer'] . "#download-reminder");
}
?>