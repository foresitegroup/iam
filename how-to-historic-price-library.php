
<?php
$PageTitle = "Historic Price Library";
include "header.php";
?>

<div class="red mb">
  <article>
    <h1>HISTORIC PRICE LIBRARY</h1>
  </article>
</div>

<article class="how-to">
<strong>Select Asset Library Menu | Historical Prices</strong><br>
<br>

<strong>Historical Prices:</strong> the Historic Asset Library stores the historical security data, separated by date.  This database is a compilation of the date entries you create, each storing pricing and other data <em>for that specific date.</em>  These dates then become available for use on the IAM reports when selecting a time frame for the report.   Reports can be generated '<strong>as of</strong>' a specific historical date and can be created for a '<strong>from-to</strong>' historical period of time.   This essentially allows users to re-create their portfolios as of any moment in time and to accurately track performance.<br>
<br>

<img src="images/how-to-historic-price-library.jpg" alt=""><br>
<br>

Columns can be sorted by left double-clicking a column header, or moved by using a single left-click of the mouse and then dragging the column to a new location. The Look For window allows users to search for a specific item in the left-hand column.<br>
<br>

Historical Prices are used for performance measurement as well as for re-creating portfolios as of any moment in time.  For instance, if you want to understand the performance of one of your portfolios for a given year, then security prices as of 12/31/previous_ year_end must be known, as well as the security prices at the end of the year (i.e., 12/31/end_year).  This is because the date range is deriving return for all the changes that occurred <em>within</em> the time frame.<br>
<br>

Historical prices also allow you to go back and review your previous portfolio &mdash; i.e., as of previous date.  IAM will back out all subsequent data and use the historic price file to reproduce your portfolio.<br>
<br>

If securities are added to IAM after a particular date has been created, simply use the update prices button to add that info to the date.
</article>

<div class="darkgray whitetext footer bt">
  <article>
    <h2>NEED HELP? TRY OUR <a href="support.php">SUPPORT</a> PAGE</h2>
  </article>
</div>

<?php include "footer.php"; ?>