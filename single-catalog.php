<?php
get_header();

$post = $wp_query->post;
$category = get_the_terms($post->ID, 'categories')[0]->slug;

$customCategories = Helpers::BANI_URLS;

if ( in_array($category, $customCategories) ) { //ID категории
    include( TEMPLATEPATH.'/single-catalog-'. $category .'.php' );
} else {
    include( TEMPLATEPATH.'/single-catalog-default.php' );
}
?>
<!-- <section id="project">
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
</section> -->

<section id="project">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Polecane produkty';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Рекомендованные товары';
                        } else {
                            echo 'Empfohlene Produkte';
                        }; ?></h3>
                    <span><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Polecane produkty';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Рекомендованные товары';
                        } else {
                            echo 'Empfohlene Produkte';
                        }; ?></span>
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
                                  'terms'    => 'bani-bochki'
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
                                <span><img src="<?= get_template_directory_uri(); ?>/images/icon-clock.png">до 2 мес.</span>
                                <span><img src="<?= get_template_directory_uri(); ?>/images/icon-tag.png">от <?= $price; ?> руб.</span>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="<?= $url; ?>" class="btn btn-green">
                                            <?php if (ICL_LANGUAGE_CODE == 'pl') {
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
                <a href="<?= home_url(); ?>/saunas/" class="btn btn-green">Посмотреть все товары</a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>