<?php
$PageTitle = "";
include "header.php";
?>

<div class="cycle-slideshow" data-cycle-slides="> div" data-cycle-timeout="8000">
  <div>
    <div>
      <div>
        <h1>The Software Solution for Investing</h1>
        Since 1985, Investment Account Manager offers the tools you need to provide centralized potfolio management for stocks, bonds, mutual funds, exchange traded funds, options, cash and more. Start a <a href="free-trial.php">free trial</a> today!
      </div>
    </div>
  </div>
  <div>
    <div>
      <div>
        <img src="images/banner-softpedia.png" alt="SOFTPEDIA 100% CLEAN"><br>
        NO SPYWARE. NO ADWARE. NO VIRUSES.
        <div style="font-size: 75%; margin: 0.7em 0 0; width: 100%;">Certified by www.softpedia.com</div>

        <span id="slide-aaii">
          <img src="images/banner-aaii.png" alt="AAII">
          <span style="float: left; line-height: 1.35em;">
            <i class="fa fa-check-square-o"></i> Perfect Score Performance<br>
            <i class="fa fa-check-square-o"></i> Perfect Score Documentation<br>
            <i class="fa fa-check-square-o"></i> Perfect Score Ease of Use
          </span>
          <div style="clear: both;"></div>
        </span>

        <img src="images/banner-amazon.png" alt="Amazon.com" id="slide-amazon">
        <span id="slide-amazon-stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </span>
      </div>
    </div>
  </div>
  <div>
    <div>
      <div>
        <h1>Recommended By Our Clients</h1>
        "The is the best portfolio management program. I have used it for 30+ years of investing. I would recommend IAM to anyone with a portfolio of any size."<br>
        <br>
        - Ken D.<br>
        <br>
        <a href="testimonials.php">Read more testimonials</a>
      </div>
    </div>
  </div>

  <?php
  // Settings for randomizing the field names
  $ip = $_SERVER['REMOTE_ADDR'];
  $timestamp = time();
  $salt = "ForesiteGroupInvestmentAccountManagerDownloadForm";
  ?>
  <span id="banner-form">
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
    <form action="download-iam.php" method="POST" onSubmit="return checkform(this)" class="vert-center">
      <div>
        <h1>FREE TRIAL!</h1>
        <span>Simply fill out the form below and start your 30 day free trial today</span><br>
        <br>

        <div style="font-size: 80%; color: #ED243B; padding-bottom: 0.3em; width: auto;">* Required</div>

        <label for="firstname">First Name</label>
        <input type="text" name="<?php echo md5("firstname" . $ip . $salt . $timestamp); ?>" id="firstname" placeholder="* FIRST NAME"><br>
        <br>

        <label for="lastname">Last Name</label>
        <input type="text" name="<?php echo md5("lastname" . $ip . $salt . $timestamp); ?>" id="lastname" placeholder="* LAST NAME"><br>
        <br>

        <label for="email">Email</label>
        <input type="text" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="* EMAIL"><br>
        <br>

        <label for="confirmemail">Confirm Email</label>
        <input type="text" name="<?php echo md5("confirmemail" . $ip . $salt . $timestamp); ?>" id="confirmemail" placeholder="* CONFIRM EMAIL"><br>
        <br>

        <!-- <input type="checkbox" name="tou" id="tou" value="I agree to Terms of Use">
        <label for="tou"><span></span>I agree to <a href="#">Terms of Use</a></label><br>
        <br> -->

        <input type="hidden" name="uptodate" id="uptodate" value="Keep me up to date with IAM news, software updates, special offers and more.">

        <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

        <input type="hidden" name="ip" value="<?php echo $ip; ?>">
        <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

        <input type="submit" name="submit" value="DOWNLOAD NOW">
      </div>
    </form>
  </span>
</div>

