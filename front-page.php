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
                </div>
            <?php endif; ?>
        </div>

    </section>
    <section id="gallery-slider">
        <div class="container">
            <div class="swiper gallerySlider">
                <div class="swiper-wrapper">
                    <?php foreach ($slider_gallery as $slide): ?>
                        <div class="swiper-slide">
                            <a href="<?= $slide['url']; ?>"
                               data-fancybox="gallery"
                               data-caption="<?= $slide['description']; ?>">
                                <picture>
                                    <img loading="lazy" src="<?= $slide['url']; ?>" alt="slide">
                                </picture>
                            </a>
                        </div>
                    <? endforeach; ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <?php require_once 'partials/category.php' ?>

    <section class="consultation" style="background-image: url(<?php echo $background_image ?>)">
        <div class="consultation__block">
            <?php if ($title_consultation) : ?>
                <div class="consultation__block-title">
                    <?= $title_consultation; ?>
                </div>
            <?php endif; ?>

            <?php if ($description_consultation) : ?>
                <div class="consultation__block-description">
                    <?= $description_consultation; ?>
                </div>
            <?php endif; ?>

            <?php if ($form_consultation) : ?>
                <?= $form_consultation; ?>
            <?php endif; ?>

            <div class="consultation_btn">
                <a href="/catalog/banya-bochka/" class="btn btn-green">Собрать баню</a>
                <!-- <a href="#modal-popup" class="popup-modal btn btn-green">Заказать обратный звонок</a> -->
            </div>
        </div>
    </section>

    <?php RenderBlock::renderBlockByName('acf/exhibition'); ?>

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
                                <div class="project-item"
                                     style="background-image: url('<?php echo $values['_code_portfolio_photo|code_portfolio_photo_item|0|0|value']['0']; ?>')">
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
                    <a href="<?php echo home_url(); ?>/portfolio/" class="btn btn-green">Посмотреть все проекты</a>
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
                                echo 'Alle Produktionsschritte, von der Planung und Design bis zum Saunaaufbau, werden direkt vom Hersteller abgewickelt, so dass Sie die Ware in kürzester Zeit und in bester Qualität erhalten';
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
                                echo 'LASS UNS LIEFERN';
                            }; ?></h4>
                        <h5><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'zrobimy to w jak najkrótszym czasie';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'выполним в самые короткие сроки';
                            } else {
                                echo 'Notwendige Ausrüstung';
                            }; ?></h5>
                        <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'Od projektu i projektu po budowę obiektu wszystkie etapy produkcji realizowane są bezpośrednio przez samego producenta, co pozwala na otrzymanie towaru w możliwie najkrótszym czasie i w najlepszej jakości';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'От дизайна и проектирования до возведения объекта все этапы производства выполняются непосредственно самим призводителем, что позволяет вам получить товар в кротчайшие сроки и наилучшим качеством';
                            } else {
                                echo 'Optimales Preis-Leistung- Verhältnis ohne Zwischenhändler, nur Direktlieferungen ab Werk';
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
                                echo 'Wir richten die gesamte Kommunikation ein.';
                            }; ?></h5>
                        <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'Wszystkie przedmioty przekazujemy na czas, całkowicie gotowe do pracy, udzielamy instrukcji obsługi';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'Все объекты сдаем точно в срок полностью готовыми к работе, производим инструктаж по эксплуатации';
                            } else {
                                echo 'Wir übergeben alle Objekte just in time, komplett einsatzbereit, geben Einweisung in die Bedienung.';
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
                                echo 'WIR GEBEN GARANTIEN';
                            }; ?></h4>
                        <h5><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'wyjątkowy projekt dla Ciebie';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'уникальный проект для вас';
                            } else {
                                echo 'Ein einzigartiges Projekt für Sie! ';
                            }; ?></h5>
                        <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'wyjątkowy projekt dla Ciebie Z nami od 10 lat współpracujemy z architektami, inżynierami, projektantami i budowniczymi';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'С нами 10 лет работают архитекторы, инженеры, дизайнеры и строители';
                            } else {
                                echo 'Wir arbeiten seit 10 Jahren mit Architekten, Ingenieuren, Designern und Bauherren zusammen';
                            }; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>