<?php
get_header();
$term_url = get_query_var('term');
$term_id = get_queried_object()->term_id;
?>
<!--Получение свойсв-->
<?php //echo carbon_get_term_meta($term_id, 'code_category_name') ?>
<!-- Вывод продукции -->
<?php //$post_catalog = new WP_Query(array('tax_query' => array(array('taxonomy' => 'categories', 'field' => 'slug', 'terms' => $term_url)),'paged' => $paged)); //ищем по типу поста?>
<?php //if ($post_catalog->have_posts()) : ?>
<!--    --><?php //while ($post_catalog->have_posts()) : $post_catalog->the_post(); ?>
<!--        --><?php //$values = get_post_meta(get_the_ID()); ?>
<!--        --><?php //dump($values); ?>
<!--        --><?php //wp_reset_query(); ?>
<!--    --><?php //endwhile; ?><!----><?php //else: ?>
<?php //endif; ?>
<?php //wp_reset_query(); ?>
<section id="about-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3>Osobliwości</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="order-2 col-md-4 order-md-1">
                <div class="why-item">
                    <span>1</span>
                    <h4><?php echo carbon_get_term_meta($term_id, 'code_category_osob1_1') ?></h4>
                    <h5><?php echo carbon_get_term_meta($term_id, 'code_category_osob1_2') ?></h5>
                    <p><?php echo carbon_get_term_meta($term_id, 'code_category_osob1_3') ?></p>
                </div>
                <div class="why-item">
                    <span>3</span>
                    <h4><?php echo carbon_get_term_meta($term_id, 'code_category_osob3_1') ?></h4>
                    <h5><?php echo carbon_get_term_meta($term_id, 'code_category_osob3_2') ?></h5>
                    <p><?php echo carbon_get_term_meta($term_id, 'code_category_osob3_3') ?></p>
                </div>
            </div>
            <div class="order-1 col-md-4 order-md-2">
                <div class="about-product-img">
                    <img src="<?php echo carbon_get_term_meta($term_id, 'code_category_osob') ?>">
                </div>
            </div>
            <div class="order-3 col-md-4 order-md-3">
                <div class="why-item">
                    <span>2</span>
                    <h4><?php echo carbon_get_term_meta($term_id, 'code_category_osob2_1') ?></h4>
                    <h5><?php echo carbon_get_term_meta($term_id, 'code_category_osob2_2') ?></h5>
                    <p><?php echo carbon_get_term_meta($term_id, 'code_category_osob2_3') ?></p>
                </div>
                <div class="why-item">
                    <span>4</span>
                    <h4><?php echo carbon_get_term_meta($term_id, 'code_category_osob4_1') ?></h4>
                    <h5><?php echo carbon_get_term_meta($term_id, 'code_category_osob4_2') ?></h5>
                    <p><?php echo carbon_get_term_meta($term_id, 'code_category_osob4_3') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="products" class="aksessuary">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3>Kabiny kempingowe</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" id="model1">
                <div class="product-item">
                    <h3>Projekt KD-1</h3>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kemping/001.jpg" alt=""></div>
                    <p>Pensjonat 2,5х4 <br> Salon, weranda <br> Powierzchnia: 10 m2</p><br>
                    <a href="#modal-popup" class="popup-modal btn btn-green">Zamów projekt</a>
                </div>
            </div>
            <div class="col-md-12" id="model2">
                <div class="product-item">
                    <h3>Projekt KD-2</h3>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kemping/002.jpg" alt=""></div>
                    <p>Pensjonat 2,5х4,5 <br> Salon, weranda <br> Powierzchnia: 11,25 m2</p><br>
                    <a href="#modal-popup" class="popup-modal btn btn-green">Zamów projekt</a>
                </div>
            </div>
            <div class="col-md-12" id="model3">
                <div class="product-item">
                    <h3>Projekt KD-3</h3>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kemping/003.jpg" alt=""></div>
                    <p>Pensjonat 3x5 <br> Salon, weranda <br> Powierzchnia: 15 m2</p><br>
                    <a href="#modal-popup" class="popup-modal btn btn-green">Zamów projekt</a>
                </div>
            </div>
            <div class="col-md-12" id="model4">
                <div class="product-item">
                    <h3>Projekt KD-4</h3>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kemping/004.jpg" alt=""></div>
                    <p>Pensjonat 3x6 <br> Salon, weranda, WC <br> Powierzchnia: 18 m2 </p><br>
                    <a href="#modal-popup" class="popup-modal btn btn-green">Zamów projekt</a>
                </div>
            </div>
            <div class="col-md-12" id="model5">
                <div class="product-item">
                    <h3>Projekt KD-5</h3>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kemping/005.jpg" alt=""></div>
                    <p>Pensjonat 4x6 <br> Salon, weranda, WC <br> Powierzchnia: 24 m2</p><br>
                    <a href="#modal-popup" class="popup-modal btn btn-green">Zamów projekt</a>
                </div>
            </div>
            <div class="col-md-12" id="model6">
                <div class="product-item">
                    <h3>Projekt KD-6</h3>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kemping/006.jpg" alt=""></div>
                    <p>Pensjonat 2,5x6 <br> Salon, weranda <br> Powierzchnia: 15 m2</p><br>
                    <a href="#modal-popup" class="popup-modal btn btn-green">Zamów projekt</a>
                </div>
            </div>
            <div class="col-md-12" id="model7">
                <div class="product-item">
                    <h3>Projekt KD-7</h3>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kemping/007.jpg" alt=""></div>
                    <p> Pensjonat 2,5х5 <br> Biuro <br> Powierzchnia: 12,5 m2 </p><br>
                    <a href="#modal-popup" class="popup-modal btn btn-green">Zamów projekt</a>
                </div>
            </div>
            <div class="col-md-12" id="model8">
                <div class="product-item">
                    <h3>Projekt KD-8</h3>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kemping/008.jpg" alt=""></div>
                    <p>Pensjonat 2,5х6 <br> Łaźnia <br> Powierzchnia: 15 m2</p><br>
                    <a href="#modal-popup" class="popup-modal btn btn-green">Zamów projekt</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="project">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3>Zrealizowane projekty</h3>
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
                            <div class="project-item" style="background-image: url('<?php echo $values['_code_portfolio_photo|code_portfolio_photo_item|0|0|value']['0']; ?>')">
                                <h4><?php the_title(); ?></h4>
                                <p><?php $str = mb_strimwidth($values['_code_portfolio_description']['0'], 0, 100, "...");
                                    echo $str; ?></p>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-clock.png.webp">czas produkcji 3-4 tygodnie</span>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag.png.webp">na prośbę</span>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="<?php $url = get_permalink($post);
                                        echo $url; ?>" class="btn btn-green">Wyglądać</a>
                                    </div>
                                </div>
                            </div>
                           <?php endwhile; ?><?php else: ?>
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
                <a href="#" class="btn btn-green">Zobacz wszystkie projekty</a>
            </div>
        </div>
    </div>
