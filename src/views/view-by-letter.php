<?php include($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/src/http-api/jikan.php') ?>

<div style="height:357px" class="col-md-2">
    <div class="post">
        <div class="post-thumbnail">
            <a href="#">
                <img src="<?php echo ($_GET['img_url']) ?> " />
            </a>
        </div>
        <div class="post-header font-alt">
            <h2 class="post-title">
                <a href="view-anime.php?<?php echo($_GET['id']) ?>">
                    <?php
                    $title = $_GET['title'];
                    if (strlen($title) <= 60) {
                        echo ($title);
                    } else {
                        echo(substr_replace($title, "...", 40));
                    }
                    ?>
                </a>
            </h2>
        </div>
    </div>
</div>