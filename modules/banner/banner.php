<?php

/*
Title: Банер модуль
Mode: preview
*/

$headline = get_field('headline');
$phone = get_field('phone');
$button_name = get_field('button_name');
$video = get_field('video');

if ($video) {
    $dataVideo = explode('/', $video);
    $videoName = end($dataVideo);
}

?>
<?php if (!is_admin()) : ?>
    <section class="banner">
        <div class="banner-inner">
            <div class="container">
                <div class="banner-block">
                    <div class="banner-left">
                        <?php if (!empty($headline)) : ?>
                            <h3><?= $headline ?></h3>
                        <?php endif; ?>
                        <div class="banner-content">
                            <a class="banner-phone" href="tel:<?= $phone ?>"><?= $phone ?></a>
                            <?php if (!empty($phone['image'])) : ?>
                                <a href="<?= $phone['link'] ?? '#' ?>" target="_blank"></a>
                            <?php endif; ?>
                        </div>
                        <a href="#modal-popup" class="btn btn-green popup-modal"> <?= $button_name ?> </a>
                    </div>
                    <div class="banner-right">
                        <?php if (!empty($video)) : ?>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$videoName ?? '' ?>"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Банер модуль</h2>
<?php endif; ?>




