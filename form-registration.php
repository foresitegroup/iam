<?php
session_start();

$salt = "IAM3RegistrationForm";

include_once "inc/dbconfig.php";

if ($_POST['confirmationCAP'] == "") {
  if (
      $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('address' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('city' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('state' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('zip' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('serial_number' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
     )
  {
    $pdate = time();
    
    // Put the underscores in the ID number
    $sn = preg_replace('/[^0-9]/', '', $_POST[md5('serial_number' . $_POST['ip'] . $salt . $_POST['timestamp'])]);
    $sn = substr_replace($sn, '_', 4, 0);
    $sn = substr_replace($sn, '_', -3, 0);

    if (!empty($_REQUEST['id'])) {
      //UPDATE
      $action = "updated";

      $mysqli->query("UPDATE registration SET
                    email = '" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
                    firstname = '" . $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
                    lastname = '" . $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
                    address = '" . $_POST[md5('address' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
                    city = '" . $_POST[md5('city' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
                    state = '" . $_POST[md5('state' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
                    zip = '" . $_POST[md5('zip' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
                    phone = '" . $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
                    serial_number = '" . $sn . "',
                    purch_date = '" . $pdate . "'
                    WHERE id = '" . $_POST['id'] . "'");
    } else {
      // ADD
      $action = "added";

      $mysqli->query("INSERT INTO registration (
                    email,
                    firstname,
                    lastname,
                    address,
                    city,
                    state,
                    zip,
                    phone,
                    serial_number,
                    purch_date
                    ) VALUES(
                    '" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
                    '" . $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
                    '" . $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
                    '" . $_POST[md5('address' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
                    '" . $_POST[md5('city' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
                    '" . $_POST[md5('state' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
                    '" . $_POST[md5('zip' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
                    '" . $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
                    '" . $sn . "',
                    '" . $pdate . "'
                    )");
    }
    
    $feedback = "<strong>Your information has been $action! Thank you for registering IAM3.</strong>";

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 200 OK");
      echo $feedback;
    }
  } else {
    $feedback = "<strong>Some required information is missing! Please go back and make sure all fields are filled.</strong>";

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 500 Internal Server Error");
      echo $feedback;
    }
  }
}

if (empty($_REQUEST['src'])) {
  $_SESSION['feedback'] = $feedback;
  header("Location: " . $_POST['referrer'] . "#form-registration");
}
?>