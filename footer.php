<section id="qestions">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3>Остались вопросы?</h3>
                    <span>Остались вопросы?</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 offset-md-3">
            <div class="qestions-form">
                <h4>Задайте интересующий вас вопрос <br>Наш менеджер ответит вам <span>через 15 минут</span></h4>
				<? echo do_shortcode('[contact-form-7 id="2924" title="Footer Form RU"]'); ?>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="top-logo">
                    <a href="#"><img src="https://woodbau.by/wp-content/uploads/2022/06/cropped-WOODBAU.BY-LOGO.png"></a>
                </div>
            </div>
            <div class="col-md-3 offset-md-2">
                <ul>
                    <li>
                        <a href="<?php echo home_url(); ?>">Главная</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/catalog">Каталог</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/o-nas/">О нас</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/portfolio/">Проекты</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/oplata/">Оплата</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/dostavka/">Доставка</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/kontakty/">Контакты</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/politika-konfidencialnosti/">Политика конфиденциальности</a>
                    </li>				
                </ul>
            </div>
            <div class="col-md-2">
                <div class="top-text">
                    <p><span>Email</span>
                        <a href="mailto:woodbaus@gmail.com" target="_blank">woodbaus@gmail.com</a>
                    </p>
                </div>
                <div class="top-text">
                    <p><span>Шоурум</span>Передавая 6/3<br/>Минск 220070</p>
                </div>
                <div class="top-phone">
                    <a href="tel:+375293800323" target="_blank"><img src="/wp-content/themes/woodbau/images/whatsapp.png">+37529 380 03 23</a>
                    <a href="tel:+375339130323" target="_blank">+37533 913 03 23</a>
                    <a href="tel:+375173360323" target="_blank">+37517 336 03 23</a>
                </div>   
                <div class="top-soc">
                        <a href="https://www.facebook.com/WoodBau-Belarus-108393871882270" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.png"></a>
                        <a href="https://www.instagram.com/woodbaubelarus/" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-instagram.png"></a>
                        <a href="tel:+375339130323" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-whatsapp.png"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <p>&copy; 2020—2022 Woodbau.by / <?php if (ICL_LANGUAGE_CODE == 'pl') {
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
		<?php echo do_shortcode('[contact-form-7 id="2967" title="Modal Form RU"]'); ?>
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
</body></html>