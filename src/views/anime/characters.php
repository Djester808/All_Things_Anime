<?php include($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/src/http-api/jikan.php') ?>

<section class="module" style="padding-top: 35px;">
    <div class="row multi-columns-row post-columns">
        <?php
        $id = $_REQUEST['id'];
        $animeCharacters = getAnimeCharacterList($id);
        $index = 0;
        $count = count($animeCharacters);

        foreach ($animeCharacters as $character) {
            $characterName = str_replace(',', ' ', implode(",", array_reverse(explode(',', $character['character']['name']))));
            echo ('<div style="height:357px" class="col-md-2">
                <div class="post">
                    <div class="post-thumbnail">
                        <a href="#">
                            <img style="height:155px; width:99px" src="' . $character['character']['images']['jpg']['image_url'] . '" alt="/all_things_anime/assets/images/no-image-person.png"/>
                        </a>
                    </div>
                    <div class="post-header font-alt">
                        <h2 class="post-title">
                            <a href="#">' . $characterName . '</a>
                        </h2>
                        <div class="post-meta">
                            ' . $character['role'] . '
                        </div>
                    </div>
                    <div class="post-entry">
                    </div>
                    <div class="post-more">
                        <a class="more-link" href="#">Read more</a>
                    </div>
                </div>
            </div>');
            $index++;

            if (($index % 6) == 0) {
                echo ('</hr>');
            }

            if ($index == 18) {
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
            if (($i % 18) == 0) {
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