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
                    <div class="advantage__block-item" style="background-image: url(<?php echo$advantage['background_image']['url']?>)">
                      <?php if ($advantage['title_advantage']) : ?>
                          <div class="advantage__block-item-title">
                            <?php echo $advantage['title_advantage']  ?>
                          </div>
                      <?php endif; ?>

                      <?php if ($advantage['description_advantage']) : ?>
                          <div class="advantage__block-item-description">
                            <?php echo $advantage['description_advantage']  ?>
                          </div>
                      <?php endif; ?>

                      <?php if ($advantage['image_advantage']) : ?>
                          <div class="advantage__block-item-image">
                              <img src="<?php echo$advantage['image_advantage']['url']?>" alt="">
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
                      <?php echo $title_order  ?>
                    </h2>
                <?php endif; ?>
                <div class="order-items">
                  <?php foreach ($procedure_order as $key => $order) : ?>
                      <div class="order__block-item">
                        <span class="order__block-item-number">0<?php echo $key + 1?></span>
                        <?php if ($order['title']) : ?>
                            <div class="order__block-item-title">
                              <?php echo $order['title']  ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($order['description']) : ?>
                            <div class="order__block-item-description">
                              <?php echo $order['description']  ?>
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
<!--                      --><?//= $button_name  ?>
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
		  <? foreach($slider_gallery as $slide): ?>
        <div class="swiper-slide">
			<a href="<?=$slide['url'];?>"
			  data-fancybox="gallery"
			  data-caption="<?= $slide['description'];?>">
				<img src="<?=$slide['url'];?>" alt="slide">
			</a>
		 </div>
      	<? endforeach;?>
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
                            <a href="<?php echo home_url(); ?>/categories/xaberkub" class="btn btn-green">Cały katalog</a>
                        </div>
                    </div>
                </div>
<!--                 <div class="col-md-4">
                    <div class="category-item">
                        <img src="<?php #echo get_template_directory_uri(); ?>/images/category-07.png">
                        <div class="category-text">
                            <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    #echo 'Dąb';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    #echo 'Изделия из дуба';
                                } else {
                                    #echo 'Eiche';
                                }; ?></h4>
                            <a href="<?php #echo home_url(); ?>/categories/stoly-iz-duba/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    #echo 'Wymiary';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    #echo 'Размеры';
                                } else {
                                    #echo 'Abmessungen';
                                }; ?></a>
                            <a href="<?php #echo home_url(); ?>/categories/stoly-iz-duba/#about-product"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    #echo 'Opis';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    #echo 'Описание';
                                } else {
                                    #echo 'Beschreibung';
                                }; ?></a>
                            <a href="<?php #echo home_url(); ?>/categories/stoly-iz-duba/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    #echo 'Stoły dębowe';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    #echo 'Столы из дуба';
                                } else {
                                    #echo 'Eichentische';
                                }; ?></a>
                            <a href="<?php #echo home_url(); ?>/categories/stoly-iz-duba/#products" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    #echo 'Więcej szczegółów';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    #echo 'Подробнее';
                                } else {
                                    #echo 'Mehr Details';
                                }; ?></a>
                        </div>
                    </div>
                </div> -->
