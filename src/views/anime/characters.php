<?php $characterResult = json_decode($_POST['response']); ?>

<section class="module" style="padding-top: 35px;">
    <div class="row multi-columns-row post-columns">
        <?php $index = 0; ?>
        <?php $count = count($characterResult->data); ?>
        <?php $characterResult = $characterResult->data; ?>
        <?php foreach ($characterResult as $characterResult => $content) : ?>
            <div style="height:357px" class="col-md-2">
                <div class="post">
                    <div class="post-thumbnail">
                        <a href="#">
                            <img style="height:155px; width:99px" src="<?php echo ($content->character->images->jpg->image_url); ?>" />
                        </a>
                    </div>
                    <div class="post-header font-alt">
                        <h2 class="post-title">
                            <a href="#">
                                <?php $characterName = str_replace(',', ' ', implode(",", array_reverse(explode(',', $content->character->name)))) ?>
                                <?php echo ($characterName) ?>
                            </a>
                        </h2>
                        <div class="post-meta">
                            <?php echo ($content->role) ?>
                        </div>
                    </div>
                    <div class="post-entry">
                    </div>
                    <div class="post-more">
                        <a class="more-link" href="#">Read more</a>
                    </div>
                </div>
            </div>
            <?php $index++; ?>
            <?php if (($index % 6) == 0) : ?>
                </hr>
            <?php endif ?>
            <?php if ($index == 18) : ?>
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
            <?php if (($i % 18) == 0) : ?>
                <a href="#"><?php echo ($tabCount) ?></a>
                <?php $tabCount++; ?>
            <?php endif ?>
        <?php endfor ?>
        <a href="#">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</section>