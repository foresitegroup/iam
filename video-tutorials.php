
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
    <section>
      <h2 id="general">General Features</h2>
      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=gHlQY4vjPrw&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="gHlQY4vjPrw"></a>

        <div class="video-box-text">
          <h4>Getting Started</h4>
          5:40
        </div>
      </div>

      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=Zr4_qbYTOYQ&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="Zr4_qbYTOYQ"></a>

        <div class="video-box-text">
          <h4>Home Page</h4>
          5:39
        </div>
      </div>

      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=qy_SDpFtQJg&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="qy_SDpFtQJg"></a>

        <div class="video-box-text">
          <h4>Reports</h4>
          8:13
        </div>
      </div>

      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=WOqUKI3hpio&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="WOqUKI3hpio"></a>

        <div class="video-box-text">
          <h4>Activity Ledger</h4>
          5:34
        </div>
      </div>

      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=rtFFDFtyN7Y&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="rtFFDFtyN7Y"></a>

        <div class="video-box-text">
          <h4>Current Asset Library</h4>
          7:32
        </div>
      </div>

      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=oJpE7py3itw&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="oJpE7py3itw"></a>

        <div class="video-box-text">
          <h4>Historic Price Library</h4>
          6:04
        </div>
      </div>
    </section>

    
    <section>
    <h2 id="portfolio-setup-wizard">Portfolio Setup Wizard Features</h2>
      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=haAsNSbTGJI&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="haAsNSbTGJI"></a>

        <div class="video-box-text">
          <h4>Manually Enter Current Holdings</h4>
          6:24
        </div>
      </div>

      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=a0Aq__qJHnA&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="a0Aq__qJHnA"></a>

        <div class="video-box-text">
          <h4>Download Current Holdings From Your Financial Institution</h4>
          5:38
        </div>
      </div>

      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=DT9Vk3rmgc0&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="DT9Vk3rmgc0"></a>

        <div class="video-box-text">
          <h4>Import Current Holdings From A Microsoft XLS/CSV File</h4>
          4:55
        </div>
      </div>
    </section>


    <section>
      <h2 id="historical-accurate-portfolio">Historical Accurate Portfolio</h2>
      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=aDEz7hD0k-w&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="aDEz7hD0k-w"></a>

        <div class="video-box-text">
          <h4>Historical Accurate Portfolio Part 1</h4>
          8:10
        </div>
      </div>

      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=vB0orNAvUiw&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="vB0orNAvUiw"></a>

        <div class="video-box-text">
          <h4>Historical Accurate Portfolio Part 2</h4>
          8:07
        </div>
      </div>

      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=Lfqb0TqQzNg&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="Lfqb0TqQzNg"></a>

        <div class="video-box-text">
          <h4>Historical Accurate Portfolio Part 3</h4>
          7:53
        </div>
      </div>
    </section>


    <section>
      <h2 id="quotemedia">QuoteMedia Data Feed Features</h2>
      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=TMkE_YTQaBk&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="TMkE_YTQaBk"></a>

        <div class="video-box-text">
          <h4>QuoteMedia Data Feed: Updating New Securities</h4>
          5:50
        </div>
      </div>

      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=V7eE6-QEDIU&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="V7eE6-QEDIU"></a>

        <div class="video-box-text">
          <h4>QuoteMedia Data Feed: Updating Existing Securities</h4>
          4:54
        </div>
      </div>
    </section>

    
    <section>
      <h2 id="portfolio-allocation">Portfolio Allocation Features</h2>
      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=EzL-01ew4Kc&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="EzL-01ew4Kc"></a>

        <div class="video-box-text">
          <h4>Asset Allocation (1): Setting Portfolio Allocation Targets</h4>
          5:38
        </div>
      </div>

      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=uj5-r-su6eM&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="uj5-r-su6eM"></a>

        <div class="video-box-text">
          <h4>Asset Allocation (2): Current Allocations &amp; Rebalancing</h4>
          7:17
        </div>
      </div>
    </section>

    
    <section>
      <h2 id="portfolio-performance">Portfolio Performance Features</h2>
      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=gLGX-4FpGI0&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="gLGX-4FpGI0"></a>

        <div class="video-box-text">
          <h4>Performance (1): Creating Historical Price Files</h4>
          4:39
        </div>
      </div>

      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=RcAObzZzdXQ&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="RcAObzZzdXQ"></a>

        <div class="video-box-text">
          <h4>Performance (2): Portfolio Performance Report</h4>
          6:11
        </div>
      </div>

      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=sgHT2GfA7mg&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="sgHT2GfA7mg"></a>

        <div class="video-box-text">
          <h4>Performance (3): Deriving and Storing Performance Returns</h4>
          4:24
        </div>
      </div>

      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=v2mhEwlyaSg&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="v2mhEwlyaSg"></a>

        <div class="video-box-text">
          <h4>Performance (4): Defining Benchmark Indices</h4>
          4:39
        </div>
      </div>

      <div class="video-box">
        <a href="https://www.youtube.com/watch?v=-QPN-jU6k2I&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="-QPN-jU6k2I"></a>

        <div class="video-box-text">
          <h4>Performance (5): Portfolio Performance Comparisons</h4>
          4:15
        </div>
      </div>
    <section>
  </article>
</div>

<div class="darkgray whitetext footer">
  <article>
    <h2>NEED HELP? TRY OUR <a href="support.php">SUPPORT</a> PAGE</h2>
  </article>
</div>

<?php include "footer.php"; ?>