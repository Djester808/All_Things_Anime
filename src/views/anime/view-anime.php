<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <?php include($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/src/views/navigation/head.php') ?>
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <?php
  $url = $_SERVER['REQUEST_URI'];
  $parts = parse_url($url);
  parse_str($parts['query'], $query);
  $selectedAnime = getAnimeById($query['id']);
  ?>
  <main>
    <div class="page-loader">
      <div class="loader">Loading...</div>
    </div>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/src/views/navigation/navbar.php') ?>
    <section class="home-section bg-dark-30" id="home" data-background="assets/images/section-5.jpg">
      <div class="video-player" data-property="{videoURL:'<?php echo ($selectedAnime['trailer']['url']) ?>', showYTLogo:true, cc_load_policy:false, containment:'.home-section', startAt:02, mute:false, autoPlay:true, loop:false, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
      <div class="video-controls-box">
        <div class="container">
          <div class="video-controls">
            <a class="fa fa-volume-up" id="video-volume" href="#">&nbsp;</a>
            <a class="fa fa-pause" id="video-play" href="#">&nbsp;</a>
            <a class="fa fa-youtube" id="youtube" href="<?php echo ($selectedAnime['trailer']['url']) ?>">&nbsp;</a>
          </div>
        </div>
      </div>
      <div class="titan-caption">
        <div class="caption-content">
          <div class="font-alt mb-40 titan-title-size-4">
            <?php echo ($selectedAnime['title']) ?>
          </div>
        </div>
      </div>
    </section>
    <div class="main">
      <section class="module-small">
        <div class="container">
          <div class="row">
            <?php include($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/src/views/navigation/sidebar/side-bar.php') ?>
            <div class="col-sm-8 col-sm-offset-1">
              <div class="post">
                <div class="post-thumbnail">
                </div>
                <div class="post-header font-alt">
                  <?php
                  echo ('<h1 id=postTitle value="' . $selectedAnime['mal_id'] . '" class="post-title">');
                  echo ($selectedAnime['title'])
                  ?>
                  </h1>
                  <div class="post-meta">
                    <?php echo ($selectedAnime['type']) ?> |
                    Episodes: <?php echo ($selectedAnime['episodes']) ?> |
                    Aired: <?php echo (date("m-d-Y", strtotime($selectedAnime['aired']['from']))) ?> - <?php echo (date("m-d-Y", strtotime($selectedAnime['aired']['to']))) ?> |
                    Rank: <?php echo ($selectedAnime['rank']) ?>
                  </div>
                </div>
                <div class="post-entry">
                  <p>
                    <?php echo ($selectedAnime['synopsis']) ?>
                  </p>
                </div>
              </div>
              <div class="post">
                <div class="post-entry">
                  <div role="tabpanel">
                    <ul class="nav nav-tabs font-alt" role="tablist">
                    <li class="active">
                        <a href="#characters" data-toggle="tab">
                          <span class="icon-tools-2"></span>Characters
                        </a>
                      </li>
                      <li>
                        <a href="#episodes" data-toggle="tab">
                          <span class="icon-tools-2"></span>Episodes
                        </a>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="character">
                        The European languages are members of the same family. Their separate existence is a myth.
                      </div>
                      <div class="tab-pane" id="episodes">
                        <?php include('episodes.php') ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
  <?php include($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/src/views/navigation/scripts.html') ?>
</body>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/src/views/navigation/footer.html') ?>

</html>

<script>
  function loadThis() {
    var id = $('#postTitle').attr('value')
    $("#episodes").load("view-anime-tab.php", {
      id: id,
    });
  }
</script>