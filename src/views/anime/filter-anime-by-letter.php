<?php if (isset($_REQUEST['letter']) && isset($_REQUEST['tab'])) : ?>
    <?php $selectedLetter = $_REQUEST['letter'] ?>
    <?php $tab = $_REQUEST['tab'] ?>
<?php endif ?>

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
        <div class="main showcase-page">
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
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-13">
                            <h4 class="font-alt mb-0">Search Anime A - Z...</h4>
                            <hr class="divider-w mt-10 mb-20">
                            <div role="tabpanel">
                                <ul class="nav nav-tabs font-alt" role="tablist">
                                    <?php $alphas = array_merge(range('A', 'Z')); ?>
                                    <?php foreach ($alphas as $alphas => $letter) : ?>
                                        <?php $active; ?>
                                        <?php if (isset($selectedLetter)) : ?>
                                            <?php $active = $letter == $selectedLetter ? 'active' : ''; ?>
                                        <?php else : ?>
                                            <?php $active = $letter == 'A' ? 'active' : ''; ?>
                                        <?php endif ?>
                                        <li class="<?php echo ($active) ?>">
                                            <a href="#animeList" data-toggle="tab" value="<?php echo ($letter) ?>" onclick="getLetterContent('<?php echo ($letter) ?>')">
                                                <?php echo ($letter) ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane multi-columns-row post-columns active" id="animeList"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="letterPagination" class="pagination font-alt" style="width: 100%; text-align: center;"> </div>
                </div>
            </section>
        </div>
        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <?php include_once($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/src/views/navigation/scripts.html') ?>
</body>
<?php include_once($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/src/views/navigation/footer.html') ?>

</html>

<script>
    getLetterContent('<?php echo($selectedLetter) ?>');

    function getLetterContent(value) {
        const animeTab = document.getElementById("animeList");
        while (animeTab.firstChild) {
            animeTab.removeChild(animeTab.lastChild);
        }

        jQuery(function($) {
            $.getJSON('https://api.jikan.moe/v4/anime?letter=' + value, function(response) {
                const requests = response.data.map(val => new Promise((resolve, reject) => {
                    $.get("../view-by-letter.php", {
                            id: val.mal_id,
                            title: val.title,
                            img_url: val.images.jpg.image_url
                        })
                        .done(html => resolve(html))
                        .fail((xhr, textStatus, errorThrown) => reject(errorThrown));
                }));

                Promise.all(requests).then(responses => {
                    responses.forEach(html => {
                        $("#animeList").append(html);
                    });
                });


                $("#letterPagination").load("/all_things_anime/src/views/navigation/pagination.php", {
                    count: response.pagination.last_visible_page,
                    url: '/all_things_anime/src/views/anime/filter-anime-by-letter.php?letter=' + value
                });
            });
        });
    }
</script>