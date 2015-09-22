
    <div id="footer-wrap">
      <footer>
        <img src="<?php echo $TopDir; ?>images/apple-touch-icon.png" alt="" id="footer-logo">
        
        <div class="three-col">
          <h2>LATEST POSTS</h2>

          <span class="ldate">June 29, 2015</span><br>
          <span class="ltitle">UNDERSTANDING PORTFOLIO ALLOCATION</span><br>
          <br>

          <span class="ldate">June 11, 2015</span><br>
          <span class="ltitle">UNDERSTANDING PORTFOLIO ALLOCATION</span><br>
          <br>

          <span class="ldate">April 11, 2015</span><br>
          <span class="ltitle">WHAT DO YOU LIKE ABOUT IAM?</span>
        </div>

        <div class="three-col">
          <h2>NEWSLETTER</h2>

          Stay up to date on investment news &amp; opportunities.<br>
          <br>

          <form>
            <div>
              <label for="emailaddress">Email Address</label>
              <input type="text" name="<?php echo md5("emailaddress" . $ip . $salt . $timestamp); ?>" id="emailaddress" placeholder="EMAIL ADDRESS"><br>
              <br>

              <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

              <input type="hidden" name="ip" value="<?php echo $ip; ?>">
              <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

              <input type="submit" name="submit" value="SUBMIT">
            </div>
          </form>
        </div>

        <div class="three-col">
          <h2>CONTACT</h2>

          <strong>QUANT IX SOFTWARE</strong><br>
          11518 N. Port Washington Rd, Suite 102<br>
          Mequon, WI 53092<br>
          (262) 241-3990<br>
          <strong><a href="contact-us.php">Send us a message</a></strong><br>
          <br>

          <a href="https://www.facebook.com/investmentaccountmanager" class="social"><i class="fa fa-facebook"></i></a>
          <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="social"><i class="fa fa-wordpress"></i></a>
        </div>

        <div style="clear: both; border-top: 1px solid #295A9D; margin-bottom: 2em;"></div>
        
        <nav id="footermenu">
          <?php include "menu.php"; ?>
        </nav>

        <div id="copyright">&copy; <?php echo date("Y"); ?> QUANT IX SOFTWARE, All rights reserved.</div>
      </footer>
    </div>

  </body>
</html>