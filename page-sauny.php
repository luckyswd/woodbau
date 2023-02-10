<?php
get_header();
$term_url = get_query_var('term');
$term_id = get_queried_object()->term_id;
?>

<?php RenderBlock::renderBlockByName('acf/catalog-products'); ?>

<section id="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h2>Katalog</h2>
                    <span>Katalog</span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $post_catalog = new WP_Query(
                array(
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'categories',
                            'field' => 'slug',
                            'terms' => 'sauny'
                        ))
                , 'posts_per_page' => '99')
            ) ?>
            <?php if ($post_catalog->have_posts()) : ?><?php while ($post_catalog->have_posts()) : $post_catalog->the_post(); ?><?php $values = get_post_meta(get_the_ID()); ?>
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="product-item-img"
                             style="background-image: url('<?php echo $values['_code_catalog_photo|code_catalog_photo_item|0|0|value']['0']; ?>')"></div>
                        <h4><?php the_title(); ?></h4>
                        <a href="<?php $url = get_permalink($post);
                        echo $url; ?>" class="btn btn-green">Szczegółowy
                        </a>
                    </div>
                </div>
                <?php wp_reset_query(); ?><?php endwhile; ?><?php else: ?><?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>
<section id="about-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h2>Cechy</h2>
                    <span>Cechy</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="order-2 col-md-4 order-md-1">
                <div class="why-item">
                    <span>1</span>
                    <h4><?php echo carbon_get_term_meta(27, 'code_category_osob1_1') ?></h4>
                    <h5><?php echo carbon_get_term_meta(27, 'code_category_osob1_2') ?></h5>
                    <p><?php echo carbon_get_term_meta(27, 'code_category_osob1_3') ?></p>
                </div>
                <div class="why-item">
                    <span>3</span>
                    <h4><?php echo carbon_get_term_meta(27, 'code_category_osob3_1') ?></h4>
                    <h5><?php echo carbon_get_term_meta(27, 'code_category_osob3_2') ?></h5>
                    <p><?php echo carbon_get_term_meta(27, 'code_category_osob3_3') ?></p>
                </div>
            </div>
            <div class="order-1 col-md-4 order-md-2">
                <div class="about-product-img">
                    <img src="<?php echo carbon_get_term_meta(27, 'code_category_osob') ?>">
                </div>
            </div>
            <div class="order-3 col-md-4 order-md-3">
                <div class="why-item">
                    <span>2</span>
                    <h4><?php echo carbon_get_term_meta(27, 'code_category_osob2_1') ?></h4>
                    <h5><?php echo carbon_get_term_meta(27, 'code_category_osob2_2') ?></h5>
                    <p><?php echo carbon_get_term_meta(27, 'code_category_osob2_3') ?></p>
                </div>
                <div class="why-item">
                    <span>4</span>
                    <h4><?php echo carbon_get_term_meta(27, 'code_category_osob4_1') ?></h4>
                    <h5><?php echo carbon_get_term_meta(27, 'code_category_osob4_2') ?></h5>
                    <p><?php echo carbon_get_term_meta(27, 'code_category_osob4_3') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php RenderBlock::renderBlockByName('acf/own-production'); ?>
<?php RenderBlock::renderBlockByName('acf/banner'); ?>
<?php RenderBlock::renderBlockByName('acf/exhibition'); ?>

<?php
get_footer();
?>