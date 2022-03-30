<div class="col-md-3 sidebar">
  <div class="widget">
    <h5 class="widget-title font-alt">Posters</h5>
    <div class="post-images-slider home-parallax">
      <ul class="slides">
        <?php
        $url = $_SERVER['REQUEST_URI'];
        $parts = parse_url($url);
        parse_str($parts['query'], $query);
        if ($query['id'] != null) {
          $selectedAnimeImgs = getAnimeImgs($query['id']);
          shuffle($selectedAnimeImgs);
          foreach($selectedAnimeImgs as $key => $img ) {
            echo('<li>
              <img class="center-block" src="' . $img['webp']['large_image_url'] . '" />
            </li>');
          }
        }
        ?>
      </ul>
    </div>
  </div>
  <?php include 'top-five.php' ?>
  <div class="widget">
    <h5 class="widget-title font-alt">Tag</h5>
    <div class="tags font-serif"><a href="#" rel="tag">Blog</a><a href="#" rel="tag">Photo</a><a href="#" rel="tag">Video</a><a href="#" rel="tag">Image</a><a href="#" rel="tag">Minimal</a><a href="#" rel="tag">Post</a><a href="#" rel="tag">Theme</a><a href="#" rel="tag">Ideas</a><a href="#" rel="tag">Tags</a><a href="#" rel="tag">Bootstrap</a><a href="#" rel="tag">Popular</a><a href="#" rel="tag">English</a>
    </div>
  </div>
  <div class="widget">
    <h5 class="widget-title font-alt">Text</h5>The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.
  </div>
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