
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
  <article>
    <h2>General</h2>
    <div class="video-box">
      <h5>Home Page</h5>
      This video introduces the IAM v3 'home page' features and functions.

      <a href="https://www.youtube.com/watch?v=Zr4_qbYTOYQ&rel=0&showinfo=0" class="swipebox-video" rel="Zr4_qbYTOYQ"></a>
    </div>


    <h2>Portfolio Setup Wizard</h2>
    <div class="video-box">
      <h5>Enter Holdings</h5>
      Review of IAM v3 Portfolio Setup Wizard, feature to manually enter current holdings.

      <a href="https://www.youtube.com/watch?v=haAsNSbTGJI&rel=0&showinfo=0" class="swipebox-video" rel="haAsNSbTGJI"></a>
    </div>

    <div class="video-box">
      <h5>Download Holdings</h5>
      Review of IAM v3 Portfolio Setup Wizard, feature to download current holdings from your financial institution.

      <a href="https://www.youtube.com/watch?v=a0Aq__qJHnA&rel=0&showinfo=0" class="swipebox-video" rel="a0Aq__qJHnA"></a>
    </div>

    <div class="video-box">
      <h5>Import from XLS / CVS</h5>
      Review of IAM v3 Portfolio Setup Wizard, feature to import a Microsoft XLS/csv file of your current holdings.

      <a href="https://www.youtube.com/watch?v=DT9Vk3rmgc0&rel=0&showinfo=0" class="swipebox-video" rel="DT9Vk3rmgc0"></a>
    </div>


    <h2>Portfolio Allocation Features</h2>
    <div class="video-box">
      <h5>Part 1 of 2 of Asset Allocation</h5>
      Review of features provided by IAM v3.

      <a href="https://www.youtube.com/watch?v=EzL-01ew4Kc&rel=0&showinfo=0" class="swipebox-video" rel="EzL-01ew4Kc"></a>
    </div>

    <div class="video-box">
      <h5>Part 2 of 2 of Asset Allocation</h5>
      Review of features provided by IAM v3.

      <a href="https://www.youtube.com/watch?v=uj5-r-su6eM&rel=0&showinfo=0" class="swipebox-video" rel="uj5-r-su6eM"></a>
    </div>


    <h2>Individual Performance Features</h2>
    <div class="video-box">
      <h5>Creating Historical Price Files</h5>
      Review of IAM v3 Performance Features.

      <a href="https://www.youtube.com/watch?v=gLGX-4FpGI0&rel=0&showinfo=0" class="swipebox-video" rel="gLGX-4FpGI0"></a>
    </div>

    <div class="video-box">
      <h5>Performance Report</h5>
      Review of IAM v3 Performance Features.

      <a href="https://www.youtube.com/watch?v=RcAObzZzdXQ&rel=0&showinfo=0" class="swipebox-video" rel="RcAObzZzdXQ"></a>
    </div>

    <div class="video-box">
      <h5>Deriving and Storing Portfolio Performance Returns</h5>
      Review of IAM v3 Performance Features.

      <a href="https://www.youtube.com/watch?v=sgHT2GfA7mg&rel=0&showinfo=0" class="swipebox-video" rel="sgHT2GfA7mg"></a>
    </div>

    <div class="video-box">
      <h5>Defining Portfolio Benchmark Indices</h5>
      Review of IAM v3 Performance Features.

      <a href="https://www.youtube.com/watch?v=v2mhEwlyaSg&rel=0&showinfo=0" class="swipebox-video" rel="v2mhEwlyaSg"></a>
    </div>

    <div class="video-box">
      <h5>Portfolio Performance Comparison</h5>
      Review of IAM v3 Performance Features.

      <a href="https://www.youtube.com/watch?v=-QPN-jU6k2I&rel=0&showinfo=0" class="swipebox-video" rel="-QPN-jU6k2I"></a>
    </div>
  </article>
</div>

<div class="darkgray whitetext footer">
  <article>
    <h2>NEED HELP? TRY OUR <a href="support.php">SUPPORT</a> PAGE</h2>
  </article>
</div>

<?php include "footer.php"; ?>