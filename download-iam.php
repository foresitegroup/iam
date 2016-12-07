
<?php
$PageTitle = "Free Trial Download";
include "header.php";
include "inc/dbconfig.php";

// Settings for randomizing the field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "ForesiteGroupInvestmentAccountManagerDownloadForm";
?>

<div class="gray bt mb">
  <article>
    <h1>FREE TRIAL DOWNLOAD</h1>
  </article>
</div>

<article style="text-align: center; padding-top: 2em;">
  <img src="images/logo-download.png" alt="" style="max-width: 100%;"><br>
  <br>

  Thank you for your interest in the Investment Account Manager - Individual version. Designed by professional money managers and used Worldwide in related forms since 1985, Investment Account Manager provides extensive investment tracking and portfolio management tools for individual investors.<br>
  <br>

  <strong>Note: QuoteMedia&trade; Data Feed included while using the demo of Investment Account Manager Individual version.</strong><br>
  <br>

  <span class="redtext">Downloads: <?php echo $mysqli->query("SELECT number FROM downloads_count WHERE product = 'iam'")->fetch_object()->number; ?></span><br>
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
          $_POST[md5('confirmemail' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
        ) {

      $uptodate = (isset($_POST['uptodate'])) ? $_POST['uptodate'] : "";

      $now = time();
      
      // Make sure address is not already in downloads table
      $result = $mysqli->query("SELECT * FROM downloads WHERE email = '" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "'");
      
      // ...and make sure they are not already registered users
      // $rresult = $mysqli->query("SELECT * FROM registration WHERE firstname = '" . $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "' AND lastname = '" . $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "'");
      $rresult = $mysqli->query("SELECT * FROM registration WHERE email = '" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "'");

      if (mysqli_num_rows($result) == 0 && mysqli_num_rows($rresult) == 0) {
        $mysqli->query("INSERT INTO downloads (firstname,lastname,email,uptodate,download_date) VALUES ('" . $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "','" . $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "','" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "','" . $uptodate . "','$now')");

        $mysqli->query("UPDATE downloads_count SET number = number+1 WHERE product = 'iam'");
      }

      mysqli_free_result($result);
      ?>
      <div style="text-align: left;">
        <div class="trial-number" style="font-size: 1em; float: none; display: inline-block; margin-bottom: 0;">1</div>
        <a href="software/IAM3_Ind_Demo_Setup.exe" style="font-weight: bold;">CLICK HERE TO BEGIN THE DOWNLOAD</a><br>
        <!-- <a href="ftp://testuser+iamregister.com:Sunshine55@juicedhost.com/IAM3_Ind_Demo_Setup.exe" style="font-weight: bold;">CLICK HERE TO BEGIN THE DOWNLOAD</a><br> -->
        <br>

        <div class="trial-number" style="font-size: 1em; float: none; display: inline-block; margin-bottom: 0;">2</div>
        When asked to Run or Save the file, choose <strong>Save / Save as</strong>.  When prompted where to save the Investment Account Manager Individual trial version, select a location that will be easy for you to find the file once the download is complete. Many users simply select either their "<strong>Desktop</strong>" or their "<strong>Downloads</strong>" folder for the download location.<br>
        <br>

        <div class="trial-number" style="font-size: 1em; float: none; display: inline-block; margin-bottom: 0;">3</div>
        Once the trial version download has been completed, select "<strong>Run</strong>" when prompted by your browser.  <em>Note:</em> If your browser does not prompt to "<strong>Run</strong>", locate the IAM Individual trial version installation file where it was saved and double click the file name. The trial version installation will begin. Please follow the steps for installing the IAM Individual trial version. If you have any questions with the installation, please contact our technical support team at 800-247-6354 or send an email to <a href="mailto:techsupport@investmentaccountmanager.com">techsupport@investmentaccountmanager.com</a>.<br>
        <br>
      </div>
      <?php
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
      if (document.getElementById('confirmemail').value == "") { alert('Confirm Email required.'); document.getElementById('confirmemail').focus(); return false ; }
      if (document.getElementById('email').value != document.getElementById('confirmemail').value) {
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

      <input type="checkbox" name="uptodate" id="uptodate" value="Keep me up to date with IAM news, software updates, special offers and more." checked>
      <label for="uptodate" style="text-align: left;"><span></span>Keep me up to date with IAM news, software updates, special offers and more.</label><br>
      <br>

      <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

      <input type="hidden" name="ip" value="<?php echo $ip; ?>">
      <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

      <input type="submit" name="submit" value="DOWNLOAD NOW"><br>
      <br>

      <span style="font-size: 70%; text-decoration: none;">Requirements: <strong>Windows 7</strong> or higher with Internet Access.<br>
      Apple computer requires Windows emulations software.</span>
    </div>
  </form>

  <a href="mailto:?subject=Investment Account Manager Demo&body=%0AHello, I thought you might find this investment software useful.%0A<?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">Refer a Friend</a>
  <?php } ?>
</article>

<div class="gray footer bt">
  <article>
    <h1>YOUR TRUSTED PARTNER SINCE 1985.</h1>
  </article>
</div>

<?php include "footer.php"; ?>