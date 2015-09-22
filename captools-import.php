
<?php
$PageTitle = "Captools Import";
include "header.php";
?>

<div class="darkgray whitetext mb">
  <article>
    <h1>CAPTOOLS IMPORT</h1>
  </article>
</div>

<article>
  With the recent decision by Captools&reg; Investment Software to no longer support their programs for the individual investor, the developers of Investment Account Manager have included in IAM an import feature for Captools investment data. This import feature allows the conversion of the most common investment transactions from Captools Investment Software into Investment Account Manager.<br>
  <br>

  <img src="images/captools1.jpg" alt=""><br>
  <br>

  <img src="images/captools2.jpg" alt=""><br>
  <br>

  <a href="pdf/Captools_Import_Doc.pdf">Download a PDF</a> of the Investment Account Manager / Captools import process.<br>
  <br>

  Investment Account Manager will convert the following Captools transaction types:<br>
  <ul>
    <li>DPF: Deposit Funds (to cash)<br><br></li>
    <li>RCV: Receive Shares (non-cash transaction)<br><br></li>
    <li>DLV: Deliver Shares (non-cash transaction).  Use to indicate shares delivered out of the portfolio.<br><br></li>
    <li>BUY: Buy (payment from cash)<br><br></li>
    <li>BYD: Buy and Deposit (zero net cash change)<br><br></li>
    <li>CBA: Cost Basis Adjustment (non-cash transaction).  This code is used to adjust the cost basis of a security.<br><br></li>
    <li>IN+: Interest Income (to cash)<br><br></li>
    <li>IN-: Interest Payment (from cash)<br><br></li>
    <li>IRI: Interest Income Reinvested (zero net cash change)<br><br></li>
    <li>IOB: Interest Income on Cash Balance<br><br></li>
    <li>DV+: Dividend Income (to cash)<br><br></li>
    <li>DRI: Dividend Reinvested (zero net cash change)<br><br></li>
    <li>DVW: Dividend Income Withdrawn (zero net cash change)<br><br></li>
    <li>SGD: Short Term Gains Distribution (zero net cash change)<br><br></li>
    <li>SGR: Short Term Gains Distribution Reinvested (zero net cash change)<br><br></li>
    <li>SGW: Short Term Gains Distribution Withdrawn (zero net cash change)<br><br></li>
    <li>CGD: Long Term Gains Distribution (zero net cash change)<br><br></li>
    <li>CGR: Long Term Gains Distribution Reinvested (zero net cash change)<br><br></li>
    <li>CGW: Long Term Gains Distribution Withdrawn (zero net cash change)<br><br></li>
    <li>WDF: Withdraw Funds (from cash)<br><br></li>
    <li>SLL: Sell (Proceeds to Cash)<br><br></li>
    <li>SLW: Sell &amp; Withdraw (zero net cash change)<br><br></li>
    <li>CIL: Cash in Lieu (of fractional shares, proceeds to cash)<br><br></li>
    <li>ROC: Return of Capital (to cash)<br><br></li>
    <li>RCR: Return of Capital Reinvested (zero net cash change)<br><br></li>
    <li>RCW: Return of Capital Withdrawn (zero net cash change)<br><br></li>
    <li>EXP: Expenses (paid from cash)<br><br></li>
    <li>MFE: Management Fee (paid from cash)<br><br></li>
    <li>FEE: Administrative Fee (paid from cash)<br><br></li>
    <li>OFE: Other Fee ((paid from cash)<br><br></li>
    <li>MFS: Management Fee (paid from shares sold, zero net cash change)<br><br></li>
    <li>FES:  Administrative Fee (paid from shares sold, zero net cash change)<br><br></li>
    <li>MFD: Management Fee (paid from deposited funds, zero net cash change)<br><br></li>
    <li>FED: Administrative Fee (paid from deposited funds, zero net cash change)<br><br></li>
    <li>OFS: Other Fee (paid from shares sold, zero net cash change)<br><br></li>
    <li>OFD: Other Fee (paid from deposited funds, zero net cash change)<br><br></li>
    <li>SLS: Sell Short (proceeds to cash).<br><br></li>
    <li>BYC: Buy to Cover Short Position (payment from cash).<br><br></li>
    <li>XOP:  Exercised Option (non-cash transaction). If an XOP is for a Put exercised, it will be followed by a SLL transaction for underlying security<br><br></li>
    <li>XOP: Exercised Option (non-cash transaction).  If an XOP is for a Call exercised, it will be followed by a BUY transaction for the underlying security.<br><br></li>
    <li>SP+: Split Shares Received (non-cash transaction).  If negative number shares in SP+ transaction, represents a reverse split.<br><br></li>
    <li>TXW: Tax Withheld (from cash).<br><br></li>
    <li>TXD: Tax Withheld (zero net cash change).</li>
  </ul>
  <br>

  The IAM / Captools import function does not currently handle the following transactions at this time.  These types of transactions, if any, will be listed on the IAM / Captools Import Exceptions Report.<br>
  <ul>
    <li>DV-: Dividend payment (on short position)<br><br></li>
    <li>SP-: Split shares delivered (on short position)<br><br></li>
    <li>Capital Gain Distributions: CLD (Capital Loss Distribution), SLD (Short Term Capital Loss Distribution), Undistributed Capital Gains<br><br></li>
    <li>Bond Discounts / Premiums: ACR (Accretion on Purchase Discount), AMT (Amortization on Purchase Premium),<br><br></li>
    <li>Partnerships / Direct Investments: DST (Partnership Distribution), DSR (Partnership Distribution Reinvested), DSW (Partnership Distribution Withdrawn).<br><br></li>
    <li>Real Estate / Depreciation: BRW (Borrow of Funds), RPY (Repay Funds), RNT (Rent Received), DPR (Depreciation)<br><br></li>
    <li>Tax Related: ETX (Estimated Tax Adjustment), SCO (Short Term Carryover), LCO (Long Term Carryover), TDG (Tax Deductible Gift).<br><br></li>
    <li>Other Transaction Codes: MMO (Memo Transaction), ERR (Error Transaction), SAX (Sub-account Transfer), CMX (Cash / Margin Transfer), ROP (Receive Options), NCI (Non-Cash Income).<br><br></li>
  </ul>
</article>

<div class="gray footer bt">
  <article>
    <h2 class="small">VISIT OUR <a href="#">TUTORIAL</a> PAGE FOR ADDED SUPPORT</h2>
  </article>
</div>

<?php include "footer.php"; ?>