
<?php
$PageTitle = "Understanding Investment Account Manager's Asset Libraries";
include "header.php";
?>

<div class="red mb">
  <article>
    <h1>UNDERSTANDING INVESTMENT ACCOUNT MANAGER'S ASSET LIBRARIES</h1>
  </article>
</div>

<article class="how-to">
  Investment Account Manager separates individual portfolio accounts from the shared asset libraries. This design allows efficient and accurate data sharing by storing collective data in a centralized database which then can be used by the individual portfolios as needed.<br>
  <br>

  The two centralized asset libraries are:<br>
  <br>

  <ul>
    <li><strong>Current Asset Library:</strong> the Current Asset Library stores the most recently updated data for all of the assets within Investment Account Manager.  This database shares this information globally with portfolios.  It contains the general information about securities held in the various individual portfolios.   It includes the following data items: security name, symbol, type, most recently updated market price, date of update,  price alerts, dividend rate, interest rate, earnings per share, projected p/e, projected e.p.s growth rate, book value per share, cash flow per share, beta, rating, rank, mutual fund objective and characteristics, option characteristics, maturity dates, CUSIP number,.   These various data points can either be downloaded from one of the subscription services, or manually updated.  These data points are used throughout Investment Account Manager when reporting on portfolios and securities.<br><br></li>
    <li><strong>Historical Prices:</strong> the Historic Asset Library stores the historical security data, separated by date.  This database is a compilation of the date entries you create, each storing pricing and other data for that specific date.  These dates then become available for use on the IAM reports when selecting a time frame for the report.   Reports can be generated '<strong>as of</strong>' a specific historical date and can be created for a '<strong>from-to</strong>' historical period of time.   This essentially allows users to re-create their portfolios as of any moment in time and to accurately track performance.</li>
  </ul>
</article>

<div class="darkgray whitetext footer bt">
  <article>
    <h2>NEED HELP? TRY OUR <a href="support.php">SUPPORT</a> PAGE</h2>
  </article>
</div>

<?php include "footer.php"; ?>