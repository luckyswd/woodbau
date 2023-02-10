<?php

$images = get_field('main_gallery');
$properties = get_field('properties');
$price = get_field('price');
$services = get_field('services');

// Вкладки под товаром
// Планировка
$planningImage = get_field('planning_image');

// Древесина
$woodInfo = get_field('wood_info');

// Печи
$ovenInfo = get_field('oven_info');

// Окна
$windowsInfo = get_field('windows_info');

// Двери
$doorsInfo = get_field('doors_info');

// Комплект
$setTitle = get_field('set_title');
$setList = get_field('set_list');

// Дополнительно
$additionalTitle = get_field('additional_title');
$additionalContent = get_field('additional_content');
$additionalPhotos = get_field('additional_photos');

?>
<section class="slider-info">
    <div class="container">
        <div class="btn-back">
            <a href="<?= get_home_url() ?>/saunas" class="btn btn-green">Вернуться на каталог бань</a>
        </div>
    </div>
    <div class="container">
        <div class="slider-info__wrapper">
            <h1 class="slider-mobile-title"><?= the_title() ?></h1>
            <div class="slider-info__left">
                <div class="swiper swiperBani">
                    <div class="swiper-wrapper">
                        <?php if (!empty($images)) : ?>
                            <?php foreach ($images as $image) {
                                $image = $image['url'];
                                ?>
                                <div class="swiper-slide">
                                    <a href="javascript:;" data-fancybox="slider" data-src="<?= $image ?>"
                                       class="slider-open-window">
                                        <img class="slide-main-image" src="<?= $image; ?>" alt="slide">
                                    </a>
                                </div>
                            <?php } ?>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="slider-info__right">
                <h1><?= the_title() ?></h1>
                <?php if (!empty($properties)) : ?>
                    <div class="properties">
                        <div class="properties-title">Характеристики</div>
                        <div class="properties-items">
                            <?php foreach ($properties as $property) : ?>
                                <?php if ($property['property_name'] && $property['property_value']) : ?>
                                    <div class="property-item">
                                        <div class="property-item-name"><?= $property['property_name'] ?></div>
                                        <div class="property-item-value"><?= $property['property_value'] ?></div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="slider-info__bottom">
                <div class="slider-info__bottom-text">
                    <?php if (!empty($services)) : ?>
                        <div class="slider-info__services">
                            <h4>Возможные услуги</h4>
                            <?php foreach ($services as $service) : ?>
                                <?php if ($service['service_name'] && $service['service_price']) : ?>
                                    <div class="service-item">
                                        <div class="service-item-name"><?= $service['service_name'] ?></div>
                                        <div class="service-item-switcher"
                                             data-price="<?= $service['service_price'] ?>"><span></span></div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($price)) : ?>
                        <div class="slider-info__right-price">Цена: <span><?= $price ?></span> руб.</div>
                    <?php endif; ?>
                </div>
                <div class="slider-info__bottom-form">
                    <h4>Оформить заказ</h4>
                    <?php echo do_shortcode('[contact-form-7 id="3252" title="Order form RU"]'); ?>
                </div>
            </div>
        </div>
        <div class="slider-info-tabs">
            <?php if (!empty($ovenInfo)) : ?>
                <h4 class="slider-info-tab-oven js-active-item" data-class="slider-info-oven">Печи</h4>
            <?php endif; ?>
            <?php if (!empty($planningImage)) : ?>
                <h4 class="slider-info-tab-planning" data-class="slider-info-planning">Планировка</h4>
            <?php endif; ?>
            <?php if (!empty($woodInfo)) : ?>
                <h4 class="slider-info-tab-wood" data-class="slider-info-wood">Древесина</h4>
            <?php endif; ?>
            <?php if (!empty($windowsInfo)) : ?>
                <h4 class="slider-info-tab-windows" data-class="slider-info-windows">Окна</h4>
            <?php endif; ?>
            <?php if (!empty($doorsInfo)) : ?>
                <h4 class="slider-info-tab-doors" data-class="slider-info-doors">Двери</h4>
            <?php endif; ?>
            <?php if (!empty($setTitle)) : ?>
                <h4 class="slider-info-tab-set" data-class="slider-info-set">Комплект</h4>
            <?php endif; ?>
            <?php if (!empty($additionalTitle)) : ?>
                <h4 class="slider-info-tab-additional" data-class="slider-info-additional">Дополнительно</h4>
            <?php endif; ?>
        </div>
        <div class="slider-info-content">
            <?php if (!empty($ovenInfo)) : ?>
                <div class="slider-info-oven js-active-item">
                    <?php foreach ($ovenInfo as $index => $ovenInfoItem) : ?>
                        <div class="oven-item">
                            <?php if (!empty($ovenInfoItem['title'])) : ?>
                                <div class="oven-item-title tab-inner-title"><?= $ovenInfoItem['title'] ?></div>
                            <?php endif; ?>
                            <?php if (!empty($ovenInfoItem['text'])) : ?>
                                <div class="oven-item-text"><?= $ovenInfoItem['text'] ?></div>
                            <?php endif; ?>
                            <?php if (!empty($ovenInfoItem['gallery'])) : ?>
                                <div class="oven-item-gallery gallery">
                                    <?php foreach ($ovenInfoItem['gallery'] as $image) : ?>
                                        <div class="gallery-item">
                                            <a href="javascript:;" data-fancybox="oven-<?= $index ?>" data-src="<?= $image['url'] ?>">
                                                <img class="" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($planningImage)) : ?>
                <div class="slider-info-planning">
                    <?php if (!empty($planningImage)) : ?>
                        <div class="planning-image">
                            <img src="<?= $planningImage ?>" alt="Планировка">
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($woodInfo)) : ?>
                <div class="slider-info-wood">
                    <?php foreach ($woodInfo as $index => $woodInfoItem) : ?>
                        <div class="wood-item <?= $woodInfoItem['image'] ? 'wood-item--with-image' : '' ?>">
                            <div class="wood-item__text"><?= $woodInfoItem['text'] ?></div>
                            <?php if ($woodInfoItem['image']) : ?>
                                <a href="javascript:;"
                                   data-fancybox="wood-image-<?= $index ?>"
                                   data-src="<?= $woodInfoItem['image']['url'] ?>"
                                   class="wood-item__image">
                                    <img src="<?= $woodInfoItem['image']['url'] ?>" alt="<?= $woodInfoItem['image']['alt'] ?>">
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($windowsInfo)) : ?>
                <div class="slider-info-windows">
                    <?php foreach ($windowsInfo as $index => $windowsInfoItem) : ?>
                        <div class="window-item">
                            <?php if (!empty($windowsInfoItem['title'])) : ?>
                                <div class="window-item-title tab-inner-title"><?= $windowsInfoItem['title'] ?></div>
                            <?php endif; ?>
                            <?php if (!empty($windowsInfoItem['text'])) : ?>
                                <div class="window-item-text"><?= $windowsInfoItem['text'] ?></div>
                            <?php endif; ?>
                            <?php if (!empty($windowsInfoItem['gallery'])) : ?>
                                <div class="window-item-gallery gallery">
                                    <?php foreach ($windowsInfoItem['gallery'] as $image) : ?>
                                        <div class="gallery-item">
                                            <a href="javascript:;" data-fancybox="windows-<?= $index ?>" data-src="<?= $image['url'] ?>">
                                                <img class="" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                            </a>
                                            <?php if (!empty($image['caption'])): ?>
                                                <span><?= $image['caption'] ?></span>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($doorsInfo)) : ?>
                <div class="slider-info-doors">
                    <?php foreach ($doorsInfo as $index => $doorsInfoItem) : ?>
                        <div class="door-item">
                            <?php if (!empty($doorsInfoItem['title'])) : ?>
                                <div class="door-item-title tab-inner-title"><?= $doorsInfoItem['title'] ?></div>
                            <?php endif; ?>
                            <?php if (!empty($doorsInfoItem['text'])) : ?>
                                <div class="door-item-text"><?= $doorsInfoItem['text'] ?></div>
                            <?php endif; ?>
                            <?php if (!empty($doorsInfoItem['gallery'])) : ?>
                                <div class="door-item-gallery gallery">
                                    <?php foreach ($doorsInfoItem['gallery'] as $image) : ?>
                                        <div class="gallery-item">
                                            <a href="javascript:;" data-fancybox="doors-<?= $index ?>" data-src="<?= $image['url'] ?>">
                                                <img class="" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                            </a>
                                            <?php if (!empty($image['caption'])): ?>
                                                <span><?= $image['caption'] ?></span>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($setTitle)) : ?>
                <div class="slider-info-set">
                    <div class="set-item">
                        <div class="set-item-title tab-inner-title"><?= $setTitle ?></div>
                        <?php if (!empty($setList)) : ?>
                            <ul class="set-item-list check-list">
                                <?php foreach ($setList as $setListItem) : ?>
                                    <li><?= $setListItem['item'] ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (!empty($additionalTitle)) : ?>
                <div class="slider-info-additional">
                    <div class="additional-item">
                        <div class="additional-item-title tab-inner-title"><?= $additionalTitle ?></div>
                        <?php if (!empty($additionalContent)) : ?>
                            <div class="additional-item-content"><?= $additionalContent ?></div>
                        <?php endif; ?>
                        <div class="additional-item-gallery gallery">
                            <?php foreach ($additionalPhotos as $image) : ?>
                                <div class="gallery-item">
                                    <a href="javascript:;" data-fancybox="additional-photos" data-src="<?= $image['url'] ?>">
                                        <img class="" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>