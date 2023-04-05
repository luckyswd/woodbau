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
                        <h3>Реализованные проекты</h3>
                        <span>Реализованные проекты</span>
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
                                    <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-clock.png">сроки производства 3-4 недели</span>
                                    <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag.png">по запросу</span>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="<?php $url = get_permalink($post);
                                            echo $url; ?>" class="btn btn-green">Посмотреть</a>
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
                        <h3>Почему мы?</h3>
                        <span>Почему мы?</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="why-item">
                        <span>1</span>
                        <h4>Создадим</h4>
                        <h5>уникальный проект для вас</h5>
                        <p>С нами 10 лет работают архитекторы, инженеры, дизайнеры и строители</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-item">
                        <span>2</span>
                        <h4>Выполним</h4>
                        <h5>выполним в самые короткие сроки</h5>
                        <p>От дизайна и проектирования до возведения объекта все этапы производства выполняются непосредственно самим призводителем, что позволяет вам получить товар в кротчайшие сроки и наилучшим качеством</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-item">
                        <span>3</span>
                        <h4>Доставим</h4>
                        <h5>необходимое оборудование</h5>
                        <p>Оптимальное соотношение цены и качества без посредников, только прямые поставки с заводов</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-item">
                        <span>4</span>
                        <h4>Подключим</h4>
                        <h5>и настроим все коммуникации</h5>
                        <p>Все объекты сдаем точно в срок полностью готовыми к работе, производим инструктаж по эксплуатации</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-item">
                        <span>5</span>
                        <h4>Каталог</h4>
                        <h5>Большой выбор проектов</h5>
                        <p>Большой выбор готовых проектов. Также можем разработать для вас индивидуальный проект</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-item">
                        <span>6</span>
                        <h4>дадим гарантии</h4>
                        <h5>уникальный проект для вас</h5>
                        <p>С нами 10 лет работают архитекторы, инженеры, дизайнеры и строители</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>