<?php
get_header();
?>

<section id="category">
    <div class="texture-03"><img src="<?php echo get_template_directory_uri(); ?>/images/texture-05.png"></div>
    <div class="texture-04"><img src="<?php echo get_template_directory_uri(); ?>/images/category/pilo-02.png">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                        echo 'Katalog';
                      } elseif (ICL_LANGUAGE_CODE == 'ru') {
                        echo 'Каталог';
                      } else {
                        echo 'Katalog';
                      }; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="category-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/category-01.png">
                    <div class="category-text">
                        <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Sauny na zamówienie';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Бани под заказ';
                          } else {
                            echo 'Bäder auf Bestellung';
                          }; ?></h4>
                        <a href="<?php echo home_url(); ?>/catalog/banya-bochka"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Beczka do kąpieli';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Баня бочка';
                          } else {
                            echo 'Fasssauna';
                          }; ?></a>
                        <a href="<?php echo home_url(); ?>/catalog/banya-kvadro"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Bath-kvadro';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Баня-квадро';
                          } else {
                            echo 'Quadro Sauna';
                          }; ?></a>
                        <a href="<?php echo home_url(); ?>/catalog/banya-ovalnaya"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Sauna owalna';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Баня овальная';
                          } else {
                            echo 'Ovale Fasssauna';
                          }; ?></a>
                        <a href="<?php echo home_url(); ?>/catalog/arochnaya-banya"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Łukowata sauna';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Арочная баня';
                          } else {
                            echo 'Gewölbte Sauna';
                          }; ?></a>
                        <a href="<?php echo home_url(); ?>/categories/bani" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Cały katalog';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Весь каталог';
                          } else {
                            echo 'Gesamter Katalog';
                          }; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/category-04.png">
                    <div class="category-text">
                        <h4>EasyCube</h4>
                        <a href="<?php echo home_url(); ?>/categories/xaberkub"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Z 3 markizami i hamakiem';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'C 3 тентами и гамаком';
                          } else {
                            echo 'Mit 3 Markisen und einer Hängematte';
                          }; ?></a>
                        <a href="<?php echo home_url(); ?>/categories/xaberkub"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Z markizą i ścianą';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'C тентом и стеной';
                          } else {
                            echo 'Mit Markise und Wand';
                          }; ?></a>
                        <a href="<?php echo home_url(); ?>/categories/xaberkub"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Z dwiema markizami i hamakiem';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'C двумя тентами и гамаком';
                          } else {
                            echo 'Mit zwei Markisen und einer Hängematte';
                          }; ?></a>
                        <a href="<?php echo home_url(); ?>/categories/xaberkub" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Cały katalog';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Подробнее';
                          } else {
                            echo 'Mehr Details';
                          }; ?></a>
                    </div>
                </div>
            </div>
<!--             <div class="col-md-4">
                <div class="category-item">
                    <img src="<?php #echo #get_template_directory_uri(); ?>/images/category-07.png">
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
<!--             <div class="col-md-4">
                <div class="category-item">
                    <img src="<?php #echo get_template_directory_uri(); ?>/images/category-08.png">
                    <div class="category-text">
                        <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            #echo 'Termodrewno';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            #echo 'Термодревесина';
                          } else {
                            #echo 'Thermoholz';
                          }; ?></h4>
                        <a href="<?php #echo home_url(); ?>/categories/pilomaterialy/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            #echo 'Deska';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            #echo 'Доска';
                          } else {
                            #echo 'Planke';
                          }; ?></a>
                        <a href="<?php #echo home_url(); ?>/categories/pilomaterialy/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            #echo 'Deska tarasowa';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            #echo 'Террасная доска';
                          } else {
                            #echo 'Terrassenbrett';
                          }; ?></a>
                        <a href="<?php #echo home_url(); ?>/categories/pilomaterialy/#products"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            #echo 'Deska tarasowa';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            #echo 'Палубная доска';
                          } else {
                            #echo 'Deckbrett';
                          }; ?></a>
                        <a href="<?php #echo home_url(); ?>/categories/pilomaterialy/#products" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            #echo 'Cały katalog';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            #echo 'Весь каталог';
                          } else {
                            #echo 'Gesamter Katalog';
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
                        <a href="<?php #echo home_url(); ?>/categories/tandyry-i-kazany"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            #echo 'Tandoor';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            #echo 'Тандыры';
                          } else {
                            #echo 'Tandoor';
                          }; ?></a>
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
                        <a href="<?php echo home_url(); ?>/categories/tandyry-i-kazany/" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Cały katalog';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Весь каталог';
                          } else {
                            echo 'Gesamter Katalog';
                          }; ?></a>
                    </div>
                </div>
            </div>
<!--             <div class="col-md-4">
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
                        <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa/"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Małe domy';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Домики';
                          } else {
                            echo 'Kleine Häuser';
                          }; ?></a>
                        <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa/"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Altany';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Беседки';
                          } else {
                            echo 'Pavillons';
                          }; ?></a>
                        <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa/"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Budynki gospodarcze';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Хоз постройки';
                          } else {
                            echo 'Nebengebäude';
                          }; ?></a>
                        <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa/"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Domy dla dzieci';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Детские домики';
                          } else {
                            echo 'Kinderhäuser';
                          }; ?></a>
                        <a href="<?php echo home_url(); ?>/categories/postrojki-iz-brusa/" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Cały katalog';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Подробнее';
                          } else {
                            echo 'Mehr Details';
                          }; ?></a>
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
                        <a href="<?php echo home_url(); ?>/categories/bannye-aksessuary-iz-dereva" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Cały katalog';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Подробнее';
                          } else {
                            echo 'Mehr Details';
                          }; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
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
                        <a href="<?php echo home_url(); ?>/categories/kemping-domiki" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Cały katalog';
                          } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Подробнее';
                          } else {
                            echo 'Mehr Details';
                          }; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>