<!--                 <div class="col-md-4">
                    <div class="category-item">
                        <img src="<?php //echo get_template_directory_uri(); ?>/images/category-08.png">
                        <div class="category-text">
                            <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    //echo 'Termodrewno';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    //echo 'Термодревесина';
                                } else {
                                    //echo 'Thermoholz';
                                }; ?></h4>
                            <a href="<?php //echo home_url(); ?>/categories/pilomaterialy/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    //echo 'Deska';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    //echo 'Доска';
                                } else {
                                   // echo 'Planke';
                                }; ?></a>
                            <a href="<?php //echo home_url(); ?>/categories/pilomaterialy/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    //echo 'Deska tarasowa';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    //echo 'Террасная доска';
                                } else {
                                    //echo 'Terrassenbrett';
                                }; ?></a>
                            <a href="<?php //echo home_url(); ?>/categories/pilomaterialy/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    //echo 'Deska tarasowa';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    //echo 'Палубная доска';
                                } else {
                                    //echo 'Deckbrett';
                                }; ?></a>
                            <a href="<?php //echo home_url(); ?>/categories/pilomaterialy/#products" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    //echo 'Cały katalog';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    //echo 'Весь каталог';
                                } else {
                                    //echo 'Gesamter Katalog';
                                }; ?></a>
                        </div>
                    </div>
                </div> -->
                <!--                <div class="col-md-4">-->
                <!--                    <div class="category-item">-->
                <!--                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/category-02.png">-->
                <!--                        <div class="category-text">-->
                <!--                            <h4>Теплицы</h4>-->
                <!--                            <a href="#">Теплицы</a>-->
                <!--                            <a href="#">Беседки</a>-->
                <!--                            <a href="#">Грядки</a>-->
                <!--                            <a href="#">Поликарбонат</a>-->
                <!--                            <a href="#">Аксесуары для теплиц</a>-->
                <!--                            <a href="/categories/teplicy/" class="btn btn-green">Весь каталог</a>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <div class="col-md-4">
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
<!--                             <a href="<?php #echo home_url(); ?>/categories/tandyry-i-kazany/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    #echo 'Tandoor';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    #echo 'Тандыры';
                                } else {
                                    #echo 'Tandoor';
                                }; ?></a> -->
                            <a href="<?php echo home_url(); ?>/categories/tandyry-i-kazany"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Kazań';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Казаны';
                                } else {
                                    echo 'Kasan';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/tandyry-i-kazany"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Kociołki';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Мангалы';
                                } else {
                                    echo 'Kohlenbecken';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/tandyry-i-kazany" class="btn btn-green">Cały katalog</a>
                        </div>
                    </div>
                </div>
<!--                 <div class="col-md-4">
                    <div class="category-item">
                        <img src="<?php #echo get_template_directory_uri(); ?>/images/category-06.png">
                        <div class="category-text">
                            <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    #echo 'Kompleks grillowy';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    #echo 'Барбекю комплекс';
                                } else {
                                    #echo 'Grillkomplex';
                                }; ?></h4>
                            <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    #echo 'Zmontowany jako konstruktor w 20 minut';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    #echo 'Собираются как конструктор за 20 минут';
                                } else {
                                    #echo 'Als Konstrukteur in 20 Minuten aufgebaut';
                                }; ?></p>
                            <a href="<?php #echo home_url(); ?>/categories/barbekyu/"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    #echo 'Opis';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    #echo 'Описание';
                                } else {
                                    #echo 'Beschreibung';
                                }; ?></a>
                            <a href="<?php #echo home_url(); ?>/categories/barbekyu/#products" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    #echo 'Katalog';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    #echo 'Каталог';
                                } else {
                                    #echo 'Katalog';
                                }; ?></a>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-4">
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-03.png">
                        <div class="category-text">
                            <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Budynki z drewna';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Постройки из минибруса';
                                } else {
                                    echo 'Minibar-Gebäude';
                                }; ?></h4>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Małe domy';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Домики';
                                } else {
                                    echo 'Kleine Häuser';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Altany';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Беседки';
                                } else {
                                    echo 'Pavillons';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Budynki gospodarcze';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Хоз постройки';
                                } else {
                                    echo 'Nebengebäude';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Domy dla dzieci';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Детские домики';
                                } else {
                                    echo 'Kinderhäuser';
                                }; ?></a>
                            <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa" class="btn btn-green">Cały katalog</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-11.png">
                        <div class="category-text">
                            <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Akcesoria do sauny';
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
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva/#shaiki">Gangi i parowce</a>
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva/#abaj">Abażury do lamp</a>
                            <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva" class="btn btn-green">Cały katalog</a>
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
                            <a href="<?php echo home_url(); ?>/categories/kemping-domiki" class="btn btn-green">Cały katalog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="consultation" style="background-image: url(<?php echo$background_image ?>)">

              <div class="consultation__block">
                <?php if ($title_consultation) : ?>
                    <div class="consultation__block-title">
                      <?php echo $title_consultation  ?>
                    </div>
                <?php endif; ?>

                <?php if ($description_consultation) : ?>
                    <div class="consultation__block-description">
                      <?php echo $description_consultation  ?>
                    </div>
                <?php endif; ?>
				<?= $form_consultation;?>
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
                                    <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-clock.png"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                            echo 'czas produkcji 3-4 tygodnie';
                                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                            echo 'сроки производства 3-4 недели';
                                        } else {
                                            echo 'Produktionszeit 3-4 Wochen';
                                        }; ?></span>
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
                    <a href="<?php echo home_url(); ?>/portfolio/" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
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
                        <p>Realizujemy zamówienia w jak najkrótszym czasie, pomożemy z wyborem żeby maksymalnie zaoszczędzić twój wolny czas.</p>
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
                        <p>Oferujemy szeroki wybór modeli i kolorów. Zadowolimy nawet najbardziej wymagających klientów, w Woodbau napewno znajdziesz coś dla siebie.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-item">
                        <span>6</span>
                        <h4>Niemiecka jakość</h4>
                        <h5></h5>
                        <p>Technologia produkcyjna opracowana w Niemczech przez najlepszych inżynierów, co zwiększa zużycie. Sauna będzie ozdabiać twoją działkę przez wiele lat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>