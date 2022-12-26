<?php

$images = get_field('main_gallery');
$properties = get_field('properties');
$price = get_field('price');
$services = get_field('services');

// Вкладки под товаром
// Планировка
$planningInfo = get_field('planning_info');
$planningImage = get_field('planning_image');

// Двери
$doorsInfo = get_field('doors_info');

// Фасады
$facadesInfo = get_field('facades_info');

// Фото
$photos = get_field('photos');

// Комплект
$setFirstTitle = get_field('set_first_title');
$setList = get_field('set_list');
$setSecondTitle = get_field('set_second_title');
$setDropDownList = get_field('set_drop-down_list');

// Дополнительно
$additionalTitle = get_field('additional_title');
$additionalContent = get_field('additional_content');

?>

<section class="slider-info">
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
                    <?php if (!empty($price)) : ?>
                        <div class="slider-info__right-price">Цена: <span><?= $price ?></span> руб.</div>
                    <?php endif; ?>
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
            </div>
        </div>
        <div class="slider-info-tabs">
            <?php if (!empty($planningInfo)) : ?>
                <h4 class="slider-info-tab-planning js-active-item" data-class="slider-info-planning">Планировка</h4>
            <?php endif; ?>
            <?php if (!empty($doorsInfo)) : ?>
                <h4 class="slider-info-tab-doors" data-class="slider-info-doors">Двери</h4>
            <?php endif; ?>
            <?php if (!empty($facadesInfo)) : ?>
                <h4 class="slider-info-tab-facades" data-class="slider-info-facades">Фасады</h4>
            <?php endif; ?>
            <?php if (!empty($photos)) : ?>
                <h4 class="slider-info-tab-photos" data-class="slider-info-photos">Фотографии</h4>
            <?php endif; ?>
            <?php if (!empty($setFirstTitle)) : ?>
                <h4 class="slider-info-tab-set" data-class="slider-info-set">Комплект</h4>
            <?php endif; ?>
            <?php if (!empty($additionalTitle)) : ?>
                <h4 class="slider-info-tab-additional" data-class="slider-info-additional">Дополнительно</h4>
            <?php endif; ?>
        </div>
        <div class="slider-info-content">
            <?php if (!empty($planningInfo)) : ?>
                <div class="slider-info-planning js-active-item">
                    <?php foreach ($planningInfo as $planningInfoItem) : ?>
                        <div class="planning-item">
                            <div class="planning-item__name"><?= $planningInfoItem['text'] ?></div>
                            <a href="<?= $planningInfoItem['file'] ?>" target="_blank" class="planning-item__value">Посмотреть все характеристики</a>
                        </div>
                    <?php endforeach; ?>
                    <?php if (!empty($planningImage)) : ?>
                      <div class="planning-image">
                          <img src="<?= $planningImage ?>" alt="Планировка">
                      </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($doorsInfo)) : ?>
                <div class="slider-info-doors">
                    <?php foreach ($doorsInfo as $index => $doorsInfoItem) : ?>
                        <div class="doors-item">
                            <?php if (!empty($doorsInfoItem['title'])) : ?>
                                <div class="door-item-title tab-inner-title"><?= $doorsInfoItem['title'] ?></div>
                            <?php endif; ?>
                            <?php if (!empty($doorsInfoItem['text'])) : ?>
                                <div class="door-item-text"><?= $doorsInfoItem['text'] ?></div>
                            <?php endif; ?>
                            <?php if (!empty($doorsInfoItem['gallery'])) : ?>
                                <div class="door-item-gallery gallery">
                                    <?php foreach ($doorsInfoItem['gallery'] as $doorImage) : ?>
                                        <a href="javascript:;" data-fancybox="doors-<?= $index ?>" data-src="<?= $doorImage['url'] ?>" class="gallery-item">
                                            <img class="" src="<?= $doorImage['url'] ?>" alt="<?= $doorImage['alt'] ?>">
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($facadesInfo)) : ?>
                <div class="slider-info-facades">
                    <?php foreach ($facadesInfo as $index => $facadesInfoItem) : ?>
                        <div class="facades-item">
                            <?php if (!empty($facadesInfoItem['title'])) : ?>
                                <div class="facades-item-title tab-inner-title"><?= $facadesInfoItem['title'] ?></div>
                            <?php endif; ?>
                            <?php if (!empty($facadesInfoItem['text'])) : ?>
                                <div class="facades-item-text"><?= $facadesInfoItem['text'] ?></div>
                            <?php endif; ?>
                            <?php if (!empty($facadesInfoItem['gallery'])) : ?>
                                <div class="facades-item-gallery gallery">
                                    <?php foreach ($facadesInfoItem['gallery'] as $facadeImage) : ?>
                                      <a href="javascript:;" data-fancybox="facades-<?= $index ?>" data-src="<?= $facadeImage['url'] ?>" class="gallery-item">
                                          <img class="" src="<?= $facadeImage['url'] ?>" alt="<?= $facadeImage['alt'] ?>">
                                      </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($photos)) : ?>
                <div class="slider-info-photos">
                    <div class="photos-item">
                        <div class="photos-item-gallery gallery">
                            <?php foreach ($photos as $photosImage) : ?>
                              <a href="javascript:;" data-fancybox="photos" data-src="<?= $photosImage['url'] ?>" class="gallery-item">
                                  <img class="" src="<?= $photosImage['url'] ?>" alt="<?= $photosImage['alt'] ?>">
                              </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (!empty($setFirstTitle)) : ?>
                <div class="slider-info-set">
                    <div class="set-item">
                        <div class="set-item-title tab-inner-title"><?= $setFirstTitle ?></div>
                        <?php if (!empty($setList)) : ?>
                            <ul class="set-item-list check-list">
                                <?php foreach ($setList as $setListItem) : ?>
                                    <li><?= $setListItem['item'] ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if (!empty($setSecondTitle)) : ?>
                            <div class="set-item-title tab-inner-title"><?= $setSecondTitle ?></div>
                        <?php endif; ?>
                        <?php if (!empty($setDropDownList)) : ?>
                            <div class="set-item-dropdown-list">
                                <?php foreach ($setDropDownList as $setDropDownListItem) : ?>
                                    <div class="dropdown-list-item">
                                        <?php if (!empty($setDropDownListItem['title'])) : ?>
                                            <div class="dropdown-list-item-title"><?= $setDropDownListItem['title'] ?></div>
                                        <?php endif; ?>
                                        <?php if (!empty($setDropDownListItem['content'])) : ?>
                                            <div class="dropdown-list-item-content"><?= $setDropDownListItem['content'] ?></div>
                                        <?php endif; ?>
                                        <?php if (!empty($setDropDownListItem['image'])) : ?>
                                            <div class="dropdown-list-item-image">
                                                <img src="<?= $setDropDownListItem['image']['url'] ?>" alt="<?= $setDropDownListItem['image']['alt'] ?>">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
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
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>