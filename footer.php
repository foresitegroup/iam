
    <div id="footer-wrap">
      <footer>
        <img src="<?php echo $TopDir; ?>images/apple-touch-icon.png" alt="" id="footer-logo">
        
        <div>
          <div class="three-col">
            <h2>LATEST POSTS</h2>

            <?php
            // include_once "inc/dbconfig.php";

            // $result = $mysqli->query("SELECT * FROM smf_messages ORDER BY poster_time DESC LIMIT 3");

            // $counter = 0;

            // while($row = $result->fetch_array(MYSQLI_BOTH)) {
            //   echo "
            //   <span class=\"ldate\">" . date("F j, Y", $row['poster_time']) . "</span><br>
            //   <span class=\"ltitle\"><a href=\"" . $TopDir . "forum/index.php?topic=" . $row['id_topic'] . ".msg" . $row['id_msg'] . "#msg" . $row['id_msg'] . "\">" . $row['subject'] . "</a></span>";

            //   if (++$counter < 3) echo "<br><br>\n";
            // }

            // mysqli_free_result($result);
            // $mysqli->close();
            ?>

            <span class="ldate">August 12, 2015</span><br>
            <span class="ltitle"><a href="forum.php">Re: Different Date Formats</a></span><br><br>

            <span class="ldate">August 12, 2015</span><br>
            <span class="ltitle"><a href="forum.php">Different Date Formats</a></span><br><br>

            <span class="ldate">August 4, 2015</span><br>
            <span class="ltitle"><a href="forum.php">IAM 2.9.9.0 Update Now Available</a></span>
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