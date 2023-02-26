<?php
get_header();

$post = $wp_query->post;
$category = get_the_terms($post->ID, 'categories')[0]->slug;

$customCategories = Helpers::SAUNY_URLS;

if ( in_array($category, $customCategories) ) { //ID категории
    include( TEMPLATEPATH.'/single-catalog-'. $category .'.php' );
} else {
    include( TEMPLATEPATH.'/single-catalog-default.php' );
}

?>
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
                        $post_product = new WP_Query(array(
                            'post_type' => 'catalog',
                            'tax_query' => array(
                                array(
                                  'taxonomy' => 'categories',
                                  'field'    => 'slug',
                                  'terms'    => 'sauny-beczka'
                                )
                            )
                        ));
                        
                        if ($post_product->have_posts()) :
                            while ($post_product->have_posts()) : $post_product->the_post();
                                $url = get_permalink($post);
                                $images = get_field('main_gallery');
                                $price = get_field('price');
                            ?>
                            <div class="project-item"
                                 style="background-image: url('<?php echo $images[0]['url']; ?>')">
                                <h4><?php the_title(); ?></h4>
                                <span><img src="<?= get_template_directory_uri(); ?>/images/icon-clock.png">czas realizacji 6-8 tygodnie</span>
                                <span><img src="<?= get_template_directory_uri(); ?>/images/icon-tag.png">от <?= $price; ?> zl.</span>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="<?= $url; ?>" class="btn btn-green">Wyglądać</a>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>Нет контента или неправильно указан тип поста</p>
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
                <a href="<?php echo home_url(); ?>/sauny/" class="btn btn-green">Zobacz wszystkie projekty</a>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>