<?php
include("../inc/dbconfig.php");

$sdate = strtotime($_POST['start_date']);
$edate = strtotime($_POST['end_date'] . " 23:59:59");

if (!empty($_POST['start_date']) && !empty($_POST['end_date'])) {
  $query = "SELECT * FROM downloads_pro WHERE download_date >= '$sdate' AND download_date <= '$edate' ORDER BY email ASC";
} elseif (!empty($_POST['start_date']) && empty($_POST['end_date'])) {
  $query = "SELECT * FROM downloads_pro WHERE download_date >= '$sdate' ORDER BY email ASC";
} elseif (empty($_POST['start_date']) && !empty($_POST['end_date'])) {
  $query = "SELECT * FROM downloads_pro WHERE download_date <= '$edate' ORDER BY email ASC";
} else {
  $query = "SELECT * FROM downloads_pro ORDER BY email ASC";
}

$result = $mysqli->query($query);

while($row = $result->fetch_array(MYSQLI_BOTH)) {
  $data .= $row['email'];
  $data .= "\r\n";
}

$result->free();

$filetag = date("Ymd-Hi");

header("Content-Type: text/plain");
header("Content-Disposition: attachment; filename=dl_pro_email_$filetag.txt");
header("Pragma: no-cache");
header("Expires: 0");
print $data;
exit;
?>