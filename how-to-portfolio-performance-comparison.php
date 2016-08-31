
<?php
$PageTitle = "Portfolio Performance Comparison";
include "header.php";
?>

<div class="red mb">
  <article>
    <h1>PORTFOLIO PERFORMANCE COMPARISON</h1>
  </article>
</div>

<article class="how-to">
  Investment Account Manager is able to store performance results for individual portfolios.  These results can be derived and stored for monthly, quarterly or yearly periods.   These performance results are used for deriving comparison returns and are listed on the Portfolio Performance Comparison Report.<br>
  <br>

  Returns can be derived using the Internal Rate of Return (IRR) iterative model.  The internal rate of return calculates return for the period taking into effect the timing of each cash flow. The model properly weights the timing of cash flows (additions/withdrawals) for a portfolio or an individual asset, for a selected date range, to provide the return calculation. Internal rate of return can be equated to the compounded effective interest rate that a savings account would have had to earn in order to reach the portfolios' current present value including all investment flows (purchases, sales, income, interest, reinvestment, etc.), while adjusted for timing of the specific flows. <br>
  <br>

  <img src="images/how-to-portfolio-performance-comparison1.jpg" alt=""><br>
  <br>

  After deriving and storing the 3rd, 6th, 9th, or 12th month of a calendar year,  users will be prompted if they would like to derive the coinciding return for 1st, 2nd, 3rd or 4th quarter using geometric linking.  Likewise, when the 12th month of a calendar year has been derived, users will be prompted if they would like to derive the coinciding yearly return using geometric linking.  Geometrically linking provides a means of smoothing individual period returns and improves the measure of the time weighted rate of return by geometrically linking interim (sub period) IRR's.<br>
  <br>

  Once returns have been stored, users can plot the performance of their portfolio returns with comparisons to benchmark indices on the Investment Account Manager Portfolio Performance Tab and matching Portfolio Performance Comparison Report. The information provided on the Performance Comparison Report provides the illustration of the growth of $100 for the selected portfolio, and benchmark indices for the selected monthly, quarterly, or annual periods.<br>
  <br>

  <img src="images/how-to-portfolio-performance-comparison2.jpg" alt="">
</article>

<div class="darkgray whitetext footer bt">
  <article>
    <h2>NEED HELP? TRY OUR <a href="support.php">SUPPORT</a> PAGE</h2>
  </article>
</div>

<?php include "footer.php"; ?>