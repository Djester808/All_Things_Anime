<?php include($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/src/http-api/jikan.php') ?>
<?php $episodeResult = json_decode($_POST['response']); ?>

<section class="module" style="padding-top: 35px;">
    <div class="row multi-columns-row post-columns">
        <?php $index = 0; ?>
        <?php $id = $_POST['id']; ?>
        <?php $count = count($episodeResult->data); ?>
        <?php $episodeResult = $episodeResult->data; ?>
        <?php foreach ($episodeResult as $episode => $content) : ?>
            <?php $episodeData = getAnimeEpisodeDetails($id, $content->mal_id); ?>
            <div class="col-md-6">
                <div class="post">
                    <div class="post-header font-alt">
                        <h2 class="post-title">
                            <a href="#"><?php echo ($content->title) ?></a>
                        </h2>
                        <div class="post-meta">
                            Aired:&nbsp; <?php echo (date("m-d-Y", strtotime($episodeData['aired']))) ?>
                        </div>
                    </div>
                    <div class="post-entry">
                        <p>
                            <?php echo (substr_replace($episodeData['synopsis'], "...", 200)) ?>
                        </p>
                    </div>
                    <div class="post-more">
                        <a class="more-link" href="#">Read more</a>
                    </div>
                </div>
            </div>
            <?php $index++; ?>

            <?php if ($index == 4) : ?>
                <?php break; ?>
            <?php endif ?>
        <?php endforeach ?>
    </div>
    <div class="pagination font-alt" style="width: 100%; text-align: center;">
        <a href="#">
            <i class="fa fa-angle-left"></i>
        </a>
        <?php $tabCount = 1; ?>
        <?php for ($i = 0; $i < $count; $i++) : ?>
            <?php if (($i % 4) == 0) : ?>
                <a href="#">
                    <?php echo ($tabCount) ?>
                </a>
                <?php $tabCount++ ?>
            <?php endif ?>
        <?php endfor ?>
        <a href="#">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</section>
