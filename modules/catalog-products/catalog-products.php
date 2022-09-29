<?php

/*
Title: Каталог продуктов модуль
Mode: preview
*/

$limit = 1000;
$isModule = false;
$page_term_id = get_queried_object()->term_id;

if (empty($categories)) {
    $categories = get_field('categories');
    $limit = 3;
    $isModule = true;
}

?>
<?php if (!is_admin()) : ?>
    <section class="catalog-products-module">
        <div class="container">
            <?php if (!empty($categories)) : ?>
                <div class="blocks-wrapper">
                    <?php foreach ($categories as $category) : ?>
                        <?php
                        $button_name = $category['button_name'];
                        $term_id = $category['select_category'];
                        $url = get_term_link($term_id, 'categories');
                        $tag = $category['tag'] ?? 'h2';
                        $products = get_posts(
                            [
                                'post_type' => 'catalog',
                                'posts_per_page' => -1,
                                'post_status' => 'publish',
                                'tax_query' => [
                                    [
                                        'taxonomy' => 'categories',
                                        'field' => 'term_id',
                                        'terms' => $term_id
                                    ],
                                ]
                            ]
                        );
                        $countProducts = count($products);
                        ?>
                        <div id="<?=$term_id?>" class="block-products">
                            <?php if (!empty($page_term_id)) : ?>
                                <a href="<?= get_home_url() ?><?= Urls::CATEGORIES_BANI ?>#<?= $page_term_id ?>"
                                   class="breadcrumbs btn btn-green">
                                    Powrót do katalogu
                                </a>
                            <?php endif; ?>
                            <div class="products-headline">
                                <<?=$tag?>><?= $category['headline'] ?? 'Katalog' ?></<?=$tag?>>
                            </div>
                            <?php if (!empty($products)) : ?>
                                <div class="block-catalog">
                                    <?php foreach ($products as $key => $product) : ?>
                                        <?php if ($key < $limit) : ?>
                                            <?php
                                            $gallery = get_field('images_product', $product->ID);
                                            $number_of_rooms_title = get_field('number_of_rooms_title', $product->ID);
                                            $number_of_rooms = get_field('number_of_rooms', $product->ID);
                                            $production_time_header = get_field('production_time_header', $product->ID);
                                            $catalog_time = get_field('catalog_time', $product->ID);
                                            $header_length_options = get_field('header_length_options', $product->ID);
                                            $length_options = get_field('length_options', $product->ID);
                                            ?>
                                            <a href="<?= get_permalink($product->ID) ?>" class="catalog-item">
                                                <?php if (!empty($gallery)) : ?>
                                                    <div class="catalog-item__image">
                                                        <picture>
                                                            <img loading="lazy" src="<?= $gallery[0]['url'] ?>"
                                                                 alt="<?= $gallery[0]['title'] ?>">
                                                        </picture>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="catalog-item__bottom">
                                                    <h2 class="catalog-item__headline">
                                                        <?= $product->post_title ?>
                                                    </h2>

                                                    <div class="catalog-item__characteristics">
                                                        <div class="catalog-item__characteristic">
                                                            <?php if (!empty($number_of_rooms_title) && !empty($number_of_rooms)) : ?>
                                                                <p class="characteristic-name"><?= $number_of_rooms_title ?>
                                                                    :</p>
                                                                <p class="characteristic-value"><?= $number_of_rooms ?></p>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="catalog-item__characteristic">
                                                            <?php if (!empty($production_time_header) && !empty($catalog_time)) : ?>
                                                                <p class="characteristic-name"><?= $production_time_header ?>
                                                                    :</p>
                                                                <p class="characteristic-value"><?= $catalog_time ?></p>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="catalog-item__characteristic">
                                                            <?php if (!empty($header_length_options) && !empty($length_options[0])) : ?>
                                                                <p class="characteristic-name"><?= $header_length_options ?>
                                                                    :</p>
                                                                <p class="characteristic-value"><?= $length_options[0]['length'] ?></p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <div class="catalog-item__btn btn btn-green">Zobacz</div>
                                                </div>
                                            </a>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($isModule) : ?>
                                <div class="all-products">
                                    <a href="<?= $url ?>" class="btn btn-green"><?= $button_name ?>
                                        (<?= $countProducts ?>)</a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Каталог продуктов</h2>
<?php endif; ?>