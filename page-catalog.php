<?php
get_header();
?>

<section id="category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h1>Katalog</h1>
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
                        <a href="<?php echo home_url(); ?>/catalog/banya-ovalnaya">Sauna owalna</a>
                        <a href="<?php echo home_url(); ?>/catalog/arochnaya-banya">Łukowata sauna</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BANI ?>" class="btn btn-green">Cały katalog</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/category-04.png">
                    <div class="category-text">
                        <h4>EasyCube</h4>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_EASYCUBE ?>">Z 3 markizami i hamakiem</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_EASYCUBE ?>">Z markizą i ścianą</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_EASYCUBE ?>">Z dwiema markizami i hamakiem</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_EASYCUBE ?>" class="btn btn-green">Cały katalog</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/category-05.png">
                    <div class="category-text">
                        <h4>Do gotowania żywności</h4>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_TANDIRY_I_KOCIOLKI ?>">Kazań</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_TANDIRY_I_KOCIOLKI ?>">Kociołki</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_TANDIRY_I_KOCIOLKI ?>" class="btn btn-green">Cały katalog</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/category-03.png">
                    <div class="category-text">
                        <h4>Budynki z drewna</h4>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BUDYNKI_DREWNIANE ?>">Małe domy</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BUDYNKI_DREWNIANE ?>">Altany</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BUDYNKI_DREWNIANE ?>">Budynki gospodarcze</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BUDYNKI_DREWNIANE ?>">Domy dla dzieci</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_BUDYNKI_DREWNIANE ?>" class="btn btn-green">Cały katalog</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/category-11.png">
                    <div class="category-text">
                        <h4>Akcesoria do sauny</h4>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DREWNIANE_AKCESORIA_DO_SAUNY ?>#mebel">Akcesoria i meble</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DREWNIANE_AKCESORIA_DO_SAUNY ?>#vedra">Wiadra na wodę</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DREWNIANE_AKCESORIA_DO_SAUNY ?>#shaiki">Gangi i parowce</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DREWNIANE_AKCESORIA_DO_SAUNY ?>#abaj">Abażury do lamp</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DREWNIANE_AKCESORIA_DO_SAUNY ?>" class="btn btn-green">Cały katalog</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/category-10.png">
                    <div class="category-text">
                        <h4>Kabiny kempingowe</h4>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>#model1">Projekt KD-1</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>#model2">Projekt KD-2</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>#model3">Projekt KD-3</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>#model4">Projekt KD-4</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>#model5">Projekt KD-5</a>
                        <a href="<?php echo home_url(); ?><?= Urls::CATEGORIES_DOMKI_KEMPINGOWE ?>" class="btn btn-green">Cały katalog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>


