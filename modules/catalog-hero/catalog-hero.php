<?php

/*
Title: Каталог главный модуль
Mode: preview
*/

$headline = get_field('headline');
$background_image = get_field('background_image');
$advantages = get_field('advantages');
$first_button = get_field('first_button');
$subheadline_button = get_field('subheadline_button');
$second_button = get_field('second_button');
?>
<?php if (!is_admin()) : ?>
<section class="hero-module" style="background-image: url('<?= $background_image['url'] ?>')">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-block">
            <div class="hero-headline">
                <?php if (!empty($headline)) : ?>
                    <h1> <?= $headline ?> </h1>
                <?php endif; ?>
            </div>
            <?php if (!empty($advantages)) : ?>
                <div class="hero-advantage">
                    <?php foreach ($advantages as $advantage) : ?>
                        <div class="hero-advantage-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                 class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path style="fill: #0fc12a"
                                      d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path style="fill: white"
                                      d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                            </svg>
                            <?php if (!empty($advantage['text'])) : ?>
                                <p><?= $advantage['text'] ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="hero-buttons">
                <?php if (!empty($first_button)) : ?>
                    <a href="<?= $first_button['url'] ?>"
                       class="btn btn-green hero-button-first"><?= $first_button['title'] ?></a>
                <?php endif; ?>
                <?php if (!empty($second_button)) : ?>
                    <a href="<?= $second_button['url'] ?>"
                       class="btn btn-green hero-button-second"><?= $second_button['title'] ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Каталог главный модуль</h2>
<?php endif; ?>