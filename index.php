
<?php
$PageTitle = "";
include "header.php";
?>

<div class="cycle-slideshow" data-cycle-slides="> div" data-cycle-timeout="8000">
  <div>
    <div>
      <div>
        <h1>The Software Solution for Investing</h1>
        Since 1985, Investment Account Manager 2.0 offers the tools you need to provide centralized potfolio management for stocks, bonds, mutual funds, exchange traded funds, options, cash and more. Start a <a href="free-trial.php">free trial</a> today!
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
        - John Smith, CEO
      </div>
    </div>
  </div>
  
  <?php
  // Settings for randomizing the field names
  $ip = $_SERVER['REMOTE_ADDR'];
  $timestamp = time();
  $salt = "ForesiteGroupInvestmentAccountManagerBannerForm";
  ?>
  <span id="banner-form">
    <form class="vert-center">
      <div>
        <h1>FREE TRIAL!</h1>
        <span>Simply fill out the form below and start your 30 day free trial today</span><br>
        <br>

        <div style="font-size: 80%; color: #ED243B; padding-bottom: 0.3em; width: auto;">* Required</div>

        <label for="fullname">First &amp; Last Name</label>
        <input type="text" name="<?php echo md5("fullname" . $ip . $salt . $timestamp); ?>" id="fullname" placeholder="* FIRST &amp; LAST NAME"><br>
        <br>

        <label for="email">Email</label>
        <input type="text" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="* EMAIL"><br>
        <br>

        <label for="confirmemail">Confirm Email</label>
        <input type="text" name="<?php echo md5("confirmemail" . $ip . $salt . $timestamp); ?>" id="confirmemail" placeholder="* CONFIRM EMAIL"><br>
        <br>

        <input type="checkbox" name="tou" id="tou" value="I agree to Terms of Use">
        <label for="tou"><span></span>I agree to <a href="#">Terms of Use</a></label><br>
        <br>

        <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

        <input type="hidden" name="ip" value="<?php echo $ip; ?>">
        <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

        <input type="submit" name="submit" value="DOWNLOAD NOW, IT'S FREE!">
      </div>
    </form>
  </span>
</div>

<article>
  <div class="three-col feature1">
    <h2>UNIFIED ACCOUNT MANAGEMENT</h2>
    Safe. Centralized. Secure. With a large array of tools, IAM enables a centralized portfilio platform for stocks, exchange traded funds, options, bonds, mutual funds, cash &amp; more.
  </div>

  <div class="three-col feature2">
    <h2>CONTROL YOUR FUTURE</h2>
    Using IAM, the top rated reliable investment account management software in the nation, you will be in control of your financial future.
  </div>

  <div class="three-col feature3">
    <h2>OVER 22,000 SATISFIED USERS</h2>
    With over 22,000 downloads, we continue to provide essential tools to thousands of independent investors with Investment Account Manager &amp; Investment Account Manager Pro.
  </div>

  <div style="clear: both;"></div>
</article>

<div id="discover">
  <article class="vert-center">
    <span style="color: #ED243B;">IAM</span>, YOUR TRUSTED PARTNER IN SECURING YOUR FINANCIAL FUTURE.<br>

    <a href="#" class="redbutton">DISCOVER MORE</a>
  </article>
</div>

<div id="products">
  <article>
    <div class="three-col">
      <h2>INDIVIDUAL</h2>

      <div>INVESTMENT ACCOUNT MANAGER</div>

      Manage Single or Multiple Portfolios<br>
      <br>
      Analyze Asset Allocation &amp; Diversification<br>
      <br>
      Accurately Track Your Security Cost Basis Information<br>
      <br>
      Detailed Reporting<br>
      <br>
      Utilize Fundamental Ratio Analysis Tools<br>
      <br>
      Interact with Other Software Tools<br>
      <br>
      Windows XP, Vista, Windows 7 or Windows 8<br>
      <br>
      <br>
      <br>

      <a href="#" class="redbutton">BUY NOW</a>
    </div>

    <div class="three-col">
      <h2 class="bluetext">PROFESSIONAL</h2>

      <div>INVESTMENT ACCOUNT MANAGER <span class="bluetext">PRO</span></div>

      Unified Multiple Portfolio Management<br>
      <br>
      Collective Asset Allocation/Diversification<br>
      <br>
      Model Portfolio Allocations, Risk Levels &amp; Create Benchmark Comparisons<br>
      <br>
      Rebalance Portfolio Targets Showing Absolute &amp; Relative Divergence From Your Benchmark<br>
      <br>
      Detailed Reporting &amp; Graphing; Monthly, Quarterly, Annually<br>
      <br>
      Professional, Client Ready, Customizable Batch Reporting For Efficiency<br>
      <br>
      <br>

      <a href="#" class="redbutton">BUY NOW</a>
    </div>

    <div class="three-col">
      <h2>SUPPORT</h2>
      
      <div>COMPREHENSIVE SUPPORT 24/7</div>

      The IAM staff is availble to help with any questions, commenets &amp; concerns you may have about your investment software &amp; set-up.<br>
      <br>
      <strong style="color: #111111;">
        SUPPORT<br>
        <br>
        COMMUNITY FORUM<br>
        <br>
        SOFTWARE MANUAL<br>
        <br>
        HOW-TO'S, TIPS &amp; TUTORIALS<br>
        <br>
        FREQUENTLY ASKED QUESTIONS<br>
        <br>
        EMAIL, LIVE CHAT, PHONE
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