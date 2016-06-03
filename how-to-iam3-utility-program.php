
<?php
$PageTitle = "IAM3 Utility Program";
include "header.php";
?>

<div class="red mb">
  <article>
    <h1>IAM3 UTILITY PROGRAM</h1>
  </article>
</div>

<article>
  Investment Account Manager's Utility Program is designed to fix problems that might occur if an error is caused (I.e., abnormal shut-down, conflict with another program such as a firewall or anti-virus, etc.).  The program repairs these types of issues, as well as providing other utilities.<br>
  <br>

  To access the Utility Program:<br>
  <br>

  <ul>
    <li>Close IAM if it is open.</li>
    <li>Select Windows Start Menu | then all apps (programs).</li>
    <li>Find the Investment Account Manager 3 program group and open it.</li>
    <li>Within the program group, click on IAM3 Utilities.</li>
  </ul>
  <br>

  The following window should appear:<br>
  <br>

  <img src="images/how-to-iam3-utility-program.jpg" alt=""><br>
  <br>

  <em>Please Note: Many errors can be corrected by running these utilities.</em><br>
  <br>

  <strong>Backup Data:</strong> This utility allows you to backup your data from outside IAM.  Useful if you cannot open IAM, and do not have a recent backup.<br>
  <br>

  <strong>Delete Backup Directories:</strong> This will delete the backup directories that you choose. Useful if you wish to cleanup your backup folder.  Backups are sorted by date.<br>
  <br>

  <strong>Fix Portfolio Memo Fields:</strong> If you are getting an error that shows that the memo file is missing or invalid, run this utility. This is error 41.<br>
  <br>

  <strong>Pak and Re-index Database:</strong> Packing files removes deleted records and compacts notes and data. This will reduce the size of the files and speed up the program.<br>
  <br>

  <strong>Portfolio Diagnostic:</strong> This diagnostic tool will scan all portfolios in Investment Account Manager, identifying discrepancies between the quantity shown on reports and the quantity calculated on the Portfolio Activity Ledger.<br>
  <br>

  <strong>Register Crystal Controls:</strong> If you can't get reports to display, you may need to re-register the Crystal Reports controls. This program should find the correct directory to register these controls. You must have administrator privileges to register these controls. When starting the utility program, right-click and choose "Run as Admin".<br>
  <br>

  <strong>Register OLE Controls (run as administrator):</strong> Re-register all of the OLE (object linking and embedding system to link databases and programs) controls. You must have administrator privileges to register OLE controls. When starting the utility program, right-click and choose "Run as Admin".<br>
  <br>

  <strong>Remove Your Password:</strong> This will remove the password from the Investment Account Manager program.<br>
  <br>

  <strong>Repair Corrupted Files:</strong> If you can't open the program because the program says that it is already running, this should correct the problem. It will also fix other database problems (can't find ....) that might prevent you from opening IAM3.<br>
  <br>

  <strong>Repair Database:</strong> If your program will not open and you get a message that says "File ... rk.dbc does not exist", this might fix the database. It will also fix other database problems that might prevent you from opening IAM3. NOTE: It will not work if you have never packed your database.<br>
  <br>

  <strong>Update Program:</strong> If you downloaded a newer version of the program, but the program will not update because it is installed under \Program Files, use this program to install the update.<br>
  <br>

  NOTE: You must change the "Unzip to Folder" to the directory where your Investment Account Manager program was installed.<br>
  <br>

  <strong>View Error Log:</strong> If a program error occurs while using Investment Account Manager, an entry of the error is automatically created in the error log. Any error can be printed or saved to your clipboard to send to <?php email("techsupport@investmentaccountmanager.com","technical support"); ?>.
</article>

<div class="darkgray whitetext footer bt">
  <article>
    <h2>NEED HELP? TRY OUR <a href="support.php">SUPPORT</a> PAGE</h2>
  </article>
</div>

<?php include "footer.php"; ?>