<?php
/*
Template Name: Шаблон главной страницы
*/
get_header();
$page_id = get_the_ID();
$advantages = get_field('сard_advantage', $page_id);

$title_order = get_field('title_order', $page_id);
$procedure_order = get_field('procedure_order', $page_id);
$button_name = get_field('button_name', $page_id);

$title_consultation = get_field('title_consultation', $page_id);
$form_consultation = get_field('form', $page_id);
$description_consultation = get_field('description_consultation', $page_id);
$background_image = get_field('background_image', $page_id);
$slider_gallery = get_field('slider_gallery', $page_id);
?>
    <section class="advantage">
        <div class="container">
            <?php if ($advantages) : ?>
                <div class="advantage__block">
                    <?php foreach ($advantages as $advantage) : ?>
                        <div class="advantage__block-item"
                             style="background-image: url(<?php echo $advantage['background_image']['url'] ?>)">
                            <?php if ($advantage['title_advantage']) : ?>
                                <div class="advantage__block-item-title">
                                    <?php echo $advantage['title_advantage'] ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($advantage['description_advantage']) : ?>
                                <div class="advantage__block-item-description">
                                    <?php echo $advantage['description_advantage'] ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($advantage['image_advantage']) : ?>
                                <div class="advantage__block-item-image">
                                    <img src="<?php echo $advantage['image_advantage']['url'] ?>" alt="">
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="order">
        <div class="container">
            <?php if ($advantages) : ?>
                <div class="order__block">
                    <?php if ($title_order) : ?>
                        <h2 class="order__block-title">
                            <?php echo $title_order ?>
                        </h2>
                    <?php endif; ?>
                    <div class="order-items">
                        <?php foreach ($procedure_order as $key => $order) : ?>
                            <div class="order__block-item">
                                <span class="order__block-item-number">0<?php echo $key + 1 ?></span>
                                <?php if ($order['title']) : ?>
                                    <div class="order__block-item-title">
                                        <?php echo $order['title'] ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($order['description']) : ?>
                                    <div class="order__block-item-description">
                                        <?php echo $order['description'] ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($order['image']) : ?>
                                    <div class="advantage__block-item-image">
                                        <img src="<?php echo $order['image']['url'] ?>" alt="">
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!--                --><?php //if ($button_name) : ?>
                    <!--                    <div class="order__button-name">-->
                    <!--                      --><? //= $button_name  ?>
                    <!--                    </div>-->
                    <!--                --><?php //endif; ?>
                </div>
            <?php endif; ?>
        </div>

    </section>
    <section id="gallery-slider">
        <div class="container">
            <div class="swiper gallerySlider">
                <div class="swiper-wrapper">
                    <?php if (!empty($slider_gallery)) : ?>
                        <?php foreach ($slider_gallery as $slide): ?>
                            <div class="swiper-slide">
                                <a href="<?= $slide['url']; ?>"
                                   data-fancybox="gallery"
                                   data-caption="<?= $slide['description']; ?>">
                                    <img src="<?= $slide['url']; ?>" alt="slide">
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <section id="category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-head">
                        <h3>Katalog</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-01.png">
                        <div class="category-text">
                            <h4>Sauny na zamówienie</h4>
                            <a href="<?php echo home_url(); ?>/catalog/banya-bochka">Beczka do kąpieli</a>
                            <a href="<?php echo home_url(); ?>/catalog/banya-kvadro">Bath-kvadro</a>
                            <a href="<?php echo home_url(); ?>/catalog/banya-ovalnaya">Wanna owalna</a>
                            <a href="<?php echo home_url(); ?>/catalog/arochnaya-banya">Łukowata wanna</a>
                            <a href="<?php echo home_url(); ?>/categories/bani" class="btn btn-green">Cały katalog</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-04.png">
                        <div class="category-text">
                            <h4>EasyCube</h4>
                            <a href="<?php echo home_url(); ?>/categories/xaberkub">Z 3 markizami i hamakiem</a>
                            <a href="<?php echo home_url(); ?>/categories/xaberkub">Z markizą i ścianą</a>
                            <a href="<?php echo home_url(); ?>/categories/xaberkub">Z dwiema markizami i hamakiem</a>
                            <a href="<?php echo home_url(); ?>/categories/xaberkub" class="btn btn-green">Cały
                                katalog</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-05.png">
                        <div class="category-text">
                            <h4>Do gotowania żywności</h4>
                            <a href="<?php echo home_url(); ?>/categories/tandyry-i-kazany">Kazań</a>
                            <a href="<?php echo home_url(); ?>/categories/tandyry-i-kazany">Kociołki</a>
                            <a href="<?php echo home_url(); ?>/categories/tandyry-i-kazany" class="btn btn-green">Cały
                                katalog</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-03.png">
                        <div class="category-text">
                            <h4>Budynki z drewna</h4>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa">Małe domy</a>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa">Altany</a>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa">Budynki gospodarcze</a>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa">Domy dla dzieci</a>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa" class="btn btn-green">Cały
                                katalog</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-11.png">
                        <div class="category-text">
                            <h4>Akcesoria do sauny</h4>
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva/#mebel">Akcesoria
                                i meble</a>
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva/#vedra">Wiadra na
                                wodę</a>
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva/#shaiki">Gangi i
                                parowce</a>
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva/#abaj">Abażury do
                                lamp</a>
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva"
                               class="btn btn-green">Cały katalog</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-10.png">
                        <div class="category-text">
                            <h4>Kabiny kempingowe</h4>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki/#model1">Projekt KD-1</a>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki/#model2">Projekt KD-2</a>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki/#model3">Projekt KD-3</a>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki/#model4">Projekt KD-4</a>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki/#model5">Projekt KD-5</a>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki" class="btn btn-green">Cały
                                katalog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="consultation" style="background-image: url(<?php echo $background_image ?>)">

        <div class="consultation__block">
            <?php if ($title_consultation) : ?>
                <div class="consultation__block-title">
                    <?php echo $title_consultation ?>
                </div>
            <?php endif; ?>

            <?php if ($description_consultation) : ?>
                <div class="consultation__block-description">
                    <?php echo $description_consultation ?>
                </div>
            <?php endif; ?>
            <?= $form_consultation; ?>
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
                                <div class="project-item"
                                     style="background-image: url('<?php echo $values['_code_portfolio_photo|code_portfolio_photo_item|0|0|value']['0']; ?>')">
                                    <h4><?php the_title(); ?></h4>
                                    <p><?php $str = mb_strimwidth($values['_code_portfolio_description']['0'], 0, 100, "...");
                                        echo $str; ?></p>
                                    <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-clock.png">czas produkcji 3-4 tygodnie</span>
                                    <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag.png">na zamówienie</span>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="<?php $url = get_permalink($post);
                                            echo $url; ?>" class="btn btn-green">«Zobacz»
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
                    <a href="<?php echo home_url(); ?>/portfolio/" class="btn btn-green">Zobacz wszystkie projekty</a>
                </div>
            </div>
        </div>
    </section>
    <section id="why">
        <div class="texture-11"><img src="<?php echo get_template_directory_uri(); ?>/images/texture-07.png"></div>
        <div class="texture-12"><img src="<?php echo get_template_directory_uri(); ?>/images/texture-08.png"></div>
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
                        <p>Realizujemy zamówienia w jak najkrótszym czasie, pomożemy z wyborem żeby maksymalnie
                            zaoszczędzić twój wolny czas.</p>
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
                        <p>Oferujemy szeroki wybór modeli i kolorów. Zadowolimy nawet najbardziej wymagających klientów,
                            w Woodbau napewno znajdziesz coś dla siebie.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-item">
                        <span>6</span>
                        <h4>Niemiecka jakość</h4>
                        <h5></h5>
                        <p>Technologia produkcyjna opracowana w Niemczech przez najlepszych inżynierów, co zwiększa
                            zużycie. Sauna będzie ozdabiać twoją działkę przez wiele lat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>