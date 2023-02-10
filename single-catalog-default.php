<?php
$values = get_post_meta(get_the_ID(), false);
$term_model = get_the_terms(get_the_ID(), 'categories');
$term_model_item = $term_model["0"]->slug;

$args = [
    'post_type' => 'calculator',
];

$calculator = get_posts($args);
$id = 2786;

$delivery_conditions_title = get_field('delivery_conditions_title', $id);
$delivery_conditions_blocks = get_field('delivery_conditions_block', $id);
$modifications_title = get_field('modifications_title', $id);
$modifications_blocks = get_field('modifications_block', $id);
$window_title = get_field('window_title', $id);
$window_blocks = get_field('window_block', $id);
$door_title = get_field('door_title', $id);
$door_blocks = get_field('door_block', $id);
$roof_color_title = get_field('roof_color_title', $id);
$roof_color_blocks = get_field('roof_color_block', $id);
$diameter_title = get_field('diameter_title', $id);
$diameter_blocks = get_field('diameter_block', $id);
$oven_location_title = get_field('oven_location_title', $id);
$oven_location_blocks = get_field('oven_location_block', $id);
$materials_title = get_field('materials_title', $id);
$materials_blocks = get_field('materials_block', $id);
$ovens_title = get_field('ovens_title', $id);
$ovens_blocks = get_field('ovens_block', $id);
$external_treatment_color_title = get_field('external_treatment_color_title', $id);
$external_treatment_color_blocks = get_field('external_treatment_color_block', $id);
$additional_options_title = get_field('additional_options_title', $id);
$additional_options_blocks = get_field('additional_options_block', $id);
$contact_form_result = get_field('contact_form_result', $id);
$contact_form_result_background_image = get_field('contact_form_result_background_image', $id);
$сurrency_type = get_field('сurrency_type', $id);
$length_title = get_field('length_title', $id);
$length_blocks = get_field('length_block', $id);
$code_catalog_time = get_field('catalog_time', $id);

if (empty($code_catalog_time)) {
    $code_catalog_time = carbon_get_the_post_meta('code_catalog_time');
}

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
$catId = '';

foreach ($term_model as $term) {
    if ($term->term_taxonomy_id == 27) {
        $catId = $term->term_taxonomy_id;
    }
}

$price = get_field('price');
$characteristics = get_field('characteristics');
$services = get_field('services');
$dimensions = get_field('dimensions');

if ($term_model_item === 'budynki-drewniane') {
    $images = get_field('gallery');
} else {
    $images = carbon_get_the_post_meta('code_catalog_photo');
}

if ($catId === 27) {
    $showClassCalc = 'show-calc';
    $url_back =  get_home_url() .  '/sauny/#products';
} else {
    $showClassCalc = '';
    $url_back =  get_home_url() .  '/categories/' . $term_model_item . '/#products';
}

