<?php
session_start();
$PageTitle = "IAM3 Registration";
include "header.php";
?>

<div class="red mb">
  <article>
    <h1>IAM3 REGISTRATION</h1>
  </article>
</div>

<article>
  <script type="text/javascript" src="inc/jquery.mask.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $.jMaskGlobals.watchDataMask = true;

      var formLookup = $('#form-lookup');
      var formLookupMessages = $('#form-lookup-messages');

      $(formLookup).submit(function(event) {
        $(form).find('input:text, textarea').val('');
        $('#email').val(''); // Grrr!
        $('#confirm_email').val('');
        $('#form-lookup-messages').html('');

        event.preventDefault();

        var formLookupData = $(formLookup).serialize();
        formLookupData += '&src=ajax';

        $.ajax({
          type: 'POST',
          url: $(formLookup).attr('action'),
          data: formLookupData
        })
        .done(function(response) {
          var i;
          for (i in response) {
            $('#' + i).val(response[i]);

            if (i = 'feedback') {
              $('#form-lookup-messages').html(response[i]);
            }
          }

          $('#form-registration-messages').html('');
        })
        .fail(function(data) {
          if (data.responseText !== '') {
            $(formLookupMessages).html(data.responseText);
          } else {
            $(formLookupMessages).text('Oops! An error occured.');
          }

          $('#form-registration-messages').html('');
        });
      });

      var form = $('#form-registration');
      var formMessages = $('#form-registration-messages');

      $(form).submit(function(event) {
        event.preventDefault();
        
        function formValidation() {
          if ($('#firstname').val() === '') { alert('First Name required.'); $('#firstname').focus(); return false; }
          if ($('#lastname').val() === '') { alert('Last Name required.'); $('#lastname').focus(); return false; }
          if ($('#address').val() === '') { alert('Address required.'); $('#address').focus(); return false; }
          if ($('#city').val() === '') { alert('City required.'); $('#city').focus(); return false; }
          if ($('#state').val() === '') { alert('State required.'); $('#state').focus(); return false; }
          if ($('#zip').val() === '') { alert('Zip Code required.'); $('#zip').focus(); return false; }
          if ($('#phone').val() === '') { alert('Phone required.'); $('#phone').focus(); return false; }
          if ($('#email').val() === '') { alert('Email required.'); $('#email').focus(); return false; }
          if ($('#email').val() !== $('#confirm_email').val()) { alert('Email mismatch. Please make sure both emails are correct.'); $('#email').focus(); return false; }
          if ($('#serial_number').val() === '') { alert('New IAM3 User ID required.'); $('#serial_number').focus(); return false; }
          if ($('#serial_number').val() !== $('#confirm_serial_number').val()) { alert('New IAM3 User ID mismatch. Please make sure both IDs are correct.'); $('#serial_number').focus(); return false; }
          if ($('#serial_number').val()[0] !== '2') { alert('New IAM3 User ID must start with 2.'); $('#serial_number').focus(); return false; }
          if ($('#serial_number').val().length !== 12) { alert('Invalid IAM3 User ID. Please re-enter.'); $('#serial_number').focus(); return false; }
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
          .done(function(response) {
            $(formMessages).html(response);

            $(form).find('input:text, textarea').val('');
            $('#email').val(''); // Grrr!
            $('#confirm_email').val('');
            $('#iam2_uid').val('');
            $('#form-lookup-messages').html('');
          })
          .fail(function(data) {
            if (data.responseText !== '') {
              $(formMessages).html(data.responseText);
            } else {
              $(formMessages).text('Oops! An error occured and your message could not be sent.');
            }
          });
        }
      });
    });
  </script>

  <?php
  // Settings for randomizing form field names
  $ip = $_SERVER['REMOTE_ADDR'];
  $timestamp = time();
  $salt = "IAM3RegistrationForm";
  $prehash = $ip . $salt . $timestamp;
  ?>

  <noscript>
  <?php
  $feedback_lookup = (!empty($_SESSION['feedback_lookup'])) ? $_SESSION['feedback_lookup'] : "";
  unset($_SESSION['feedback_lookup']);
  ?>
  </noscript>

  <form action="form-lookup.php" method="POST" id="form-lookup">
    <div>
      If you have previously registered IAM2, enter your <strong>old IAM2 User ID</strong> in the field below. If we are able to find your information, the registration form will be automatically filled with most of the data that we need.<br>
      <br>

      <input type="text" name="<?php echo md5("iam2_uid" . $prehash); ?>" id="iam2_uid" placeholder="Old IAM2 User ID"><br>
      <br>

      <input type="hidden" name="referrer" value="registration.php">
      
      <input type="text" name="confirmationCAP" style="display: none;">
      <input type="hidden" name="ip" value="<?php echo $ip; ?>">
      <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

      <input type="submit" name="submit" value="LOOK UP" style="display: block; margin: 0 auto; outline: none;">
    </div>

    <div id="form-lookup-messages" style="padding: 3em 0;"><?php if (!empty($feedback_lookup)) echo $feedback_lookup; ?></div>
  </form>

  
  <noscript>
  <?php
  $feedback = (!empty($_SESSION['feedback'])) ? $_SESSION['feedback'] : "";
  unset($_SESSION['feedback']);
  ?>
  </noscript>

  <form action="form-registration.php" method="POST" id="form-registration">
    <input type="text" name="<?php echo md5("firstname" . $prehash); ?>" id="firstname" placeholder="First Name" value="<?php if (!empty($feedback_lookup['firstname'])) echo $feedback_lookup['firstname']; ?>"><br>
    <br>

    <input type="text" name="<?php echo md5("lastname" . $prehash); ?>" id="lastname" placeholder="Last Name" value="<?php if (!empty($feedback_lookup['lastname'])) echo $feedback_lookup['lastname']; ?>"><br>
    <br>

    <input type="text" name="<?php echo md5("address" . $prehash); ?>" id="address" placeholder="Address" value="<?php if (!empty($feedback_lookup['address'])) echo $feedback_lookup['address']; ?>"><br>
    <br>

    <input type="text" name="<?php echo md5("city" . $prehash); ?>" id="city" placeholder="City" value="<?php if (!empty($feedback_lookup['city'])) echo $feedback_lookup['city']; ?>"><br>
    <br>

    <input type="text" name="<?php echo md5("state" . $prehash); ?>" id="state" placeholder="State" value="<?php if (!empty($feedback_lookup['state'])) echo $feedback_lookup['state']; ?>"><br>
    <br>

    <input type="text" name="<?php echo md5("zip" . $prehash); ?>" id="zip" placeholder="Zip Code" value="<?php if (!empty($feedback_lookup['zip'])) echo $feedback_lookup['zip']; ?>"><br>
    <br>

    <input type="text" name="<?php echo md5("phone" . $prehash); ?>" id="phone" placeholder="Phone" value="<?php if (!empty($feedback_lookup['phone'])) echo $feedback_lookup['phone']; ?>" data-mask="000-000-0000"><br>
    <br>

    <input type="email" name="<?php echo md5("email" . $prehash); ?>" id="email" placeholder="Email" value="<?php if (!empty($feedback_lookup['email'])) echo $feedback_lookup['email']; ?>"><br>
    <br>

    <input type="email" name="<?php echo md5("confirm_email" . $prehash); ?>" id="confirm_email" placeholder="Confirm Email" value="<?php if (!empty($feedback_lookup['email'])) echo $feedback_lookup['email']; ?>"><br>
    <br>

    <input type="text" name="<?php echo md5("serial_number" . $prehash); ?>" id="serial_number" placeholder="New IAM3 User ID" data-mask="2000_000_000"><br>
    <br>

    <input type="text" name="<?php echo md5("confirm_serial_number" . $prehash); ?>" id="confirm_serial_number" placeholder="Confirm IAM3 User ID" data-mask="2000_000_000"><br>
    <br>

    <input type="hidden" name="id" id="id" value="<?php if (!empty($feedback_lookup['id'])) echo $feedback_lookup['id']; ?>">
    <input type="hidden" name="orig_sn" id="orig_sn" value="<?php if (!empty($feedback_lookup['orig_sn'])) echo $feedback_lookup['orig_sn']; ?>">

    <input type="hidden" name="referrer" value="registration.php">

    <input type="text" name="confirmationCAP" style="display: none;">
    <input type="hidden" name="ip" value="<?php echo $ip; ?>">
    <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

    <input type="submit" name="submit" value="SUBMIT" style="display: block; margin: 0 auto; outline: none;">

    <div id="form-registration-messages" style="padding-top: 3em; text-align: center;"><?php echo $feedback; ?></div>
  </form>
</article>

<div class="darkgray whitetext footer">
  <article>
    <h2>YOUR TRUSTED PARTNER SINCE 1985</h2>
  </article>
</div>

<?php include "footer.php"; ?>