<?php
get_header();
?>
<section id="project">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3> Zrealizowane projekty </h3>
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div class="row">
                <?php $post_portfolio = new WP_Query(array('post_type' => 'portfolio')); //ищем по типу поста?>
                <?php if ($post_portfolio->have_posts()) : ?>
                    <!-- Выводим весь контент циклом -->
                    <?php while ($post_portfolio->have_posts()) : $post_portfolio->the_post(); ?><?php $values = get_post_meta(get_the_ID()); ?>
                        <div class="col-md-6">
                            <div class="project-item" style="margin-bottom: 30px; background-image: url('<?php echo $values['_code_portfolio_photo|code_portfolio_photo_item|0|0|value']['0']; ?>')">
                                <h4><?php the_title(); ?></h4>
                                <p><?php $str = mb_strimwidth($values['_code_portfolio_description']['0'], 0, 100, "...");
                                    echo $str; ?></p>
                                <span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-clock.png">
                                    czas produkcji 3-4 tygodnie
                                </span>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag.png">
                                na zamówienie
                                </span>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="<?php $url = get_permalink($post);
                                        echo $url; ?>" class="btn btn-green">
                                            Zobacz więcej
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php //dump($values);?><?php endwhile; ?><?php else: ?>
                    <!-- Нет контента --><p>Нет контента или неправильно указан тип поста</p>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
