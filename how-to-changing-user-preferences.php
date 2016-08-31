
<?php
$PageTitle = "Changing User Preferences";
include "header.php";
?>

<div class="red mb">
  <article>
    <h1>CHANGING USER PREFERENCES</h1>
  </article>
</div>

<article class="how-to">
  <strong>Select the File Menu | Preferences.</strong><br>
  <br>

  Navigate through the various tabs to set global preferences:<br>
  <br>

  <strong>1) PREFERENCES BACKUP DATA SETTINGS</strong><br>
  Backup Data Settings:<br>
  <br>

  Prompt for Backup Reminder: use this setting to define how often you wish to be notified for backing up your data. Choices include:
  <br>

  <ul>
    <li>after every session,</li>
    <li>after every other session,</li>
    <li>or after every five sessions.</li>
  </ul>
  <br>

  Automatic Backup: use this setting to run the backup process automatically after 0-30 sessions. Based on your user preference, as you exit Investment Account Manager, the backup process will be performed to your desired destination folder. If you have set the destination to a removable media source, be certain the required media is in place for the backup process.<br>
  <br>

  Tax Lot Settings: when creating Investment Account Manager database backups, individual tax lots for each portfolio are also saved as unique files under the directory you create your IAM backup files.  These tax lot files will be located under the backup folder \ IAM_TaxLots_date.  Users can set a preference for these files:
  <br>

  <ul>
    <li>Save Tax Lots to CSV files</li>
    <li>Save Tax Lots to Excel files</li>
    <li>Do not save tax lots during backup</li>
  </ul>
  <br>

  The tax lot files include this information, in this order:<br>
  <br>

  symbol, name, type<br>
  C= cash equivalent<br>
  S = common stock<br>
  B = corporate bond<br>
  I = investment club<br>
  E = tax-exempt bond<br>
  U = US government agency<br>
  P = preferred stock<br>
  M = money market fund<br>
  F = mutual fund<br>
  T = exchange traded fund<br>
  O = option<br>
  X = other investment<br>
  <br>

  purchase date, quantity, total cost, rec_notes (memo files), reinv = reinvestment, create date: date file was created.<br>
  <br>

  <strong>2) PREFERENCES DATA PROVIDER SETTINGS</strong><br>
  Investment Account Manager includes access to QuoteMedia® and AAII Stock Investor Pro. These optional services help complete descriptive information for stocks as they are added to Investment Account Manager. This includes access to fundamental stock data such as dividends per share, earnings per share, stock sector, stock size, etc. for common stocks.<br>
  <br>

  Select one of the optional data services and complete any necessary entries, or select the option for no data provider.   If you are not using AAII's Stock Investor Pro software, and are not a subscriber to QuoteMedia Data Services, you can select 'No Data Provider' in this preference screen.   As common stocks and funds are entered into Investment Account Manager, you'll need to manually enter information such as name, industry, size and objective.<br>
  <br>

  Users can also set the metric used for defining stock capitalization when importing data.<br>
  <br>

  <ul>
    <li>Market Capitalization</li>
    <li>Revenues</li>
  </ul>
  <br>

  <strong>3) PREFERENCES HOME PAGE SETTINGS</strong><br>
  <ul class="spaced">
    <li>
      Update market prices each time the home page is refreshed. This choice access the Internet for 15 minute delayed pricing as part of the home page refresh process.
      <ul>
        <li>Prompt before updating prices from home page.</li>
      </ul>
    </li>
    <li>
      Check for updates when Investment Account Manager starts
      <ul>
        <li>Use this option to set a user-defined schedule to have Investment Account Manager automatically check for a newer maintenance release for your copy of Investment Account Manager. The default check is after 30 sessions. Valid ranges are none (uncheck), or between 1-99 sessions. If a newer update is available, and your technical support policy is up to date, you'll be prompted to download this newer release. Make certain you are connected to the Internet, and your fire wall is configured to allow Investment Account Manager access to the Internet for downloading files.</li>
      </ul>
    </li>
    <li>
      Performance Index to show on the Home Page
      <ul>
        <li>Use this option preference allows users to set an index, mutual fund, or exchange traded fund for performance comparison on the Investment Account Manager Home Page. The index, mutual fund, or exchange traded fund must be already included in your current and historical price libraries, with accurate prices.</li>
      </ul>
    </li>
    <li>
      Bypass Price Alerts on Startup
      <ul>
        <li>Use this choice to bypass the price alerts feature when starting Investment Account Manager.</li>
      </ul>
    </li>
    <li>
      Prompt to update current prices with more recent historic prices
      <ul>
        <li>Use this option so that if you enter a price into the historic library that is more recent than the price in the current asset library, you will be prompted to update the current asset library with this price.</li>
      </ul>
    </li>
    <li>
      Prompt to create historical prices when updating current prices:
      <ul>
        <li>This option allows the user to create a historical price date as part of the Internet current pricing functions. Each time you retrieve current market prices for updating current security valuations, you will be prompted as to whether or not you would like to also save these current prices for a historic date entry. Since many users have other asset types in addition to common stocks, and these assets may not be included in the instant pricing feature, they will be omitted from the historic price date created if this option is selected. If selected, you will be prompted to use the imported prices to create a historic asset price date.  Note: the best way to create historical price dates is to select the asset library menu | historic asset library | add new date function.</li>
      </ul>
    </li>
    <li>
      Disable Portfolio 'Year to Date' Performance Calculation
      <ul>
        <li>This option disables the IRR iteration for the Investment Account Manager Home Page.</li>
      </ul>
    </li>
    <li>
      Automatically update current prices with prices from broker files:
      <ul>
        <li>This option will update Investment Account Manager's current asset library list with prices included as part of downloading activity from your financial institution.  This is a useful option for updating issues not available thru IAM's Internet pricing, such as bonds, non-publicly traded securities.</li>
      </ul>
    </li>
    <li>
      Run IAM in maximized screen view
      <ul>
        <li>This option will start Investment Account Manager in full screen mode.  The default startup screen size is 80%.</li>
      </ul>
    </li>
  </ul>
  <br>

  <strong>4) PREFERENCES REPORT SETTINGS</strong><br>
  Report Disclaimer: use this setting to enter a report disclaimer to be used globally for all reports. The disclaimer serves the important purpose of reminding users of the practical limitations of the program and we recommend you include a disclaimer. <em>Note: if you are using the noncommercial-user version of Investment Account Manager, this disclaimer is inactive and can't be changed.</em><br>
  <br>

  <ul class="spaced-top">
    <li>Report Heading: use this setting to enter a report heading to be used as a global default for all reports. Note: You can override the global setting prior to printing any individual report.</li>
    <li>Preview Magnification: use this setting to set a global page preview magnification level. Settings range from whole page up to 150%. Note: You can adjust the magnification setting each time you preview any individual report.</li>
    <li>
      Report Margin Setup: use this setting to globally set the report margins for report printing. The following margin settings are used as defaults:<br>
      <ul>
        <li>Top: 0.50</li>
        <li>Bottom: 0.25</li>
        <li>Left: 0.25</li>
        <li>Right: 0.25</li>
      </ul>
    </li>
    <li>Sort Default: many Investment Account Manager features require you to identify the asset prior to adding transactions, updating with current information, printing individual asset reports, etc. The sort feature enables you to quickly arrange the list of assets currently in the system prior to selecting. You can set the default sort order globally to: most recent use, symbol, name, or type.</li>
    <li>Fiscal Year Ends in the Month: use this setting to globally set the reporting periods for a fiscal year-end other than December. For example, if you want to generate reports based on a fiscal year-end in February, select this month. Later, when you want to print a report for the last fiscal year, or current fiscal year, (like the Income Received report) Investment Account Manager will default this reporting period to reflect your February year-end choice.</li>
    <li>Set Session Date: use this setting to change the session date. This date will be the date defaulted into date entry screens, and printed on all reports.</li>
    <li>Include printer Setup: use this option to be prompted with the printer setup dialogue form prior to printing reports. You'll be able to select a specific printer, quality preferences, and other printer options.</li>
    <li>Show negative values in red: select this option to show negative values, such as losses, in red on reports.</li>
    <li>
      Appraisal Report Quantity: select a default for how many decimals to show for quantity on Investment Account Manager's Appraisal Report.<br>
      <ul>
        <li>whole numbers</li>
        <li>3 decimal places</li>
        <li>5 decimal places</li>
      </ul>
    </li>
    <li>
      Basis Report Quantity: select a default for how many decimals to show for quantity on Investment Account Manager's Security Basis Report.
      <ul>
        <li>whole numbers</li>
        <li>3 decimal places</li>
        <li>5 decimal places</li>
      </ul>
    </li>
    <li>Maximum rate to check for high IRR's: use this option to set the maximum rate for the Internal Rate of Return iteration process.  The default rate is typically good for most investment activity, but in some cases, lowering this maximum rate can improve the speed of the IRR calculation.</li>
  </ul>
</article>

<div class="darkgray whitetext footer bt">
  <article>
    <h2>NEED HELP? TRY OUR <a href="support.php">SUPPORT</a> PAGE</h2>
  </article>
</div>

<?php include "footer.php"; ?>