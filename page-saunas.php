<?php
get_header();
$term_url = get_query_var('term');
$term_id = get_queried_object()->term_id;
?>

<section id="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h2>Конструктор</h2>
                    <span>Конструктор</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?= wp_get_upload_dir()['baseurl'] . '/2023/04/photo_2023-04-19_22-31-27-2.jpg' ?>')"></div>
                    <h4>Баня-бочка</h4>
                    <a href="/catalog/banya-bochka/" class="btn btn-green">Подробнее
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?= wp_get_upload_dir()['baseurl'] . '/2023/04/photo_2023-04-19_22-31-27.jpg' ?>')"></div>
                    <h4>Баня-Квадро</h4>
                    <a href="/catalog/banya-kvadro/" class="btn btn-green">Подробнее
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?= wp_get_upload_dir()['baseurl'] . '/2023/04/photo_2023-04-19_22-31-27-3.jpg' ?>')"></div>
                    <h4>Баня овальная</h4>
                    <a href="/catalog/banya-ovalnaya/" class="btn btn-green">Подробнее
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-item-img"
                         style="background-image: url('<?= wp_get_upload_dir()['baseurl'] . '/2023/04/photo_2023-04-19_22-31-27-4.jpg' ?>')"></div>
                    <h4>Арочная баня</h4>
                    <a href="/catalog/arochnaya-banya/" class="btn btn-green">Подробнее
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php RenderBlock::renderBlockByName('acf/catalog-products'); ?>

<section id="about-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h2>Особенности</h2>
                    <span>Особенности</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="order-2 col-md-4 order-md-1">
                <div class="why-item">
                    <span>1</span>
                    <h4><?php echo carbon_get_term_meta(26, 'code_category_osob1_1') ?></h4>
                    <h5><?php echo carbon_get_term_meta(26, 'code_category_osob1_2') ?></h5>
                    <p><?php echo carbon_get_term_meta(26, 'code_category_osob1_3') ?></p>
                </div>
                <div class="why-item">
                    <span>3</span>
                    <h4><?php echo carbon_get_term_meta(26, 'code_category_osob3_1') ?></h4>
                    <h5><?php echo carbon_get_term_meta(26, 'code_category_osob3_2') ?></h5>
                    <p><?php echo carbon_get_term_meta(26, 'code_category_osob3_3') ?></p>
                </div>
            </div>
            <div class="order-1 col-md-4 order-md-2">
                <div class="about-product-img">
                    <img src="<?php echo carbon_get_term_meta(26, 'code_category_osob') ?>">
                </div>
            </div>
            <div class="order-3 col-md-4 order-md-3">
                <div class="why-item">
                    <span>2</span>
                    <h4><?php echo carbon_get_term_meta(26, 'code_category_osob2_1') ?></h4>
                    <h5><?php echo carbon_get_term_meta(26, 'code_category_osob2_2') ?></h5>
                    <p><?php echo carbon_get_term_meta(26, 'code_category_osob2_3') ?></p>
                </div>
                <div class="why-item">
                    <span>4</span>
                    <h4><?php echo carbon_get_term_meta(26, 'code_category_osob4_1') ?></h4>
                    <h5><?php echo carbon_get_term_meta(26, 'code_category_osob4_2') ?></h5>
                    <p><?php echo carbon_get_term_meta(26, 'code_category_osob4_3') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php RenderBlock::renderBlockByName('acf/own-production'); ?>
<?php RenderBlock::renderBlockByName('acf/banner'); ?>

<?php
get_footer();
?>


