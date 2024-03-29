<?php
get_header();
?>

<?php
$term = get_queried_object();
?>

<?php if (in_array($term->slug, Helpers::SAUNY_URLS)) : ?>
    <?php
    $products = get_posts(
        [
            'post_type' => 'catalog',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'tax_query' => [
                [
                    'taxonomy' => 'categories',
                    'field' => 'term_id',
                    'terms' => $term->term_id
                ],
            ]
        ]
    );
    ?>
    <section id="products">
        <div class="container">
            <div class="btn-back">
                <a href="<?= get_home_url() ?>/sauny/" class="btn btn-green">Powrót do katalogu</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-head">
                        <h1>Katalog <?= $term->name ?></h1>
                    </div>
                </div>
            </div>
            <div class="products-wrapper">
                <?php if (!empty($products)) : ?>
                    <?php foreach ($products as $product) : ?>
                        <?php
                        $gallery = get_field('main_gallery', $product->ID);
                        $properties = get_field('properties', $product->ID);
                        $properties = get_field('properties', $product->ID);
                        $price = get_field('price', $product->ID);
                        $url = get_permalink($product);
                        ?>
                        <div class="product-item">
                            <div class="product-item-img"
                                 style="background-image: url('<?= $gallery[0]['url'] ?? '' ?>')"></div>
                            <h2><?= $product->post_title ?></h2>
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
                                        <p class="characteristic-name">Cena:</p>
                                        <p class="characteristic-value"><span><?= $price ?></span> zl.</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <a href="<?= $url ?>" class="btn btn-green">Szczegółowy</a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="project">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-head">
                        <h3>Polecane produkty</h3>
                        <span>Polecane produkty</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="project-slider owl-carousel owl-theme" id="owl-project-slider">
                        <?php
                        $categories = Helpers::SAUNY_URLS;
                        unset($categories[array_search($term->slug, $categories)]);
                        $post_product = new WP_Query(array(
                            'post_type' => 'catalog',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categories',
                                    'field'    => 'slug',
                                    'terms'    => $categories,
                                )
                            )
                        ));

                        if ($post_product->have_posts()) :
                            while ($post_product->have_posts()) : $post_product->the_post();
                                $url = get_permalink($post);
                                $images = get_field('main_gallery');
                                $time = get_field('production_time');
                                $price = get_field('price');
                                ?>
                                <div class="project-item"
                                     style="background-image: url('<?php echo $images[0]['url']; ?>')">
                                    <h4><?php the_title(); ?></h4>
                                    <?php if (!empty($time)) : ?>
                                        <span><img src="<?= get_template_directory_uri(); ?>/images/icon-clock.png.webp"><?= $time; ?></span>
                                    <?php endif; ?>
                                    <?php if (!empty($price)) : ?>
                                        <span><img src="<?= get_template_directory_uri(); ?>/images/icon-tag.png.webp">от <?= $price; ?> zl.</span>
                                    <?php endif; ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="<?= $url; ?>" class="btn btn-green">Popatrzeć</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>Brak treści lub nieprawidłowy typ postu</p>
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
                          autoplay: false,
                          autoplayTimeout: 5000,
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
                    <a href="<?= home_url(); ?>/sauny/" class="btn btn-green">Zobacz wszystkie produkty</a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
get_footer();
?>