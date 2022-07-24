<section id="qestions">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                            echo 'Masz pytania?';
                        } elseif (ICL_LANGUAGE_CODE == 'ru') {
                            echo 'Остались вопросы?';
                        } else {
                            echo 'Haben Sie noch Fragen?';
                        }; ?></h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 offset-md-3">
            <div class="qestions-form">
				<?= do_shortcode('[contact-form-7 id="2923" title="Footer Form DE"]') ?>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="top-logo">
                    <a href="#"><img src="https://woodbaupolska.pl/wp-content/uploads/2022/06/cropped-WOODBAU.PL-LOGO.png"></a>
                </div>
            </div>
            <div class="col-md-3 offset-md-2">
                <ul>
                    <li>
                        <a href="<?php echo home_url(); ?>"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'Główny';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'Главная';
                            } else {
                                echo 'Hauptseite';
                            }; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/catalog"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'Katalog';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'Каталог';
                            } else {
                                echo 'Katalog';
                            }; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/o-nas/"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'O nas';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'О нас';
                            } else {
                                echo 'Über uns';
                            }; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/portfolio/"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'Projektowanie';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'Проекты';
                            } else {
                                echo 'Projekte';
                            }; ?></a>
                    </li>
					<? if(ICL_LANGUAGE_CODE != 'pl') {?>
                    <li>
                        <a href="<?php echo home_url(); ?>/arenda-ban/"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'Wynajem wanien';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'Аренда бань';
                            } else {
                                echo 'Bäder mieten';
                            }; ?></a>
                    </li>
					<?}?>
                    <li>
                        <a href="<?php echo home_url(); ?>/oplata/"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'Zapłata';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'Оплата';
                            } else {
                                echo 'Zahlung';
                            }; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/dostavka/"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'Dostawa';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'Доставка';
                            } else {
                                echo 'Lieferung';
                            }; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/sotrudnichestvo/"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'Współpraca';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'Сотрудничество';
                            } else {
                                echo 'Zusammenarbeit';
                            }; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/kontakty/"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'Łączność';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'Контакты';
                            } else {
                                echo 'Kontakte';
                            }; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/politika-konfidencialnosti/"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'Polityka prywatności';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'Политика конфиденциальности';
                            } else {
                                echo 'Datenschutz-Bestimmungen';
                            }; ?></a>
                    </li>
					<?php if (ICL_LANGUAGE_CODE == 'de') {?> 
						<li>
							<a href="/Impressum">Impressum</a>
						</li>
						<li>
							<a href="/zertifizierung">Zertifizierung</a>
						</li>
					<?}?>
					
                </ul>
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
                <div class="top-text">
                    <p><span><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'Salon wystawowy';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'Шоурум';
                            } else {
                                echo 'Ausstellungsraum';
                            }; ?></span><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'Radzymińska 87/89,<br> 03-752 Warszawa';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'Шоурум';
                            } else {
                                echo '38104 Braunschweig<br>Hungerkamp 11-12 ';
                            };?></p>
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
        </div>
        <div class="row">
            <div class="col-md-10">
                <p>&copy; 2020—2021 Woodbau.de / <?php if (ICL_LANGUAGE_CODE == 'pl') {
                        echo 'Wszelkie prawa zastrzeżone.';
                    } elseif (ICL_LANGUAGE_CODE == 'ru') {
                        echo 'Все права защищены.';
                    } else {
                        echo 'Alle Rechte vorbehalten.';
                    }; ?></p>
            </div>
        </div>
    </div>
</footer><!--popUp-->
<div id="modal-popup" class="mfp-hide popup-modal-style">
    <div class="modal-popup-content">
        <?= do_shortcode('[contact-form-7 id="2933" title="Modal Form PL"]') ?>
<!--         <form class="popup-form" method="post" id="feedback" enctype="multipart/form-data">
            <h3><?php if (ICL_LANGUAGE_CODE == 'pl') {
                    echo 'Zostaw prośbę';
                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                    echo 'Оставьте заявку';
                } else {
                    echo 'Hinterlassen Sie eine Anfrage';
                }; ?></h3>
            <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                    echo 'A my oddzwonimy!';
                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                    echo 'И мы перезвоним Вам!';
                } else {
                    echo 'Und wir rufen Sie zurück!';
                }; ?></p>
            <input type="text" name="name" placeholder="<?php if (ICL_LANGUAGE_CODE == 'pl') {
                echo 'Twoje imię';
            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                echo 'Ваше имя';
            } else {
                echo 'Ihr Name';
            }; ?>"> <input type="tel" name="phone" placeholder="<?php if (ICL_LANGUAGE_CODE == 'pl') {
                echo 'Twój numer telefonu';
            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                echo 'Ваш телефон';
            } else {
                echo 'Ihr Telefon';
            }; ?>" required>
            <button type="submit" class="btn btn-green" id="modal-send-btn"><?php if (ICL_LANGUAGE_CODE == 'pl') {
                    echo 'Prześlij swoją aplikację';
                } elseif (ICL_LANGUAGE_CODE == 'ru') {
                    echo 'Оставить заявку';
                } else {
                    echo 'Reichen Sie Ihre Bewerbung ein';
                }; ?></button>
        </form> -->
    </div>
</div>
<script type="text/javascript">
    $(function () {
        $('.popup-modal').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: '#username',
            //modal: true,
        });
        $(document).on('click', '.popup-modal-dismiss', function (e) {
            e.preventDefault();
            $.magnificPopup.close();
        });
    });
</script>
<script type="text/javascript">
    $('.menu-burger').click(function () {
        $("body").addClass('body-scroll').html();
        $(".mobile-menu").addClass('active').html();
    });

    $('.block-menu-close').click(function () {
        $("body").removeClass('body-scroll').html();
        $(".mobile-menu").removeClass('active').html();
    });

    $('.mobile-menu a').click(function () {
        $("body").removeClass('body-scroll').html();
        $(".mobile-menu").removeClass('active').html();
    });
</script>

<?php wp_footer(); ?>
<?php if (ICL_LANGUAGE_CODE == 'pl') {?>
                            
                        <? } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>
                            
                        <?} else { ?>
                           <script type="text/javascript">
							var cpm = {};
							(function(h,u,b){
							var d=h.getElementsByTagName("script")[0],e=h.createElement("script");
							e.async=true;e.src='https://cookiehub.net/c2/98ec7b2b.js';
							e.onload=function(){u.cookiehub.load(b);};
							d.parentNode.insertBefore(e,d);
							})(document,window,cpm);
							</script>
                       <? }; ?>
<?php if (ICL_LANGUAGE_CODE == 'pl') {?>
                            <script>$('input[type="tel"]').mask("+48 999 999 999");</script>
                        <? } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>
                            <script>$('input[type="tel"]').mask("+7(999) 999-99-99");</script>
                        <?} else {
                            echo '';
                        }; ?>
</body></html>