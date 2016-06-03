
<?php
$PageTitle = "Current Asset Library";
include "header.php";
?>

<div class="red mb">
  <article>
    <h1>CURRENT ASSET LIBRARY</h1>
  </article>
</div>

<article>
  <strong>Select Asset Library Menu | Current Asset Library</strong><br>
  <br>

  <strong>Current Asset Library:</strong> the Current Asset Library stores the most recently updated data for all of the assets within Investment Account Manager.  Whenever a current market price is updated, or any of the fundamental data is updated, the Current Asset Library is changed. The Current Asset Library shares it's data with all individual portfolios.<br>
  <br>

  This database shares this information globally with portfolios.  It contains the general information about securities held in the various individual portfolios.   It includes the following data items: security name, symbol, type, most recently updated market price, date of update,  price alerts, dividend rate, interest rate, earnings per share, projected p/e, projected earnings per share growth rate, book value per share, cash flow per share, beta, rating, rank, mutual fund objective and characteristics, option characteristics, maturity dates, CUSIP number,.   These various data points can either be downloaded from one of the subscription services, or manually updated.<br>
  <br>

  <img src="images/how-to-current-asset-library1.jpg" alt=""><br>
  <br>

  Columns can be sorted by left double-clicking a column header, or moved by using a single left-click of the mouse and then dragging the column to a new location. The Look For window allows users to search for a specific item in the left-hand column.<br>
  <br>

  The raw data stored within the Current Asset Library is used to provide information for portfolio analysis.  It also used to derive security analysis using techniques made famous by the likes of Benjamin Graham, David Dodd, and Peter Lynch, all which focus on value investing.<br>
  <br>

  <img src="images/how-to-current-asset-library2.jpg" alt="">
</article>

<div class="darkgray whitetext footer bt">
  <article>
    <h2>NEED HELP? TRY OUR <a href="support.php">SUPPORT</a> PAGE</h2>
  </article>
</div>

<?php include "footer.php"; ?>