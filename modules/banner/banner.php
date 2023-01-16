<?php

/*
Title: Банер модуль
Mode: preview
*/

$headline = get_field('headline');
$phone = get_field('phone');
$button_name = get_field('button_name');
$image = get_field('image');

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
                        <?php if (!empty($image)) : ?>
                            <picture>
                                <img loading="lazy" src="<?= $image['url'] ?>" alt="<?= $image['title'] ?>">
                            </picture>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Банер модуль</h2>
<?php endif; ?>




