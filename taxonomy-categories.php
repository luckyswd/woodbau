<?php
get_header();
$term_url = get_query_var('term');
$term_id = get_queried_object()->term_id;
?>
<section id="about-product">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if ($term_url == 'xaberkub') { ?>
                    <div class="text-des">
                        <span> EasyCUBE </span> to marka firmy Woodbau, która oferuje innowacyjne mocowania do szybkiego
                        samodzielnego montażu altan, tarasów, patio, kawiarenek zewnętrznych oraz wszelkiego rodzaju
                        konstrukcji. Naszym klientom oferujemy atrakcyjną i niedrogą przestrzeń rekreacyjną.
                        </p>
                        <p><span> EasyCUBE </span> - będzie interesujący zarówno dla sektora biznesowego, jak i
                            prywatnego.
                            <br> Kawiarnie letnie, strych przy elewacji kawiarni, plac zabaw, zadaszony teren na
                            imprezy, taras, wiata garażowa i prawie każda powierzchnia handlowa, którą można zdemontować
                            na koniec sezonu.
                        </p>
                        <p> Ze względu na swoją wszechstronność możesz stworzyć dowolny ciekawy i nietypowy projekt,
                            który z pewnością przyciągnie uwagę! </p>
                        <p> Zalety konstrukcji <span> EasyCube </span>:
                            <br> - Wygodne opakowanie z kompletem uchwytów montażowych.
                            <br> - Pręt 100 x 100 mm x 3000mm (w zestawie)
                            <br> - Montaż konstrukcji nie wymaga specjalnego przygotowania <br> - Szybki montaż </p>';

                    </div>
                <?php } ?>
            </div>
        </div>
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
<section id="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3>Katalog</h3>
                </div>
            </div>
        </div>
        <?php if ($_SERVER['REQUEST_URI'] !== '/categories/budynki-drewniane/') : ?>
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
        <?php else: ?>

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
                                <div class="catalog-item__btn btn btn-green">Zobacz</div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
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
                        <?php while ($post_portfolio->have_posts()) : $post_portfolio->the_post(); ?><?php $values = get_post_meta(get_the_ID()); ?>
                            <div class="project-item"
                                 style="background-image: url('<?php echo $values['_code_portfolio_photo|code_portfolio_photo_item|0|0|value']['0']; ?>')">
                                <h4><?php the_title(); ?></h4>
                                <p><?php $str = mb_strimwidth($values['_code_portfolio_description']['0'], 0, 100, "...");
                                    echo $str; ?></p>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-clock.png">czas produkcji 3-4 tygodnie</span>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag.png">na prośbę</span>
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
                    <h3>Dlaczego my?</h3>
                </div>
            </div>
        </div>
        <div class="row dlachego">
            <div class="col-md-4">
                <div class="why-item">
                    <span>1</span>
                    <h4>Stworzymy</h4>
                    <h5>wyjątkowy projekt dla ciebie</h5>
                    <p>Architekci, inżynierowie, projektanci i budowniczowie współpracują z nami ponad 10 lat.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>2</span>
                    <h4>Zadbamy o jakość</h4>
                    <h5>możesz zaufać naszej jakości</h5>
                    <p>Używamy najlepszych materiałów budowlanych dla najwyższej jakości produktu.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>3</span>
                    <h4>Oszczędzimy twój czas</h4>
                    <h5>obiecamy szybką realizacje projektu</h5>
                    <p>Realizujemy zamówienia w jak najkrótszym czasie, pomożemy z wyborem żeby maksymalnie zaoszczędzić
                        twój wolny czas.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>4</span>
                    <h4>Dbamy o twoje zdrowie</h4>
                    <h5>Woodbau - to inwestycja w twoje zdrowie</h5>
                    <p>Zabiegi kąpielowe to świetny sposób na wzmocnienie odporności.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>5</span>
                    <h4>Szeroki wybór</h4>
                    <h5>Oferujemy szeroki wybór modeli i kolorów.</h5>
                    <p>Oferujemy szeroki wybór modeli i kolorów. Zadowolimy nawet najbardziej wymagających klientów, w
                        Woodbau napewno znajdziesz coś dla siebie.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>6</span>
                    <h4>Niemiecka jakość</h4>
                    <h5></h5>
                    <p>Technologia produkcyjna opracowana w Niemczech przez najlepszych inżynierów, co zwiększa zużycie.
                        Sauna będzie ozdabiać twoją działkę przez wiele lat</p>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-01.png">
                        <div class="category-text">
                            <h4>Wanny na zamówienie</h4>
                            <a href="<?php echo home_url(); ?>/catalog/banya-bochka/#products">Beczka do kąpieli</a>
                            <a href="<?php echo home_url(); ?>/catalog/banya-kvadro/#products">Bath-kvadro</a>
                            <a href="<?php echo home_url(); ?>/catalog/banya-ovalnaya/#products">Wanna owalna</a>
                            <a href="<?php echo home_url(); ?>/catalog/arochnaya-banya/#products">Łukowata wanna</a>
                            <a href="<?php echo home_url(); ?>/categories/bani/#products" class="btn btn-green">Więcej
                                szczegółów</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-04.png">
                        <div class="category-text">
                            <h4>EasyCube</h4>
                            <a href="<?php echo home_url(); ?>/categories/xaberkub/#products">Z 3 markizami i hamakiem</a>
                            <a href="<?php echo home_url(); ?>/categories/xaberkub/#products">Z markizą i ścianą</a>
                            <a href="<?php echo home_url(); ?>/categories/xaberkub/#products">Z dwiema markizami i hamakiem</a>
                            <a href="<?php echo home_url(); ?>/categories/xaberkub/#products" class="btn btn-green">Więcej
                                szczegółów</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-07.png">
                        <div class="category-text">
                            <h4>Dąb</h4>
                            <a href="<?php echo home_url(); ?>/categories/stoly-iz-duba/#products">Wymiary</a>
                            <a href="<?php echo home_url(); ?>/categories/stoly-iz-duba/#about-product">Opis</a>
                            <a href="<?php echo home_url(); ?>/categories/stoly-iz-duba/#products"><Stoły dębowe</a>
                            <a href="<?php echo home_url(); ?>/categories/stoly-iz-duba/#products"
                               class="btn btn-green">Więcej szczegółów</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-08.png">
                        <div class="category-text">
                            <h4><Termodrewno</h4>
                            <a href="<?php echo home_url(); ?>/categories/pilomaterialy/#products">Deska</a>
                            <a href="<?php echo home_url(); ?>/categories/pilomaterialy/#products">Deska tarasowa</a>
                            <a href="<?php echo home_url(); ?>/categories/pilomaterialy/#products">Deska tarasowa</a>
                            <a href="<?php echo home_url(); ?>/categories/pilomaterialy/#products"
                               class="btn btn-green">Więcej szczegółów</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-05.png">
                        <div class="category-text">
                            <h4>Do gotowania żywności</h4>
                            <a href="<?php echo home_url(); ?>/categories/tandyry-i-kazany/#products">Tandoor</a>
                            <a href="<?php echo home_url(); ?>/categories/tandyry-i-kazany/#products">Kazań</a>
                            <a href="<?php echo home_url(); ?>/categories/tandyry-i-kazany/#products">Kociołki</a>
                            <a href="<?php echo home_url(); ?>/categories/tandyry-i-kazany/#products"
                               class="btn btn-green">Więcej szczegółów</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-06.png">
                        <div class="category-text">
                            <h4>Kompleks grillowy</h4>
                            <p>Zmontowany jako konstruktor w 20 minut</p>
                            <a href="<?php echo home_url(); ?>/categories/barbekyu/">Opis</a>
                            <a href="<?php echo home_url(); ?>/categories/barbekyu/#products" class="btn btn-green">Więcej
                                szczegółów</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-03.png">
                        <div class="category-text">
                            <h4>Budynki z minibarami</h4>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa/#products">Małe domy</a>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa/#products">Altany</a>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa/#products">Budynki gospodarcze</a>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa/#products">Domy dla dzieci</a>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa/#products"
                               class="btn btn-green">Więcej szczegółów</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-09.png">
                        <div class="category-text">
                            <h4>Akcesoria do kąpieli</h4>
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva/#mebel">Akcesoria i meble</a>
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva/#vedra">Wiadra na wodę</a>
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva/#shaiki">Gangi i parowce</a>
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva/#abaj">Abażury do lamp</a>
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva/#products"
                               class="btn btn-green">Więcej szczegółów</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-10.png">
                        <div class="category-text">
                            <h4>Kabiny kempingowe</h4>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki/#model1">Projekt KD-1</a>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki/#model2">Projekt KD-2</a>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki/#model3">Projekt KD-3</a>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki/#model4">Projekt KD-4</a>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki/#model5">Projekt KD-5</a>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki//#products"
                               class="btn btn-green">Więcej szczegółów</a>
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

