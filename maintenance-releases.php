
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
  <strong>Investment Account Manager 3 for Individuals - release 3.1.3</strong>
  <ul>
  <li>resolved market pricing issues due to changes implemented by QuoteMedia on July 31st, 2018.</li>
  <li>corrected error in fund investment objectives report and fund performance comparison report if only a single investment objective was selected.</li>
  <li>corrected estimated income report/tab display to list estimated income for cash/money market funds.</li>
  <li>corrected combined appraisal report for missing %gain/loss, page two, first security detail line.</li>
  <li>corrected transactions activity ledger, security drop down list, to not show cash/money market funds that have no current balance, if preference is set to 'open only'.</li>
  <li>corrected money market offset issues when using multiple 'closing' transactions for multiple open option positions.</li>
  <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.1.2</strong>
  <ul>
    <li>modified broker download for Wells Fargo Advisors and Ameriprise Financial Services to accept new required Client User Identification number.</li>
    <li>corrected Portfolio Transfers Report to list all transfers within user defined date ranges.</li>
    <li>corrected formatting issues with the Appraisal Report.</li>
    <li>corrected error in historical price downloads for invalid dates.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.1.1</strong>
  <ul>
    <li>added more timely prior day mutual fund pricing from QuoteMedia data subscription.</li>
    <li>added price alerts function to QuoteMedia price updating.</li>
    <li>modified broker download for recent changes at Edward Jones.</li>
    <li>modified broker download for recent changes at TIAA-CREF Retirement Services.</li>
    <li>corrected issue with 'closing buys' in transaction activity ledger.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.1.0</strong>
  <ul>
    <li>added to the Asset Library Menu | Update Data | Market Prices from Internet | Pricing Source | the ability to use QuoteMedia (if currently subscribed to this optional data source).  The pricing source selected here will be used as the default for the IAM3 Home Page | Tool Bar Menu | Update Prices choice.</li>
    <li>added prior day mutual fund pricing to QuoteMedia data subscription.</li>
    <li>added Canadian pricing to QuoteMedia data subscription.</li>
    <li>corrected additional issues for using free market pricing from Yahoo! Finance, while still available.</li>
    <li>corrected market pricing for symbols that include a [space].</li>
    <li>corrected an error in Benchmarks Menu | Portfolio Performance Returns.</li>
    <li>corrected user preference for including market pricing as part of home page | refresh command.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.0.9</strong>
  <ul>
    <li>added functionality to use Google Finance for market pricing.</li>
    <li>corrected additional program errors/error logs as reported by users</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.0.8</strong>
  <ul>
    <li>added new Help Menu choice 'Learn ... Tutorials'.</li>
    <li>changed broker download access for recent changes implemented by Charles Schwab.</li>
    <li>corrected ^dji index and option pricing due to changes made by Yahoo! Finance.</li>
    <li>corrected error in Portfolio Performance Comparison Report/Graph when selecting 'by quarterly' periods.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.0.7</strong>
  <ul>
    <li>based on user requests, added to Portfolio Performance Report the ability to derive returns for 'Current Only' held securities as available in the prior IAMv2.</li>
    <li>based on user requests, added to Portfolio Reports | Additional Reports the Common Stock Allocation by Sector Report as available in the prior IAMv2.</li>
    <li>changed user preference for settlement date to use 'trade date + 2' for transaction offset activity for recent SEC amendment to shorten by one business day the standard settlement cycle for most broker-dealer securities transactions, effective September 5, 2017.  Previously, the standard settlement cycle for these transactions was three business days, known as T+3.  The amended rule shortens the settlement cycle to two business days, T+2.</li>
    <li>changed QuoteMedia Data Feed for changes in delivery method of data items.</li>
    <li>changed asset type label Corporate Bonds to 'Taxable Bonds'.</li>
    <li>changed Fees and Expenses report to list as 'Tax Withheld' in column header.</li>
    <li>changed File Menu | Preferences | Home Page to allow selection of a user defined benchmark index for Home Page | Portfolio Summary Tab performance comparison.</li>
    <li>corrected ^dji index and option pricing due to changes made by Yahoo! Finance.</li>
    <li>corrected error in form when entering exercised put with short sale.</li>
    <li>corrected error in Portfolio Performance Comparison Report to reflect deleted and re-derived returns.</li>
    <li>corrected current asset library to properly display exchange traded fund objectives.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.0.6</strong>
  <ul>
    <li>changed QuoteMedia data feed for changes in delivery of data items.</li>
    <li>corrected additional historical pricing issues due to changes made by Yahoo! Finance.</li>
    <li>corrected Income Received Report for report title issue.</li>
    <li>corrected broker import for duplicate money market offsets popup note message.</li>
    <li>corrected benchmark performance table for manual entry/deriving monthly returns.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

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