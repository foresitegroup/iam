<?php
include("../inc/dbconfig.php");

$result = $mysqli->query("SELECT email,firstname,lastname,address,city,state,zip,phone,serial_number,FROM_UNIXTIME(purch_date,'%c/%d/%Y'),FROM_UNIXTIME(support_renewal_date,'%c/%d/%Y'),renewal_code,qm_code FROM registration_pro ORDER BY lastname ASC");
$csv_output .= "Email,First Name,Last Name,Address,City,State,Zip Code,Phone Number,Serial Number,Purchase Date,Support Renewal Date,Renewal Code,QuoteMedia Code";

while($row = $result->fetch_array(MYSQLI_NUM)) {
	$line = '';
	foreach($row as $value) {
		if ((!isset($value)) OR ($value == "") OR ($value == "12/31/1969")) {
			$value = ",";
		} else {
			$value = str_replace('"', '""', $value);
      $value = str_replace("\n", " ", $value);
			$value = '"' . $value . '"' . ",";
		}
		$line .= $value;
	}
  $data .= rtrim($line, ",") . "\n";
}
$data = str_replace("\r","",$data);

$filetag = date("Ymd-Hi");

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=pro-$filetag.csv");
header("Pragma: no-cache");
header("Expires: 0");
print $csv_output."\n".$data;

$result->free();

exit;
?>