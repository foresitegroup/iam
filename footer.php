
    <div id="footer-wrap">
      <footer>
        <img src="<?php echo $TopDir; ?>images/apple-touch-icon.png" alt="" id="footer-logo">
        
        <div>
          <div class="three-col">
            <h2>LATEST POSTS</h2>

            <?php
            include_once "inc/dbconfig.php";

            $result = $mysqli->query("SELECT * FROM smf_messages ORDER BY poster_time DESC LIMIT 3");

            $counter = 0;

            while($row = $result->fetch_array(MYSQLI_BOTH)) {
              echo "
              <span class=\"ldate\">" . date("F j, Y", $row['poster_time']) . "</span><br>
              <span class=\"ltitle\"><a href=\"" . $TopDir . "forum/index.php?topic=" . $row['id_topic'] . ".msg" . $row['id_msg'] . "#msg" . $row['id_msg'] . "\">" . $row['subject'] . "</a></span>";

              if (++$counter < 3) echo "<br><br>\n";
            }

            mysqli_free_result($result);
            $mysqli->close();
            ?>
          </div>

          <div class="three-col">
            <h2>NEWSLETTER</h2>

            Stay up to date on investment news &amp; opportunities.<br>
            <br>

            <!-- Begin MailChimp Signup Form -->
            <form action="//investmentaccountmanager.us16.list-manage.com/subscribe/post?u=b22e138d7cc44a38df49c7f7b&amp;id=2d370c2917" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div class="mc-field-group">
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b22e138d7cc44a38df49c7f7b_2d370c2917" tabindex="-1" value=""></div>
                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="EMAIL ADDRESS"><br><br>
                <input type="submit" value="SUBMIT" name="subscribe" id="mc-embedded-subscribe">
              </div>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>
            </form>
            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
            <!--End mc_embed_signup-->
          </div>

          <div class="three-col">
            <h2>CONTACT</h2>

            <strong>QUANT IX SOFTWARE</strong><br>
            11518 N. Port Washington Rd, Suite 102<br>
            Mequon, WI 53092<br>
            (262) 241-3990<br>
            <strong><a href="<?php echo $TopDir; ?>contact-us.php">Send us a message</a></strong><br>
            <br>

            <a href="https://www.facebook.com/Investment-Account-Manager-266848243474575/" class="social"><i class="fa fa-facebook"></i></a>
            <!-- <a href="#" class="social"><i class="fa fa-linkedin"></i></a> -->
            <a href="<?php echo $TopDir; ?>products/blog" class="social"><i class="fa fa-wordpress"></i></a>
          </div>

          <div style="clear: both;"></div>
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