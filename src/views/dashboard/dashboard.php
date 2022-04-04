<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <?php include_once($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/src/views/navigation/head.php') ?>
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>
    <div class="page-loader">
      <div class="loader">Loading...</div>
    </div>
    <?php include_once($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/src/views/navigation/navbar.php') ?>
    <div class="main">
      <section class="module-extra-small bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-8 col-lg-9">
              <div class="callout-text font-alt">
                <h4 style="margin-top: 0px;">Discover what you love most</h4>
                <p style="margin-bottom: 0px;"> anime, manga, &amp; more!</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="callout-btn-box">
                <a class="btn btn-border-w btn-circle" href="dashboard.php">Get Started!</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="module-small">
        <div class="container">
          <div class="row">
            <?php include_once($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/src/views/navigation/sidebar/side-bar.php') ?>
            <div class="col-sm-8 col-sm-offset-1">
              <div class="post" style="margin: unset;">
                <div class="post-header font-alt post-header-custom">
                  <h1 class="post-title post-title-custom">Current Streaming Anime Hits...</h1>
                  <!-- <div class="post-meta">By&nbsp;<a href="auth/404.php">Mark Stone</a>| 23 November | 3 Comments | <a href="#">Photography, </a><a href="#">Web Design</a>
                  </div> -->
                </div>
                <div id="topSeasonalAnime" class="post-entry"></div>
              </div>
              <div class="post" style="margin: unset;">
                <div class="post-header font-alt post-header-custom">
                  <h1 class="post-title post-title-custom">Hot Off The Presses...</h1>
                  <!-- <div class="post-meta">By&nbsp;<a href="auth/404.php">Mark Stone</a>| 23 November | 3 Comments | <a href="#">Photography, </a><a href="#">Web Design</a>
                  </div> -->
                </div>
                <div id="currentPublishingManga" class="post-entry"></div>
              </div>
              <div class="post" style="margin: unset;">
                <div class="post-header font-alt post-header-custom">
                  <h1 class="post-title post-title-custom">This Seasons Anime Releases...</h1>
                  <!-- <div class="post-meta">By&nbsp;
                    <a href="auth/404.php">Mark Stone</a>| 23 November | 3 Comments | <a href="#">Photography, </a><a href="#">Web Design</a>
                  </div> -->
                </div>
                <div id="seasonalAnime" class="post-entry"></div>
              </div>
              <div class="post" style="margin: unset;">
                <div class="post-header font-alt post-header-custom">
                  <h1 class="post-title post-title-custom">Shows That Are Worth The Wait...</h1>
                  <!-- <div class="post-meta">By&nbsp;<a href="auth/404.php">Mark Stone</a>| 23 November | 3 Comments | <a href="#">Photography, </a><a href="#">Web Design</a>
                  </div> -->
                </div>
                <div id="upcomingAnime" class="post-entry"></div>
              </div>
              <div class="post" style="margin: unset;">
                <div class="post-header font-alt post-header-custom">
                  <h1 class="post-title post-title-custom">Can't Wait To Read...</h1>
                  <!-- <div class="post-meta">By&nbsp;<a href="auth/404.php">Mark Stone</a>| 23 November | 3 Comments | <a href="#">Photography, </a><a href="#">Web Design</a>
                  </div> -->
                </div>
                <div id="upcomingManga" class="post-entry"></div>
                <div class="comments">
                  <h4 class="comment-title font-alt">There are 3 comments</h4>
                  <div class="comment clearfix">
                    <div class="comment-avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/ryanbattles/128.jpg" alt="avatar" /></div>
                    <div class="comment-content clearfix">
                      <div class="comment-author font-alt"><a href="#">John Doe</a></div>
                      <div class="comment-body">
                        <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
                      </div>
                      <div class="comment-meta font-alt">Today, 14:55 - <a href="#">Reply</a>
                      </div>
                    </div>
                    <div class="comment clearfix">
                      <div class="comment-avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/draganbabic/128.jpg" alt="avatar" /></div>
                      <div class="comment-content clearfix">
                        <div class="comment-author font-alt"><a href="#">Mark Stone</a></div>
                        <div class="comment-body">
                          <p>Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
                        </div>
                        <div class="comment-meta font-alt">Today, 15:34 - <a href="#">Reply</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="comment clearfix">
                    <div class="comment-avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/pixeliris/128.jpg" alt="avatar" /></div>
                    <div class="comment-content clearfix">
                      <div class="comment-author font-alt"><a href="#">Andy</a></div>
                      <div class="comment-body">
                        <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
                      </div>
                      <div class="comment-meta font-alt">Today, 14:59 - <a href="#">Reply</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="comment-form">
                  <h4 class="comment-form-title font-alt">Add your comment</h4>
                  <form method="post">
                    <div class="form-group">
                      <label class="sr-only" for="name">Name</label>
                      <input class="form-control" id="name" type="text" name="name" placeholder="Name" />
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="email">Name</label>
                      <input class="form-control" id="email" type="text" name="email" placeholder="E-mail" />
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" id="comment" name="comment" rows="4" placeholder="Comment"></textarea>
                    </div>
                    <button class="btn btn-round btn-d" type="submit">Post comment</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </section>
      <div class="module-small bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <div class="widget">
                <h5 class="widget-title font-alt">About Titan</h5>
                <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                <p>Email:<a href="#">somecompany@example.com</a></p>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="widget">
                <h5 class="widget-title font-alt">Recent Comments</h5>
                <ul class="icon-list">
                  <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                  <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                  <li>Andy on <a href="#">Eco bag Mockup</a></li>
                  <li>Jack on <a href="#">Bottle Mockup</a></li>
                  <li>Mark on <a href="#">Our trip to the Alps</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="widget">
                <h5 class="widget-title font-alt">Blog Categories</h5>
                <ul class="icon-list">
                  <li><a href="#">Photography - 7</a></li>
                  <li><a href="#">Web Design - 3</a></li>
                  <li><a href="#">Illustration - 12</a></li>
                  <li><a href="#">Marketing - 1</a></li>
                  <li><a href="#">Wordpress - 16</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="widget">
                <h5 class="widget-title font-alt">Popular Posts</h5>
                <ul class="widget-posts">
                  <li class="clearfix">
                    <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-1.jpg" alt="Post Thumbnail" /></a></div>
                    <div class="widget-posts-body">
                      <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                      <div class="widget-posts-meta">23 january</div>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-2.jpg" alt="Post Thumbnail" /></a></div>
                    <div class="widget-posts-body">
                      <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                      <div class="widget-posts-meta">15 February</div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
  </main>
  <?php include_once($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/src/views/navigation/scripts.html') ?>
</body>
<?php include_once($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/src/views/navigation/footer.html') ?>

</html>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
      insertTopSeasonalAnime()
    }, 500);
    setTimeout(function() {
      insertCurrentPublishingManga()
    }, 500);
    setTimeout(function() {
      insertCurrentSeasonalAnime()
    }, 500);
    setTimeout(function() {
      insertUpcomingAnime()
    }, 500);
    setTimeout(function() {
      insertUpcomingManga()
    }, 500);
  });

  function insertTopSeasonalAnime() {
    jQuery(function($) {
      $.getJSON("https://api.jikan.moe/v4/top/anime?filter=airing", function(response) {
        $("#topSeasonalAnime").load("dashboard-carousel.php", {
          response: JSON.stringify(response)
        });
      });
    });
  }

  function insertCurrentPublishingManga() {
    jQuery(function($) {
      $.getJSON("https://api.jikan.moe/v4/top/manga?filter=publishing", function(response) {
        $("#currentPublishingManga").load("dashboard-carousel.php", {
          response: JSON.stringify(response)
        });
      });
    });
  }

  function insertCurrentSeasonalAnime() {
    jQuery(function($) {
      $.getJSON("https://api.jikan.moe/v4/seasons/now", function(response) {
        $("#seasonalAnime").load("dashboard-carousel.php", {
          response: JSON.stringify(response)
        });
      });
    });
  }

  function insertUpcomingAnime() {
    jQuery(function($) {
      $.getJSON("https://api.jikan.moe/v4/seasons/upcoming?filter=upcoming", function(response) {
        $("#upcomingAnime").load("dashboard-carousel.php", {
          response: JSON.stringify(response)
        });
      });
    });
  }

  function insertUpcomingManga() {
    jQuery(function($) {
      $.getJSON("https://api.jikan.moe/v4/top/manga?filter=upcoming", function(response) {
        $("#upcomingManga").load("dashboard-carousel.php", {
          response: JSON.stringify(response)
        });
      });
    });
  }
</script>