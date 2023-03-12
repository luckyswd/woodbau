<?php
get_header();
$term_url = get_query_var('term');
$term_id = get_queried_object()->term_id;
?>

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
    <div class="container" id="mebel">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3>Akcesoria i meble</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/001.jpg')"></div>
                    <h4>Zagłówek, oparcie</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/002.jpg')"></div>
                    <h4>Tabliczka<br> Dąb lakierowany, olcha lakierowana</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/003.jpg')"></div>
                    <h4>Zagłówek, podnóżek</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/004.jpg')"></div>
                    <h4>Zagłówek anatomiczny, olcha, zebra</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/005.jpg')"></div>
                    <h4> PL </span></h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/007.jpg')"></div>
                    <h4>Wieszak z półką na 6 haczyków</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/008.jpg')"></div>
                    <h4>Wieszak z półką na 4 haczyków</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/009.jpg')"></div>
                    <h4>Prosty wieszak na ubrania na 7/6/4/3 sztuki</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/010.jpg')"></div>
                    <h4>Wieszak na ubrania typu wachlarzowego</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/011.jpg')"></div>
                    <h4>Wieszak z obrotowymi hakami na 6 i 4 haczyki.</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/012.jpg')"></div>
                    <h4>Żaluzja wentylacyjna, żaluzje olcha</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/013.jpg')"></div>
                    <h4>Żaluzja wentylacyjna, mała olcha</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/014.jpg')"></div>
                    <h4>Mata do siedzenia, olcha</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">Zamówić
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/015.jpg')"></div>
                    <h4>Mata do leżania, 2/1,5 m olcha</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/016.jpg')"></div>
                    <h4>Półka prosta</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/017.jpg')"></div>
                    <h4>Półka z lustrem</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/018.jpg')"></div>
                    <h4> Półka sześciokątna<br>Duża/średnia/mała</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/019.jpg')"></div>
                    <h4>Drzwi
                        <br>olcha - lipa: 1,9x0,7m, 1,8x0,7m
                        <br>olcha: 2 x 0,7m, 1,9 x 0,8m,
                        <br>1,9x0,7m, 1,8x0,7m, 1,7x0,7m
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/020.jpg')"></div>
                    <h4>Drzwi w kolorze szczotkowanego brązu z pionowym przeszkleniem
                        <br>olcha-lipa: 1,9x0,7m, 1,8x0,7m
                        <br>olcha: 2x0,7m, 1,9x0,7m, 1,8x0,7m, 1,7x0,7m
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/021.jpg')"></div>
                    <h4>Okno fińskie
                        <br>Szyba przezroczysta 30x30, 30x40, 40x40, 40x50, 50x50, 50x60, 60x60</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/022.jpg')"></div>
                    <h4>Mata podłogowa, olcha
                        <br>1,2х0,5m 1х0,5m 0,8х0,5m
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/023.jpg')"></div>
                    <h4>Okno klasyczne z okładziną</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="vedra">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3>Wiadra prysznicowe</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/024.jpg')"></div>
                    <h4>Wiadro prysznicowe olcha
                        <br>12/16/20 l, wkładka z tworzywa sztucznego
                        <br>16/20 l wkładka stal nierdzewna
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/025.jpg')"></div>
                    <h4>Wiadro prysznicowe ciemny dąb
                        <br>16/20 l, wkładka z tworzywa sztucznego
                        <br>12/16/20 l, wkładka ze stali nierdzewnej
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/026.jpg')"></div>
                    <h4>Wiadro prysznicowe, olcha lipa
                        <br>16/20 l, wkładka z tworzywa sztucznego
                        <br>16 l, wkładka ze stali nierdzewnej
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/027.jpg')"></div>
                    <h4>Wiadro prysznicowe z jasnego dębu
                        <br>16 l, wkładka ze stali nierdzewnej
                        <br>12/16/20 l, wkładka z tworzywa sztucznego
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/028.jpg')"></div>
                    <h4>Wiadro prysznicowe  Zebra, Dąb
                        <br>16 l,  wkładka ze stali nierdzewnej/ wkładka z tworzywa sztucznego
                        <br>Wiadro cebrzyk i parowce
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="shaiki">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3>Wiadro cebrzyk i parowce</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/030.jpg')"></div>
                    <h4>Chochla, olcha
                        <br>150 ml
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/031.jpg')"></div>
                    <h4>Wiadro cebrzyk , olcha
                        <br>3/5/9l wkładka stal nierdzewna
                        <br>4/8/12l Wkładka z tworzywa sztucznego
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/032.jpg')"></div>
                    <h4>Wiadro cebrzyk , olcha/lipa zebra
                        <br>3l Wkładka stal nierdzewna
                        <br>4l Wkładka tworzywo sztuczne
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/033.jpg')"></div>
                    <h4>Wiadro cebrzyk, olcha Uchwyt - lina
                        <br>5l wkładka stal nierdzewna
                        <br>12l Wkład z tworzywa sztucznego
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/034.jpg')"></div>
                    <h4>Pokrywa do parowca olcha
                        <br>12/16 l, wkładka ze stali nierdzewnej/tworzywa sztucznego
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/035.jpg')"></div>
                    <h4>Parowiec  olcha, uchwyt z liny
                        <br>20l Wkładka tworzywo sztuczne
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/036.jpg')"></div>
                    <h4>Pokrywa do parowca Ciemny dąb
                        <br>16/20 l wkładka z tworzywa sztucznego
                        <br>12/16/20 l wkładka stal nierdzewna
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/037.jpg')"></div>
                    <h4>Parownik ciemny dąb
                        <br>16 / 20 l, wkładka z tworzywa sztucznego
                        <br>12 / 16 / 20 L, wkładka ze stali nierdzewnej
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="abaj">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3>Abażury dla Lampy</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/040.jpg')"></div>
                    <h4>Abażur, olcha
                        <br>Wąskie listwy
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/041.jpg')"></div>
                    <h4>Abażur, zebra
                        <br>Wąskie listwy
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/042.jpg')"></div>
                    <h4>Abażur, zebra
                        <br>Szerokie listwy
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/043.jpg')"></div>
                    <h4>Abażur, olcha
                        <br>3 szyby
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/044.jpg')"></div>
                    <h4>Abażur z solą himalajską na 3/5/6 płytek</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/045.jpg')"></div>
                    <h4>Abażur, olcha
                        <br>Prosty
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/046.jpg')"></div>
                    <h4>Abażur, olcha
                        <br>Finlandia
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/aksessyary/047.jpg')"></div>
                    <h4>Abażur
                        <br>z solą himalajską na płytkach 6/10
                    </h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
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
                    <?php $post_portfolio = new WP_Query(array('post_type' => 'portfolio')); ?>
                    <?php if ($post_portfolio->have_posts()) : ?>
                        <?php while ($post_portfolio->have_posts()) : $post_portfolio->the_post(); ?><?php $values = get_post_meta(get_the_ID()); ?>
                            <div class="project-item"
                                 style="background-image: url('<?php echo $values['_code_portfolio_photo|code_portfolio_photo_item|0|0|value']['0']; ?>')">
                                <h4><?php the_title(); ?></h4>
                                <p><?php $str = mb_strimwidth($values['_code_portfolio_description']['0'], 0, 100, "...");
                                    echo $str; ?></p>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-clock.png.webp">czas produkcji 3-4 tygodnie</span>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag.png.webp">na prośbę</span>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="<?php $url = get_permalink($post);
                                        echo $url; ?>" class="btn btn-green">Wyglądać
                                        </a>
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
        <div class="row">
            <div class="col-md-4">
                <div class="why-item">
                    <span>1</span>
                    <h4>Stwórzmy</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                    <h5>wyjątkowy projekt dla Ciebie</h5>
                    <p>Architekci, inżynierowie, projektanci i budowniczowie współpracują z nami od 10 lat</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>2</span>
                    <h4>Wykonajmy</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                    <h5>zrobimy to w jak najkrótszym czasie</h5>
                    <p>Od projektu i projektu po budowę obiektu wszystkie etapy produkcji realizowane są bezpośrednio przez samego producenta, co pozwala na otrzymanie towaru w możliwie najkrótszym czasie i w najlepszej jakości</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>3</span>
                    <h4>Dostarczymy</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                    <h5>niezbędny sprzęt</h5>
                    <p>Optymalny stosunek ceny do jakości bez pośredników, tylko bezpośrednie dostawy z fabryk</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>4</span>
                    <h4>Połączmy się</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                    <h5>i skonfigurować całą komunikację</h5>
                    <p>Wszystkie przedmioty przekazujemy na czas, całkowicie gotowe do pracy, udzielamy instrukcji obsługi</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>5</span>
                    <h4>Katalog</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
                    <h5>szeroka gama projektów</h5>
                    <p>Duży wybór gotowych projektów. Możemy również opracować dla Ciebie indywidualny projekt</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-item">
                    <span>6</span>
                    <h4>damy gwarancje</h4>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Zamówić</a>
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
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BANI ?>#products"
                               class="btn btn-green">Cały katalog</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-04.png.webp">
                        <div class="category-text">
                            <h4>EasyCube</h4>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_EASYCUBE ?>#products">Z 3 markizami i hamakiem</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_EASYCUBE ?>#products">Z markizą i ścianą</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_EASYCUBE ?>#products">Z dwiema markizami i hamakiem</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_EASYCUBE ?>#products"
                               class="btn btn-green">Więcej szczegółów</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-07.png.webp">
                        <div class="category-text">
                            <h4>Dąb</h4>
                            <a href="#modal-popup"
                               class="btn btn-green popup-modal">Zamówić</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_STOLY_DEBOWE ?>#products">Wymiary</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_STOLY_DEBOWE ?>#about-product">Opis</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_STOLY_DEBOWE ?>#products">Stoły dębowe</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_STOLY_DEBOWE ?>#products"
                               class="btn btn-green">Więcej szczegółów</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-08.png.webp">
                        <div class="category-text">
                            <h4>Termodrewno</h4>
                            <a href="#modal-popup"
                               class="btn btn-green popup-modal">Zamówić</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_THERMO_DREWNO ?>#products">Deska</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_THERMO_DREWNO ?>#products">Deska tarasowa</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_THERMO_DREWNO ?>#products">Deska tarasowa</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_THERMO_DREWNO ?>#products"
                               class="btn btn-green">Cały katalog</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-05.png.webp">
                        <div class="category-text">
                            <h4>Do gotowania żywności</h4>
                            <a href="#modal-popup"
                               class="btn btn-green popup-modal">Zamówić</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_TANDIRY_I_KOCIOLKI ?>#products">Tandoor</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_TANDIRY_I_KOCIOLKI ?>#products">Kazań</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_TANDIRY_I_KOCIOLKI ?>#products">Kociołki</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_TANDIRY_I_KOCIOLKI ?>#products"
                               class="btn btn-green">Cały katalog</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-06.png.webp">
                        <div class="category-text">
                            <h4>Kompleks grillowy</h4>
                            <a href="#modal-popup"
                               class="btn btn-green popup-modal">Zamówić</a>
                            <p>Zmontowany jako konstruktor w 20 minut</p>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BARBECUE ?>">Opis</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BARBECUE ?>#products"
                               class="btn btn-green">Katalog</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-03.png.webp">
                        <div class="category-text">
                            <h4>Budynki z minibarami</h4>
                            <a href="#modal-popup"
                               class="btn btn-green popup-modal">Zamówić</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BUDYNKI_DREWNIANE ?>#products">Małe domy</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BUDYNKI_DREWNIANE ?>#products">Altany</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BUDYNKI_DREWNIANE ?>#products">Budynki gospodarcze</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BUDYNKI_DREWNIANE ?>#products">Domy dla dzieci</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BUDYNKI_DREWNIANE ?>#products"
                               class="btn btn-green">Więcej szczegółów</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-09.png.webp">
                        <div class="category-text">
                            <h4>Akcesoria do kąpieli</h4>
                            <a href="#modal-popup"
                               class="btn btn-green popup-modal">Zamówić</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DREWNIANE_AKCESORIA_DO_SAUNY ?>#mebel">Akcesoria i meble</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DREWNIANE_AKCESORIA_DO_SAUNY ?>#vedra">Wiadra na wodę</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DREWNIANE_AKCESORIA_DO_SAUNY ?>#shaiki">Gangi i parowce</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DREWNIANE_AKCESORIA_DO_SAUNY ?>#abaj">Abażury do lamp</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DREWNIANE_AKCESORIA_DO_SAUNY ?>#products"
                               class="btn btn-green">Więcej szczegółów</a>
                        </div>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/category-10.png.webp">
                        <div class="category-text">
                            <h4>Kabiny kempingowe</h4>
                            <a href="#modal-popup"
                               class="btn btn-green popup-modal">Zamówić</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>#model1">Projekt KD-1</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>#model2">Projekt KD-2</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>#model3">Projekt KD-3</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>#model4">Projekt KD-4</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>#model5">Projekt KD-5</a>
                            <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>/#products"
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

