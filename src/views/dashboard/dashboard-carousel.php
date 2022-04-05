<?php $result = json_decode($_POST['response']); ?>
<?php if (boolval($result->pagination->has_next_page)) : ?>
    <div style="text-align: right;">
        <a>View More</a>
    </div>
<?php endif ?>
<div class="owl-carousel owl-theme">
    <?php $result = $result->data; ?>
    <?php foreach ($result as $result => $content) : ?>
        <div class="item">
            <a href="/all_things_anime/src/views/anime/view-anime.php?id=<?php echo ($content->mal_id) ?>">
                <img src="<?php echo ($content->images->jpg->image_url) ?>" alt="Blog Featured Image" />
            </a>
            <a href="/all_things_anime/src/views/anime/view-anime.php?id=<?php echo ($content->mal_id) ?>">
                <p style="text-align:center;"> <?php echo ($content->title) ?> </p>
            </a>
        </div>
    <?php endforeach ?>
</div>

<script>
    $('.owl-carousel').owlCarousel({
        rtl: false,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
</script>