<?php
session_start();

$salt = "IAM3RegistrationForm";

include_once "inc/dbconfig.php";

if ($_POST['confirmationCAP'] == "") {
  $posthash = $_POST['ip'] . $salt . $_POST['timestamp'];
  
  if ($_POST[md5('iam2_uid' . $posthash)] != "") {
    if (($_POST[md5('iam2_uid' . $posthash)][0] == "1") && (strlen($_POST[md5('iam2_uid' . $posthash)]) >= "10")) {

      if (strpos($_POST[md5('iam2_uid' . $posthash)], '_') !== false) {
        $uid_ul = $_POST[md5('iam2_uid' . $posthash)];
        $uid_noul = preg_replace("/[^0-9]/","",$_POST[md5('iam2_uid' . $posthash)]);
      } else {
        $uid_ul = substr_replace($_POST[md5('iam2_uid' . $posthash)], '_', 4, 0);
        $uid_ul = substr_replace($uid_ul, '_', 8, 0);
        $uid_noul = $_POST[md5('iam2_uid' . $posthash)];
      }

      $result = $mysqli->query("SELECT * FROM registration WHERE serial_number = '$uid_ul' OR serial_number = '$uid_noul' ORDER BY serial_number DESC");
    }
  } else {
    if ($_POST[md5('lu_lastname' . $posthash)] != "") $result = $mysqli->query("SELECT * FROM registration WHERE lastname = '".$_POST[md5('lu_lastname' . $posthash)]."' ORDER BY serial_number DESC");
    if ($_POST[md5('lu_email' . $posthash)] != "")$result = $mysqli->query("SELECT * FROM registration WHERE email = '".$_POST[md5('lu_email' . $posthash)]."' ORDER BY serial_number DESC");
    $uid_ul = "";
  }

  if ($result->num_rows > 0) {
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
      'orig_sn' => $uid_ul,
      'feedback' => "Good news! We found information associated with your IAM User ID and put it in the form below. Please double check that the information is correct and up to date. Also, be sure to enter your <strong>New IAM3 User ID</strong> before submitting."
    );

    $feedback_lookup = $lookup['feedback'];
    
    if (!empty($_REQUEST['src'])) {
      header('Content-type: application/json');
      echo json_encode($lookup);
    }
  } else {
    $feedback_lookup = "Sorry, we were not able to find your information in our records. You'll have to enter it manually in the form below.";

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 500 Internal Server Error");
      echo $feedback_lookup;
    }
  }
} else {
  $feedback_lookup = "Sorry, we were not able to find your information in our records. You'll have to enter it manually in the form below.";

  if (!empty($_REQUEST['src'])) {
    header("HTTP/1.0 500 Internal Server Error");
    echo $feedback_lookup;
  }
}

if (empty($_REQUEST['src'])) {
  $_SESSION['feedback_lookup'] = $feedback_lookup;
  header("Location: " . $_POST['referrer']);
}
?>