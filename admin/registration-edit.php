<?php
include "login.php";

$PageTitle = "Edit Registered User";
include "header.php";

$result = $mysqli->query("SELECT * FROM registration WHERE id = '" . $_GET['id'] . "'");
$row = $result->fetch_array(MYSQLI_ASSOC);
?>

<article>
  <form action="registration-db.php?a=edit" method="POST">
    <input type="text" name="firstname" placeholder="First Name" value="<?php echo $row['firstname']; ?>"><br>
    <br>

    <input type="text" name="lastname" placeholder="Last Name" value="<?php echo $row['lastname']; ?>"><br>
    <br>

    <input type="text" name="address" placeholder="Address" value="<?php echo $row['address']; ?>"><br>
    <br>

    <input type="text" name="city" placeholder="City" value="<?php echo $row['city']; ?>"><br>
    <br>

    <input type="text" name="state" placeholder="State" value="<?php echo $row['state']; ?>"><br>
    <br>

    <input type="text" name="zip" placeholder="Zip Code" value="<?php echo $row['zip']; ?>"><br>
    <br>

    <input type="text" name="phone" placeholder="Phone" value="<?php echo $row['phone']; ?>"><br>
    <br>

    <input type="text" name="email" placeholder="Email" value="<?php echo $row['email']; ?>"><br>
    <br>

    <input type="text" name="serial_number" placeholder="Serial Number" style="width: 76%; margin-right: 4%;" value="<?php echo $row['serial_number']; ?>"> <input type="text" name="purch_date" id="startdate" style="width: 11%;" placeholder="Purchase Date" value="<?php if ($row['purch_date'] != "") echo date("m/d/Y", $row['purch_date']); ?>"><br>
    <br>

    <input type="text" name="renewal_code" placeholder="Renewal Code" style="width: 76%; margin-right: 4%;" value="<?php echo $row['renewal_code']; ?>"> <input type="text" name="support_renewal_date" id="enddate" style="width: 11%;" placeholder="Renewal Date" value="<?php if ($row['support_renewal_date'] != "") echo date("m/d/Y", $row['support_renewal_date']); ?>"><br>
    <br>

    <input type="text" name="qm_code" placeholder="QuoteMedia Code" value="<?php echo $row['qm_code']; ?>"><br>
    <br>
    
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="submit" name="submit" value="UPDATE" style="display: block; margin: 0 auto;">
  </form>
<article>

<?php include "footer.php"; ?>