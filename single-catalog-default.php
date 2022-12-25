<?php
$images_carbon = carbon_get_the_post_meta('code_catalog_photo');
$code_catalog_time = carbon_get_the_post_meta('code_catalog_time');

$subheadline = get_field('subheadline');
$color_options = get_field('color_options');
$production_time_header = get_field('production_time_header');
$header_length_options = get_field('header_length_options');
$length_options = get_field('length_options');
$number_of_rooms_title = get_field('number_of_rooms_title');
$number_of_rooms = get_field('number_of_rooms');
$description = get_field('description');
$form_top = get_field('form_top');
$turnkey_configuration = get_field('turnkey_configuration');
$turnkey_package_header = get_field('turnkey_package_header');


$price = get_field('price');
$characteristics = get_field('characteristics');
$services = get_field('services');

if ($term_model_item === 'postrojki-iz-brusa-ru') {
    $images = get_field('gallery');
} else {
    $images = carbon_get_the_post_meta('code_catalog_photo');
}

?>
<section class="slider-info">
    <div class="container">
        <div class="slider-info__wrapper">
            <h1 class="slider-mobile-title"><?= the_title() ?></h1>
            <div class="slider-info__left">
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <?php if (!empty($images)) : ?>
                            <?php foreach ($images as $image) {
                                if ($term_model_item === 'postrojki-iz-brusa-ru') {
                                    $image = $image['url'];
                                } else {
                                    $image = $image['code_catalog_photo_item'];
                                }
                                ?>
                                <div class="swiper-slide">
                                    <a href="javascript:;" data-fancybox="slider" data-src="<?= $image ?>"
                                       class="slider-open-window">
                                        <picture>
                                            <img class="slide-main-image" src="<?= $image; ?>" alt="slide">
                                        </picture>
                                    </a>
                                </div>
                            <?php } ?>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php if (!empty($images)) : ?>
                            <?php foreach ($images as $image) {
                                if ($term_model_item === 'postrojki-iz-brusa-ru') {
                                    $image = $image['url'];
                                } else {
                                    $image = $image['code_catalog_photo_item'];
                                }
                                ?>
                                <div class="swiper-slide">
                                    <img class="slide-main-image" src="<?= $image; ?>"
                                         alt="slide">
                                </div>
                            <?php } ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="slider-info__right">
                <h1><?= the_title() ?></h1>
                <?php if ($term_model_item === 'postrojki-iz-brusa-ru') : ?>
                    <?php if (!empty($price)) : ?>
                        <h2 class="slider-info__right-price"><span><?= $price ?></span> zł</h2>
                    <?php endif; ?>

                    <?php if (!empty($services)) : ?>
                        <div class="slider-info__services">
                            <h4>Возможные услуги</h4>
                            <?php foreach ($services as $service) : ?>
                                <?php if ($service['service_name']
                                    && $service['service_price']) : ?>
                                    <div class="service-item">
                                        <div class="service-item-name"><?= $service['service_name'] ?></div>
                                        <div class="service-item-switcher"
                                             data-price="<?= $service['service_price'] ?>"><span></span></div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if (!empty($subheadline)) : ?>
                        <div class="attr-subheadline"><?= $subheadline ?></div>
                    <?php endif; ?>
                    <?php if (!empty($color_options['main_colors'])) : ?>
                        <div class="attr-colors-wrapper">
                            <?php if (!empty($color_options['primary_colors_header'])) : ?>
                                <p class="attr-colors-headline"><?= $color_options['primary_colors_header'] ?></p>
                            <?php endif; ?>
                            <div class="attr-colors">
                                <?php foreach ($color_options['main_colors'] as $color_main) : ?>
                                    <div class="attr-color" style="background-color: <?= $color_main['color'] ?>"></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($code_catalog_time)) : ?>
                        <div class="attr-production_time">
                            <p class="attr-production_time-headline"><?= $production_time_header ?></p>
                            <p class="attr-production_time-timing"><?= $code_catalog_time ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($length_options)) : ?>
                        <div class="attr-length_options-wrapper">
                            <?php if (!empty($header_length_options)) : ?>
                                <p class="attr-length_options-headline"><?= $header_length_options ?></p>
                            <?php endif; ?>
                            <div class="attr-length_options">
                                <?php foreach ($length_options as $length_option) : ?>
                                    <div class="attr-length_option"><?= $length_option['length'] ?></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($number_of_rooms)) : ?>
                        <div class="attr-rooms">
                            <p class="attr-rooms-headline"><?= $number_of_rooms_title ?></p>
                            <p class="attr-rooms-timing"><?= $number_of_rooms ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if ($turnkey_configuration) : ?>
                        <div class="attr-configuration">
                            <p class="attr-configuration-headline"><?= $turnkey_package_header ?></p>
                            <div class="attr-configuration-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                                     fill="none">
                                    <path d="M25 48.4375C37.9442 48.4375 48.4375 37.9442 48.4375 25C48.4375 12.0558 37.9442 1.5625 25 1.5625C12.0558 1.5625 1.5625 12.0558 1.5625 25C1.5625 37.9442 12.0558 48.4375 25 48.4375Z"
                                          fill="#4BD37B"/>
                                    <path d="M35.9375 10.9375L19.5312 27.8125L14.0625 22.1875L8.59375 27.8125L19.5312 39.0625L41.4062 16.5625L35.9375 10.9375Z"
                                          fill="white"/>
                                </svg>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($color_options['roof_colors'])) : ?>
                        <div class="attr-colors-wrapper">
                            <?php if (!empty($color_options['roof_colors_title'])) : ?>
                                <p class="attr-colors-headline"><?= $color_options['roof_colors_title'] ?></p>
                            <?php endif; ?>
                            <div class="attr-colors">
                                <?php foreach ($color_options['roof_colors'] as $color_roof) : ?>
                                    <div class="attr-color" style="background-color: <?= $color_roof['color'] ?>"></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($form_top)) : ?>
                        <div class="attr-form"><?= $form_top ?></div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php if ($term_model_item === 'postrojki-iz-brusa-ru') : ?>
            <div class="slider-info-tabs">
                <?php if (!empty($characteristics)) : ?>
                    <h4 class="slider-info-tab-characteristics js-active-item" data-class="slider-info-characteristics">
                        Характеристики</h4>
                <?php endif; ?>
                <?php if (!empty($description)) : ?>
                    <h4 class="slider-info-tab-description" data-class="slider-info-description">Описание</h4>
                <?php endif; ?>
            </div>
            <div class="slider-info-content">
                <?php if (!empty($characteristics)) : ?>
                    <div class="slider-info-characteristics js-active-item">
                        <?php foreach ($characteristics as $characteristic) : ?>
                            <div class="characteristic-item">
                                <?php if (!empty($characteristic)) : ?>
                                    <div class="description-characteristic-name"><?= $characteristic['characteristic_name'] ?>
                                        :
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($characteristic)) : ?>
                                    <div class="description-characteristic-value"><?= $characteristic['characteristic_value'] ?></div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($description)) : ?>
                    <div class="slider-info-description"><?= $description ?></div>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <?php if (!empty($description)) : ?>
                <div class="attr-description"><?= $description ?></div>
            <?php endif; ?>

        <?php endif; ?>
    </div>
</section>