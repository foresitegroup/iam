<?php
session_start();

$salt = "IAM3RegistrationForm";

include_once "inc/dbconfig.php";

if ($_POST['confirmationCAP'] == "") {
  $posthash = $_POST['ip'] . $salt . $_POST['timestamp'];

  if (
      $_POST[md5('firstname' . $posthash)] != "" &&
      $_POST[md5('lastname' . $posthash)] != "" &&
      $_POST[md5('address' . $posthash)] != "" &&
      $_POST[md5('city' . $posthash)] != "" &&
      $_POST[md5('state' . $posthash)] != "" &&
      $_POST[md5('zip' . $posthash)] != "" &&
      $_POST[md5('phone' . $posthash)] != "" &&
      $_POST[md5('email' . $posthash)] != "" &&
      $_POST[md5('serial_number' . $posthash)] != ""
     )
  {
    // Make sure serial number is the proper format
    $sn = preg_replace('/[^0-9]/', '', $_POST[md5('serial_number' . $posthash)]);

    if (strlen($sn) == 10 && $sn[0] == "2") {
      // Put the underscores in the ID number
      $sn = substr_replace($sn, '_', 4, 0);
      $sn = substr_replace($sn, '_', -3, 0);

      if (!empty($_REQUEST['id'])) {
        //UPDATE
        $action = "updated";

        $mysqli->query("UPDATE registration SET
                      email = '" . $_POST[md5('email' . $posthash)] . "',
                      firstname = '" . $_POST[md5('firstname' . $posthash)] . "',
                      lastname = '" . $_POST[md5('lastname' . $posthash)] . "',
                      address = '" . $_POST[md5('address' . $posthash)] . "',
                      city = '" . $_POST[md5('city' . $posthash)] . "',
                      state = '" . $_POST[md5('state' . $posthash)] . "',
                      zip = '" . $_POST[md5('zip' . $posthash)] . "',
                      phone = '" . $_POST[md5('phone' . $posthash)] . "',
                      serial_number = '" . $sn . "'
                      WHERE id = '" . $_POST['id'] . "'");
        
        $Subject = "IAM3 Registration Update";
        $SendTo = "techsupport@investmentaccountmanager.com";
        $Headers = "Bcc: mark@foresitegrp.com\r\n";
        $Headers .= "From: Registration Form <registrationform@investmentaccountmanager.com>\r\n";

        $Message = $_POST[md5('firstname' . $posthash)] . " " . $_POST[md5('lastname' . $posthash)] . "\n";
        $Message .= $_POST[md5('address' . $posthash)] . "\n";
        $Message .= $_POST[md5('city' . $posthash)] . ", " . $_POST[md5('state' . $posthash)] . " " . $_POST[md5('zip' . $posthash)] . "\n\n";

        $Message .= $_POST[md5('phone' . $posthash)] . "\n";
        $Message .= $_POST[md5('email' . $posthash)] . "\n\n";

        $Message .= "New IAM User ID: " . $sn . "\n";
        if ($_POST['orig_sn'] != "") $Message .= "Old IAM User ID: " . $_POST['orig_sn'] . "\n";

        $Message = stripslashes($Message);

        mail($SendTo, $Subject, $Message, $Headers);
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
                      serial_number
                      ) VALUES(
                      '" . $_POST[md5('email' . $posthash)] . "',
                      '" . $_POST[md5('firstname' . $posthash)] . "',
                      '" . $_POST[md5('lastname' . $posthash)] . "',
                      '" . $_POST[md5('address' . $posthash)] . "',
                      '" . $_POST[md5('city' . $posthash)] . "',
                      '" . $_POST[md5('state' . $posthash)] . "',
                      '" . $_POST[md5('zip' . $posthash)] . "',
                      '" . $_POST[md5('phone' . $posthash)] . "',
                      '" . $sn . "'
                      )");
      }
      
      $feedback = "Your information has been $action!<br>Thank you for registering IAM3.";

      if (!empty($_REQUEST['src'])) {
        header("HTTP/1.0 200 OK");
        echo $feedback;
      }
    } else {
      $feedback = "Your IAM3 User ID was entered incorrectly.<br>Please retry with correct ID.";

      if (!empty($_REQUEST['src'])) {
        header("HTTP/1.0 500 Internal Server Error");
        echo $feedback;
      }
    }
  } else {
    $feedback = "Some required information is missing!<br>Please go back and make sure all fields are filled.";

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