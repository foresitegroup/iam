
<?php
$PageTitle = "IAM with Equity Options";
include "header.php";
?>

<div class="red mb">
  <article>
    <h1>IAM WITH EQUITY OPTIONS</h1>
  </article>
</div>

<article>
  Equity options are contracts between buyers and sellers providing certain rights or responsibilities on the opposite parties.  It is beyond the scope of this manual to explain the mechanics of option trading, but for those interested in learning about using options as investments, visit <a href="http://www.cboe.com">CBOE - Option Concepts - The Basic</a>.<br>
  <br>

  The following descriptions are meant for definitional purposes:<br>
  <ul>
    <li><strong>Opening Buy:</strong> An Opening Buy transaction is a purchase (going long) of the option. Opening buys enable you to control the rights on shares of an underlying security, providing the right to purchase (call) or sell (put) at a pre-defined exercise price on or before the expiration date. Opening buy transactions are followed by: a closing sale, the exercised rights, or expire worthless.<br><br></li>
    <li><strong>Closing Sale:</strong> A Closing Sale transaction is the sale of a previously purchased (opening buy) call or put option.<br><br></li>
    <li><strong>Opening Sale:</strong> An Opening Sale transaction gives is the sale of option rights to someone else. This is also known as writing (or granting) the option. You are 'selling' the right to buy from you (i.e. call away) or sell to you (i.e. put to you) the underlying security at the strike price and shares per contract on or before the expiration date. An opening sale is treated as a 'short' position on Portfolio Manger reports and is shown as a negative quantity.<br><br></li>
    <li><strong>Closing Buy:</strong> A Closing Buy transaction is the purchase of a previously sold (opening sale) call or put option.<br><br></li>
    <li><strong>Assignments, exercises, expiration of Options:</strong> covered in the following pages or both call and put options.</li>
  </ul>
  <br>

  <strong>Note:</strong> the following illustrates the data entry window for option securities within the Current Asset Library:<br>
  <br>

  <img src="images/how-to-iam-with-equity-options1.jpg" alt=""><br>
  <br>

  You will note that the program automatically creates an option code (used for data transfer) and a security symbol (used for identification purposes within Investment Account Manager only). The code is based on the type of option, the underlying security, the exercise price and date and shares per contract.  It matches the new 2010 standardized option symbol.<br>
  <br>

  <em>The IAM symbol is a truncated version of the standard symbol, and is solely used for identification within Investment Account Manager (to save space on screens and reports).</em><br>
  <br>

  <strong>Opening Sale Example</strong><br>
  <img src="images/how-to-iam-with-equity-options2.jpg" alt=""><br>
  <br>

  The top portion of this screen indicates the trade date, security symbol, security description, type of option (call or put), recent price, exercise price and expiration date. A summary band is also shown that indicates the total quantity currently held, the total cost basis, and the total current market value for the option. <strong>Note:</strong> in the case of opening sale 'short' options, these values are shown as 'negative'.<br>
  <br>

  The lower portion of this screen includes the necessary entry fields for recording the closing sale transaction. Values are entered as positive values, but are tracked internally as 'short' (negative) and shown as such on reports.<br>
  <br>

  <ul>
  <li><strong>Contracts:</strong> the number of option contracts sold.<br><br></li>
  <li><strong>Price:</strong> the per contract price you received when you sold the option. This is an optional entry.  Investment Account Manager will derive the price received per contract internally based on the quantity sold and the net amount.<br><br></li>
  <li><strong>Commissions and Fees:</strong> enter the commissions and fees associated with the opening sale transaction and that are included in the net amount of the transaction. Do not include service charges in this amount if they are not included in the net amount of the trade.<br><br></li>
  <li><strong>Net Amount:</strong> the total cost for the transaction. Note: net amount is automatically calculated by [(contracts sold x shares per contract x contract purchase price) - commissions]. It can be manually adjusted to account for additional fees or costs associated with the closing sale transaction. If no additional service charges are entered, net amount represents the 'premium' received for selling the option rights that is then available for deposit into an existing money market account.<br><br></li>
  <li><strong>Transaction Notes:</strong> an optional entry, use this area to record transaction notes or reminders.<br><br></li>
  </ul>
  <br>

  <strong>Closing Buy:</strong> A Closing Buy transaction is the purchase of a previously sold (opening sale) call or put option.<br>
  <br>

  <img src="images/how-to-iam-with-equity-options3.jpg" alt=""><br>
  <br>

  The top portion of this screen indicates the trade date, security symbol, security description, type of option (call or put), recent price, exercise price and expiration date. A summary band is also shown that indicates the total quantity currently held, the total cost basis, and the total current market value for the option. The lower portion of this screen includes the necessary entry fields for recording the closing buy transaction.<br>
  <br>

  <ul>
  <li><strong>Contracts:</strong> the number of option contracts purchased.<br><br></li>
  <li>Price: the per contract price you paid when you purchased the option. This is an optional entry.  Investment Account Manager will derive the price paid per contract internally based on the quantity purchased and the net amount.<br><br></li>
  <li><strong>Commissions and Fees:</strong> enter the commissions and fees associated with the closing buy transaction and that are included in the net amount of the transaction. Do not include service charges in this amount if they are not included in the net amount of the trade.<br><br></li>
  <li><strong>Net Amount:</strong> the total cost for the transaction. Note: net amount is automatically calculated by [(contracts purchased x shares per contract x contract purchase price) + commissions]. It can be manually adjusted to account for additional fees or costs associated with the closing buy transaction.<br><br></li>
  </ul>
  <br>

  <strong>Assigned Option Example</strong><br>
  <strong>Assigned Option &mdash; Call:</strong> When a call option is assigned, as the writer (seller) of the option, you are required to deliver (sell) shares in the underlying security that the call option covers. As part of this transaction, the sale proceeds of the underlying stock sold is increased by the premium received of the call option sold.<br>
  <br>

  <img src="images/how-to-iam-with-equity-options4.jpg" alt=""><br>
  <br>

  The top portion of this screen indicates the trade date, security symbol, security description, type of option (call), recent price, exercise price and expiration date. A summary band is also shown that indicates the total quantity currently held, the total cost basis, and the total current market value for the option.<br>
  <br>

  The lower portion of this screen includes the necessary entry fields for recording the assigned transaction.<br>
  <br>

  <ul>
    <li><strong>Contracts:</strong> the number of option contracts assigned.<br><br></li>
    <li><strong>Shares per Contract:</strong> the number of shares each option contract controls of the underlying stock. Normally 100, this value is defaulted in from the option descriptive information entered into the Investment Account Manager Asset Library.<br><br></li>
    <li><strong>Exercise Price:</strong> the share price at which the writer of an option call can sell the underlying stock. This value is defaulted in from the option descriptive information entered into the  Investment Account Manager Asset Library.</li>
  </ul>
  <br>

  <strong>Button Choices </strong><br>
  <ul>
    <li><strong>Next:</strong> use this choice to continue w/ the option assigned transaction. (see additional instructions below for Assigned Option &mdash; Sell Stock).<br><br></li>
    <li>Use the <strong>Cancel</strong> button to quit without saving this entry.<br><br></li>
  </ul>
  <br>

  <strong>Assigned Option &mdash; Sell Stock</strong><br>
  In this step of assigned option transaction, you'll identify the underlying stock to be sold (called away). NOTE: IAM will automatically provide the appropriate transaction windows to be completed as a result of the assignment.<br>
  <br>

  <strong>Sale</strong><br>
  Use the Sale transaction screen to enter the information for the underlying stock being sold (called away) in the assigned call option Transaction.<br>
  <br>

  <img src="images/how-to-iam-with-equity-options5.jpg" alt=""><br>
  <br>

  <ul>
    <li><strong>Option Premium:</strong> this is the total proceeds of the call option contracts being assigned. This option premium is added to the net amount of the underlying stock sale transaction, and this total represents the sale proceeds assigned to the shares sold as required by IRS rules (see IRS publication 550).<br><br></li>
    <li><strong>Total:</strong> total is automatically calculated by Investment Account Manager and is the sum of the net amount + option premium. This total represents the sale proceeds assigned to the shares sold by assigning the call put option as required by IRS rules (see IRS publication 550). This field cannot be edited.<br><br></li>
    <li><strong>Note:</strong> when deriving performance for an assigned call option, since the original premium received has been added to the net amount of the underlying stock sale transaction, this premium is no longer included in the performance calculation of the option. In the cases where all option contracts held have been assigned, the performance report will show *^* to indicate the assigned option.<br><br></li>
  </ul>
  <br>

  <strong>Assigned Option &mdash; Put:</strong> As the writer (seller) of the option, if the option is 'put' to you, you are required to purchase shares in the underlying security that the call option covers. As part of this transaction, decrease your cost basis for the shares that you buy by the amount of the original put proceeds. Your cost basis date for the underlying security is the date you buy the security, not the date of the put you sold.<br>
  <br>

  <img src="images/how-to-iam-with-equity-options6.jpg" alt=""><br>
  <br>

  The top portion of this screen indicates the trade date, security symbol, security description, type of option (put), recent price, exercise price and expiration date. A summary band is also shown that indicates the total quantity currently held, the total cost basis, and the total current market value for the option. The lower portion of this screen includes the necessary entry fields for recording the assigned transaction.<br>
  <br>

  <ul>
    <li><strong>Contracts:</strong> the number of option contracts assigned.<br><br></li>
    <li><strong>Shares per Contract:</strong> the number of shares each option contract controls of the underlying stock. Normally 100, this value is defaulted in from the option descriptive information entered into the Investment Account Manager Asset Library.<br><br></li>
    <li><strong>Exercise Price:</strong> the share price at which the writer of an option put must purchase the underlying stock. This value is defaulted in from the option descriptive information entered into the Investment Account Manager Asset Library.</li>
  </ul>
  <br>

  <strong>Button Choices</strong><br>
  <ul>
    <li><strong>Next:</strong> use this choice to continue w/ the option assigned transaction.<br><br></li>
  </ul>
  <br>

  <strong>Assigned Option &mdash; Purchase Stock</strong><br>
  In this step of assigned option transaction, you'll identify the underlying stock purchased.<br>
  <br>

  <ul>
    <li><strong>Activity Date</strong> - this is the date of the investment transaction, i.e. purchase date or exercise date of the transaction. The calendar icon can also be used to select the activity date. Note: this field defaults to the most recently entered transaction date.<br><br></li>
    <li><strong>Security Symbol/Name</strong> - this is the security symbol or name of the underlying stock being purchased in the transaction. You can also press the F2 key or the Find button for symbol lookup to select the issue. If the underlying stock is new to  Investment Account Manager's asset library, you'll need to enter some descriptive information prior to recording the purchase transaction.</li>
  </ul>
  <br>

  <strong>Button Choices</strong><br>
  <ul>
    <li><strong>Next:</strong> use this choice to proceed with the option assign transaction.<br><br></li>
    <li>Use the <strong>Cancel</strong> button to quit without saving this assigned call entry.<br><br></li>
  </ul>
  <br>

  <strong>Purchase</strong><br>
  Use the Purchase transaction screen to enter the information for the underlying stock being purchased in the assigned option transaction.<br>
  <br>

  <img src="images/how-to-iam-with-equity-options7.jpg" alt=""><br>
  <br>

  The top portion of this screen indicates the trade date, security symbol, security description and recent price. A summary band is also shown that indicates any total quantity currently held, the total cost basis, and the total current market value for the common stock being purchased. The lower portion of this screen includes the necessary entry fields for recording the assigned put option - purchase transaction.<br>
  <br>

  <ul>
    <li><strong>Shares:</strong> the number of shares being purchased by the assigned option. This value is defaulted in and derived by [option contracts assigned x shares per contract].<br><br></li>
    <li><strong>Price:</strong> the assigned share price at which the owner must purchase the underlying stock. This value is defaulted in from the option descriptive information entered into the Investment Account Manager Asset Library.<br><br></li>
    <li><strong>Commissions and Fees:</strong> enter the commissions and fees associated with the purchase transaction that are included in the net amount of the transaction.<br><br></li>
    <li>
      <strong>Net Amount:</strong> the net total cost for the assigned option purchase transaction. Net amount is automatically calculated by Investment Account Manager [(shares purchased x share purchase price) + commissions]. It can be manually adjusted to account for additional fees or costs associated with the purchase transaction.<br>
      <ul>
        <li>Important Note: the net amount represents the cash amount that will be deducted from a money market fund if selected. This is NOT the cost basis assigned to the shares acquired. See below.<br><br></li>
      </ul>
    </li>
    <li><strong>Option Premium:</strong> this is the original put option premium received. This option premium is subtracted from the net amount of the underlying stock purchase transaction, and this total represents the cost basis assigned to the shares acquired as required by IRS rules (see IRS publication 550).<br><br></li>
    <li><strong>Total:</strong> total is automatically calculated by Investment Account Manager and is the difference between net amount -- option premium. This total represents the cost basis assigned to the shares acquired by having the put option assigned as required by IRS rules (see IRS publication 550). This field cannot be edited.<br><br></li>
    <li><strong>Transaction Notes:</strong> an optional entry, use this area to record transaction notes or reminders.<br><br></li>
  </ul>
  <br>

  <strong>Note:</strong> when deriving performance for an assigned put option, since the original premium received has been deducted from the net amount of the underlying stock sale transaction, this premium is no longer included in the performance calculation of the option. In the cases where all option contracts held have been assigned, the performance report will show *^* to indicate the assigned option.<br>
  <br>

  <strong>Exercised options:</strong> NOTE: IAM will automatically provide the appropriate transaction windows to be completed as a result of the exercise.<br>
  <br>

  <ul>
    <li><strong>Exercised Option Call:</strong> An Exercised transaction occurs when the owner of an opening buy option contract 'exercises' his option rights. For an opening buy call option, the option owner exercises his right to purchase the underlying stock at the pre-defined exercise price.<br><br></li>
    <li><strong>Exercise Put Option:</strong> An Exercised transaction occurs when the owner of an opening buy option contract 'exercises' his option rights. For an opening buy put option, the option owner exercises his right to sell the underlying stock at the pre-defined exercise price.<br><br></li>
  </ul>
  <br>

  <strong>Expired options:</strong>  An expired option transaction occurs when the rights associated with the opening buy or opening sale cease to exist. The option has expired worthless. This occurs on the expiration date of the option.  IAM will close out the position, and record the associated gain or loss as short or long-term capital gain, as is appropriate.<br>
  <br>

  <img src="images/how-to-iam-with-equity-options8.jpg" alt=""><br>
  <br>

  The top portion of this screen indicates the expiration (trade) date, security symbol, security description, type of option (call or put), recent price, exercise price and expiration date. A summary band is shown that indicates the total quantity currently held, the total cost basis, and the total current market value for the option. The lower portion of this screen automatically defaults in the expired option details since all option contracts held have expired worthless. The transactions notes area can be used to record transaction notes or reminders.<br>
  <br>

  <strong>Button Choices</strong><br>
  <ul>
    <li><strong>Save:</strong> use this selection to save the expired option transaction.<br><br></li>
    <li>Use the <strong>Cancel</strong> button to quit without saving this purchase entry.<br><br></li>
  </ul>
  <br>

  NOTE: <strong>IRS Rules</strong> - If you have bought (holder) a call or put option, if the option expires worthless, report the cost of the option as a capital loss on the date it expires. The cost of the option is either a long-term or short-term capital loss, depending on your holding period, which ends on the expiration date.<br>
  <br>

  <strong><em>Example:</em></strong> Ten XYZ $25 call options were purchased for $4,000 on April 1st, 2016. These 10 options expired in December 2016. As a holder (buyer) of these options, you would recognize a short-term capital loss of $4,000.<br>
  <br>

  If you write (grant) a call or put, and if your obligation expires, the amount you received for writing the call or put is short-term capital gain.<br>
  <br>

  <strong><em>Example:</em></strong> Ten XYZ $25 call options were written for $4,000 on April 1st, 2016. These 10 options expired in December 2016. As a writer (seller) of these options, you would recognize a short-term capital gain of $4,000.<br>
  <br>

  <strong>Special considerations for put option buyers:</strong><br>
  You may need to manually edit the cost basis date of securities held when you buy a put on the underlying security. To edit cost basis, use Investment Account Manager's Edit/Delete transaction feature. This is due to what is known as the Poison Put Rule which will set your holding period back to zero. Check with your tax advisor.<br>
  <br>

  Explanation: Put option as short sale.  Buying a put option is generally treated as a short sale, and the exercise, sale, or expiration of the put is a closing of the short sale. If you have held the underlying stock for 1 year or less at the time you buy the put, any gain on the exercise, sale, or expiration of the put is a short-term capital gain. The same is true if you buy the underlying stock after you buy the put but before its exercise, sale, or expiration. Your holding period for the underlying stock begins on the earliest of:  the date you dispose of the stock, the date you exercise the put, the date you sell the put, or the date the put expires. <em>Source: IRS Publication 550.</em>
</article>

<div class="darkgray whitetext footer bt">
  <article>
    <h2>NEED HELP? TRY OUR <a href="support.php">SUPPORT</a> PAGE</h2>
  </article>
</div>

<?php include "footer.php"; ?>