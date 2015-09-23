
<?php
$PageTitle = "Online Support";
include "header.php";

// Settings for randomizing the field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "ForesiteGroupInvestmentAccountManagerOnlineSupportForm";
?>

<div class="blue">
  <article>
    <h1>ONLINE SUPPORT</h1>
  </article>
</div>

<div class="bb mb">
  <article style="margin-bottom: 0; padding: 2.5em 0; text-align: center;">
    The developers of IAM and IAM PRO are pleased to offer detailed and comprehensive online support to our users.<br>
    <br>

    If you are using our 30 day trial version or you are a first year user of IAM and IAM PRO, we will gladly provide technical support to help answer your question. After the first year you must purchase an active technical support agreement. Product support renewals can be found here for <a href="products/product/1-year-technical-support-renewal/">IAM Support Renewal</a> and <a href="/products/product/iam-pro-support-renewal-1-year/">IAM Professional Support Renewal</a>.
  </article>
</div>

<article>
  <?php
  if (isset($_POST['submit']) && $_POST['confirmationCAP'] == "") {
    if (
          $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
          $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
          $_POST[md5('iamversion' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
          $_POST[md5('iamuid' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
          $_POST[md5('question' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
        ) {

      // We're all good, send the email
      $SendTo = "techsupport@investmentaccountmanager.com";
      $Subject = "Online Support Request From IAM Website";
      $From = "From: IAM Online Support Form <onlinesupportform@investmentaccountmanager.com>\r\n";
      $From .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";

      $Message = "Support request from " . $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] . " (" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . ")";

      $Message .= "\n\n";

      $Message .= "IAM or IAM PRO Version Number: " . $_POST[md5('iamversion' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
      $Message .= "IAM or IAM PRO User ID Number: " . $_POST[md5('iamuid' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

      if (!empty($_POST[md5('operatingsystem' . $_POST['ip'] . $salt . $_POST['timestamp'])])) $Message .= "Operating System: " . $_POST[md5('operatingsystem' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

      $Message .= "\nQuestion and/or error condition\n" . $_POST[md5('question' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

      if (!empty($_POST[md5('errorlog' . $_POST['ip'] . $salt . $_POST['timestamp'])])) $Message .= "\nError log\n" . $_POST[md5('errorlog' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

      $Message = stripslashes($Message);

      mail($SendTo, $Subject, $Message, $From);
      // echo "<pre>$Message</pre><br><br>";

      echo "<h3 style=\"text-align: center;\">Your message has been sent!</h3><br>\n<br>\n";
    } else {
      echo "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";
    }
  } else {
  ?>
  <div style="text-align: center; font-size: 140%; font-weight: 300;">
    <h3 style="font-size: 1.5em;">ONLINE HELP DESK SUBMISSION FORM</h3>
    For online support, please fill out the required fields below:
  </div><br>
  <br>

  <script type="text/javascript">
    function checkform (form) {
      if (document.getElementById('name').value == "") { alert('First &amp; Last Name required.'); document.getElementById('name').focus(); return false ; }
      if (document.getElementById('email').value == "") { alert('Email required.'); document.getElementById('email').focus(); return false ; }
      if (document.getElementById('iamversion').value == "") { alert('IAM or IAM PRO Version Number required.'); document.getElementById('iamversion').focus(); return false ; }
      if (document.getElementById('iamuid').value == "") { alert('IAM or IAM PRO User ID Number required.'); document.getElementById('iamuid').focus(); return false ; }
      if (document.getElementById('question').value == "") { alert('Please describe the nature of your question and/or error condition.'); document.getElementById('question').focus(); return false ; }
      return true ;
    }
  </script>

  <form action="online-support.php" method="POST" onSubmit="return checkform(this)" class="download-form">
    <div>
      <div style="font-size: 70%; color: #898989; padding-bottom: 0.3em; text-align: left;">* Required Field</div>

      <label for="name">First &amp; Last Name</label>
      <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="* First &amp; Last Name"><br>
      <br>

      <label for="email">Email</label>
      <input type="text" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="* Email Address"><br>
      <br>

      <label for="iamversion">IAM or IAM PRO Version Number</label>
      <input type="text" name="<?php echo md5("iamversion" . $ip . $salt . $timestamp); ?>" id="iamversion" placeholder="* IAM or IAM PRO Version Number (See top line of program's Homepage)"><br>
      <br>

      <label for="iamuid">IAM or IAM PRO User ID Number</label>
      <input type="text" name="<?php echo md5("iamuid" . $ip . $salt . $timestamp); ?>" id="iamuid" placeholder="* IAM or IAM PRO User ID Number (Help Menu | Product Support)"><br>
      <br>

      <label for="operatingsystem">Operating System</label>
      <input type="text" name="<?php echo md5("operatingsystem" . $ip . $salt . $timestamp); ?>" id="operatingsystem" placeholder="Operating System"><br>
      <br>

      <label for="question">Please describe the nature of your question and/or error condition</label>
      <textarea name="<?php echo md5("question" . $ip . $salt . $timestamp); ?>" id="question" placeholder="* Please describe the nature of your question and/or error condition"></textarea><br>
      <br>

      <label for="errorlog">If you recieved an error log, please include the message</label>
      <textarea name="<?php echo md5("errorlog" . $ip . $salt . $timestamp); ?>" id="errorlog" placeholder="If you recieved an error log, please include the message (Tools | View Error Log)"></textarea><br>
      <br>

      <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

      <input type="hidden" name="ip" value="<?php echo $ip; ?>">
      <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

      <input type="submit" name="submit" value="SUBMIT" style="display: block; margin: 0 auto;">
    </div>
  </form>
  <?php } ?>

  <div class="download-form" style="text-align: center;">
    We diligently attempt to answer questions and resolve issues within 24-48 hours, so long as we can verify your registration and support policy. If you have not heard back from us, please call us at <strong>262-241-3990</strong>, 7:30 am to 4:30 pm CST.
  </div>
</article>

<div class="gray bt footer">
  <article>
    <h2>CHECK OUR <a href="#">TUTORIALS</a> &amp; <a href="#">FAQ</a> SECTION</h2>
  </article>
</div>

<?php include "footer.php"; ?>