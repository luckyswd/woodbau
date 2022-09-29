<?php

/*
Title: Продукты
Mode: preview
*/

$currentUrl = $_SERVER['REQUEST_URI'];
$title = 'Katalog';

if ($currentUrl == Urls::CATEGORIES_BANI) {
    $title = 'Stwórz indywidualny projekt';
}

?>

<section id="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3><?= $title ?></h3>
                </div>
            </div>
        </div>
        <?php if ($currentUrl === Urls::CATEGORIES_BUDYNKI_DREWNIANE) : ?>

            <?php
            $posts = get_posts(
                [
                    'post_type' => 'catalog',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                    'tax_query' => [
                        [
                            'taxonomy' => 'categories',
                            'field' => 'slug',
                            'terms' => 'budynki-drewniane'
                        ],
                    ]
                ]
            );
            ?>
            <?php if (!empty($posts)) : ?>
                <div class="block-catalog">
                    <?php foreach ($posts as $post) : ?>
                        <?php
                        $price = get_field('price', $post->ID);
                        $characteristics = get_field('characteristics', $post->ID);
                        $services = get_field('services', $post->ID);
                        $gallery = get_field('gallery', $post->ID);
                        $description = get_field('description', $post->ID);
                        ?>
                        <a href="<?= get_permalink($post->ID) ?>" class="catalog-item">
                            <?php if (!empty($gallery)) : ?>
                                <div class="catalog-item__image">
                                    <picture>
                                        <img loading="lazy" src="<?= $gallery[0]['url'] ?>"
                                             alt="<?= $gallery[0]['title'] ?>">
                                    </picture>
                                </div>
                            <?php endif; ?>
                            <div class="catalog-item__bottom">
                                <?php if (!empty($price)) : ?>
                                    <h2 class="catalog-item__price">od <?= $price ?> zł</h2>
                                <?php endif; ?>
                                <h4 class="catalog-item__headline">
                                    <?= $post->post_title ?>
                                </h4>
                                <?php if (!empty($characteristics)) : ?>
                                    <div class="catalog-item__characteristics">
                                        <?php foreach ($characteristics as $key => $characteristic) : ?>
                                            <?php if ($key <= 2) : ?>
                                                <div class="catalog-item__characteristic">
                                                    <?php if (!empty($characteristic['characteristic_name'])) : ?>
                                                        <p class="characteristic-name"><?= $characteristic['characteristic_name'] ?>
                                                            :</p>
                                                    <?php endif; ?>
                                                    <?php if (!empty($characteristic['characteristic_value'])) : ?>
                                                        <p class="characteristic-value"><?= $characteristic['characteristic_value'] ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="btn-wrapper">
                                <div class="catalog-item__btn btn btn-green">Zobacz</div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <?php elseif ($currentUrl === Urls::CATEGORIES_BANI) : ?>
            <div class="row">
                <?php $post_catalog = new WP_Query(array('tax_query' => array(array('taxonomy' => 'categories', 'field' => 'slug', 'terms' => 'sauny')), 'posts_per_page' => '99')); //ищем по типу поста?>

                <?php if ($post_catalog->have_posts()) : ?><?php while ($post_catalog->have_posts()) : $post_catalog->the_post(); ?><?php $values = get_post_meta(get_the_ID()); ?><?php //dump($values); ?>
                    <div class="col-md-3">
                        <div class="product-item">
                            <div class="product-item-img"
                                 style="background-image: url('<?php echo $values['_code_catalog_photo|code_catalog_photo_item|0|0|value']['0']; ?>')"></div>
                            <h4><?php the_title(); ?></h4>
                            <a href="<?php $url = get_permalink($post);
                            echo $url; ?>" class="btn btn-green">Więcej szczegółów
                            </a>
                        </div>
                    </div>
                    <?php wp_reset_query(); ?><?php endwhile; ?><?php else: ?><?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        <?php else: ?>
            <div class="row">
                <?php $post_catalog = new WP_Query(array('tax_query' => array(array('taxonomy' => 'categories', 'field' => 'slug', 'terms' => $term_url)), 'posts_per_page' => '99')); //ищем по типу поста?>

                <?php if ($post_catalog->have_posts()) : ?><?php while ($post_catalog->have_posts()) : $post_catalog->the_post(); ?><?php $values = get_post_meta(get_the_ID()); ?><?php //dump($values); ?>
                    <div class="col-md-3">
                        <div class="product-item">
                            <div class="product-item-img"
                                 style="background-image: url('<?php echo $values['_code_catalog_photo|code_catalog_photo_item|0|0|value']['0']; ?>')"></div>
                            <h4><?php the_title(); ?></h4>
                            <a href="<?php $url = get_permalink($post);
                            echo $url; ?>" class="btn btn-green">Więcej szczegółów
                            </a>
                        </div>
                    </div>
                    <?php wp_reset_query(); ?><?php endwhile; ?><?php else: ?><?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
