
<?php
$PageTitle = "Maintenance Releases";
include "header.php";
?>

<div class="darkgray whitetext mb">
  <article>
    <h1>MAINTENANCE RELEASES</h1>
  </article>
</div>

<article>
  <strong>Investment Account Manager 3 for Individuals - release 3.0.5b</strong>
  <ul>
    <li>changed QuoteMedia data feed for changes in delivery of data items.</li>
    <li>corrected edit functions in new ledger entry system.</li>
    <li>corrected ^dji index and option pricing due to changes made by Yahoo! Finance.</li>
    <li>corrected historical pricing due to changes made by Yahoo! Finance.</li>
    <li>corrected Security Basis Report to print user preference | report title.</li>
    <li>changed broker access to T. Rowe Price for new required broker credentials.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  Note: with the recent changes by Yahoo! Finance, adjusted prices for benchmark indices are no longer available.  We are working on a solution for providing this month end adjusted price as available for mutual funds and exchange traded funds when used for benchmark performance comparisons.  In the meantime, the month-end closing price will now be stored and used for these benchmark performance comparison purposes.<br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.0.4</strong>
  <ul>
    <li>corrected Microsoft csv file import for missing variable.</li>
    <li>corrected backup feature for change drive location selection.</li>
    <li>corrected historical pricing feature due to changes made by Yahoo! Finance.</li>
    <li>changed broker access to Janney Montgomery Scott for new required broker credentials.</li>
    <li>changed QuoteMedia data feed for changes in delivery of data items.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.0.3</strong>
  <ul>
    <li>corrected Microsoft csv file import for missing variable.</li>
    <li>corrected delete function for Benchmark Indices Returns Tab.</li>
    <li>corrected activity ledger for showing the cancel/save buttons prior to entering new activity.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.0.2</strong>
  <ul>
    <li>added to 'download positions' form ability to hide/show user name and password.</li>
    <li>added user preference to 'recall' use of security symbol when entering activity in the new transactions entry ledger.</li>
    <li>added user preference to 'classic ledger' a check box variable to use trade date = settle date.</li>
    <li>added user preference under the file menu | preferences | home page tab to [ ] show current asset library as part of price updating process.</li>
    <li>corrected functionality for posting return of capital activity as part of broker downloads.</li>
    <li>corrected numeric overflow error in Benchmarks / Portfolio returns feature.</li>
    <li>corrected error in Portfolio Allocation Level 1 as of date report for money market funds.</li>
    <li>corrected error in Portfolio Summary as of date allocation graph for money market funds.</li>
    <li>corrected error on Portfolio Performance Report for partially closed option contracts prior to the exercise/assign of any remaining balance.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.0.1</strong><br>
  <ul>
    <li>added to QuoteMedia Data Feed the ability to auto-populate mutual fund and exchange traded fund composition details for: asset type, sector and size; investment objective; year to date, 1 year, 3 year, 5 year, 10 year performance; turnover and expense ratio.</li>
    <li>added a 'calc balances' check box to new transactions entry ledger.</li>
    <li>added beta variable to the Appraisal Report when including diversification graphing option.</li>
    <li>added 'strike-out' to broker download forms to identify duplicate activity.</li>
    <li>added to Maturity Schedule red font color for negative values.</li>
    <li>added to Fund Diversifications Report new sector category for Real Estate.</li>
    <li>added to income/reinvestment transaction the ability to also deposit any cash-in-lieu for fractional shares not received.</li>
    <li>added future settlement date activity to show on home page | transactions views.</li>
    <li>corrected broker downloads for recent changes implemented by Wells Fargo Advisors.</li>
    <li>corrected broker downloads for recent changes implemented by First Clearing.</li>
    <li>corrected error when importing Quicken qif files.</li>
    <li>corrected error for open sale option activity to show proper MMF deposit offset in new transactions entry ledger.</li>
    <li>corrected All Portfolios tab for grouping issue.</li>
    <li>corrected All Portfolios tab for auto-refresh after broker downloads.</li>
    <li>corrected Appraisal Report for estimated yield percentage and cost on yield percentage.</li>
    <li>corrected Allocation Summary Level 1 tab report to display properly for target allocations.</li>
    <li>corrected running balance totals in activity ledger for open sale/closing buy transactions.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul>
</article>

<div class="gray footer bt">
  <article>
    <h2 class="small">VISIT OUR <a href="video-tutorials.php">TUTORIAL</a> PAGE FOR ADDED SUPPORT</h2>
  </article>
</div>

<?php include "footer.php"; ?>