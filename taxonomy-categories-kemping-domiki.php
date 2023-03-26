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
    <div class="texture-product"><img src="<?php echo carbon_get_term_meta($term_id, 'code_category_texture_1') ?>">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Osobliwości';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Особенности';
                        } else {
                            echo 'Besonderheiten';
                        }; ?></h3>
                    <span><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Osobliwości';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Особенности';
                        } else {
                            echo 'Besonderheiten';
                        }; ?></span>
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
    <div class="texture-product-2"><img src="<?php echo carbon_get_term_meta($term_id, 'code_category_texture_2') ?>">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Kabiny kempingowe';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Кемпинг домики';
                        } else {
                            echo 'Campinghütten';
                        }; ?></h3>
                    <span><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Katalog';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Каталог';
                        } else {
                            echo 'Katalog';
                        }; ?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" id="model1">
                <div class="product-item">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Projekt KD-1';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Проект КД-1';
                        } else {
                            echo 'Projekt WB-1';
                        }; ?></h3>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kemping/001.jpg" alt=""></div>
                    <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Pensjonat 2,5х4 <br> Salon, weranda <br> Powierzchnia: 10 m2';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Гостевой дом 2,5х4 <br>Гостиная, веранда <br>Площадь: 10 м2';
                        } else {
                            echo 'Gästehaus 2,5х4m <br> Gästezimmer, Terrasse <br> Gesamtfläche 10m²';
                        }; ?></p><br>
                    <a href="#modal-popup" class="popup-modal btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamów projekt';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать проект';
                        } else {
                            echo 'Projekt bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-12" id="model2">
                <div class="product-item">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Projekt KD-2';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Проект КД-2';
                        } else {
                            echo 'Projekt WB-2';
                        }; ?></h3>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kemping/002.jpg" alt=""></div>
                    <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Pensjonat 2,5х4,5 <br> Salon, weranda <br> Powierzchnia: 11,25 m2';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Гостевой дом 2,5х4,5 <br>Гостиная, веранда <br>Площадь: 11,25 м2';
                        } else {
                            echo 'Gästehaus 2,5x4,5m <br> Gästezimmer, Terrasse  <br> Gesamtfläche 11,25m²';
                        }; ?></p><br>
                    <a href="#modal-popup" class="popup-modal btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamów projekt';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать проект';
                        } else {
                            echo 'Projekt bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-12" id="model3">
                <div class="product-item">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Projekt KD-3';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Проект КД-3';
                        } else {
                            echo 'Projekt WB-3';
                        }; ?></h3>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kemping/003.jpg" alt=""></div>
                    <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Pensjonat 3x5 <br> Salon, weranda <br> Powierzchnia: 15 m2';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Гостевой дом 3x5 <br>Гостиная, веранда <br>Площадь: 15 м2';
                        } else {
                            echo 'Gästehaus 3x5m <br> Gästezimmer, Terrasse, Badezimmer <br> Gesamtfläche 15m2';
                        }; ?></p><br>
                    <a href="#modal-popup" class="popup-modal btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamów projekt';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать проект';
                        } else {
                            echo 'Projekt bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-12" id="model4">
                <div class="product-item">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Projekt KD-4';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Проект КД-4';
                        } else {
                            echo 'Projekt WB-4';
                        }; ?></h3>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kemping/004.jpg" alt=""></div>
                    <p>
                        <?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Pensjonat 3x6 <br> Salon, weranda, WC <br> Powierzchnia: 18 m2';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Гостевой дом 3x6 <br>Гостиная, веранда, сан.узел <br>Площадь: 18 м2';
                        } else {
                            echo 'Gästehaus 3x6m <br> Gästezimmer, Terrasse, Badezimmer  <br> Gesamtfläche 18 m²';
                        }; ?> </p><br>
                    <a href="#modal-popup" class="popup-modal btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamów projekt';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать проект';
                        } else {
                            echo 'Projekt bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-12" id="model5">
                <div class="product-item">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Projekt KD-5';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Проект КД-5';
                        } else {
                            echo 'Projekt WB-5';
                        }; ?></h3>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kemping/005.jpg" alt=""></div>
                    <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Pensjonat 4x6 <br> Salon, weranda, WC <br> Powierzchnia: 24 m2';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Гостевой дом 4x6 <br>Гостиная, веранда, сан.узел <br>Площадь: 24 м2';
                        } else {
                            echo 'Gästehaus 4x6m  <br> Gästezimmer, Terrasse, Badezimmer  <br> Gesamtfläche 24 m²';
                        }; ?> </p><br>
                    <a href="#modal-popup" class="popup-modal btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamów projekt';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать проект';
                        } else {
                            echo 'Projekt bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-12" id="model6">
                <div class="product-item">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Projekt KD-6';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Проект КД-6';
                        } else {
                            echo 'Projekt WB-6';
                        }; ?></h3>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kemping/006.jpg" alt=""></div>
                    <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Pensjonat 2,5x6 <br> Salon, weranda <br> Powierzchnia: 15 m2';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Гостевой дом 2,5x6 <br>Гостиная, веранда<br>Площадь: 15 м2';
                        } else {
                            echo 'Gästezimmer 2,5x6 <br> Gästezimmer, Terrasse <br> Gesamtfläche 15 m²';
                        }; ?></p><br>
                    <a href="#modal-popup" class="popup-modal btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamów projekt';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать проект';
                        } else {
                            echo 'Projekt bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-12" id="model7">
                <div class="product-item">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Projekt KD-7';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Проект КД-7';
                        } else {
                            echo 'Projekt WB-7';
                        }; ?></h3>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kemping/007.jpg" alt=""></div>
                    <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Pensjonat 2,5х5 <br> Biuro <br> Powierzchnia: 12,5 m2';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Гостевой дом 2,5х5 <br>Офис <br>Площадь: 12,5 м2';
                        } else {
                            echo 'Gästezimmer 2,5x5m  <br> Büro <br> Gesamtfläche 12,5m²';
                        }; ?>
                    </p><br>
                    <a href="#modal-popup" class="popup-modal btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamów projekt';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать проект';
                        } else {
                            echo 'Projekt bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-12" id="model8">
                <div class="product-item">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Projekt KD-8';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Проект КД-8';
                        } else {
                            echo 'Projekt WB-8';
                        }; ?></h3>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kemping/008.jpg" alt=""></div>
                    <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Pensjonat 2,5х6 <br> Łaźnia <br> Powierzchnia: 15 m2';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Гостевой дом 2,5х6 <br>Баня <br>Площадь: 15 м2';
                        } else {
                            echo 'Gästehaus 2,5x6m  <br> Sauna  <br> Gesamtfläche 15 m²';
                        }; ?>
                    </p><br>
                    <a href="#modal-popup" class="popup-modal btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamów projekt';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать проект';
                        } else {
                            echo 'Projekt bestellen';
                        }; ?></a>
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
                            <div class="project-item" style="background-image: url('<?php echo $values['_code_portfolio_photo|code_portfolio_photo_item|0|0|value']['0']; ?>')">
                                <h4><?php the_title(); ?></h4>
                                <p><?php $str = mb_strimwidth($values['_code_portfolio_description']['0'], 0, 100, "...");
                                    echo $str; ?></p>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-clock.png"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                        echo 'czas produkcji 3-4 tygodnie';
                                    } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                        echo 'сроки производства 3-4 недели';
                                    } else {
                                        echo 'Produktionszeit 3-4 Wochen';
                                    }; ?></span>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag.png"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                        echo 'na prośbę';
                                    } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                        echo 'по запросу';
                                    } else {
                                        echo 'auf Anfrage';
                                    }; ?></span>
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
                <a href="#" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
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
<section id="why">
    <div class="texture-11"><img src="<?php echo get_template_directory_uri(); ?>/images/texture-07.png"></div>
    <div class="texture-12"><img src="<?php echo get_template_directory_uri(); ?>/images/texture-08.png"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Dlaczego my?';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Почему мы?';
                        } else {
                            echo 'Warum wir?';
                        }; ?></h3>
                    <span><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Dlaczego my?';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Почему мы?';
                        } else {
                            echo 'Warum wir?';
                        }; ?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="why-item">
                    <span>1</span>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Stwórzmy';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Создадим';
                        } else {
                            echo 'Lass uns erstellen';
                        }; ?></h4>
                    <h5><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'wyjątkowy projekt dla Ciebie';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'уникальный проект для вас';
                        } else {
                            echo 'ein einzigartiges Projekt für dich';
                        }; ?></h5>
                    <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Architekci, inżynierowie, projektanci i budowniczowie współpracują z nami od 10 lat';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'С нами 10 лет работают архитекторы, инженеры, дизайнеры и строители';
                        } else {
                            echo 'Architekten, Ingenieure, Designer und Bauherren arbeiten seit 10 Jahren mit uns zusammen';
                        }; ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>2</span>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Wykonajmy!';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Выполним';
                        } else {
                            echo 'Lass uns ausführen';
                        }; ?></h4>
                    <h5><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'zrobimy to w jak najkrótszym czasie';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'выполним в самые короткие сроки';
                        } else {
                            echo 'Wir werden es in kürzester Zeit tun';
                        }; ?></h5>
                    <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Od projektu i projektu po budowę obiektu wszystkie etapy produkcji realizowane są bezpośrednio przez samego producenta, co pozwala na otrzymanie towaru w możliwie najkrótszym czasie i w najlepszej jakości';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'От дизайна и проектирования до возведения объекта все этапы производства выполняются непосредственно самим призводителем, что позволяет вам получить товар в кротчайшие сроки и наилучшим качеством';
                        } else {
                            echo 'Vom Design und Design bis hin zum Bau der Anlage werden alle Produktionsschritte direkt vom Hersteller selbst durchgeführt, wodurch Sie die Ware in kürzester Zeit und in bester Qualität erhalten';
                        }; ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>3</span>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Dostarczymy';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Доставим';
                        } else {
                            echo 'Wir werden liefern';
                        }; ?></h4>
                    <h5><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'niezbędny sprzęt';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'необходимое оборудование';
                        } else {
                            echo 'notwendige Ausrüstung';
                        }; ?></h5>
                    <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Optymalny stosunek ceny do jakości bez pośredników, tylko bezpośrednie dostawy z fabryk';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Оптимальное соотношение цены и качества без посредников, только прямые поставки с заводов';
                        } else {
                            echo 'Optimales Verhältnis von Preis und Qualität ohne Zwischenhändler, nur Direktlieferungen ab Werk';
                        }; ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>4</span>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Połączmy się';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Подключим';
                        } else {
                            echo 'Lass uns verbinden';
                        }; ?></h4>
                    <h5><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'i skonfigurować całą komunikację';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'и настроим все коммуникации';
                        } else {
                            echo 'und richten Sie die gesamte Kommunikation ein';
                        }; ?></h5>
                    <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Wszystkie przedmioty przekazujemy na czas, całkowicie gotowe do pracy, udzielamy instrukcji obsługi';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Все объекты сдаем точно в срок полностью готовыми к работе, производим инструктаж по эксплуатации';
                        } else {
                            echo 'Wir übergeben alle Objekte just in time, komplett einsatzbereit, wir geben Einweisung in die Bedienung';
                        }; ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>5</span>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Katalog';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Каталог';
                        } else {
                            echo 'Katalog';
                        }; ?></h4>
                    <h5><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'szeroka gama projektów';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Большой выбор проектов';
                        } else {
                            echo 'vielfältige Projekte';
                        }; ?></h5>
                    <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Duży wybór gotowych projektów. Możemy również opracować dla Ciebie indywidualny projekt';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Большой выбор готовых проектов. Также можем разработать для вас индивидуальный проект';
                        } else {
                            echo 'Große Auswahl an fertigen Projekten. Wir können auch ein individuelles Projekt für Sie entwickeln';
                        }; ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>6</span>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'damy gwarancje';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'дадим гарантии';
                        } else {
                            echo 'wir geben garantien';
                        }; ?></h4>
                    <h5><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'wyjątkowy projekt dla Ciebie';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'уникальный проект для вас';
                        } else {
                            echo 'ein einzigartiges Projekt für dich';
                        }; ?></h5>
                    <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'wyjątkowy projekt dla Ciebie Z nami od 10 lat współpracujemy z architektami, inżynierami, projektantami i budowniczymi';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'С нами 10 лет работают архитекторы, инженеры, дизайнеры и строители';
                        } else {
                            echo 'ein einzigartiges Projekt für Sie Bei uns arbeiten wir seit 10 Jahren mit Architekten, Ingenieuren, Designern und Bauherren zusammen';
                        }; ?></p>
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
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Może jesteś zainteresowany?';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Может вас заинтересует?';
                        } else {
                            echo 'Vielleicht interessieren Sie sich für?';
                        }; ?></h3>
                    <span><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Katalog';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Каталог';
                        } else {
                            echo 'Katalog';
                        }; ?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="category-slider owl-carousel owl-theme" id="owl-category-slider">
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-01.png">
                        <div class="category-text">
                            <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Wanny na zamówienie';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Бани под заказ';
                                } else {
                                    echo 'Bäder auf Bestellung';
                                }; ?></h4>
                            <a href="<?php echo home_url(); ?>/catalog/banya-bochka/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Beczka do kąpieli';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Баня бочка';
                                } else {
                                    echo 'Badefass';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/catalog/banya-kvadro/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Bath-kvadro';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Баня-квадро';
                                } else {
                                    echo 'Bad-kvadro';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/catalog/banya-ovalnaya/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Wanna owalna';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Баня овальная';
                                } else {
                                    echo 'Ovales Bad';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/catalog/arochnaya-banya/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Łukowata wanna';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Арочная баня';
                                } else {
                                    echo 'Bogenbad';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/bani/#products" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Cały katalog';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Весь каталог';
                                } else {
                                    echo 'Gesamter Katalog';
                                }; ?></a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-04.png">
                        <div class="category-text">
                            <h4>EasyCube</h4>
                            <a href="<?php echo home_url(); ?>/categories/xaberkub/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Z 3 markizami i hamakiem';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'C 3 тентами и гамаком';
                                } else {
                                    echo 'Mit 3 Markisen und einer Hängematte';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/xaberkub/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Z markizą i ścianą';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'C тентом и стеной';
                                } else {
                                    echo 'Mit Markise und Wand';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/xaberkub/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Z dwiema markizami i hamakiem';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'C двумя тентами и гамаком';
                                } else {
                                    echo 'Mit zwei Markisen und einer Hängematte';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/xaberkub/#products" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Więcej szczegółów';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Подробнее';
                                } else {
                                    echo 'Mehr Details';
                                }; ?></a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-07.png">
                        <div class="category-text">
                            <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Dąb';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Изделия из дуба';
                                } else {
                                    echo 'Eiche';
                                }; ?></h4>
                            <a href="<?php echo home_url(); ?>/categories/stoly-iz-duba/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Wymiary';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Размеры';
                                } else {
                                    echo 'Abmessungen';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/stoly-iz-duba/#about-product"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Opis';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Описание';
                                } else {
                                    echo 'Beschreibung';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/stoly-iz-duba/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Stoły dębowe';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Столы из дуба';
                                } else {
                                    echo 'Eichentische';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/stoly-iz-duba/#products" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Więcej szczegółów';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Подробнее';
                                } else {
                                    echo 'Mehr Details';
                                }; ?></a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-08.png">
                        <div class="category-text">
                            <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Termodrewno';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Термодревесина';
                                } else {
                                    echo 'Thermoholz';
                                }; ?></h4>
                            <a href="<?php echo home_url(); ?>/categories/pilomaterialy/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Deska';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Доска';
                                } else {
                                    echo 'Planke';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/pilomaterialy/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Deska tarasowa';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Террасная доска';
                                } else {
                                    echo 'Terrassenbrett';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/pilomaterialy/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Deska tarasowa';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Палубная доска';
                                } else {
                                    echo 'Deckbrett';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/pilomaterialy/#products" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Cały katalog';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Весь каталог';
                                } else {
                                    echo 'Gesamter Katalog';
                                }; ?></a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-05.png">
                        <div class="category-text">
                            <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Do gotowania żywności';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Для готовки еды';
                                } else {
                                    echo 'Zum Kochen von Speisen';
                                }; ?></h4>
                            <a href="<?php echo home_url(); ?>/categories/tandyry-i-kazany/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Tandoor';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Тандыры';
                                } else {
                                    echo 'Tandoor';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/tandyry-i-kazany/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Kazań';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Казаны';
                                } else {
                                    echo 'Kasan';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/tandyry-i-kazany/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Kociołki';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Мангалы';
                                } else {
                                    echo 'Kohlenbecken';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/tandyry-i-kazany/#products" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Cały katalog';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Весь каталог';
                                } else {
                                    echo 'Gesamter Katalog';
                                }; ?></a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-06.png">
                        <div class="category-text">
                            <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Kompleks grillowy';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Барбекю комплекс';
                                } else {
                                    echo 'Grillkomplex';
                                }; ?></h4>
                            <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Zmontowany jako konstruktor w 20 minut';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Собираются как конструктор за 20 минут';
                                } else {
                                    echo 'Als Konstrukteur in 20 Minuten aufgebaut';
                                }; ?></p>
                            <a href="<?php echo home_url(); ?>/categories/barbekyu/"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Opis';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Описание';
                                } else {
                                    echo 'Beschreibung';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/barbekyu/#products" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Katalog';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Каталог';
                                } else {
                                    echo 'Katalog';
                                }; ?></a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-03.png">
                        <div class="category-text">
                            <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Budynki z minibarami';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Постройки из минибруса';
                                } else {
                                    echo 'Minibar-Gebäude';
                                }; ?></h4>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Małe domy';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Домики';
                                } else {
                                    echo 'Kleine Häuser';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Altany';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Беседки';
                                } else {
                                    echo 'Pavillons';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Budynki gospodarcze';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Хоз постройки';
                                } else {
                                    echo 'Nebengebäude';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Domy dla dzieci';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Детские домики';
                                } else {
                                    echo 'Kinderhäuser';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa/#products" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Więcej szczegółów';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Подробнее';
                                } else {
                                    echo 'Mehr Details';
                                }; ?></a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-09.png">
                        <div class="category-text">
                            <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Akcesoria do kąpieli';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Аксессуары для бани';
                                } else {
                                    echo 'Badzubehör';
                                }; ?></h4>
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva/#mebel"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Akcesoria i meble';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Аксессуары и мебель';
                                } else {
                                    echo 'Accessoires und Möbel';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva/#vedra"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Wiadra na wodę';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Обливные ведра';
                                } else {
                                    echo 'Wassereimer';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva/#shaiki"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Gangi i parowce';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Шайки и запарники';
                                } else {
                                    echo 'Gangs und Dampfer';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva/#abaj"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Abażury do lamp';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Абажуры для светильников';
                                } else {
                                    echo 'Lampenschirme für Lampen';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva/#products" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Więcej szczegółów';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Подробнее';
                                } else {
                                    echo 'Mehr Details';
                                }; ?></a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-10.png">
                        <div class="category-text">
                            <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Kabiny kempingowe';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Кемпинг домики';
                                } else {
                                    echo 'Campinghütten';
                                }; ?></h4>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki/#model1"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Projekt KD-1';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Проект КД-1';
                                } else {
                                    echo 'Projekt KD-1';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki/#model2"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Projekt KD-2';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Проект КД-2';
                                } else {
                                    echo 'Projekt KD-2';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki/#model3"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Projekt KD-3';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Проект КД-3';
                                } else {
                                    echo 'Projekt KD-3';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki/#model4"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Projekt KD-4';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Проект КД-4';
                                } else {
                                    echo 'Projekt KD-4';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki/#model5"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Projekt KD-5';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Проект КД-5';
                                } else {
                                    echo 'Projekt KD-5';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki//#products" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Więcej szczegółów';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Подробнее';
                                } else {
                                    echo 'Mehr Details';
                                }; ?></a>
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
