
<?php
$PageTitle = "Free Trial Download";
include "header.php";

// Settings for randomizing the field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "ForesiteGroupInvestmentAccountManagerDownloadForm";
?>

<div class="gray mb">
  <article style="text-align: center;">
    <h1>FREE TRIAL DOWNLOAD</h1>
  </article>
</div>

<article style="text-align: center; padding-top: 2em;">
  <img src="images/logo-download.png" alt=""><br>
  <br>

  Thank you for your interest in the Investment Account Manager (Individual). Designed by professional money managers and used Worldwide in related forms since 1985, Investment Account Manager (IAM) provides extensive investment tracking and portfolio management tools for investors.<br>
  <br>
  <br>

  <hr>
  <br>
  <br>
  
  <?php
  if (isset($_POST['submit']) && $_POST['confirmationCAP'] == "") {
    if (
          $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
          $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
          $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
          $_POST[md5('emailconfirm' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
        ) {
      // All required fields have been filled, so construct the message
      $SendTo = "lippert@gmail.com";
      $Subject = "IAM Download";
      $From = "From: Download Form <downloadform@investmentaccountmanager.com>\r\n";
      $From .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";
      
      $Message = "Message from " . $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . " " . $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . " (" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . ")";
      $Message .= "\n\n";

      $Message = stripslashes($Message);
      
      //mail($SendTo, $Subject, $Message, $From);
      echo "<pre>$Message</pre><br><br>";
      
      echo "THIS IS WHERE THE THANK YOU MESSAGE SHOULD GO";
    } else {
      echo "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";
    }
  } else {
  ?>
  <script type="text/javascript">
    function checkform (form) {
      if (document.getElementById('firstname').value == "") { alert('First Name required.'); document.getElementById('firstname').focus(); return false ; }
      if (document.getElementById('lastname').value == "") { alert('Last Name required.'); document.getElementById('lastname').focus(); return false ; }
      if (document.getElementById('email').value == "") { alert('Email required.'); document.getElementById('email').focus(); return false ; }
      if (document.getElementById('emailconfirm').value == "") { alert('Confirm Email required.'); document.getElementById('emailconfirm').focus(); return false ; }
      if (document.getElementById('email').value != document.getElementById('emailconfirm').value) {
        alert('The Email addresses provided do not match.  Please re-enter to confirm email.');
        document.getElementById('email').focus(); return false;
      }
      return true ;
    }
  </script>

  <form action="download-iam.php" method="POST" onSubmit="return checkform(this)" class="download-form">
    <div>
      <div style="font-size: 70%; color: #898989; padding-bottom: 0.3em; text-align: left;">* Required Field</div>

      <label for="firstname">First Name</label>
      <input type="text" name="<?php echo md5("firstname" . $ip . $salt . $timestamp); ?>" id="firstname" placeholder="* First Name"><br>
      <br>

      <label for="lastname">Last Name</label>
      <input type="text" name="<?php echo md5("lastname" . $ip . $salt . $timestamp); ?>" id="lastname" placeholder="* Last Name"><br>
      <br>

      <label for="email">Email</label>
      <input type="text" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="* Email Address"><br>
      <br>

      <label for="confirmemail">Confirm Email</label>
      <input type="text" name="<?php echo md5("confirmemail" . $ip . $salt . $timestamp); ?>" id="confirmemail" placeholder="* Confirm Email"><br>
      <br>

      <input type="checkbox" name="uptodate" id="uptodate" value="Keep me up to date with IAM news, software updates, special offers and more.">
      <label for="uptodate" style="text-align: left;"><span></span>Keep me up to date with IAM news, software updates, special offers and more.</label>

      <input type="checkbox" name="feedback" id="feedback" value="Send me invitations to provide feedback about IAM software.">
      <label for="feedback" style="text-align: left;"><span></span>Send me invitations to provide feedback about IAM software.</label><br>
      <br>

      <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>
        
      <input type="hidden" name="ip" value="<?php echo $ip; ?>">
      <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

      <input type="submit" name="submit" value="DOWNLOAD NOW"><br>
      <br>

      <a href="#" style="font-size: 70%; text-decoration: none;">Minimum system requirements</a>
    </div>
  </form>
  <?php } ?>
</article>

<div class="gray">
  <article style="text-align: center;">
    <h2>VISIT OUR <a href="#">TUTORIAL</a> PAGE FOR ADDED SUPPORT</h2>
  </article>
</div>

<?php include "footer.php"; ?>