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
    <div class="container" id="mebel">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Akcesoria i meble';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Аксессуары и мебель';
                        } else {
                            echo 'Zubehör und Möbel ';
                        }; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/001.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zagłówek, oparcie';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Подголовник, спинка';
                        } else {
                            echo 'Kopfstütze, Rückenlehne ';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/002.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Tabliczka<br> Dąb lakierowany, olcha lakierowana';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Табличка <br>Дуб под лаком, ольха под лаком';
                        } else {
                            echo 'Tabelle <br>Eiche lackiert, Erle lackiert';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/003.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zagłówek, podnóżek';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Подголовник, подставка для ног';
                        } else {
                            echo 'Kopfstütze, Fußstütze';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/004.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zagłówek anatomiczny, olcha, zebra';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Подголовник анатомический, Ольха, зебра';
                        } else {
                            echo 'Kopfstütze geformt, Erle ';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/005.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'PL';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Тапки ортопедические, ольха
                            <br>Вьетнамки: рр. от 37 до 42
                            <br>Сланцы: рр. от 41 до 46
                            ';
                        } else {
                            echo 'Orthopädische Latschen, Erle 
                    <br>Flip-Flops Schuhgrößen 37-42
                    <br>Latschen Schuhgrößen 41-46';
                        }; ?> </span></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/007.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Wieszak z półką na 6 haczyków';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Вешалка ЭЛИТ с полкой на 6 крючков';
                        } else {
                            echo '6 Kleiderhaken "ELITE" mit Ablagefach ';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/008.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Wieszak z półką na 4 haczyków';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Вешалка ЭЛИТ с полкой на 4 крючков';
                        } else {
                            echo '4 Kleiderhaken mit Ablagefach';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/009.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Prosty wieszak na ubrania na 7/6/4/3 sztuki';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Вешалка прямая на 7/6/4/3 кр.';
                        } else {
                            echo 'Kleiderhaken 7/6/4/3';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/010.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Wieszak na ubrania typu wachlarzowego';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Вешалка веерная';
                        } else {
                            echo 'Kleiderhaken in Form eines Fächers';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/011.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Wieszak z obrotowymi hakami na 6 i 4 haczyki.';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Вешалка с поворотными крючками на 6 и 4 кр.';
                        } else {
                            echo 'Kleiderhaken mit 4 oder 6 Wendehaken';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/012.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Żaluzja wentylacyjna, żaluzje olcha';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Вентиляционная решетка, жалюзи Ольха';
                        } else {
                            echo 'Lüftungsgitter, Jalousien Erle';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/013.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Żaluzja wentylacyjna, mała olcha';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Вентиляционная задвижка, малая Ольха';
                        } else {
                            echo 'Belüftungsklappe, Erle';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/014.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Mata do siedzenia, olcha';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Коврик-сидушка, Ольха';
                        } else {
                            echo 'Sitzmatte, Erle';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/015.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Mata do leżania, 2/1,5 m olcha';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Коврик-лежак, 2/1,5 м Ольха';
                        } else {
                            echo 'Liegematte 2/1,5m, Erle ';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/016.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Półka prosta';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Полка прямая';
                        } else {
                            echo 'Ablagefläche, gerade';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/017.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Półka z lustrem';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Полка с зеркалом';
                        } else {
                            echo 'Ablagefläche mit Spiegel';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/018.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Półka sześciokątna
                            <br>Duża/średnia/mała
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Полка шестигранная <br>Большая/средняя/малая ';
                        } else {
                            echo 'Ablagefläche, sechseckiges 
                            <br>groß / mittel / klein 
                            ';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/019.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Drzwi
                            <br>olcha - lipa: 1,9x0,7m, 1,8x0,7m
                            <br>olcha: 2 x 0,7m, 1,9 x 0,8m,
                            <br>1,9x0,7m, 1,8x0,7m, 1,7x0,7m
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Дверь глухая <span>Ольха-липа: 1,9х0,7м, 1,8х0,7м <br>Ольха: 2х0,7м, 1,9х0,8м, <br>1,9х0,7м, 1,8х0,7м, 1,7х0,7м';
                        } else {
                            echo 'Tür ohne Fenster 
                            <br>Erle Linde 1,9х0,7m, 1,8х0,7m
                            <br>2х0,7m, 1,9х0,8m, Erle
                            <br>1,9х0,7m, 1,8х0,7m, 1,7х0,7m
                            ';
                        }; ?> </span></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/020.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Drzwi w kolorze szczotkowanego brązu z pionowym przeszkleniem
                            <br>olcha-lipa: 1,9x0,7m, 1,8x0,7m
                            <br>olcha: 2x0,7m, 1,9x0,7m, 1,8x0,7m, 1,7x0,7m
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Дверь бронза матовая с вертикальным стеклом <span>Ольха-липа: 1,9х0,7м, 1,8х0,7м <br>Ольха: 2х0,7м, 1,9х0,7м, 1,8х0,7м, 1,7х0,7м';
                        } else {
                            echo 'Tür bronze matt,  vertikales Glas  
                            <br><span>1,9х0,7m, 1,8х0,7m – Erle Linde
                                                        <br>2х0,7m, 1,9х0,7m, 1,8х0,7m, 1,7х0,7m -  Erle </span>
                            ';
                        }; ?> </span></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/021.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Okno fińskie
                            <br>Szyba przezroczysta 30x30, 30x40, 40x40, 40x50, 50x50, 50x60, 60x60
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Окно финское
                                                    <span>Стеклопакет прозрачный 30х30, 30х40, 40х40, 40х50, 50х50, 50х60, 60х60</span>';
                        } else {
                            echo 'Finnisches Fenster  
                            <br>30х30, 30х40, 40х40, 40х50, 50х50, 50х60, 60х60 – Sichtfenster isoverglast
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/022.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Mata podłogowa, olcha
                            <br>1,2х0,5m 1х0,5m 0,8х0,5m
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Трап, ольха <span>1,2х0,5м 1х0,5м 0,8х0,5м</span>';
                        } else {
                            echo 'Bodenrost, Erle  
                            <br>1,2х0,5м 1х0,5м 0,8х0,5m
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/023.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Okno klasyczne z okładziną
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Окно классическое с обкладом';
                        } else {
                            echo 'Fenster,  klassisch mit Abdeckung';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="vedra">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Wiadra prysznicowe 
                    ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Обливные ведра';
                        } else {
                            echo 'Eimer 
                    ';
                        }; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/024.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Wiadro prysznicowe olcha
                    <br>12/16/20 l, wkładka z tworzywa sztucznego
                    <br>16/20 l wkładka stal nierdzewna
                    ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Обливное Ольха <span>12/16/20 л, вставка пластик
                                                            <br>16/20 л вставка нержавейка</span>';
                        } else {
								echo 'Aufgusseimer, Erle 
                                                            <br>Kunststoffeinsatz 12/16/20 L 
                                                            <br>Edelstahleinsatz 16/20L 
                                                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/025.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Wiadro prysznicowe ciemny dąb 
                            <br>16/20 l, wkładka z tworzywa sztucznego
                            <br>12/16/20 l, wkładka ze stali nierdzewnej
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Обливное Дуб темный <span>16/20 л, вставка пластик
                                                            <br>12/16/20 л, вставка нержавейка</span>';
                        } else {
                            echo 'Aufgusseimer, Eiche, dunkel
                            <br>Kunststoffeinsatz 16/20L 
                            <br>Edelstahleinsatz 12/16/20 L 
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/026.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Wiadro prysznicowe, olcha lipa
                            <br>16/20 l, wkładka z tworzywa sztucznego
                            <br>16 l, wkładka ze stali nierdzewnej
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Обливное Зебра, ольха-липа <span> 16/20 л, вставка пластик
                                                           <br>16 л, вставка нержавейка</span>';
                        } else {
                            echo 'Aufgusseimer Zebra, Erle, Linde
                            <br>Kunststoffeinsatz 16/20L 
                            <br>Edelstahleinsatz 16L
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/027.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Wiadro prysznicowe z jasnego dębu
                            <br>16 l, wkładka ze stali nierdzewnej
                            <br>12/16/20 l, wkładka z tworzywa sztucznego
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Обливное Дуб светлый <span>16 л, вставка нержавейка
                                                            <br>12/16/20 л, вставка пластик</span>';
                        } else {
                            echo 'Aufgusseimer, Eiche, hell
                            <br>Edelstahleinsatz 16L
                            <br>Kunststoffeinsatz 12/16/20 L
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/028.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Wiadro prysznicowe  Zebra, Dąb
                            <br>16 l,  wkładka ze stali nierdzewnej/ wkładka z tworzywa sztucznego
                            <br>Wiadro cebrzyk i parowce
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Обливное Зебра, дуб <span>16 л, вставка нержавейка/пластик</span>';
                        } else {
                            echo 'Aufgusseimer Zebra, Eiche
                            <br>Edelstahleinsatz  16L
                            <br>Sauna- und Quastkübel 
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="shaiki">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Wiadro cebrzyk i parowce
                    ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Шайки и запарники';
                        } else {
                            echo 'Sauna- und Quastkübel ';
                        }; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/030.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Chochla, olcha
                    <br>150 ml
                    ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Черпак, ольха <span>150 мл</span>';
                        } else {
                            echo 'Saunakelle, Erle
                    <br>150 ml 
                    ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/031.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Wiadro cebrzyk , olcha
                            <br>3/5/9l wkładka stal nierdzewna
                            <br>4/8/12l Wkładka z tworzywa sztucznego
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Шайка, ольха <span>3/5/9л вставка нержавейка
                                                                    <br>4/8/12л вставка пластик</span>';
                        } else {
                            echo 'Saunakübel, Erle
                            <br>Edelstahleinsatz  3/5/9 L
                            <br>Kunststoffeinsatz  4/8/12 L
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/032.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Wiadro cebrzyk , olcha/lipa zebra
                            <br>3l Wkładka stal nierdzewna
                            <br>4l Wkładka tworzywo sztuczne
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Шайка, зебра Ольха-липа <span>3л вставка нержавейка
                                                                    <br>4л вставка пластик</span>';
                        } else {
                            echo 'Saunakübel Zebra, Erle-Linde
                            <br>Edelstahleinsatz  3L
                            <br>Kunststoffeinsatz 4L
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/033.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Wiadro cebrzyk, olcha Uchwyt - lina
                            <br>5l wkładka stal nierdzewna
                            <br>12l Wkład z tworzywa sztucznego
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Шайка, ольха Ручка-канат <span>5 л вставка нержавейка
                                                                    <br>12 л вставка пластик</span>';
                        } else {
                            echo 'Saunakübel, Erle, Kanat-Griff
                            <br>Edelstahleinsatz  5L
                            <br>Kunststoffeinsatz  12L
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/034.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Pokrywa do parowca olcha
                            <br>12/16 l, wkładka ze stali nierdzewnej/tworzywa sztucznego
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Крышка к запарнику ольха <span>12/16 л, вставка нержавейка/пластик</span>';
                        } else {
                            echo 'Deckel für Quastkübel, Erle
                            <br>Edelstahl- Kunststoffeinsatz  12/16L
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/035.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Parowiec  olcha, uchwyt z liny
                            <br>20l Wkładka tworzywo sztuczne
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Запарник Ольха, ручка-канат <span>20 л, вставка пластик</span>';
                        } else {
                            echo 'Quastkübel, Erle, Kanat-Griff
                            <br>20L Plastikeinsatz 
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/036.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Pokrywa do parowca Ciemny dąb
                            <br>16/20 l wkładka z tworzywa sztucznego
                            <br>12/16/20 l wkładka stal nierdzewna
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Крышка к запарнику Дуб темный <span>16/20 л вставка пластик
                                                                    <br>12/16/20 л вставка нержавейка</span>';
                        } else {
                            echo 'Deckel für Quastkübel, Eiche, dunkel
                            <br>Kunststoffeinsatz 16/20L
                            <br>Edelstahleinsatz 12/16/20 L 
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/037.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Parownik ciemny dąb
                            <br>16 / 20 l, wkładka z tworzywa sztucznego
                            <br>12 / 16 / 20 L, wkładka ze stali nierdzewnej
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Запарник дуб темный <span>16/ 20 л, вставка пластик
                                                                    <br>12/ 16/ 20 л, вставка нержавейка</span>';
                        } else {
                            echo 'Quastkübel, Eiche, dunkel
                            <br>Kunststoffeinsatz 16/20L
                            <br>Edelstahleinsatz 12/16/20 L 
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="abaj">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Abażury dla Lampy';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Абажуры для светильников';
                        } else {
                            echo 'Lampenschirme für Leuchten';
                        }; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/040.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Abażur, olcha
                            <br>Wąskie listwy
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Абажур, ольха <span>Узкие рейки</span>';
                        } else {
                            echo 'Lampenschirm, Erle
                            <br>schmale Lamellen  
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/041.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Abażur, zebra
                            <br>Wąskie listwy
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Абажур, зебра <span>Узкие рейки</span>';
                        } else {
                            echo 'Lampenschirm Zebra 
                            <br>schmale Lamellen 
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/042.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Abażur, zebra
                            <br>Szerokie listwy
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Абажур, зебра <span>Широкие рейки</span>';
                        } else {
                            echo 'Lampenschirm Zebra
                            <br>breite Lamellen 
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/043.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Abażur, olcha
                            <br>3 szyby
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Абажур, ольха <span>3 стекла</span>';
                        } else {
                            echo 'Lampenschirm Erle 
                            <br>3 x Glaseinsatz
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/044.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Abażur z solą himalajską na 3/5/6 płytek
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Абажур с гималайской солью на 3/5/6 плиток ';
                        } else {
                            echo 'Lampenschirm mit Himalaya-Salz für 3/5/6 Fliesen, Erle
                            ';
                        }; ?></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/045.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Abażur, olcha
                            <br>Prosty
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Абажур, ольха <span>Прямой</span>';
                        } else {
                            echo 'Lampenschirm Erle 
                            <br>gerade 
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/046.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Abażur, olcha
                            <br>Finlandia
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Абажур, ольха <span>Финский</span>';
                        } else {
                            echo 'Lampenschirm Erle 
                            <br>Finnisch
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/047.jpg')"></div>
                    <h4><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Abażur
                            <br>z solą himalajską na płytkach 6/10
                            ';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Абажур <span>с гималайской солью на 6/10 плиток</span>';
                        } else {
                            echo 'Lampenschirm
                            <br>mit Himalaya-Salz 6/10  Fliesen
                            ';
                        }; ?>
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
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
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
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
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
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
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
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
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
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
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
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
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Zamówić';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать';
                        } else {
                            echo 'Bestellen';
                        }; ?></a>
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
                            <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Zamówić';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Заказать';
                                } else {
                                    echo 'Bestellen';
                                }; ?></a>
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
                            <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Zamówić';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Заказать';
                                } else {
                                    echo 'Bestellen';
                                }; ?></a>
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
                            <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Zamówić';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Заказать';
                                } else {
                                    echo 'Bestellen';
                                }; ?></a>
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
                            <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Zamówić';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Заказать';
                                } else {
                                    echo 'Bestellen';
                                }; ?></a>
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
                            <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Zamówić';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Заказать';
                                } else {
                                    echo 'Bestellen';
                                }; ?></a>
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
                            <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Zamówić';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Заказать';
                                } else {
                                    echo 'Bestellen';
                                }; ?></a>
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
                            <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Zamówić';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Заказать';
                                } else {
                                    echo 'Bestellen';
                                }; ?></a>
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
                            <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Zamówić';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Заказать';
                                } else {
                                    echo 'Bestellen';
                                }; ?></a>
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

