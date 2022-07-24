<section id="qestions">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h3>Masz pytania?</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 offset-md-3">
            <div class="qestions-form">
				<?= do_shortcode('[contact-form-7 id="2922" title="Footer Form PL"]') ?>
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
                        <a href="<?php echo home_url(); ?>">Główny</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/catalog">Katalog</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/o-nas/">O nas</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/portfolio/">Projektowanie</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/arenda-ban/">Wynajem wanien</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/oplata/">Zapłata</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/dostavka/">Dostawa</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/sotrudnichestvo/">Współpraca</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/kontakty/">Łączność</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/politika-konfidencialnosti/"></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">
                <div class="top-text">
                    <p><span>Email</span>
                        <a href="mailto:woodbaupl@gmail.com">woodbaupl@gmail.com</a>
                    </p>
                </div>
                <div class="top-text">
                    <p><span>Salon wystawowy</span>Radzymińska 87/89,<br> 03-752 Warszawa</p>
                </div>
                <div class="top-phone">
                    <a href="tel:+48535104879">+48535104879</a>
                </div>
                <div class="top-soc">
                    <a href="https://www.facebook.com/WoodBauPolska" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.png"></a>
                    <a href="https://www.instagram.com/woodbau.poland" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-telegram.png"></a>
                    <a href="https://api.whatsapp.com/send?phone=48535104879&app=facebook&entry_point=page_cta&fbclid=IwAR3g-Ur9AkIT893jD1skJT8JQXQKTGMFqY3ihfP5mR6JmJaRrwyM3JbCosQ"
                       target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-whatsapp.png"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <p>&copy; 2020—2021 Woodbau.de / Wszelkie prawa zastrzeżone.</p>
            </div>
        </div>
    </div>
</footer>

<div id="modal-popup" class="mfp-hide popup-modal-style">
    <div class="modal-popup-content">
        <?= do_shortcode('[contact-form-7 id="2933" title="Modal Form PL"]') ?>
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

<script>$('input[type="tel"]').mask("+48 999 999 999");</script>

</body></html>