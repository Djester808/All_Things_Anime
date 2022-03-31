<section class="module">
    <div class="row multi-columns-row post-columns">
        <?php
        $animeEpisodes = getAnimeEpisodeList($query['id']);
        $index = 0;
        $count = count($animeEpisodes);

        foreach ($animeEpisodes as $episode) {
            $episodeData = getAnimeEpisodeDetails($query['id'], $episode['mal_id']);
            echo ('<div class="col-md-6">
                <div class="post">
                    <div class="post-header font-alt">
                    <h2 class="post-title">
                        <a href="#">' . $episode['title'] . '</a>
                    </h2>
                    <div class="post-meta">
                        Aired:&nbsp;' . date("m-d-Y", strtotime($episodeData['aired'])) . '
                    </div>
                    </div>
                    <div class="post-entry">
                    <p>' . substr_replace($episodeData['synopsis'], "...", 200) . '</p>
                    </div>
                    <div class="post-more">
                    <a class="more-link" href="#">Read more</a>
                    </div>
                </div>
            </div>');
            $index++;

            if ($index == 4) {
                break;
            }
        }
        ?>
    </div>
    <div class="pagination font-alt" style="width: 100%; text-align: center;">
            <a href="#">
                <i class="fa fa-angle-left"></i>
            </a>
            <?php
            $tabCount = 1;
            for ($i = 0; $i < $count; $i++) {
                if (($i % 4) == 0) {
                    echo ('<a href="#">' . $tabCount . '</a>');
                    $tabCount++;
                }
            }
            ?>
            <a href="#">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
</section>
