
<?php
$PageTitle = "Tutorials";
include "header.php";
?>

<div class="red whitetext mb">
  <article>
    <h1>TUTORIALS</h1>
  </article>
</div>

<article class="video-intro">
  Designed by professional money managers, and used by investors worldwide in related forms since 1985, the Investment Account Manager's purpose is to help you better understand and manage your investment portfolios. Whether you're a seasoned investor or a novice, you'll find Investment Account Manager (IAM) offers a comprehensive set of features, yet is an easy to learn and use portfolio management software tool.
</article>

<script src="inc/masonry.pkgd.min.js"></script>
<link rel="stylesheet" href="inc/swipebox/swipebox.css">
<script type="text/javascript" src="inc/swipebox/jquery.swipebox.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".swipebox-video").swipebox({autoplayVideos: true});
    
    $(".swipebox-video").each(function() {
      var YouTubeID = $(this).attr("rel");
      $('.swipebox-video[rel="'+YouTubeID+'"]').css({"background-image": "url(https://img.youtube.com/vi/"+YouTubeID+"/maxresdefault.jpg)"});
    });
  });
</script>

<div class="videos">
  <article data-masonry='{ "itemSelector": ".video-box", "percentPosition": "true" }'>
    <div class="video-box">
      <h5>Home Page</h5>
      This tutorial video outlines the Investment Account Manager home page, its functions and its features.

      <a href="https://www.youtube.com/watch?v=Zr4_qbYTOYQ&rel=0&showinfo=0" class="swipebox-video" rel="Zr4_qbYTOYQ"></a>
    </div>
    
    <div class="video-box">
      <h5>Portfolio Setup Wizard: Quick Setup</h5>
      This tutorial video for Investment Account Manager will highlight the Portfolio Setup Wizard, the feature used to create your portfolio.
      
      <a href="https://www.youtube.com/watch?v=haAsNSbTGJI&rel=0&showinfo=0" class="swipebox-video" rel="haAsNSbTGJI"></a>
    </div>
    
    <div class="video-box">
      <h5>Portfolio Setup Wizard: Download Holdings</h5>
      This tutorial video for Investment Account Manager will review and highlight the Portfolio Setup Wizard that allows you to download your current holdings from your financial institution.
      
      <a href="https://www.youtube.com/watch?v=a0Aq__qJHnA&rel=0&showinfo=0" class="swipebox-video" rel="a0Aq__qJHnA"></a>
    </div>
    
    <div class="video-box">
      <h5>Portfolio Allocations Part 1</h5>
      This tutorial video is the first in a two part series on reviewing the Asset Allocation features provided by Investment Account Manager.
      
      <a href="https://www.youtube.com/watch?v=EzL-01ew4Kc&rel=0&showinfo=0" class="swipebox-video" rel="EzL-01ew4Kc"></a>
    </div>
    
    <div class="video-box">
      <h5>Portfolio Allocations Part 2</h5>
      This tutorial video is the second in a two part series on reviewing the Asset Allocation features provided by Investment Account Manager.
      
      <a href="https://www.youtube.com/watch?v=uj5-r-su6eM&rel=0&showinfo=0" class="swipebox-video" rel="uj5-r-su6eM"></a>
<!--       <div class="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/uj5-r-su6eM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div> -->
    </div>
  </article>
</div>

<div class="darkgray whitetext footer">
  <article>
    <h2>NEED HELP? TRY OUR <a href="support.php">SUPPORT</a> PAGE</h2>
  </article>
</div>

<?php include "footer.php"; ?>