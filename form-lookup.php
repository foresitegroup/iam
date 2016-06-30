<?php
session_start();

$salt = "IAM3RegistrationForm";

include_once "inc/dbconfig.php";

if ($_POST['confirmationCAP'] == "") {
  if (($_POST[md5('iam2_uid' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "") && ($_POST[md5('iam2_uid' . $_POST['ip'] . $salt . $_POST['timestamp'])][0] == "1") && (strlen($_POST[md5('iam2_uid' . $_POST['ip'] . $salt . $_POST['timestamp'])]) >= "10")) {

    if (strpos($_POST[md5('iam2_uid' . $_POST['ip'] . $salt . $_POST['timestamp'])], '_') !== false) {
      $uid_ul = $_POST[md5('iam2_uid' . $_POST['ip'] . $salt . $_POST['timestamp'])];
      $uid_noul = preg_replace("/[^0-9]/","",$_POST[md5('iam2_uid' . $_POST['ip'] . $salt . $_POST['timestamp'])]);
    } else {
      $uid_ul = substr_replace($_POST[md5('iam2_uid' . $_POST['ip'] . $salt . $_POST['timestamp'])], '_', 4, 0);
      $uid_ul = substr_replace($uid_ul, '_', 8, 0);
      $uid_noul = $_POST[md5('iam2_uid' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    }

    $result = $mysqli->query("SELECT * FROM registration WHERE serial_number = '$uid_ul' OR serial_number = '$uid_noul' ORDER BY serial_number DESC");
    $row = $result->fetch_array(MYSQLI_ASSOC);

    $lookup = array(
      'firstname' => $row['firstname'],
      'lastname' => $row['lastname'],
      'address' => $row['address'],
      'city' => $row['city'],
      'state' => $row['state'],
      'zip' => $row['zip'],
      'phone' => $row['phone'],
      'email' => $row['email'],
      'confirm_email' => $row['email'],
      'id' => $row['id'],
      'feedback' => "Good news! We found information associated with your IAM User ID and put it in the form below. Please double check that the information is correct and up to date. Also, be sure to enter your <strong>New IAM3 User ID</strong> before submitting."
    );

    $feedback_lookup = $lookup;
    
    if (!empty($_REQUEST['src'])) {
      header('Content-type: application/json');
      echo json_encode($lookup);
    // } else {
    //   header("HTTP/1.0 200 OK");
    //   echo $feedback;
    }
  } else {
    $feedback_lookup = "Sorry, we were not able to find your information in our records. You'll have to enter it manually in the form below.";

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 500 Internal Server Error");
      echo $feedback_lookup;
    }
  }
}

if (empty($_REQUEST['src'])) {
  $_SESSION['feedback_lookup'] = $feedback_lookup;
  header("Location: " . $_POST['referrer']);
}
?>