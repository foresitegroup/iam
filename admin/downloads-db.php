<?php
include_once("../inc/dbconfig.php");

foreach ($_POST['delete'] as $i => $value) {
  $mysqli->query("DELETE FROM downloads WHERE id = '" . $_POST['delete'][$i] . "'");
}

$sort = (isset($_GET['s'])) ? "?" . $_GET['s'] : "";

header( "Location: downloads.php$sort" );
?>