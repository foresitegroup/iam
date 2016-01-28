<?php
include("../inc/dbconfig.php");

$email_list = (isset($_POST['add_to_list'])) ? "yes" : "no";
$pdate = ($_POST['purch_date'] != "") ? strtotime($_POST['purch_date']) : "";
$sdate = ($_POST['support_renewal_date'] != "") ? strtotime($_POST['support_renewal_date']) : "";

switch ($_GET['a']) {
  case "add":
    $mysqli->query("INSERT INTO registration_pro (
                  email,
                  firstname,
                  lastname,
                  address,
                  city,
                  state,
                  zip,
                  phone,
                  serial_number,
                  purch_date,
                  support_renewal_date,
                  renewal_code,
                  qm_code,
                  email_list
                  ) VALUES(
                  '" . $_POST['email'] . "',
                  '" . $_POST['firstname'] . "',
                  '" . $_POST['lastname'] . "',
                  '" . $_POST['address'] . "',
                  '" . $_POST['city'] . "',
                  '" . $_POST['state'] . "',
                  '" . $_POST['zip'] . "',
                  '" . $_POST['phone'] . "',
                  '" . $_POST['serial_number'] . "',
                  '" . $pdate . "','" . $sdate . "',
                  '" . $_POST['renewal_code'] . "',
                  '" . $_POST['qm_code'] . "',
                  '" . $email_list . "'
                  )");
    break;
  case "edit":
    $mysqli->query("UPDATE registration_pro SET
                  email = '" . $_POST['email'] . "',
                  firstname = '" . $_POST['firstname'] . "',
                  lastname = '" . $_POST['lastname'] . "',
                  address = '" . $_POST['address'] . "',
                  city = '" . $_POST['city'] . "',
                  state = '" . $_POST['state'] . "',
                  zip = '" . $_POST['zip'] . "',
                  phone = '" . $_POST['phone'] . "',
                  serial_number = '" . $_POST['serial_number'] . "',
                  purch_date = '" . $pdate . "',
                  support_renewal_date = '" . $sdate . "',
                  renewal_code = '" . $_POST['renewal_code'] . "',
                  qm_code = '" . $_POST['qm_code'] . "',
                  email_list = '" . $email_list . "'
                  WHERE id = '" . $_POST['id'] . "'");
    break;
  case "delete":
    $mysqli->query("DELETE FROM registration_pro WHERE id = '" . $_GET['id'] . "'");
    break;

  case "deletemany":
    foreach ($_POST['delete'] as $i => $value) {
      $mysqli->query("DELETE FROM registration_pro WHERE id = '" . $_POST['delete'][$i] . "'");
    }
}

$mysqli->close();

header( "Location: registration-pro.php" );
?>