</section>
<section id="why">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3><Dlaczego my?</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="why-item">
                    <span>1</span>
                    <h4>Stwórzmy</h4>
                    <h5>wyjątkowy projekt dla Ciebie</h5>
                    <p>Architekci, inżynierowie, projektanci i budowniczowie współpracują z nami od 10 lat</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>2</span>
                    <h4>Wykonajmy</h4>
                    <h5>zrobimy to w jak najkrótszym czasie</h5>
                    <p>Od projektu i projektu po budowę obiektu wszystkie etapy produkcji realizowane są bezpośrednio przez samego producenta, co pozwala na otrzymanie towaru w możliwie najkrótszym czasie i w najlepszej jakości</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>3</span>
                    <h4>Dostarczymy</h4>
                    <h5>niezbędny sprzęt</h5>
                    <p>Optymalny stosunek ceny do jakości bez pośredników, tylko bezpośrednie dostawy z fabryk</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>4</span>
                    <h4>Połączmy się</h4>
                    <h5>i skonfigurować całą komunikację</h5>
                    <p>Wszystkie przedmioty przekazujemy na czas, całkowicie gotowe do pracy, udzielamy instrukcji obsługi</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>5</span>
                    <h4><Katalog</h4>
                    <h5>szeroka gama projektów</h5>
                    <p><Duży wybór gotowych projektów. Możemy również opracować dla Ciebie indywidualny projekt</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>6</span>
                    <h4>damy gwarancje</h4>
                    <h5>wyjątkowy projekt dla Ciebie</h5>
                    <p>wyjątkowy projekt dla Ciebie Z nami od 10 lat współpracujemy z architektami, inżynierami, projektantami i budowniczymi</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3>Może jesteś zainteresowany?</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="category-slider owl-carousel owl-theme" id="owl-category-slider">
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-01.png.webp">
                        <div class="category-text">
                            <h4>Wanny na zamówienie</h4>
                            <a href="<?php echo home_url(); ?>/catalog/banya-bochka/#products">Beczka do kąpieli</a>
                            <a href="<?php echo home_url(); ?>/catalog/banya-kvadro/#products">Bath-kvadro</a>
                            <a href="<?php echo home_url(); ?>/catalog/banya-ovalnaya/#products">Wanna owalna</a>
                            <a href="<?php echo home_url(); ?>/catalog/arochnaya-banya/#products">Łukowata wanna</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BANI ?>#products" class="btn btn-green">Cały katalog</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-04.png.webp">
                        <div class="category-text">
                            <h4>EasyCube</h4>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_EASYCUBE ?>#products">Z 3 markizami i hamakiem</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_EASYCUBE ?>#products">Z markizą i ścianą</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_EASYCUBE ?>#products">Z dwiema markizami i hamakiem</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_EASYCUBE ?>#products" class="btn btn-green">Więcej szczegółów</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-07.png.webp">
                        <div class="category-text">
                            <h4>Dąb</h4>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_STOLY_DEBOWE ?>#products">Wymiary</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_STOLY_DEBOWE ?>#about-product">Opis</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_STOLY_DEBOWE ?>#products">Stoły dębowe</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_STOLY_DEBOWE ?>#products" class="btn btn-green">Więcej szczegółów</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-08.png.webp">
                        <div class="category-text">
                            <h4>Termodrewno</h4>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_THERMO_DREWNO ?>#products">Deska</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_THERMO_DREWNO ?>#products">Deska tarasowa</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_THERMO_DREWNO ?>#products">Deska tarasowa</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_THERMO_DREWNO ?>#products" class="btn btn-green">Cały katalog</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-05.png.webp">
                        <div class="category-text">
                            <h4>Do gotowania żywności</h4>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_TANDIRY_I_KOCIOLKI ?>#products">Tandoor</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_TANDIRY_I_KOCIOLKI ?>#products">Kazań</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_TANDIRY_I_KOCIOLKI ?>#products">Kociołki</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_TANDIRY_I_KOCIOLKI ?>#products" class="btn btn-green">Cały katalog</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-06.png.webp">
                        <div class="category-text">
                            <h4>Kompleks grillowy</h4>
                            <p>Zmontowany jako konstruktor w 20 minut</p>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BARBECUE ?>">Opis</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BARBECUE ?>#products" class="btn btn-green">Katalog</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-03.png.webp">
                        <div class="category-text">
                            <h4>Budynki z minibarami</h4>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BUDYNKI_DREWNIANE ?>#products">Małe domy</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BUDYNKI_DREWNIANE ?>#products">Altany</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BUDYNKI_DREWNIANE ?>#products">Budynki gospodarcze</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BUDYNKI_DREWNIANE ?>#products">Domy dla dzieci</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BUDYNKI_DREWNIANE ?>#products" class="btn btn-green">Więcej szczegółów</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-09.png.webp">
                        <div class="category-text">
                            <h4>Akcesoria do kąpieli</h4>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DREWNIANE_AKCESORIA_DO_SAUNY ?>#mebel">Akcesoria i meble</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DREWNIANE_AKCESORIA_DO_SAUNY ?>#vedra">Wiadra na wodę</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DREWNIANE_AKCESORIA_DO_SAUNY ?>#shaiki">Gangi i parowce</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DREWNIANE_AKCESORIA_DO_SAUNY ?>#abaj">Abażury do lamp</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DREWNIANE_AKCESORIA_DO_SAUNY ?>#products" class="btn btn-green">Więcej szczegółów</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-10.png.webp">
                        <div class="category-text">
                            <h4>Kabiny kempingowe</h4>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>#model1">Projekt KD-1</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>#model2">Projekt KD-2</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>#model3">Projekt KD-3</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>#model4">Projekt KD-4</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>#model5">Projekt KD-5</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>#products" class="btn btn-green">Więcej szczegółów</a>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    var owl = $('#owl-category-slider');
                    owl.owlCarousel({
                        items: 3,
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
                                items: 3
                            }
                        },
                    });
                })
            </script>
        </div>
    </div>
</section>
<?php
get_footer();
?>

