<?php $count = $_POST['count']; ?>
<?php $url = $_POST['url']; ?>


<a href="#">
    <i class="fa fa-angle-left"></i>
</a>
<?php $tabCount = 1; ?>
<?php for ($i = 0; $i < $count; $i++) : ?>
    <a href="<?php echo($url . '&tab=' . $tabCount)?>">
        <?php echo ($tabCount) ?>
    </a>
        <?php $tabCount++; ?>
<?php endfor ?>
<a href="#">
    <i class="fa fa-angle-right"></i>
</a>