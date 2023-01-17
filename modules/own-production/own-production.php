<?php

/*
Title: Собственное производство модуль
Mode: preview
*/

$headline = get_field('headline');
$subheadline = get_field('subheadline');
$images = get_field('images');

?>
<?php if (!is_admin()) : ?>
    <section class="own-production-module">
        <div class="container">
            <div class="own-production-block">
                <?php if (!empty($headline)) : ?>
                    <h2><?= $headline ?></h2>
                <?php endif; ?>
                <?php if (!empty($subheadline)) : ?>
                    <p><?= $subheadline ?></p>
                <?php endif; ?>
                <?php if (!empty($images)) : ?>
                    <div class="own-production-images">
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
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">собственное производство модуль</h2>
<?php endif; ?>