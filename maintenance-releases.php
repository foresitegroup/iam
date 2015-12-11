
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
  <strong>Investment Account Manager (IAM) release 2.9.9.0</strong><br>
  <ul>
    <li>Changed the IAM portfolio loading process to improve loading speeds.</li>
    <li>Eliminated pop-ups after updating prices in OFX downloads or imports.</li>
    <li>Added a user preference that will let the user set the upper limit for a large IRR calculation.</li>
    <li>Initialized the historic price to 1.00 if the symbol used as an index on the home page is not found for performance reports.</li>
    <li>Initialized the SPC variable to 100 for options in the CSV import.</li>
    <li>Changed the wording for Cash Equivalents to CD/Treasury Bills. Also changed the wording for Money Market Funds to Cash/Money Market Funds in drop down lists of security types.</li>
    <li>Corrected a problem with the home page sometimes showing a duplicate header line or part of one line showing on the next line.</li>
    <li>Corrected a problem with the home page not opening because of blank columns in the valuations grid.</li>
  </ul>
  <br>

  <strong>Investment Account Manager (IAM) release 2.9.8.9</strong><br>
  <ul>
    <li>Changed the performance preferences on the home page to allow the use of an ETF as well as an index.</li>
    <li>Changed the application version for broker downloads.</li>
    <li>Changed the 'Assets Under Management' tab to the 'Total Assets' tab.</li>
    <li>Added the % weight of individual portfolio market values to the Total Assets tab.</li>
    <li>Added additional checking routines to locate duplicates in the OFX file downloaded or imported from a brokerage firm to catch deposits or withdrawals that match MMF offsets.</li>
    <li>Corrected error in portfolio allocation report when there is a MMF withdrawal before a MMF deposit.</li>
  </ul>
  <br>

  <strong>Investment Account Manager (IAM) release 2.9.8.8</strong><br>
  <ul>
    <li>Corrected the Holdings Summary Report so the index needed for the report is created.</li>
    <li>Corrected the Holdings Summary Report to show headings on the first page when the pie chart is shown on the first page.</li>
    <li>Corrected the IRR value for the portfolio when extremely high returns cause the IRR to show negative or an extremely low number when it should be a high positive IRR.</li>
    <li>Corrected the IRR value for the portfolio when the opening transaction is a withdrawal for negative money fund balances, followed by a deposit.</li>
    <li>Corrected Quicken QIF import function to include memo 'Contribution' from Quicken file.</li>
    <li>Changed the button for Home Page | Portfolio Holdings Tab from Print to Show All. Now the button will show just the graph of all the holdings.</li>
    <li>Changed the way that names are converted to "PROPER" case so that words that have initials in them are capitalized correctly.</li>
    <li>Changed the Security Search Report for one asset to show the issue name and price in the subtitle line.</li>
  </ul>
  <br>

  <strong>Investment Account Manager (IAM) release 2.9.8.7</strong><br>
  <ul>
    <li>Added "learn more" to the choice for 3rd party applications when a portfolio was created from the portfolio screen.</li>
    <li>Added the underlying symbol to the master asset library when options are added through the brokerage import or download.</li>
    <li>Added the original name to the fill option screen to help users enter the correct information for options.</li>
    <li>Modified IAM price updating for change by Yahoo! Finance for option pricing.</li>
    <li>Modified IAM historical price updating for change by Yahoo! Finance historical price quotes for ^DJI.</li>
    <li>Corrected Money csv import for importing and updating index symbols properly.</li>
    <li>Corrected the import and download from a brokerage to correctly create the option information for expired options.</li>
    <li>Corrected the transfer report to show the correct notes when the report is for a custom date range.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.9.8.6</strong><br>
  <ul>
    <li>Changed the backup program so that if the TAXLOTS table cannot be opened exclusively, the tax lots files are not created.</li>
    <li>Removed income from the choices that a user can choose when adding a transaction for an option.</li>
    <li>Added the dropdown for options to the import transactions screen so that users can change 'Closing Sales' to 'Sell to Open'.</li>
    <li>Added "Import from CSV File" to the screen which users can choose after adding a new portfolio.</li>
    <li>Added "enter all historical investment transactions", "import a portfolio from third party applications" and "import data from a CSV file" to the portfolio wizard.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.9.8.5</strong><br>
  <ul>
    <li>Corrected an error in the home page which shows that the SIZEALLO table is not found.</li>
    <li>Corrected an error in the CSV import where the variable SECNAME is not found.</li>
    <li>Changed the "Learn More" on the home page to show the correct year-ending date.</li>
    <li>Corrected the program which adds a new security to not change the font and borders in underlying forms.</li>
    <li>Added the current version and the most recent version to the technical support expired screen.</li>
    <li>Updated forms for 2015 Copyright.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.9.8.4</strong><br>
  <ul>
    <li>Modified CSV import feature when creating new portfolios to allow user to view and edit the CSV import file before importing.</li>
    <li>Modified IAM Home Page | Transactions Tab to recall previous user selection.</li>
    <li>Corrected a problem in the IAM Home Page | Managed Assets Tab for listing multiple money market funds held within a portfolio.</li>
    <li>Corrected the Portfolio Performance Report so that securities that are received by spin-off and are involved in another spin-off calculate the correct beginning value.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.9.8.3</strong><br>
  <ul>
    <li>Changed the backup to save all of the user tables before creating tax lots. This way if the user gets an error creating tax lots, their backup is still good.</li>
    <li>Added to IAM Home Page | Portfolio Values tab to include the security symbol in addition to security name.</li>
    <li>Added a check box to the preferences screen to allow the user to not save tax lots during the backup. (Users should try this option if they are getting an error when doing the backup.)</li>
    <li>Added a check box to the portfolio edit screen that allows the user to select the portfolios that are to be excluded from the report setup screen.</li>
    <li>Corrected a problem in the home page when updating the Managed Assets tab.</li>
    <li>Added the S&amp;P 500, Dow Jones, and NASDAQ indices to the Quote Media download. Changed the home page to show the correct date updated after downloading data from Quote Media.</li>
    <li>Changed the Appraisal Report that shows the symbol so that the last page would always show the headings.</li>
    <li>Changed the IAM2 utility program to copy all of the tables that are used on the home page when the user selects "Repair Corrupted Files".</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.9.8.2</strong><br>
  <ul>
    <li>added new import function for importing portfolios from user csv files.</li>
    <li>modified broker downloads for recent Vanguard changes.</li>
    <li>modified IAM Home Page | Managed Assets tab to not list portfolios marked to be excluded from IAM home page portfolio listing.</li>
    <li>other minor corrections and improvements.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.9.8.1</strong><br>
  <ul>
    <li>added new tab for Managed Assets to IAM Home Page, summarizing by portfolio, showing each portfolio's costs and market values.</li>
    <li>added Security Search Report to right-click pop-up menu on Portfolio Values Tab.</li>
    <li>added preferred stocks to QuoteMedia data feed updating.</li>
    <li>corrected price limits for Berkshire Hathaway Class A stock.</li>
    <li>other corrections and improvements.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.9.8</strong><br>
  <ul>
    <li>
      tax lot settings: when creating IAM database backups, we have added the ability to create the individual tax lots for each portfolio as unique files under the backup folder \ IAM_TaxLots_date.  Users can set a preference for these files under the file menu | preferences | backup tab:
      <ul>
        <li>Save Tax Lots to CSV files</li>
        <li>Save Tax Lots to Excel files</li>
      </ul>
    </li>
    <li>added option to the Securities Search report to allow users to search for previously sold issues.</li>
    <li>added additional financial institutions to broker downloads list.</li>
    <li>corrected IRR performance report for income records received for issues that had no beginning and no ending market values within the date range selected.</li>
    <li>other minor corrections and improvements.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.9.7</strong><br>
  <ul>
    <li>added Pershing Advisor Solutions to financial institution list for broker OFX downloads.</li>
    <li>added a new Estimated Income tab to IAM home page.</li>
    <li>modified QuoteMedia data import to alert user to changes in fundamental data downloaded.</li>
    <li>modified AAII Stock Investor Pro data import to alert user to changes in fundamental data downloaded.</li>
    <li>modified stock split function to handle split ratios to 3 places left of decimal.</li>
    <li>corrected broker import files for assigned option activity to include commission cost as part of net amount paid for assigned underlying security.</li>
    <li>corrected transfer security function to prevent user cost data entry errors.</li>
    <li>corrected Transfer Report for missing report variable.</li>
    <li>
      multiple changes to Portfolio Performance Report:
      <ul>
        <li>corrected column values reported that might be in error when custom date range includes merger activity and reverse splits.</li>
        <li>corrected performance calculations for spin-off, merger activity.</li>
        <li>corrected performance calculations when filtered for a single issue, and a merger and reverse split have occurred in the custom date range.</li>
        <li>retitled for custom date ranges, columns to use the word 'appreciation' in place of 'gain' for realized and unrealized values to avoid confusion with taxable gains/losses as reported on the IAM Sold Securities Report.</li>
      </ul>
    </li>
    <li>retitled for the Portfolio Summary Report, custom date ranges, descriptions to use the word 'appreciation' in place of 'gain' for realized and unrealized values to avoid confusion with taxable gains/losses as reported on the IAM Sold Securities Report.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.9.6</strong><br>
  <ul>
    <li>added option to portfolio setup wizard to download all available historical transaction history.</li>
    <li>added American Funds Group and USAA to IAM's list of financial institutions.</li>
    <li>added user name to show on IAM reports.</li>
    <li>modified Security Basis Reports to derive weighted average Annualized % Gain/Loss for security total line.</li>
    <li>other minor changes, updated help topics.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.9.5</strong><br>
  <ul>
    <li>updated existing report graphs to print in 3 dimension rather than 2 dimension.</li>
    <li>modified Security Basis Report to allow for option to print the report with 0, 3, or 5 decimals.</li>
    <li>modified stock split function to allow a stock split to be applied to shares sold short.</li>
    <li>added option for preferred stocks to allow grouping in the fixed income asset type category for allocation reports.</li>
    <li>modified IAM for changes made by Scottrade for accessing and downloading portfolio transaction activity.</li>
    <li>added ability for indices to be selected for option activity.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.9.4</strong><br>
  <ul>
    <li>new IAM home page tab for Fundamentals.</li>
    <li>added Google Pricing to source for updating prices under Asset Library Menu | Update Data | Market Prices from Internet.</li>
    <li>modified Wells Fargo Advisors for financial institution downloads.</li>
    <li>added Morgan Stanley to list of available financial institutions for download.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.9.3</strong><br>
  <ul>
    <li>new IAM home page design and graphs.</li>
    <li>added Transactions Tab to advanced home page view.</li>
    <li>added option for Portfolio Appraisal Report and Holdings Summary Report to show 'yield on cost' in place of 'current estimated yield'.</li>
    <li>added scrolling function to Home Page view tabs.</li>
    <li>added option to File Menu | Preferences | Home Page choice to disable home page 'year to date' performance calculation to speed up IAM loading times.</li>
    <li>added option to File Menu | Preferences | Report Settings to show negative values in red on IAM reports.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.9.2</strong><br>
  <ul>
    <li>improved IAM portfolio setup wizard.</li>
    <li>modified AAII Stock Investor Pro import functions to import SSG data from SIP installation directory.</li>
    <li>added new preference item to prompt for downloading prior month-end historical prices.</li>
    <li>added the ability for negative beta to be entered into IAM asset libraries.</li>
    <li>added ability to Fund Diversifications Characteristics Report to be printed for a single portfolio, multiple portfolios, or all funds in IAM current asset library.</li>
    <li>modified price file imports to allow for asset type designations.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.9.1</strong><br>
  <ul>
    <li>added to the Income/Reinvestment entry form the current issue quantity and cost amounts.</li>
    <li>added to financial institution downloads Merrill Lynch as an available broker.</li>
    <li>correct rounding issues on several reports for current market value totals.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.9.0</strong><br>
  <ul>
    <li>corrected several minor issues and updated help topics.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.8.9</strong><br>
  <ul>
    <li>added ability to the Transactions Activity report to allow for multiple portfolios to be included on the report, either combining all activity, or segregating by portfolio, for selected date ranges.</li>
    <li>added ability to filter the Wash Sale Check List by issue when created for a single portfolio.</li>
    <li>added to the File Menu | Export | Portfolio Transactions the ability to filter activity for a single asset and/or by a specified date range.</li>
    <li>added ability to financial institution downloads to process Transfer Out activity to other portfolios maintained in IAM, or transferred out of IAM.</li>
    <li>added ability to financial institution downloads to process Transfer In activity.</li>
    <li>modified IAM historical pricing to download pricing for the DJIA due to change by Yahoo Finance.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.8.8</strong><br>
  <ul>
    <li>added ability to export portfolio transaction data in .xls or .csv format.</li>
    <li>added 'last-in first-out' sales application method.</li>
    <li>added functionality to 'find account number' when using option to download current positions when creating a new portfolio.</li>
    <li>added 'shares total' to the basis report totals line, when filtered for a single issue, segregated by holding period.</li>
    <li>added color print function for price alerts report to indicate green or red price alerts triggered.</li>
    <li>added ascending / descending sort order to historic asset library.</li>
    <li>modified OFX broker downloads for updated access codes.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.8.7</strong><br>
  <ul>
    <li>added ability to create a new portfolio as part of the IAM 'Copy a Security' choice.</li>
    <li>added functionality to allow for negative income or capital gain distribution entries as required for securities sold short.</li>
    <li>added functionality as required by IRS 2012 changes for using average cost | covered non covered shares when selling mutual funds and the 'other investments' type.</li>
    <li>added the following hard coded disclaimer to IAM reports: Created Using Investment Account Manager for Individuals.  Not For Commercial Use.</li>
    <li>added right-click access to Google Finance under the home page | portfolio values and home page | portfolio holdings tab for the selected security.</li>
    <li>added right-click access to QuoteMedia Data under the home page | portfolio values and home page | portfolio holdings tab for the selected security.</li>
    <li>added ability to Add New Transaction to the home page | portfolio values tab.</li>
    <li>corrected IAM title bar after re-installing a demo version to reflect the license found in previous activated IAM version backup.</li>
    <li>corrected IAM batch reports to reflect printer setup for all portfolios / reports included in batch process.</li>
    <li>corrected IAM return of capital feature to only list and adjust those shares held with purchase dates on or prior to the date of the return of capital distribution.</li>
    <li>corrected about screen user identification number.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.8.6</strong><br>
  <ul>
    <li>added ability to set number of decimals on the Appraisal Report for quantity held: whole numbers, 3 decimals, 5 decimals.</li>
    <li>added ability to enter negative miscellaneous expenses: account fees, advisory fees, foreign tax withheld, or interest.</li>
    <li>added ability to exclude a portfolio from showing on the IAM report setup forms.</li>
    <li>corrected time/date stamp for transaction edit/delete of sale records to recreate proper lots if purchased originally on same date.</li>
    <li>corrected Fidelity broker download for date range recognized when downloading current holdings only.</li>
    <li>new server address to provide IAM maintenance releases as part of active technical support.</li>
    <li>added help topic for ITT, Xylem, and Exelis divestiture.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.8.5</strong><br>
  <ul>
    <li>added print function to price update table for those issues not updated during pricing function.</li>
    <li>correction for error when trying to add a new historical date while updating prices or when preparing a report.</li>
    <li>correction for home page | year to date performance showing incorrect result after pack database choice.</li>
    <li>correction for error in Portfolio Summary Report ending market value total.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.8.4</strong><br>
  <ul>
    <li>modification to Yahoo! Finance web site url for recent changes.</li>
    <li>correction to Security Search Report when created from Current Asset Library.</li>
    <li>corrected 'as of date' reporting for negative cash balances.</li>
    <li>changes for QuoteMedia data import.</li>
    <li>added Wells Fargo Advisors to list of financial institutions.</li>
    <li>added Sharebuilder to list of financial institutions.</li>
    <li>updated portfolio diagnostic tool for auto repair of transaction entry errors.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.8.3</strong><br>
  <ul>
    <li>error handling of invalid Yahoo! Finance pricing quotes.</li>
    <li>modification of Manifest Investing export feature for single company to load MI company url rather than MI dashboard url.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.8.2</strong><br>
  <ul>
    <li>includes ability to purchase Quote Media data feed with ongoing support; new activation, support renewal.</li>
    <li>corrections to Captool, Quicken, Money import for mutual funds specific identification sales method.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.8.1</strong><br>
  <ul>
    <li>removal of access to BetterInvesting and StockCentral data feeds, both discontinued as of May 31st, 2011. The v2.8.1 update includes free access to the Quote Media data feed until June 30th.</li>
    <li>corrections to Batch Reporting.</li>
    <li>corrections to Captool import for accrued interest.</li>
    <li>corrections to multiple assets, performance reporting.</li>
    <li>new pricing of IAM activation code to $139.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.8.0</strong><br>
  <ul>
    <li>added new stock data provider choice for Quote Media. Quote Media will be replacing the stock data feed providers for BetterInvesting and StockCentral, both discontinued as of May 31st, 2011. The v2.8.0 update includes free access to the Quote Media data feed until June 30th.</li>
    <li>added Common Stock Allocation by Sector report. This report was included in earlier versions of our software, and is now back by popular demand.</li>
    <li>batch downloads from financial institution. This choice now allows download of investment activity for multiple accounts. Each account download is saved and available for import on a per portfolio basis.</li>
    <li>added option to portfolio performance report to allow for a comparison graph for defined custom date ranges.</li>
    <li>removed home page | portfolio values and holdings summary tabs | 1 click pop-up access to BetterInvesting Online SSG, BetterInvesting Stock Company Report, and BetterInvesting Mutual Fund Report.</li>
    <li>corrected OFX Import/Download of assigned options to properly allow specified lots used for sale when multiple lots held and less than all held assigned.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release v2.7.2</strong><br>
  <ul>
    <li>added new reporting option to the Income Received Report to allow the report to sort by company name. Users will find this new report helpful when reconciling income activity to broker 1099 dividend statements.</li>
    <li>added refresh icon to Home Page | Portfolio Values | As of Date reporting option.</li>
    <li>added functionality to allow for current option pricing to be stored if user has set preference to create historic prices as part of current pricing update.</li>
    <li>modified IAM to trap for additional errors caused by user invalid data downloads / imports.</li>
    <li>modified IAM to classify open sale activity with options rather than short positions.</li>
    <li>corrected IAM automatic market pricing for changes by Yahoo for DJIA and options.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.7.1</strong><br>
  <ul>
    <li>added new feature to the Tools Menu for packing database. This choice can be used if a user has lengthy history of files and multiple portfolios in an effort to speed up the loading time of IAM when starting.</li>
    <li>added new performance reporting option to allow for user selected assets for the report.</li>
    <li>modified transactions OFX download / import to allow for multiple transactions that appear as duplicates to be posted per user selection.</li>
    <li>added feature to default latest ex-dividend date entry into portfolio activity ledger| income edit screen.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.7.0</strong><br>
  <ul>
    <li>modified IAM to account for changes in data feed provider used by BetterInvesting / StockCentral.</li>
    <li>removal of trial data subscriptions as previously included with the IAM demo version to BetterInvesting and StockCentral.</li>
    <li>improved export functionality of portfolios direct to Google® Finance. This choice is now listed under the home page | portfolio values tab | export button.</li>
    <li>updated instructions for exporting portfolios to Yahoo® Finance.</li>
    <li>corrections for OFX import to properly allocate assigned options with multiple lot positions of underlying issue.</li>
    <li>corrections to performance report for tender/exchange records listing extra records not previously held for as of date reporting.</li>
    <li>corrections to home page | portfolio values tab listing older money market funds.</li>
    <li>modified expense entry form to change entry category from other expenses to interest expense. Matching changes to Fees and Expenses report.</li>
    <li>new file menu | preferences | home page tab: ability to set a preference to update current price library with more recent historical price update.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.6.0</strong><br>
  <ul>
    <li>modified home page | portfolio values tab to show as-of date portfolio values.</li>
    <li>modified home page | income received tab to store date range selected.</li>
    <li>modified home page | sold securities tab to store date range selected.</li>
    <li>modified home page | portfolio holdings tab to now show top 10 holdings in a pie chart.</li>
    <li>added functionality to historic asset library to allow filtering by portfolio.</li>
    <li>added Wachovia Wells Fargo Advisors, UBS Investments and T. Rowe Price to list of available financial institutions.</li>
    <li>corrected current asset library to allow price updating for investment club type investments.</li>
    <li>corrected Transfers report to include money market fund transfers.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.5.0</strong><br>
  <ul>
    <li>changes to OFX download/import pricing for options to automatically handle assigned option transactions, properly show closing sale notation if provided in OFX file.</li>
    <li>automatically find current option prices as part of price updating the IAM asset library.</li>
    <li>corrected error in importing broker OFX files for invalid variables.</li>
    <li>modified date entry form when setting up new portfolios and money market funds.</li>
    <li>added a calendar for OFX download/import to edit trade date as necessary.</li>
    <li>modified restore/convert to include previous stored financial institution broker details.</li>
    <li>corrected data entry fields for BI stock data subscription for confirmation password.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.4.0</strong><br>
  <ul>
    <li>changes to OFX download/import pricing for options reflecting new OCC symbol rule changes.</li>
    <li>modifications to the BetterInvesting Stock Data services for updating existing common stocks in the IAM asset library, as well as when entering new common stock investments.</li>
    <li>changed IAM trial version to permit a one-time 30 day extension for further evaluation.</li>
    <li>removal of Investor's Toolkit 5, Stock Analyst 3.2 from various IAM features.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.3.0</strong><br>
  <ul>
    <li>changes for tracking option investments to reflect new OCC symbol rule changes.</li>
    <li>changes to OFX download/import pricing for options reflecting new OCC symbol rule changes.</li>
    <li>ability to edit OFX import/download Other transactions prior to posting.</li>
    <li>ability to globally edit tax/non tax for asset library add/edit.</li>
    <li>changes to Add New Transaction screen.</li>
    <li>modified Portfolio Performance Report to isolate Performance Comparison to indices.</li>
    <li>corrected error in the global income, global merge and the transfer features when offsetting to a money market fund.</li>
    <li>modified report printing preferences.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.2.0</strong><br>
  <ul>
    <li>new improved portfolio setup wizard to allow editing cost basis details as part of creating portfolios; or downloading all available transaction history from financial institutions.</li>
    <li>ability to create portfolios, downloading all available transaction history from financial institutions.</li>
    <li>ability to import broker OFX QFX files to create portfolios.</li>
    <li>ability to import Microsoft Money QIF historical transaction files.</li>
    <li>new condensed toolbar with new choice for entering Quick transactions.</li>
    <li>new Enter New Transaction form utilizing drop down choices for security name or security symbol.</li>
    <li>modified the Internet price updating feature to include a form allowing for Other Investment types to be manually updated.</li>
    <li>modified OFX import / download to account for 'OpeningSale' and 'BuytoClose' activity.</li>
    <li>corrected OFX import to account for broker download sorting of OFX files.</li>
    <li>new report option when printing the Sold Securities Report to include the Capital Gains Distribution Report for the selected portfolio(s).</li>
    <li>updated Investment Account Manager Manual in PDF format.</li>
    <li>corrections to performance reports for short sale activities.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.1.0</strong><br>
  <ul>
    <li>modified the Internet price updating feature to include a form allowing for Other Investment types to be manually updated.</li>
    <li>modified OFX import / download to account for 'OpeningSale' and 'BuytoClose' activity.</li>
    <li>corrected OFX import to account for broker download sorting of OFX files.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.0.9</strong><br>
  <ul>
    <li>File Menu | Import | Microsoft® Money csv file: Investment Account Manager now includes an import feature for Microsoft Money portfolios exported in csv file.</li>
    <li>File Menu | Convert Portfolio Manager data: use this choice to convert data from either NAIC Portfolio Record Keeper v3 or BetterInvesting Portfolio Manager v4 or BetterInvesting Portfolio Manager v5.</li>
    <li>modified the Internet price updating feature to include a form showing those assets not updated automatically, including bonds, government issues, and options. Users can manually update prices as necessary for those issues not automatically priced in this form.</li>
    <li>modified the right-click access for issues listed on the Home Page so that if the user selects the Asset Library choice, the Edit/Update tab is now shown for the selected issue instead of the entire asset library list.</li>
    <li>corrected the portfolio diagnostic tool to properly account for reverse stock splits.</li>
    <li>corrected as-of-date reporting for issues received in spinoffs that subsequently had recorded a stock split transaction.</li>
    <li>corrected several home page grids to reflect read-only behavior.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.0.8</strong><br>
  <ul>
    <li>added ability to enter the historical acquisition dates and cost basis amounts as part of the Portfolio Setup Wizard downloading or entering aggregate balances from an online broker or from a broker statement.</li>
    <li>modified logic in Portfolio Performance Report to show asterisks in the column for security annualized return if the calculation is not meaningful or is unable to be derived for the performance date range selected.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.0.7</strong><br>
  <ul>
    <li>added option to show symbol on Security Basis Report in place of percent of portfolio.</li>
    <li>added option to OFX download/import to update current asset library with market prices provided in OFX file, if available.</li>
    <li>added ability to transfer feature to accommodate short positions.</li>
    <li>added ability to 'closing buy' to pick specific open sale lots if multiple open sale lots held.</li>
    <li>corrections to IRR reporting for spinoff followed by mergers within the same reporting date range.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.0.6</strong><br>
  <ul>
    <li>access to Manifest Investing: while viewing the IAM Home Page | Portfolio Values tab</li>
    <li>S&amp;P 500 Quality Rating: when selecting the Reports and Graphs Menu | Appraisal Report | option to Show Symbol, QR; Hide PE, Beta the Appraisal Report will include an additional column showing the S&amp;P Quality Ratings as downloaded from the BetterInvesting data service, or entered by the user</li>
    <li>modifications for Captool Import to create necessary summary records of merger and spinoff activity with multiple Captool RCV, DLV, and CBA transactions.</li>
  </ul>
  <br>

  I<strong>nvestment Account Manager release 2.0.5</strong><br>
  <ul>
    <li>added How to ... Flowcharts to the Help Menu for user reference when adding transaction activities such as dividends, mergers, purchases, sales, spin-offs, and stock splits.</li>
    <li>updated list of available exchange-traded and mutual fund investment objectives.</li>
    <li>added ability to export current asset library data for use in spreadsheet applications.</li>
    <li>updated exchange-traded and mutual fund investment objectives.</li>
    <li>added to OFX downloads / imports the ability to handle transaction code "CHECK" as a withdrawal from money market funds.</li>
    <li>added to OFX downloads / imports the ability to handle transaction code "SELLTOOPEN" for option activity.</li>
    <li>added error checking routine to transactions so if a date entered is in excess of 1 year of last entry, user is prompted to verify.</li>
    <li>modifications for Quicken import to now handle Quicken transactions for: Cvrshrt, Cvrshrtx, Shtsell, Shtsellx, ShrsOut</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.0.4</strong><br>
  <ul>
    <li>ability to print the Sold Securities Report to include security symbol in place gain/loss and annualized gain/loss percentage.</li>
    <li>ability to filter QFX, OFX import files for multiple accounts for transaction posting.</li>
    <li>ability to edit OFX OTHER transactions types for deposit, withdrawal or expense for money market funds.</li>
    <li>ability to import OFX CHECK transactions as a withdrawal for money market funds.</li>
    <li>added table to historic price downloads so those issues not found can be manually updated to reflect correct historic price.</li>
    <li>correction for editing cash equivalents income / reinvestment transactions.</li>
    <li>correction for portfolio transfers and IRR home page calculation.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.0.3</strong><br>
  <ul>
    <li>ability to import portfolios, SSG estimated prices, and 1-click access to SSG analysis from Toolkit 6.</li>
    <li>Home Page Tool Bar, Yahoo Quotes: use this new choice to quickly review current information for stocks, mutual funds, exchange traded funds, and indices that are included in your current asset library.</li>
    <li>ability to now track miscellaneous expenses as several types: account fees, advisory fees, foreign tax withheld, and other charges.</li>
    <li>new Fees and Expenses Report.</li>
    <li>ability to print Appraisal Report to include security symbol in place of PE ratio and Beta coefficient.</li>
    <li>added weighted average beta calculation for Exchange Traded Funds to Appraisal Report.</li>
    <li>ability to edit the internal portfolio ID code that is automatically generated when creating portfolios.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.0.2</strong><br>
  <ul>
    <li>newer ActiveX controls program to speed file transfer times for Vista users.</li>
    <li>ability to import transaction activity using Quicken QIF format files to existing portfolios.</li>
    <li>ability to print the audit report for global spin-off and merger activity prior to applying.</li>
    <li>corrections to Portfolio Summary Report to properly account for short option activity when calculating portfolio additions and withdrawals.</li>
    <li>modifications for Quicken and Captools import.</li>
    <li>ability to set portfolio preference to hide portfolios from IAM home page listing.</li>
    <li>added security symbol to Wash Sale report.</li>
    <li>improved Transfers Audit report to show original cost basis, original basis date for transferred or received shares.</li>
    <li>added to Internet Pricing a check process to verify issues are updated for the current date when updating pricing.</li>
    <li>corrected security search tab displaying asterisks.</li>
    <li>corrected Appraisal Report to properly show estimated yield when including diversification graph.</li>
  </ul>
  <br>

  <strong>Investment Account Manager release 2.0.1</strong><br>
  <ul>
    <li>added portfolio preference so users can now exclude a portfolio from the home page list.</li>
    <li>added security symbol to the Wash Sale report.</li>
    <li>corrected the sale transaction for missing index when partially selling from a single lot.</li>
    <li>corrected typographical error in the Price Alerts form.</li>
  </ul>
</article>

<div class="gray footer bt">
  <article>
    <h2 class="small">VISIT OUR <a href="#">TUTORIAL</a> PAGE FOR ADDED SUPPORT</h2>
  </article>
</div>

<?php include "footer.php"; ?>