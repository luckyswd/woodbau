<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="facebook-domain-verification" content="rpm005ev9ew99k355smftjbnjdfqq8" />
	<meta name="google-site-verification" content="rYzYhttAWhp3GIBHmWACSdn0xzfsiq5CFmZtfX-UdsY" />
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
    <script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start':
            new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-MV7GRL6');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MV7GRL6"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Meta Pixel Code -->
    <script>
      !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1125926511475005');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1125926511475005&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Meta Pixel Code -->
</head>
<body>

<header <?php if (is_front_page() || is_tax()){ ?>class="header-index"<?php }; ?>>
<!--    <div class="menu-burger">-->
<!--        <span></span> <span></span> <span></span>-->
<!--    </div>-->
<!--    <div class="mobile-menu">-->
<!--        <div class="block-menu-close">x</div>-->
<!--        <div class="top-lang">-->
<!--            --><?php //echo do_shortcode('[wpml_language_selector_widget]'); ?>
<!--        </div>-->
<!--        <h4>Навигация</h4>-->
<!--        <ul>-->
<!--            <li>-->
<!--                <a href="--><?php //echo home_url(); ?><!--">--><?php //if (ICL_LANGUAGE_CODE == 'pl') {
//                        echo 'Główny';
//                    } elseif (ICL_LANGUAGE_CODE == 'ru') {
//                        echo 'Главная';
//                    } else {
//                        echo 'Hauptseite';
//                    }; ?><!--</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="--><?php //echo home_url(); ?><!--/#category">--><?php //if (ICL_LANGUAGE_CODE == 'pl') {
//                        echo 'Katalog';
//                    } elseif (ICL_LANGUAGE_CODE == 'ru') {
//                        echo 'Каталог';
//                    } else {
//                        echo 'Katalog';
//                    }; ?><!--</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="--><?php //echo home_url(); ?><!--/o-nas/">--><?php //if (ICL_LANGUAGE_CODE == 'pl') {
//                        echo 'O nas';
//                    } elseif (ICL_LANGUAGE_CODE == 'ru') {
//                        echo 'О нас';
//                    } else {
//                        echo 'Über uns';
//                    }; ?><!--</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="--><?php //echo home_url(); ?><!--/portfolio/">--><?php //if (ICL_LANGUAGE_CODE == 'pl') {
//                        echo 'Projektowanie';
//                    } elseif (ICL_LANGUAGE_CODE == 'ru') {
//                        echo 'Проекты';
//                    } else {
//                        echo 'Projekte';
//                    }; ?><!--</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="--><?php //echo home_url(); ?><!--/arenda-ban/">--><?php //if (ICL_LANGUAGE_CODE == 'pl') {
//                        echo 'Wynajem wanien';
//                    } elseif (ICL_LANGUAGE_CODE == 'ru') {
//                        echo 'Аренда бань';
//                    } else {
//                        echo 'Bäder mieten';
//                    }; ?><!--</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="--><?php //echo home_url(); ?><!--/oplata/">--><?php //if (ICL_LANGUAGE_CODE == 'pl') {
//                        echo 'Zapłata';
//                    } elseif (ICL_LANGUAGE_CODE == 'ru') {
//                        echo 'Оплата';
//                    } else {
//                        echo 'Zahlung';
//                    }; ?><!--</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="--><?php //echo home_url(); ?><!--/dostavka/">--><?php //if (ICL_LANGUAGE_CODE == 'pl') {
//                        echo 'Dostawa';
//                    } elseif (ICL_LANGUAGE_CODE == 'ru') {
//                        echo 'Доставка';
//                    } else {
//                        echo 'Lieferung';
//                    }; ?><!--</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="--><?php //echo home_url(); ?><!--/sotrudnichestvo/">--><?php //if (ICL_LANGUAGE_CODE == 'pl') {
//                        echo 'Współpraca';
//                    } elseif (ICL_LANGUAGE_CODE == 'ru') {
//                        echo 'Сотрудничество';
//                    } else {
//                        echo 'Zusammenarbeit';
//                    }; ?><!--</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="--><?php //echo home_url(); ?><!--/kontakty/">--><?php //if (ICL_LANGUAGE_CODE == 'pl') {
//                        echo 'Łączność';
//                    } elseif (ICL_LANGUAGE_CODE == 'ru') {
//                        echo 'Контакты';
//                    } else {
//                        echo 'Kontakte';
//                    }; ?><!--</a>-->
<!--            </li>-->
<!--        </ul>-->
<!--        <div class="top-text">-->
<!--            <p><span>--><?php //if (ICL_LANGUAGE_CODE == 'pl') {
//                        echo 'Salon wystawowy';
//                    } elseif (ICL_LANGUAGE_CODE == 'ru') {
//                        echo 'Шоурум';
//                    } else {
//                        echo 'Ausstellungsraum';
//                    }; ?><!--</span>38110 Braunschweig<br>Wenden. Am Bockelsberg 14</p>-->
<!--        </div>-->
<!--        <div class="top-text">-->
<!--            <p><span>Email</span>-->
<!--                <a href="mailto:--><?php //if (ICL_LANGUAGE_CODE == 'pl') {
//                    echo 'woodbaupl@gmail.com';
//                } elseif (ICL_LANGUAGE_CODE == 'ru') {
//                    echo 'woodbaude@gmail.com';
//                } else {
//                    echo 'woodbaude@gmail.com';
//                }; ?><!--">--><?php //if (ICL_LANGUAGE_CODE == 'pl') {
//                        echo 'woodbaupl@gmail.com';
//                    } elseif (ICL_LANGUAGE_CODE == 'ru') {
//                        echo 'woodbaude@gmail.com';
//                    } else {
//                        echo 'woodbaude@gmail.com';
//                    }; ?><!--</a>-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
    <section id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="top-text">
                        <p><span><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'Salon wystawowy';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'Шоурум';
                                } else {
                                    echo 'Ausstellungsraum';
                                }; ?></span>
							<? if (ICL_LANGUAGE_CODE == 'pl') { ?>
									Radzymińska 87/89<br> 03-752 Warszawa
                                <? } elseif (ICL_LANGUAGE_CODE == 'ru') {?>
                                    38110 Braunschweig<br>Wenden. Am Bockelsberg 14
                                <? } else {?>
                                    38104 Braunschweig<br>Hungerkamp 11-12 
                                 <? }; ?>
							</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="top-text">
                        <p><span>Email</span>
                            <a href="mailto:<?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'woodbaupl@gmail.com';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'woodbaude@gmail.com';
                            } else {
                                echo 'woodbaude@gmail.com';
                            }; ?>"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                    echo 'woodbaupl@gmail.com';
                                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'woodbaude@gmail.com';
                                } else {
                                    echo 'woodbaude@gmail.com';
                                }; ?></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-logo">
                        <a href="<?php echo home_url(); ?>">
