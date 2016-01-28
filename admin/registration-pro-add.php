<?php
include "login.php";

$PageTitle = "Add Registered PRO User";
include "header.php";
?>

<article>
  <form action="registration-pro-db.php?a=add" method="POST">
    <input type="text" name="firstname" placeholder="First Name"><br>
    <br>

    <input type="text" name="lastname" placeholder="Last Name"><br>
    <br>

    <input type="text" name="address" placeholder="Address"><br>
    <br>

    <input type="text" name="city" placeholder="City"><br>
    <br>

    <input type="text" name="state" placeholder="State"><br>
    <br>

    <input type="text" name="zip" placeholder="Zip Code"><br>
    <br>

    <input type="text" name="phone" placeholder="Phone"><br>
    <br>

    <input type="text" name="email" placeholder="Email"><br>
    <br>

    <input type="text" name="serial_number" placeholder="Serial Number" style="width: 76%; margin-right: 4%;"> <input type="text" name="purch_date" id="startdate" style="width: 11%;" placeholder="Purchase Date"><br>
    <br>

    <input type="text" name="renewal_code" placeholder="Renewal Code" style="width: 76%; margin-right: 4%;"> <input type="text" name="support_renewal_date" id="enddate" style="width: 11%;" placeholder="Renewal Date"><br>
    <br>

    <input type="text" name="qm_code" placeholder="QuoteMedia Code"><br>
    <br>

    <input type="submit" name="submit" value="ADD" style="display: block; margin: 0 auto;">
  </form>
<article>

<?php include "footer.php"; ?>