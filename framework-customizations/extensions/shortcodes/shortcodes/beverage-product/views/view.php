<?php if (!defined('FW')) {
    die('Forbidden');
}
/*fw_print($atts);*/
?>

<!-- start get.html-->
<section class="get" id="get">

    <div class="container">

        <h3 class="get__title"><?php echo $atts['title1'];?></h3>

        <ul>
            <?php foreach ($atts['list1'] as $item): ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>

    </div>

</section>
<!-- end get.html-->