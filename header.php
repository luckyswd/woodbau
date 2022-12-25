<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="facebook-domain-verification" content="j93ck7ca78e825lta9dptpnq7tcqj2" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png">
    <title>Woodbau</title>
    <?php wp_head(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <!-- sytle -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/owl-carusel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/owl-carusel/owl.theme.default.min.css">
    <!-- Owl javascript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl-carusel/owl.carousel.js"></script>
    <!-- popup -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
    <!--Style-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fancybox.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MV7GRL6');</script>
<!-- End Google Tag Manager -->
	<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '577033057139842');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=577033057139842&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MV7GRL6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</head>
<body>
<?php
$currentUrl = $_SERVER['REQUEST_URI'];
?>
	
<header <?php if (is_front_page() || is_tax()){ ?>class="header-index"<?php }; ?>>

    <section id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="top-text">
                        <p><span>Шоурум</span>Передавая 6/3<br/>Минск 220070</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="top-text">
                        <p><span>Email</span>
                            <a href="mailto:woodbaus@gmail.com" target="_blank">woodbaus@gmail.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-logo">
                        <a href="<?php echo home_url(); ?>">
							      <?php
                                      $custom_logo_id = get_theme_mod('custom_logo');
                                      $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                                      if (has_custom_logo()) {
                                        echo '<img class="style-svg" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                                      }
                            ?>
						</a>
                    </div>
                </div>
                <div class="col-md-2">
					<div class="top-soc">
                        <a href="https://www.facebook.com/WoodBau-Belarus-108393871882270" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.png"></a>
                        <a href="https://www.instagram.com/woodbaubelarus/" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-instagram.png"></a>
                        <a href="tel:+375339130323" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-whatsapp.png"></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="top-lang">
                        <ul class="list-lang">
                            <li><a href="https://woodbau.de/" title="woodbau.de" target="_top" >DE</a></li>
                            <li><a href="https://woodbaupolska.pl/" title="woodbaupolska.pl" target="_top" >PL</a></li>
                            <li><a href="https://woodbau.ru/" title="woodbau.ru" target="_top" >RU</a></li>
                            <li><a href="https://woodbau.by/" title="woodbau.by" target="_top" class="active">BY</a></li>
                        </ul>
                    </div>
                    <div class="top-phone">
                            <a href="tel:+375293800323" target="_blank"><img src="/wp-content/themes/woodbau/images/whatsapp.png">+37529 380 03 23</a>
                            <a href="tel:+375339130323" target="_blank">+37533 913 03 23</a>
                            <a href="tel:+375173360323" target="_blank">+37517 336 03 23</a>
                    </div>
                    <a href="#modal-popup" class="popup-modal btn-call">Заказать обратный звонок</a>
                </div>
            </div>


                    <div class="basic-menu">
                      <?php wp_nav_menu([
                        'menu' => 'header_menu',
                      ]); ?>
                    </div>
                    <div class="burger-menu">
                        <div class="burger-menu__close">
                            <span></span> <span></span> <span></span>
                        </div>
                      <?php wp_nav_menu([
                        'menu' => 'header_menu',
                      ]); ?>
                </div>

        </div>
    </section>
    <?php if (is_front_page()) { ?>
        <section id="banner">
            <div class="texture-01"><img src="<?php echo get_template_directory_uri(); ?>/images/texture-01.png">
            </div>
            <div class="texture-02"><img src="<?php echo get_template_directory_uri(); ?>/images/texture-02.png">
            </div>
            <div class="header-overflow">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="banner-text">
                                <h1><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Mamy wszystko do Twojego domu, wsi <br>i ogrodu';
                                  } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'У нас есть все <br>для вашего дома, <br>загородного участка <br>и сада';
                                  } else {
                                    echo 'Wir haben alles für Ihr Zuhause, Ihre Landschaft und Ihren Garten';
                                  }; ?></h1>
                            </div>
                            <div class="banner-ade">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>10 <span>лет опыта</span></h3>
                                    </div>
                                    <div class="col-md-6">
                                        <h3>6500 <span>+проектов</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="banner-slider owl-carousel owl-theme" id="owl-banner-slider">
                                <div class="banner-slider-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/product-01.png">
                                    <div class="banner-sale">
                                    	<h4>Бани</h4>
                                    	<span>от 5000 р.</span>
                                    	<p>за 10 дней</p>
                                    </div>
                                    <a href="./categories/bani/" class="btn btn-green">Весь каталог</a>
                                </div>
                                <div class="banner-slider-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/2222.png">
                                    <div class="banner-sale">
                                    	<h4>Бани</h4>
                                    	<span>от 5000 р.</span>
                                    	<p>за 10 дней</p>
                                    </div>
                                    <a href="./categories/barbekyu/" class="btn btn-green">Весь каталог</a>
                                </div>
								<div class="banner-slider-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/3333.png">
                                    <div class="banner-sale">
                                    	<h4>Бани</h4>
                                    	<span>от 5000 р.</span>
                                    	<p>за 10 дней</p>
                                    </div>
                                    <a href="./categories/barbekyu/" class="btn btn-green">Весь каталог</a>
                                </div>
								<div class="banner-slider-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/4444.png">
                                    <div class="banner-sale">
                                    	<h4>Бани</h4>
                                    	<span>от 5000 р.</span>
                                    	<p>за 10 дней</p>
                                    </div>
                                    <a href="./categories/barbekyu/" class="btn btn-green">Весь каталог</a>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function () {
                                    var owl = $('#owl-banner-slider');
                                    owl.owlCarousel({
                                        items: 1,
                                        dots: false,
                                        loop: true,
                                        nav: true,
                                        margin: 0,
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
                                                items: 1
                                            }
                                        },
                                    });
                                })
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php }; ?>
    <?php if (is_tax()) { ?><?php
        $term_url = get_query_var('term');
        $term_id = get_queried_object()->term_id;
        ?>
        <section id="banner">
            <div class="container">
                <div class="texture-01"><img src="<?php echo get_template_directory_uri(); ?>/images/texture-01.png">
                </div>
                <div class="texture-02"><img src="<?php echo get_template_directory_uri(); ?>/images/texture-02.png">
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="banner-text">
                            <h1><?php echo carbon_get_term_meta($term_id, 'code_category_name'); ?><?php ?>
                                <span><?php echo carbon_get_term_meta($term_id, 'code_category_name_2') ?></span></h1>
                        </div>
                        <div class="banner-ade">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>10 <span>лет опыта</span></h3>
                                </div>
                                <div class="col-md-6">
                                    <h3>6500 <span>+проектов</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="banner-slider owl-carousel owl-theme" id="owl-banner-slider">
                            <?php $slider = carbon_get_term_meta($term_id, 'code_category_slider') ?>
                            <?php //dump($slider); ?>
                            <?php foreach ($slider as $key => $value) { ?>
                                <div class="banner-slider-item">
                                    <img src="<?php echo $value['code_category_slider_img']; ?>">
                                    <div class="banner-sale">
                                        <h4><?php echo $value['code_category_slider_name']; ?></h4>
                                        <span><?php echo $value['code_category_slider_price']; ?></span>
                                        <p><?php echo $value['code_category_slider_des']; ?></p>
                                    </div>
                                    <a href="<?php echo $value['code_category_slider_href']; ?>" class="btn btn-green">Весь каталог</a>
                                </div>
                            <?php }; ?>
                        </div>
                        <script>
                            $(document).ready(function () {
                                var owl = $('#owl-banner-slider');
                                owl.owlCarousel({
                                    items: 1,
                                    dots: false,
                                    loop: true,
                                    nav: true,
                                    margin: 0,
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
                                            items: 1
                                        }
                                    },
                                });
                            })
                        </script>
                    </div>
                </div>
            </div>
        </section>
    <?php }; ?>

    <?php if ($currentUrl === '/sauny/') : ?>
        <?php RenderBlock::renderBlockByName('acf/catalog-hero'); ?>
    <?php endif;?>
</header>