?>
<section class="slider-info">
    <div class="container">
        <a href="<?= $url_back ?>" class="breadcrumbs btn btn-green">
            Powrót do katalogu
        </a>

        <div class="slider-info__wrapper">
            <h1 class="slider-mobile-title"><?= the_title() ?></h1>
            <div class="slider-info__left">
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <?php if (!empty($images)) : ?>
                            <?php foreach ($images as $image) {
                                if ($term_model_item === 'budynki-drewniane') {
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
                                if ($term_model_item === 'budynki-drewniane') {
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
                <?php if ($term_model_item === 'budynki-drewniane') : ?>
                    <?php if (!empty($price)) : ?>
                        <h2 class="slider-info__right-price">
                            <span>CENA:</span>
                            <span class="price"><?= $price ?> </span> zł
                        </h2>
                    <?php endif; ?>
                    <?php if (!empty($dimensions)) : ?>
                        <div class="slider-info__services">
                            <h4>Wymiary</h4>
                            <?php foreach ($dimensions as $size) : ?>
                                <?php if ($size['size_name']
                                    && $size['size_price']) : ?>
                                    <div class="service-item">
                                        <div class="service-item-name"><?= $size['size_name'] ?></div>
                                        <div class="service-item-switcher top"
                                             data-price="<?= $size['size_price'] ?>"><span></span></div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($services)) : ?>
                        <div class="slider-info__services">
                            <h4>Możliwe usługi</h4>
                            <?php foreach ($services as $service) : ?>
                                <?php if ($service['service_name']
                                    && $service['service_price']) : ?>
                                    <div class="service-item">
                                        <div class="service-item-name"><?= $service['service_name'] ?></div>
                                        <div class="service-item-switcher bottom"
                                             data-price="<?= $service['service_price'] ?>"><span></span></div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <a style="width: max-content; margin-top: 20px" href="#modal-popup" class="btn btn-green popup-modal">Aby uzyskać konsultację</a>
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
        <?php if ($term_model_item === 'budynki-drewniane') : ?>
            <div class="slider-info-tabs">
                <?php if (!empty($characteristics)) : ?>
                    <h4 class="slider-info-tab-characteristics js-active-item" data-class="slider-info-characteristics">
                        Charakterystyka</h4>
                <?php endif; ?>
                <?php if (!empty($description)) : ?>
                    <h4 class="slider-info-tab-description" data-class="slider-info-description">Opis</h4>
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


<section class="calculator <?= $showClassCalc ?>">
    <h2 style="text-align: center;">ZŁOŻ ZAMÓWIENIE</h2>
    <div class="container">
        <div class="calculator__block">
            <div class="calculator__block-left">
                <div class="calculator__block-left-diameter">
                    <?php if (!empty($diameter_title)) : ?>
                        <div class="calculator__block-title"><?= $diameter_title ?></div>
                    <?php endif; ?>
                    <?php if (!empty($diameter_blocks)) : ?>
                        <div class="calculator__block-left-diameter-items-results"><?= $diameter_title ?></div>
                        <div class="calculator__block-left-diameter-items">
                            <?php foreach ($diameter_blocks as $diameter_block) : ?>
                                <div class="calculator__block-left-diameter-item"
                                     data-price="<?= $diameter_block['diameter_price'] ?>">
                                    <?php if (!empty($diameter_block['diameter'])) : ?>
                                        <div class="calculator__block-left-diameter-item-diametr">
                                            <?= $diameter_block['diameter'] ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="calculator__block-left-delivery">
                    <?php if (!empty($delivery_conditions_title)) : ?>
                        <div class="calculator__block-title"><?= $delivery_conditions_title ?></div>
                    <?php endif; ?>
                    <?php if (!empty($delivery_conditions_blocks)) : ?>
                        <div class="calculator__block-left-delivery-items items-col-3">
                            <?php foreach ($delivery_conditions_blocks as $delivery_conditions_block) : ?>
                                <div class="calculator__block-left-delivery-item item-col-3"
                                     data-price="<?= $delivery_conditions_block['delivery_conditions_price'] ?>">
                                    <?php if (!empty($delivery_conditions_block['delivery_conditions_image'])) : ?>
                                        <div class="calculator__block-left-delivery item-image">
                                            <img src="<?= $delivery_conditions_block['delivery_conditions_image']['url'] ?>"
                                                 alt="">
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($delivery_conditions_block['delivery_conditions_description'])) : ?>
                                        <div class="calculator__block-left-delivery item-description">
                                            <?= $delivery_conditions_block['delivery_conditions_description'] ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="calculator__block-left-modifications">
                    <?php if (!empty($modifications_title)) : ?>
                        <div class="calculator__block-title"><?= $modifications_title ?></div>
                    <?php endif; ?>
                    <?php if (!empty($delivery_conditions_blocks)) : ?>
                        <div class="calculator__block-left-modifications-items items-col-3">
                            <?php foreach ($modifications_blocks as $modifications_block) : ?>

                                <div class="calculator__block-left-modifications-item item-col-3"
                                     data-price="<?= $modifications_block['modifications_price'] ?>">
                                    <?php if (!empty($modifications_block['modifications_image'])) : ?>
                                        <div class="calculator__block-left-modifications item-image">
                                            <img src="<?= $modifications_block['modifications_image']['url'] ?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($modifications_block['modifications_description'])) : ?>
                                        <div class="calculator__block-left-modifications item-description">
                                            <?= $modifications_block['modifications_description'] ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="calculator__block-left-window">
                    <?php if (!empty($window_title)) : ?>
                        <div class="calculator__block-title"><?= $window_title ?></div>
                    <?php endif; ?>
                    <?php if (!empty($delivery_conditions_blocks)) : ?>
                        <div class="calculator__block-left-window-items items-col-4">
                            <?php foreach ($window_blocks as $window_block) : ?>

                                <div class="calculator__block-left-window-item item-col-4"
                                     data-price="<?= $window_block['window_price'] ?>">
                                    <?php if (!empty($window_block['window_image'])) : ?>
                                        <div class="calculator__block-left-window item-image">
                                            <img src="<?= $window_block['window_image']['url'] ?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($window_block['window_description'])) : ?>
                                        <div class="calculator__block-left-window item-description">
                                            <?= $window_block['window_description'] ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="calculator__block-left-door">
                    <?php if (!empty($door_title)) : ?>
                        <div class="calculator__block-title"><?= $door_title ?></div>
                    <?php endif; ?>
                    <?php if (!empty($delivery_conditions_blocks)) : ?>
                        <div class="calculator__block-left-door-items items-col-3">
                            <?php foreach ($door_blocks as $door_block) : ?>

                                <div class="calculator__block-left-door-item item-col-3"
                                     data-price="<?= $door_block['door_price'] ?>">
                                    <?php if (!empty($door_block['door_image'])) : ?>
                                        <div class="calculator__block-left-door item-image">
                                            <img src="<?= $door_block['door_image']['url'] ?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($door_block['door_description'])) : ?>
                                        <div class="calculator__block-left-door item-description">
                                            <?= $door_block['door_description'] ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="calculator__block-left-roof_color">
                    <?php if (!empty($roof_color_title)) : ?>
                        <div class="calculator__block-title"><?= $roof_color_title ?></div>
                    <?php endif; ?>
                    <?php if (!empty($roof_color_blocks)) : ?>
                        <div class="calculator__block-left-roof_color-items items-col-4">
                            <?php foreach ($roof_color_blocks as $roof_color_block) : ?>

                                <div class="calculator__block-left-roof_color-item item-col-4"
                                     data-price="<?= $roof_color_block['roof_color_price'] ?>">
                                    <?php if (!empty($roof_color_block['roof_color_image'])) : ?>
                                        <div class="calculator__block-left-roof_color item-image">
                                            <img src="<?= $roof_color_block['roof_color_image']['url'] ?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($roof_color_block['roof_color_description'])) : ?>
                                        <div class="calculator__block-left-roof_color item-description">
                                            <?= $roof_color_block['roof_color_description'] ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="calculator__block-left-oven_location">
                    <?php if (!empty($oven_location_title)) : ?>
                        <div class="calculator__block-title"><?= $oven_location_title ?></div>
                    <?php endif; ?>
                    <?php if (!empty($oven_location_blocks)) : ?>
                        <div class="calculator__block-left-oven_location-items items-col-3">
                            <?php foreach ($oven_location_blocks as $oven_location_block) : ?>

                                <div class="calculator__block-left-oven_location-item item-col-3"
                                     data-price="<?= $oven_location_block['oven_location_price'] ?>">
                                    <?php if (!empty($oven_location_block['oven_location_image'])) : ?>
                                        <div class="calculator__block-left-oven_location item-image">
                                            <img src="<?= $oven_location_block['oven_location_image']['url'] ?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($oven_location_block['oven_location_description'])) : ?>
                                        <div class="calculator__block-left-oven_location item-description">
                                            <?= $oven_location_block['oven_location_description'] ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="calculator__block-right">
                <div class="calculator__block-left-diameter">
                    <?php if (!empty($length_title)) : ?>
                        <div class="calculator__block-title"><?= $length_title ?></div>
                    <?php endif; ?>
                    <?php if (!empty($length_blocks)) : ?>
                        <div class="calculator__block-left-diameter-items-results container-length"><?= $length_title ?></div>
                        <div class="calculator__block-left-diameter-items length-items">
                            <?php foreach ($length_blocks as $length_block) : ?>
                                <div class="calculator__block-left-diameter-item length-item"
                                     data-price="<?= $length_block['length_price'] ?>">
                                    <?php if (!empty($length_block['length'])) : ?>
                                        <div class="calculator__block-left-diameter-item-diametr">
                                            <?= $length_block['length'] ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="calculator__block-right-materials">
                    <?php if (!empty($materials_title)) : ?>
                        <div class="calculator__block-title"><?= $materials_title ?></div>
                    <?php endif; ?>
                    <?php if (!empty($oven_location_blocks)) : ?>
                        <div class="calculator__block-right-materials-items items-col-3">
                            <?php foreach ($materials_blocks as $materials_block) : ?>

                                <div class="calculator__block-right-materials-item item-col-3"
                                     data-price="<?= $materials_block['materials_price'] ?>">
                                    <?php if (!empty($materials_block['materials_image'])) : ?>
                                        <div class="calculator__block-right-materials item-image">
                                            <img src="<?= $materials_block['materials_image']['url'] ?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($materials_block['materials_description'])) : ?>
                                        <div class="calculator__block-right-materials item-description">
                                            <?= $materials_block['materials_description'] ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="calculator__block-right-ovens">
                    <?php if (!empty($ovens_title)) : ?>
                        <div class="calculator__block-title"><?= $ovens_title ?></div>
                    <?php endif; ?>
                    <?php if (!empty($oven_location_blocks)) : ?>
                        <div class="calculator__block-right-ovens-items items-col-3">
                            <?php foreach ($ovens_blocks as $ovens_block) : ?>
                                <div class="calculator__block-right-ovens-item item-col-3"
                                     data-price="<?= $ovens_block['ovens_price'] ?>">
                                    <?php if (!empty($ovens_block['ovens_image'])) : ?>
                                        <div class="calculator__block-right-ovens item-image">
                                            <img src="<?= $ovens_block['ovens_image']['url'] ?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($ovens_block['ovens_description'])) : ?>
                                        <div class="calculator__block-right-ovens item-description">
                                            <?= $ovens_block['ovens_description'] ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($ovens_block['ovens_price'])) : ?>
                                    <?php endif; ?>
                                    <?php if (!empty($ovens_block['variation'])) : ?>
                                        <div class="ovens-variation-items" style="<?= $ovens_block['position'] ?>: 0">
                                            <?php foreach ($ovens_block['variation'] as $variation) : ?>
                                                <div class="ovens-variation-item"
                                                     data-price="<?= $variation['variation_price'] ?>">
                                                    <?php if (!empty($variation['variation_image'])) : ?>
                                                        <div class="ovens-variation-item-image">
                                                            <img src="<?= $variation['variation_image']['url'] ?>"
                                                                 alt="">
                                                            <?php if (!empty($variation['variation_title'])) : ?>
                                                                <div class="ovens-variation-item-title">
                                                                    <?= $variation['variation_title'] ?>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    <?php endif ?>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="calculator__block-right-external_treatment_color">
                    <?php if (!empty($external_treatment_color_title)) : ?>
                        <div class="calculator__block-title"><?= $external_treatment_color_title ?></div>
                    <?php endif; ?>
                    <?php if (!empty($oven_location_blocks)) : ?>
                        <div class="calculator__block-right-external_treatment_color-items items-col-4">
                            <?php foreach ($external_treatment_color_blocks as $external_treatment_color_block) : ?>

                                <div class="calculator__block-right-external_treatment_color-item item-col-4"
                                     data-price="<?= $external_treatment_color_block['external_treatment_color_price'] ?>">
                                    <?php if (!empty($external_treatment_color_block['external_treatment_color_image'])) : ?>
                                        <div class="calculator__block-right-external_treatment_color item-image">
                                            <img src="<?= $external_treatment_color_block['external_treatment_color_image']['url'] ?>"
                                                 alt="">
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($external_treatment_color_block['external_treatment_color_description'])) : ?>
                                        <div class="calculator__block-right-external_treatment_color item-description">
                                            <?= $external_treatment_color_block['external_treatment_color_description'] ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="calculator__block-right-additional_options">
                    <?php if (!empty($additional_options_title)) : ?>
                        <div class="calculator__block-title"><?= $additional_options_title ?></div>
                    <?php endif; ?>
                    <?php if (!empty($oven_location_blocks)) : ?>
                        <div class="calculator__block-right-additional_options-items items-col-4">
                            <?php foreach ($additional_options_blocks as $additional_options_block) : ?>

                                <div class="calculator__block-right-additional_options-item item-col-4"
                                     data-price="<?= $additional_options_block['additional_options_price'] ?>">
                                    <?php if (!empty($additional_options_block['additional_options_image'])) : ?>
                                        <div class="calculator__block-right-additional_options item-image">
                                            <img src="<?= $additional_options_block['additional_options_image']['url'] ?>"
                                                 alt="">
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($additional_options_block['additional_options_description'])) : ?>
                                        <div class="calculator__block-right-additional_options item-description">
                                            <?= $additional_options_block['additional_options_description'] ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="calculator-desc">
            <h3>
                Dziękuję bardzo. Wypełnij poniższe pola, aby wypełnić ankietę
            </h3>
        </div>
        <div class="calculator__result-content">Twój wybór: <span>Niczego nie wybrałeś</span></div>
        <div class="calculator__result"
             style="background-image: url(<?= $contact_form_result_background_image['url'] ?>)">

            <?php if (!empty($contact_form_result)) : ?>
                <?= $contact_form_result ?>
            <?php endif; ?>
        </div>
    </div>
</section>