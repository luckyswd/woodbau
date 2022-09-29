<?php

/*
Title: Банер модуль
Mode: preview
*/

$headline = get_field('headline');
$phone = get_field('phone');
$button_name = get_field('button_name');
$image = get_field('image');
$facebook = get_field('facebook', 'option');
$instagram = get_field('instagram', 'option');
$whatsapp = get_field('whatsapp', 'option');

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
                            <?php if (!empty($facebook['image'])) : ?>
                                <a href="<?= $facebook['link'] ?? '#' ?>" target="_blank">
                                    <picture>
                                        <img loading="lazy" src="<?= $facebook['image']['url'] ?>"
                                             alt="<?= $facebook['image']['title'] ?>">
                                    </picture>
                                </a>
                            <?php endif; ?>

                            <?php if (!empty($instagram['image'])) : ?>
                                <a href="<?= $instagram['link'] ?? '#' ?>" target="_blank">
                                    <picture>
                                        <img loading="lazy" src="<?= $instagram['image']['url'] ?>"
                                             alt="<?= $instagram['image']['title'] ?>">
                                    </picture>
                                </a>
                            <?php endif; ?>

                            <?php if (!empty($whatsapp['image'])) : ?>
                                <a href="<?= $whatsapp['link'] ?? '#' ?>" target="_blank">
                                    <picture>
                                        <img loading="lazy" src="<?= $whatsapp['image']['url'] ?>"
                                             alt="<?= $whatsapp['image']['title'] ?>">
                                    </picture>
                                </a>
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




