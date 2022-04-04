<div class="col-md-3 sidebar">
  <div class="widget">
    <h5 class="widget-title font-alt">Posters</h5>
    <div class="post-images-slider home-parallax">
      <ul class="slides">
        <?php
        if (stripos($_SERVER['REQUEST_URI'], 'view-anime.php')) {
          $url = $_SERVER['REQUEST_URI'];
          $parts = parse_url($url);
          parse_str($parts['query'], $query);
          if ($query['id'] != null) {
            $selectedAnimeImgs = getAnimeImgs($query['id']);
            shuffle($selectedAnimeImgs);
            foreach ($selectedAnimeImgs as $key => $img) {
              echo ('<li>
                <img class="center-block" src="' . $img['webp']['large_image_url'] . '" />
              </li>');
            }
          }
        }
        ?>
      </ul>
    </div>
  </div>
  <?php include 'top-five.php' ?>
  <?php
  if (stripos($_SERVER['REQUEST_URI'], 'view-anime.php')) {
    include 'tags.php';
  }
  ?>
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