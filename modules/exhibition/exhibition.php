<?php

/*
Title: Приглашаем на выставочную площадку модуль
Mode: preview
*/

$headline = get_field('headline');
$subheadline = get_field('subheadline');
$images = get_field('images');
$btn_name = get_field('btn_name');

?>
<?php if (!is_admin()) : ?>
    <section class="exhibition-module">
        <div class="container">
            <div class="exhibition-block">
                <div class="block-left">
                    <?php if (!empty($headline)) : ?>
                        <h2><?= $headline ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($subheadline)) : ?>
                        <p><?= $subheadline ?></p>
                    <?php endif; ?>
                    <a href="#modal-popup" class="btn btn-green popup-modal"> <?= $btn_name ?? 'Poznaj zakres' ?> </a>
                </div>
                <div class="block-right">
                    <?php if (!empty($images)) : ?>
                        <div class="exhibition-images">
                            <?php foreach ($images as $image) : ?>
                                <a href="javascript:;" data-fancybox="slider" data-src="<?= $image['image']['url'] ?>">
                                    <picture>
                                        <img loading="lazy" src="<?= $image['image']['url'] ?>"
                                             alt="<?= $image['image']['title'] ?>">
                                    </picture>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Приглашаем на выставочную площадку модуль</h2>
<?php endif; ?>