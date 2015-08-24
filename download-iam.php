
<?php
$PageTitle = "Free Trial Download";
include "header.php";
include "inc/dbconfig.php";

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
  <img src="images/logo-download.png" alt="" style="max-width: 100%;"><br>
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
          $_POST[md5('confirmemail' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
        ) {
      
      $now = time();
      
      $result = $mysqli->query("SELECT * FROM downloads WHERE email = '" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "'");

      if (mysqli_num_rows($result) == 0) {
        $mysqli->query("INSERT INTO downloads (firstname,lastname,email,uptodate,feedback,download_date) VALUES ('" . $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "','" . $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "','" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "','" . $_POST['uptodate'] . "','" . $_POST['feedback'] . "','$now')");
      }

      mysqli_free_result($result);
      ?>
      <div style="text-align: left;">
        <div class="trial-number" style="font-size: 1em; float: none; display: inline-block; margin-bottom: 0;">1</div>
        <a href="software/IAM2_Setup.exe" style="font-weight: bold;">CLICK HERE TO BEGIN THE DOWNLOAD</a><br>
        <br>

        <div class="trial-number" style="font-size: 1em; float: none; display: inline-block; margin-bottom: 0;">2</div>
        When asked to Run or Save the file, choose <strong>Save / Save as</strong>. When prompted where to save the IAM trial download, select a location that will be easy for you to find the file once the download is complete.  Many users simply select their "<strong>Desktop</strong>" for the download location.<br>
        <br>

        <div class="trial-number" style="font-size: 1em; float: none; display: inline-block; margin-bottom: 0;">3</div>
        Once the IAM trial download has been completed, select <strong>Run</strong>. The IAM trial version installation will begin. Please follow the steps for installing the IAM trial version. If you have any questions with the installation, please contact our technical support team at 800-247-6354 or send an email to <a href="mailto:techsupport@quantixsoftware.com">techsupport@quantixsoftware.com</a>.<br>
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