<article>
  <div class="three-col feature1">
    <h2>UNIFIED ACCOUNT MANAGEMENT</h2>
    Safe. Centralized. Secure. With a large array of tools, IAM provides a centralized portfolio platform for stocks, exchange traded funds, options, bonds, mutual funds, cash &amp; more.
  </div>

  <div class="three-col feature2">
    <h2>CONTROL YOUR FUTURE</h2>
    Organize. Implement. Review. Succeed. Comprehensive portfolio management to improve investing results.
  </div>

  <div class="three-col feature3">
    <h2>30+ YEARS OF SATISFIED USERS</h2>
    With 30+ years of satisfied users, we continue to provide essential tools to thousands of independent investors with Investment Account Manager &amp; Investment Account Manager Pro.
  </div>

  <div style="clear: both;"></div>
</article>

<div id="discover">
  <article class="vert-center">
    <span style="color: #ED243B;">IAM</span>, YOUR TRUSTED PARTNER IN SECURING YOUR FINANCIAL FUTURE.<br>

    <a href="why-iam.php" class="redbutton">DISCOVER MORE</a>
  </article>
</div>

<div id="products">
  <article>
    <div class="three-col">
      <h2>INDIVIDUAL</h2>

      <div>INVESTMENT ACCOUNT MANAGER</div>

      Manage Single or Multiple Portfolios<br>
      <br>
      Accurately Track Security Cost Basis<br>
      <br>
      Comprehensive Reporting and Graphing Tools<br>
      <br>
      Asset Allocation and Rebalancing<br>
      <br>
      Rebalance Portfolio Targets Showing Absolute and Relative Divergence<br>
      <br>
      Benchmark Comparisons:<br>
      Monthly, Quarterly, Annually<br>
      <br>
      Utilize Fundamental Ratio Analysis Tools<br>
      <br>
      Ability to Download Investment Activity from Popular Financial Institutions<br>
      <br>
      <br>
      <br>

      <a href="download-iam.php" class="redbutton">TRY NOW</a>
    </div>

    <div class="three-col">
      <h2 class="bluetext">PROFESSIONAL</h2>

      <div>INVESTMENT ACCOUNT MANAGER <span class="bluetext">PRO</span></div>

      All Individual Features<br>
      <br>
      QuoteMedia Fundamental Data Feed<br>
      <br>
      Custom Model Portfolio<br>Objectives and Allocations<br>
      <br>
      Target Allocations on Individual Asset Level within Portfolio Models<br>
      <br>
      Ability to Auto-Create Client Portfolios<br>to Model Allocations<br>
      <br>
      Blended Benchmark Portfolios by Percentages<br>
      <br>
      Import Client Custodial Files<br>
      <br>
      Professional, Client Ready, Customizable Batch Reporting for Efficiency<br>
      <br>
      Reporting: Client Billing, Contributions/Withdrawls, Executive Summary, Asset Level Allocations and more....<br>
      <br>
      <br>

      <a href="download-iam-pro.php" class="redbutton">TRY NOW</a>
    </div>

    <div class="three-col">
      <h2>SUPPORT</h2>

      <div>COMPREHENSIVE SUPPORT</div>

      Investment Account Manager provides award-winning, free technical support to answer any questions while using the 30 day trial version, as well as one year of free unlimited technical support with IAM software activation.<br>
      <br>
      <strong style="color: #111111;">
        <a href="online-support.php">SUPPORT</a><br>
        <br>
        <a href="forum">COMMUNITY FORUM</a><br>
        <br>
        <a href="#">SOFTWARE MANUAL</a><br>
        <br>
        <a href="learn.php">HOW-TO'S, TIPS &amp; TUTORIALS</a><br>
        <br>
        <a href="faq.php">FREQUENTLY ASKED QUESTIONS</a>
      </strong>
    </div>

    <div style="clear: both;"></div>
  </article>
</div>

<article id="partners">
  <img src="images/partner-scottrade.png" alt="ScotTrade">
  <img src="images/partner-quotemedia.png" alt="QuoteMedia">
  <img src="images/partner-manifest.png" alt="ManifestInvesting">
  <img src="images/partner-invested.png" alt="InvestEd">
  <img src="images/partner-aaii.png" alt="AAII">
</article>

<?php include "footer.php"; ?>