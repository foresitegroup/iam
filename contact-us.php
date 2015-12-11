
<?php
$PageTitle = "Contact Us";
include "header.php";

// Settings for randomizing the field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "ForesiteGroupInvestmentAccountManagerContactForm";
?>

<div class="lightblue">
  <article>
    <h1>CONTACT US</h1>
  </article>
</div>

<div class="contact-phone bb mb">
  <article>
    <div class="two-col">
      <strong>SALES:</strong> 800-247-6354
    </div>

    <div class="two-col">
      <strong>SUPPORT:</strong> 262-241-3990
    </div>

    <div style="clear: both;"></div>
  </article>
</div>

<article>
  <?php
  if (isset($_POST['submit']) && $_POST['confirmationCAP'] == "") {
    if (
          $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
          $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
          $_POST[md5('confirmemail' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
          $_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
        ) {
      
      // We're all good, send the email
      $SendTo = "techsupport@investmentaccountmanager.com";
      $Subject = "Contact From IAM Website";
      $From = "From: IAM Contact Form <contactform@investmentaccountmanager.com>\r\n";
      $From .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";
      
      $Message = "Message from " . $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] . " (" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . ")";

      $Message .= "\n\n";
      
      if (!empty($_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])])) $Message .= $_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
      
      $Message = stripslashes($Message);
      
      mail($SendTo, $Subject, $Message, $From);
      //echo "<pre>$Message</pre><br><br>";
      
      echo "<strong>Your message has been sent!</strong><br>\n<br>\nThank you for your interest in Investment Account Manager.  You will be contacted shortly.<br><br>";
    } else {
      echo "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong><br><br>";
    }
  } else {
  ?>
  <script type="text/javascript">
    function checkform (form) {
      if (document.getElementById('name').value == "") { alert('First &amp; Last Name required.'); document.getElementById('name').focus(); return false ; }
      if (document.getElementById('email').value == "") { alert('Email required.'); document.getElementById('email').focus(); return false ; }
      if (document.getElementById('confirmemail').value == "") { alert('Confirm Email required.'); document.getElementById('confirmemail').focus(); return false ; }
      if (document.getElementById('email').value != document.getElementById('confirmemail').value) {
        alert('The Email addresses provided do not match.  Please re-enter to confirm email.');
        document.getElementById('email').focus(); return false;
      }
      if (document.getElementById('comment').value == "") { alert('Comment required.'); document.getElementById('comment').focus(); return false ; }
      return true ;
    }
  </script>

  <form action="contact-us.php" method="POST" onSubmit="return checkform(this)" class="download-form">
    <div>
      <div style="font-size: 70%; color: #898989; padding-bottom: 0.3em; text-align: left;">* Required Field</div>

      <label for="name">First &amp; Last Name</label>
      <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="* First &amp; Last Name"><br>
      <br>

      <label for="email">Email</label>
      <input type="text" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="* Email Address"><br>
      <br>

      <label for="confirmemail">Confirm Email</label>
      <input type="text" name="<?php echo md5("confirmemail" . $ip . $salt . $timestamp); ?>" id="confirmemail" placeholder="* Confirm Email"><br>
      <br>

      <label for="comment">Comment</label>
      <textarea name="<?php echo md5("comment" . $ip . $salt . $timestamp); ?>" id="comment" placeholder="* Comment"></textarea><br>
      <br>

      <input type="checkbox" name="uptodate" id="uptodate" value="Keep me up to date with IAM news, software updates, special offers and more.">
      <label for="uptodate" style="text-align: left;"><span></span>Keep me up to date with IAM news, software updates, special offers and more.</label><br>
      <br>

      <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>
        
      <input type="hidden" name="ip" value="<?php echo $ip; ?>">
      <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

      <input type="submit" name="submit" value="SEND" style="display: block; margin: 0 auto;">
    </div>
  </form>
  <?php } ?>

  <div style="text-align: center;">
    <strong>QUANT IX SOFTWARE, Inc.</strong><br>
    11518 N. Port Washington Road, Suite 102<br>
    Mequon, Wisconsin 53092
  </div>
</article>

<div class="gray bt footer">
  <article>
    <h2>NEED HELP? TRY OUR <a href="#">SUPPORT</a> PAGE</h2>
  </article>
</div>

<?php include "footer.php"; ?>