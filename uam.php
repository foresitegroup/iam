<?php
$PageTitle = "UAM";
include "header.php";
include "inc/dbconfig.php";

// Settings for randomizing the field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "ForesiteGroupInvestmentAccountManagerDownloadForm";
?>

<script type="text/javascript">
  $(document).ready(function() {
    $('#uam-dl').click(function(event) {
      event.preventDefault();
      $('#uam-pop').css("display", "block");
    });

    $('#uam-pop-close').click(function(event) {
      event.preventDefault();
      $('#uam-pop').css("display", "none");
    });

    $('#uptodate').click(function(){ $('#toggle-fields').toggle(); });

    var form = $('#uam-form');
    $(form).submit(function(event) {
      event.preventDefault();

      function formValidation() {
        if ($('#uptodate').prop('checked')) {
          if ($('#email').val() === '') { alert('Email required.'); $('#email').focus(); return false ; }
          if ($('#confirmemail').val() === '') { alert('Confirm Email required.'); $('#confirmemail').focus(); return false ; }
          if ($('#email').val() != $('#confirmemail').val()) {
            alert('The Email addresses provided do not match.  Please re-enter to confirm email.');
            $('#email').focus(); return false;
          }
        }
        return true;
      }

      if (formValidation()) {
        var formData = $(form).serialize();
        formData += '&src=ajax';

        $.ajax({
          type: 'POST',
          url: $(form).attr('action'),
          data: formData
        })
        .done(function() {
          $('#uam-pop-form').css("display", "none");
          $('#uam-pop-response').css("display", "block");
        });
      }
    });
  });
</script>

<div class="gray bt mb">
  <article>
    <h1>UNIFIED ACCOUNT MANAGEMENT</h1>
  </article>
</div>

