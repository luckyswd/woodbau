<?php
get_header();

$post = $wp_query->post;
$category = get_the_terms($post->ID, 'categories')[0]->slug;

$customCategories = ['bani-bochki'];

if ( in_array($category, $customCategories) ) { //ID категории
    include( TEMPLATEPATH.'/single-catalog-'. $category .'.php' );
} else {
    include( TEMPLATEPATH.'/single-catalog-default.php' );
}
?>


<?php
// получение массива дополнительных полей
$values = get_post_meta(get_the_ID(), false);
$term_model = get_the_terms(get_the_ID(), 'categories');
$term_model_item = $term_model["0"]->slug;
$catId = $term_model[0]->term_taxonomy_id;

$args = [
  'post_type' => 'calculator',
];

$calculator = get_posts($args);
$id;
if (ICL_LANGUAGE_CODE == 'pl') {
  $id = 2786;
} elseif (ICL_LANGUAGE_CODE == 'ru') {
  $id = 2787;
} else {
  $id = 2784;
};

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

if ($catId === 14 || $catId === 26 || $catId === 27 || $catId === 63) {
  $showClassCalc = 'show-calc';
} else {
  $showClassCalc = '';
}
?>

<section class="calculator <?= $showClassCalc ?>">
    <h2 style="text-align: center;">

        <?php if (ICL_LANGUAGE_CODE == 'pl') {
            echo 'ZŁOŻ ZAMÓWIENIE';
        } elseif (ICL_LANGUAGE_CODE == 'ru') {
            echo 'Cобери заказ';
        } else {
            echo '';
        }; ?>
    </h2>
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
                        <div class="calculator__block-left-window-items items-col-3">
                            <?php foreach ($window_blocks as $window_block) : ?>

                                <div class="calculator__block-left-window-item item-col-3"
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
                <? if (ICL_LANGUAGE_CODE == 'pl') { ?>
                    Dziękuję bardzo. Wypełnij poniższe pola, aby wypełnić ankietę
                <? } ?>
            </h3>
        </div>
        <div class="calculator__result"
             style="background-image: url(<?= $contact_form_result_background_image['url'] ?>)">
            <?php if (!empty($contact_form_result)) : ?>
                <?= $contact_form_result ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section id="project">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zrealizowane projekty';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Реализованные проекты';
                        } else {
                            echo 'Fertige Projekte';
                        }; ?></h3>
                    <span><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zrealizowane projekty';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Реализованные проекты';
                        } else {
                            echo 'Fertige Projekte';
                        }; ?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="project-slider owl-carousel owl-theme" id="owl-project-slider">
                    <?php $post_portfolio = new WP_Query(array('post_type' => 'portfolio')); //ищем по типу поста?>
                    <?php if ($post_portfolio->have_posts()) : ?>
                        <!-- Выводим весь контент циклом -->
                        <?php while ($post_portfolio->have_posts()) : $post_portfolio->the_post(); ?><?php $values = get_post_meta(get_the_ID()); ?>
                            <div class="project-item"
                                 style="background-image: url('<?php echo $values['_code_portfolio_photo|code_portfolio_photo_item|0|0|value']['0']; ?>')">
                                <h4><?php the_title(); ?></h4>
                                <p><?php $str = mb_strimwidth($values['_code_portfolio_description']['0'], 0, 100, "...");
                                    echo $str; ?></p>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-clock.png"><?php echo $values['_code_portfolio_time']['0']; ?></span>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag.png"><?php echo $values['_code_portfolio_price']['0']; ?></span>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="<?php $url = get_permalink($post);
                                        echo $url; ?>" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                                echo 'Wyglądać';
                                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                                echo 'Посмотреть';
                                            } else {
                                                echo 'Suchen';
                                            }; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php //dump($values);?><?php endwhile; ?><?php else: ?>
                        <!-- Нет контента --><p>Нет контента или неправильно указан тип поста</p>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
                <script>
                  $(document).ready(function () {
                    var owl = $('#owl-project-slider');
                    owl.owlCarousel({
                      items: 2,
                      dots: true,
                      loop: true,
                      nav: false,
                      margin: 30,
                      autoplay: true,
                      autoplayTimeout: 3000,
                      autoplayHoverPause: true,
                      responsive: {
                        0: {
                          items: 1
                        },
                        600: {
                          items: 1
                        },
                        1000: {
                          items: 2
                        }
                      },
                    });
                  })
                </script>
            </div>
        </div>
        <div class="row">
            <div class="col-12 align-center">
                <a href="<?php echo home_url(); ?>/portfolio/"
                   class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                        echo 'Zobacz wszystkie projekty';
                    } elseif (ICL_LANGUAGE_CODE == 'ru') {
                        echo 'Посмотреть все проекты';
                    } else {
                        echo 'Alle Projekte anzeigen';
                    }; ?></a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>