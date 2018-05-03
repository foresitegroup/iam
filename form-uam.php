<?php
$salt = "ForesiteGroupInvestmentAccountManagerDownloadForm";

include_once "inc/dbconfig.php";

if ($_POST['confirmationCAP'] == "") {
  if ($_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "") {
    $now = time();
    
    // Make sure address is not already in downloads table
    $result = $mysqli->query("SELECT * FROM downloads WHERE email = '" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "'");

    // ...and make sure they are not already registered users
    $rresult = $mysqli->query("SELECT * FROM registration WHERE email = '" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "'");

    if (mysqli_num_rows($result) == 0 && mysqli_num_rows($rresult) == 0) {
      $mysqli->query("INSERT INTO downloads (email,uptodate,download_date) VALUES ('".$_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])]."','".$_POST['uptodate']."','$now')");

      $mysqli->query("UPDATE downloads_count SET number = number+1 WHERE product = 'iam'");
    }

    mysqli_free_result($result);
  }
}
?>