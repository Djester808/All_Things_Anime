<div class="widget">
  <h5 class="widget-title font-alt">Top 5 Anime of All Time</h5>
  <ul class="widget-posts">
    <?php
    $data = array_slice(getTopAnime(), 0, 5);
    foreach ($data as $key => $anime) {
      echo ('<li class="clearfix">
                      <div class="widget-posts-image">
                        <a href="#">
                          <img href="/all_things_anime/src/views/anime/view-anime.php?id=' . $anime["mal_id"] . '" src="' . $anime["images"]["jpg"]["image_url"] . '" alt="Post Thumbnail" />
                        </a>
                      </div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title">
                          <a href="/all_things_anime/src/views/anime/view-anime.php?id=' . $anime["mal_id"] . '">' . $anime["title"] . '</a>
                        </div>
                        <div class="widget-posts-meta">
                          <div class="col-md-6" style="padding-left:unset">
                            <span class="muted">
                              <i class="fa fa-fw"></i>
                              ' . ' ' . $anime["score"] . '
                            </span>
                          </div>
                        </div>
                      </div>
                    </li>');
    }
    ?>
  </ul>
</div>