<article>
  <em style="font-size: 90%; display: block; padding: 0 5%;">"After a career as a portfolio manager at a major bank trust department, I found IAM to be a good tool for analyzing portfolios individually and a great tool for aggregating several portfolios in order to see the 'big picture'."</em><br>
  <br>

  Investment Account Manager 3 Individual offers the tools you need to effectively manage all of your investment accounts, individually or in aggregate, in a <strong style="color: #2E65B0;"><em>secure desktop-based software application</em></strong>. IAM3 Individual is a comprehensive tool for multiple portfolio management.<br>
  <br>
  <br>

  <div id="uam-mash">
    <div class="left">
      <div>
        <h4>Unified Account Management</h4>
        Safe. Centralized. Secure.
      </div>

      <img src="images/uam-chart.png" alt="">
    </div>

    <div class="right">
      <h2>Free Trial!</h2>
      <h3>Start your free Investment Account Manager v3 trial now.</h3>

      <strong>No credit card required!</strong><br>
      <br>
      <br>
      
      <?php echo $GLOBALS['demodays']; ?> Day <strong class="redtext"><em>Individual</em></strong> Trial<br>
      <a href="#" id="uam-dl">Download Now</a>
      <span class="redtext">Downloads: <?php echo $mysqli->query("SELECT number FROM downloads_count WHERE product = 'iam'")->fetch_object()->number; ?></span><br>
      <br>
      
      <div style="text-align: left;">
        <img src="images/banner-softpedia.png" alt="SOFTPEDIA 100% CLEAN" style="max-width: 100%; height: auto;"><br>
        NO SPYWARE. NO ADWARE. NO VIRUSES.
        <div style="font-size: 75%;">Certified by www.softpedia.com</div>
      </div>
    </div>
  </div><br>
  <br>

  <!-- <h4 class="uam-mash"><span>More information about Unified Account Management</span> for the Sophisticated Investor.</h4> -->
  <strong>What's in it for you?</strong> We want you to be happy with Investment Account Manager before you buy it, so <em style="color: #ED243B;"><strong>try our 90 day 100% free demo</strong></em>. You will have plenty of time to examine the software with your personal data.  You'll gain exposure to time-tested, multiple portfolio management features, while utilizing important tools to help reduce risk, and increase returns.  And, as you work with Investment Account Manager, you will have access to demonstration portfolios, tutorials and free unlimited support. Truly, a no-risk offer!

  <div id="uam-pop">
    <a href="#" id="uam-pop-close">x</a>
    
    <div id="uam-pop-form">
      <img src="images/logo-download.png" alt=""><br>
      <br>

      <span class="redtext">Downloads: <?php echo $mysqli->query("SELECT number FROM downloads_count WHERE product = 'iam'")->fetch_object()->number; ?></span><br>
      <br>

      <form action="form-uam.php" method="POST" id="uam-form">
        <div>
          <input type="checkbox" name="uptodate" id="uptodate" value="Send me weekly how to instructional videos during the 90 day free demo period." checked>
          <label for="uptodate" style="text-align: left;"><span></span>Provide email to recieve weekly "how to" instructional videos during the 90 day free demo period.</label>
          <br>

          <div id="toggle-fields">
            <label for="email">Email</label>
            <input type="text" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="* Email Address"><br>
            <br>

            <label for="confirmemail">Confirm Email</label>
            <input type="text" name="<?php echo md5("confirmemail" . $ip . $salt . $timestamp); ?>" id="confirmemail" placeholder="* Confirm Email"><br>
            <br>
          </div>

          <input type="text" name="confirmationCAP" style="display: none;">
          <input type="hidden" name="ip" value="<?php echo $ip; ?>">
          <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

          <input type="submit" name="submit" value="DOWNLOAD NOW"><br>
          <br>

          <span style="font-size: 70%; text-decoration: none;">Requirements: <strong>Windows 7</strong> or higher with Internet Access.<br>
          Apple computer requires Windows emulations software.</span>
        </div>
      </form>
    </div>

    <div id="uam-pop-response">
      <div class="trial-number" style="font-size: 1em; float: none; display: inline-block; margin-bottom: 0;">1</div>

      <!-- Google Code for Free Trial Downloads Conversion Page -->
      <script>
        function gtag_report_conversion(url) {
          var callback = function () {
            if (typeof(url) != 'undefined') {
              window.location = url;
            }
          };
          gtag('event', 'conversion', {
              'send_to': 'AW-1027131486/VB5RCKqakYIBEN6Q4-kD',
              'transaction_id': '',
              'event_callback': callback
          });
          return false;
        }
      </script>

      <a href="software/IAM3_Ind_Demo_Setup.exe" onclick="return gtag_report_conversion('software/IAM3_Ind_Demo_Setup.exe')" style="font-weight: bold;">CLICK HERE TO BEGIN THE DOWNLOAD</a><br>
      <br>

      <div class="trial-number" style="font-size: 1em; float: none; display: inline-block; margin-bottom: 0;">2</div>
      When asked to Run or Save the file, choose <strong>Save / Save as</strong>.  When prompted where to save the Investment Account Manager Individual trial version, select a location that will be easy for you to find the file once the download is complete. Many users simply select either their "<strong>Desktop</strong>" or their "<strong>Downloads</strong>" folder for the download location.<br>
      <br>

      <div class="trial-number" style="font-size: 1em; float: none; display: inline-block; margin-bottom: 0;">3</div>
      Once the trial version download has been completed, select "<strong>Run</strong>" when prompted by your browser.  <em>Note:</em> If your browser does not prompt to "<strong>Run</strong>", locate the IAM Individual trial version installation file where it was saved and double click the file name. The trial version installation will begin. Please follow the steps for installing the IAM Individual trial version.<br>
      <br>

      <div class="trial-number" style="font-size: 1em; float: none; display: inline-block; margin-bottom: 0;">4</div>
      If you have any questions with the installation, please contact our technical support team at 800-247-6354 or send an email to <a href="mailto:techsupport@investmentaccountmanager.com">techsupport@investmentaccountmanager.com</a>.
    </div>
  </div>
</article>

<div class="gray footer bt">
  <article>
    <h1>YOUR TRUSTED PARTNER SINCE 1985.</h1>
  </article>
</div>

<?php include "footer.php"; ?>