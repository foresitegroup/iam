
<?php
$PageTitle = "QuoteMedia Data Feed with Investment Account Manager";
include "header.php";
?>

<div class="red mb">
  <article>
    <h1>QUOTEMEDIA DATA FEED WITH INVESTMENT ACCOUNT MANAGER</h1>
  </article>
</div>

<article class="how-to">
  QuoteMedia data feed (available for an annual low cost subscription price) provides automatic fundamental analysis data download into Investment Account Manager.<br>
  <br>

  There are two methods to update fundamental data using QuoteMedia within IAM:<br>
  <ul>
    <li>All common stocks within the  Current Asset Library or</li>
    <li>As new common stock is added to IAM.</li>
  </ul>
  <br>

  <strong>All Common Stocks</strong><br>
  Select The Asset Library Menu | Update Data | QuoteMedia Data Feed (if the selection is grayed-out, this indicates the subscription is not been activated).  The table shows the current values stored within IAM prior to download:<br>
  <br>

  <ul>
    <li>date of QM data: the date coinciding to the data files used to update IAM assets. This date will replace the 'last updated' date in the IAM current asset library.  Note: if you uncheck the box <strong>Import market prices to current library</strong>, the 'last updated' date in the current asset library will not be updated to reflect the SSG data file date.<br><br></li>
    <li>symbol: the security symbol.<br><br></li>
    <li>name: the name or description of the asset.<br><br></li>
    <li>market price: the market price of the security for the reported SSG data file date.<br><br></li>
    <li>earnings: the annual earnings per share of the security for the reported SSG data file date.<br><br></li>
    <li>dividends: the annual dividend rate per share of the security.<br><br></li>
    <li>beta: the beta coefficient of the security for the reported SSG data file date.<br><br></li>
    <li>book value per share: most recent reported annual book value per share of the security.<br><br></li>
    <li>cash flow per share: most recent reported annual cash flow per share of  the security.<br><br></li>
    <li>sector: the designation for sector is shown. Note: you can select/deselect the option to overwrite existing sector/industry designation prior to import.  See additional notes below.<br><br></li>
    <li>Size: the designation for size is used, based on revenues. Note: you can select/deselect the option to overwrite existing size designation prior to import.<br><br></li>
    <li>Note: use the <strong>Default Settings</strong> button to restore the asset library table to pre-defined column widths and order.<br><br></li>
    <li>
      Note: for common stock Sector, the following are imported for use in IAM:
      <ul>
        <li>Consumer Discretionary</li>
        <li>Consumer Staples</li>
        <li>Energy</li>
        <li>Financial</li>
        <li>Healthcare</li>
        <li>Industrials</li>
        <li>Information Technology</li>
        <li>Materials</li>
        <li>Telecommunication Services</li>
        <li>Utilities</li>
      </ul>
    </li>
  </ul>
  <br>

  Important Tip: You will notice that the values retrieved may show in red or green font. If so, you can click you mouse on the data cell to see a quick review of the previous value vs. the new value.  This helpful tool lets you review the changing values (ie, dividends, earnings, etc).<br>
  <br>

  Carefully review the data listed in the scroll window prior to using the <strong>Import</strong> button.  Use the <strong>Print</strong> button to generate a pre-audit report of the SSG import file data. Use the <strong>Cancel</strong> button to quit.<br>
  <br>

  You are now ready to review the Fundamental Analysis Tab on your Investment Account Manager Home page:<br>
  <br>

  <img src="images/how-to-quotemedia-data-feed-with-investment-account-manager.jpg" alt="">
</article>

<div class="darkgray whitetext footer bt">
  <article>
    <h2>NEED HELP? TRY OUR <a href="support.php">SUPPORT</a> PAGE</h2>
  </article>
</div>

<?php include "footer.php"; ?>