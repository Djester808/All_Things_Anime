<div class="widget">
    <h5 class="widget-title font-alt">Tags</h5>
    <div class="tags font-serif">
        <a href="#" rel="tag"><?php echo ($selectedAnime['type']) ?></a>
        <?php
        foreach ($selectedAnime['demographics'] as $demo) {
            echo ('<a href="#" rel="tag">' . $demo['name'] . '</a>');
        }

        foreach ($selectedAnime['themes'] as $theme) {
            echo ('<a href="#" rel="tag">' . $theme['name'] . '</a>');
        }
        ?>
    </div>
</div>