<!--                             <img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png"> -->
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
					<?
					if(ICL_LANGUAGE_CODE == 'pl') {?>
						<div class="top-soc">
                        <a href="https://www.facebook.com/WoodBauPolska" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.png"></a>
                        <a href="https://www.instagram.com/woodbau.poland" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-telegram.png"></a>
                        <a href="https://api.whatsapp.com/send?phone=48535104879&app=facebook&entry_point=page_cta&fbclid=IwAR3g-Ur9AkIT893jD1skJT8JQXQKTGMFqY3ihfP5mR6JmJaRrwyM3JbCosQ" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-whatsapp.png"></a>
                    </div>
					<?} elseif (ICL_LANGUAGE_CODE == 'ru') {?>
					<div class="top-soc">
                        <a href="#" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.png"></a>
                        <a href="#" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-telegram.png"></a>
                        <a href="#" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-whatsapp.png"></a>
                    </div>
                    <?} else {?>
					<div class="top-soc">
                        <a href="https://www.facebook.com/woodbau.de" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.png"></a>
                        <a href="https://www.instagram.com/woodbau.de/" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-telegram.png"></a>
                        <a href="#" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-whatsapp.png"></a>
                    </div>
					<?}?>
                </div>
                <div class="col-md-2">
                    <div class="top-lang">
                        <!-- <?php echo do_shortcode('[wpml_language_selector_widget]'); ?> -->
                        <ul class="list-lang">
                            <li><a href="https://woodbau.de/" title="woodbau.de" target="_top" class="active">DE</a></li>
                            <li><a href="https://woodbaupolska.pl/" title="woodbaupolska.pl" target="_top">PL</a></li>
                            <li><a href="https://woodbau.ru/" title="woodbau.ru" target="_top" >RU</a></li>
                            <li><a href="https://woodbau.by/" title="woodbau.by" target="_top" >BY</a></li>
                        </ul>
                    </div>
                    <?php if (ICL_LANGUAGE_CODE == 'pl') {
                        echo '
                    <div class="top-phone">
                                            <a href="tel:+48535104879">+48535104879</a>
                                        </div>
                    ';
                    } elseif (ICL_LANGUAGE_CODE == 'ru') {
                        echo '
                    <div class="top-phone">
                                           <a href="tel:017664316814"><img src="/wp-content/themes/woodbau/images/whatsapp.png">017664316814</a>
                                                                                       <a href="tel:053617015376">053617015376</a>
                                        </div>
                    ';
                    } else {
                        echo '
                    <div class="top-phone">
                                            <a href="tel:+4915731832927"><img src="/wp-content/themes/woodbau/images/whatsapp.png">+4915731832927</a>
                                            
                                        </div>
                    ';
                    }; ?>
                    <a href="#modal-popup" class="popup-modal btn-call"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Poproś o kontakt';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Заказать обратный звонок';
                        } else {
                            echo 'Rückruf anfordern';
                        }; ?></a>
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
                                    echo 'Mamy wszystko do ozdobienia twojej <br> działki.';
                                  } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                    echo 'У нас есть все <br>для вашего дома, <br>загородного участка <br>и сада';
                                  } else {
                                    echo 'Wir haben alles für Ihr Zuhause, Ihre Landschaft und Ihren Garten';
                                  }; ?></h1>
                            </div>
                            <div class="banner-ade">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>10 <span><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                              echo 'lat doświadczenia';
                                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                              echo 'лет опыта';
                                            } else {
                                              echo 'langjährige Erfahrung';
                                            }; ?></span></h3>
                                        <!--                                    <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.</p>-->
                                    </div>
                                    <div class="col-md-6">
                                        <h3>6500 <span>+<?php if (ICL_LANGUAGE_CODE == 'pl') {
                                              echo 'projektów';
                                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                              echo 'проектов';
                                            } else {
                                              echo 'Projekte';
                                            }; ?></span></h3>
                                        <!--                                    <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.</p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="banner-slider owl-carousel owl-theme" id="owl-banner-slider">
                                <div class="banner-slider-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/product-01.png">
                                    <div class="banner-sale">
                                      <?php if (ICL_LANGUAGE_CODE == 'pl') { ?>
                                    	<h4>Sauna</h4>
                                    	<span>od 12000 PLN</span>
                                    	<p>za 10 dni</p>
                                    <? } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>
                                    	<h4>Бани</h4>
                                    	<span>от 3000$</span>
                                    	<p>за 10 дней</p>
                                    <?} else { ?>
                                    	<h4>Sauna</h4>
                                    	<span>von 3000€</span>
                                    	<p>lieferbar ab 10 Tagen</p>
                                    <?}; ?>
                                    </div>
                                    <a href="./categories/bani/" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                        echo 'Cały katalog';
                                      } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                        echo 'Весь каталог';
                                      } else {
                                        echo 'Gesamter Katalog';
                                      }; ?></a>
                                </div>
                                <div class="banner-slider-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/2222.png">
                                    <div class="banner-sale">
                                      <?php if (ICL_LANGUAGE_CODE == 'pl') { ?>
                                    	<h4>Sauna</h4>
                                    	<span>od 12000 PLN</span>
                                    	<p>za 10 dni</p>
                                    <? } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>
                                    	<h4>Бани</h4>
                                    	<span>от 3000$</span>
                                    	<p>за 10 дней</p>
                                    <?} else { ?>
                                    	<h4>Sauna</h4>
                                    	<span>von 3000€</span>
                                    	<p>lieferbar ab 10 Tagen</p>
                                    <?}; ?>
                                    </div>
                                    <a href="./categories/barbekyu/" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                        echo 'Cały katalog';
                                      } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                        echo 'Весь каталог';
                                      } else {
                                        echo 'Gesamter Katalog';
                                      }; ?></a>
                                </div>
								                                <div class="banner-slider-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/3333.png">
                                    <div class="banner-sale">
                                      <?php if (ICL_LANGUAGE_CODE == 'pl') { ?>
                                    	<h4>Sauna</h4>
                                    	<span>od 12000 PLN</span>
                                    	<p>za 10 dni</p>
                                    <? } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>
                                    	<h4>Бани</h4>
                                    	<span>от 3000$</span>
                                    	<p>за 10 дней</p>
                                    <?} else { ?>
                                    	<h4>Sauna</h4>
                                    	<span>von 3000€</span>
                                    	<p>lieferbar ab 10 Tagen</p>
                                    <?}; ?>
                                    </div>
                                    <a href="./categories/barbekyu/" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                        echo 'Cały katalog';
                                      } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                        echo 'Весь каталог';
                                      } else {
                                        echo 'Gesamter Katalog';
                                      }; ?></a>
                                </div>
								                                <div class="banner-slider-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/4444.png">
                                    <div class="banner-sale">
                                      <?php if (ICL_LANGUAGE_CODE == 'pl') { ?>
                                    	<h4>Sauna</h4>
                                    	<span>od 12000 PLN</span>
                                    	<p>za 10 dni</p>
                                    <? } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>
                                    	<h4>Бани</h4>
                                    	<span>от 3000$</span>
                                    	<p>за 10 дней</p>
                                    <?} else { ?>
                                    	<h4>Sauna</h4>
                                    	<span>von 3000€</span>
                                    	<p>lieferbar ab 10 Tagen</p>
                                    <?}; ?>
                                    </div>
                                    <a href="./categories/barbekyu/" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                        echo 'Cały katalog';
                                      } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                        echo 'Весь каталог';
                                      } else {
                                        echo 'Gesamter Katalog';
                                      }; ?></a>
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
                                    <h3>10 <span><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                                echo 'lat doświadczenia';
                                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                                echo 'лет опыта';
                                            } else {
                                                echo 'jährige Erfahrung';
                                            }; ?></span></h3>
                                    <!--                                    <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.</p>-->
                                </div>
                                <div class="col-md-6">
                                    <h3>6500 <span>+<?php if (ICL_LANGUAGE_CODE == 'pl') {
                                                echo 'projektów';
                                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                                echo 'проектов';
                                            } else {
                                                echo 'Projekte';
                                            }; ?></span></h3>
                                    <!--                                    <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.</p>-->
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
                                    <a href="<?php echo $value['code_category_slider_href']; ?>" class="btn btn-green"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                            echo 'Cały katalog';
                                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                            echo 'Весь каталог';
                                        } else {
                                            echo 'Gesamter Katalog';
                                        }; ?></a>
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
</header>
