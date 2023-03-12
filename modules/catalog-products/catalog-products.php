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
                        <div id="<?= $term_id ?>" class="block-products">
                            <div class="products-headline">
                                <h2><?= $category['headline'] ?? 'Katalog' ?></h2>
                                <span> <?= $category['headline'] ?? 'Katalog' ?></span>
                            </div>
                        </div>
                        <?php if (!empty($products)) : ?>
                            <div class="block-catalog">
                                <?php foreach ($products as $key => $product) : ?>
                                    <?php if ($key < $limit) : ?>
                                        <?php
                                        $gallery = get_field('main_gallery', $product->ID);
                                        $properties = get_field('properties', $product->ID);
                                        $price = get_field('price', $product->ID);
                                        ?>
                                        <a href="<?= get_permalink($product->ID) ?>" class="catalog-item">
                                            <?php if (!empty($gallery)) : ?>
                                                <div class="catalog-item__image">
                                                    <picture>
                                                        <img loading="lazy" src="<?= $gallery[0]['sizes']['medium']  ?>"
                                                             alt="<?= $gallery[0]['title'] ?>">
                                                    </picture>
                                                </div>
                                            <?php endif; ?>
                                            <div class="catalog-item__bottom">
                                                <h2 class="catalog-item__headline">
                                                    <?= $product->post_title ?>
                                                </h2>
                                                <div class="catalog-item__characteristics">
                                                    <?php if (!empty($properties)) : ?>
                                                        <?php foreach ($properties as $key => $prop) : ?>
                                                            <?php if ($key === 0) : ?>
                                                                <div class="catalog-item__characteristic">
                                                                    <p class="characteristic-name"><?= $prop['property_name'] ?>: </p>
                                                                    <p class="characteristic-value"><?= $prop['property_value'] ?></p>
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="catalog-item__characteristics property-price">
                                                    <?php if (!empty($price)) : ?>
                                                        <div class="catalog-item__characteristic">
                                                            <p class="characteristic-name">Cena</p>
                                                            <p class="characteristic-value"><span><?= $price ?></span> zl.</p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="btn-wrapper">
                                                <div class="catalog-item__btn btn btn-green">Zobacz wszystkie</div>
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
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Katalog produktów</h2>
<?php endif; ?>