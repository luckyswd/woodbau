<section id="qestions">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-head">
                    <h2>Masz pytania?</h2>
                    <span>Masz pytania?</span>
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

<?php
$facebook = get_field('facebook', 'option');
$instagram = get_field('instagram', 'option');
$whatsapp = get_field('whatsapp', 'option');
$phone = get_field('phone', 'option');
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="top-logo">
                    <a href="#"><img src="https://woodbaupolska.pl/wp-content/uploads/2022/06/cropped-WOODBAU.PL-LOGO.png"></a>
                </div>
            </div>
            <div class="col-md-3">
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
                </ul>
            </div>
            <div class="col-md-3">
                <div class="top-text">
                    <p><span>Email</span>
                        <a href="mailto:office.woodbau@gmail.com">office.woodbau@gmail.com</a>
                    </p>
                </div>
                <div class="top-text">
                    <p><span>Salon wystawowy</span>Kobylka, 05-230,<br> ul. Przyjacielska 37</p>
                </div>
                <div class="top-phone">
                    <a href="tel:+<?= $phone['phone_number'] ?>">+<?= $phone['phone_number'] ?></a>
                </div>
                <div class="top-soc">
                    <?php if (!empty($facebook['image'])) : ?>
                        <a href="<?= $facebook['link'] ?? '#' ?>" target="_blank">
                            <picture>
                                <img loading="lazy" src="<?= $facebook['image']['url'] ?>" alt="<?= $facebook['image']['title'] ?>">
                            </picture>
                        </a>
                    <?php endif; ?>

                    <?php if (!empty($instagram['image'])) : ?>
                        <a href="<?= $instagram['link'] ?? '#' ?>" target="_blank">
                            <picture>
                                <img loading="lazy" src="<?= $instagram['image']['url'] ?>" alt="<?= $instagram['image']['title'] ?>">
                            </picture>
                        </a>
                    <?php endif; ?>

                    <?php if (!empty($whatsapp['image'])) : ?>
                        <a href="https://api.whatsapp.com/send?phone=<?= $phone['phone_number'] ?>&app=facebook&entry_point=page_cta&fbclid=IwAR3g-Ur9AkIT893jD1skJT8JQXQKTGMFqY3ihfP5mR6JmJaRrwyM3JbCosQ" target="_blank">
                            <picture>
                                <img loading="lazy" src="<?= $whatsapp['image']['url'] ?>" alt="<?= $whatsapp['image']['title'] ?>">
                            </picture>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <p>&copy; 2020—2022 woodbaupolska.pl / Wszelkie prawa zastrzeżone.</p>
            </div>
        </div>
    </div>

    <div class="online-consultant">
        <div class="online-consultant__socials">
            <div class="contact-socials">
                <?php if (!empty($phone['image'])) : ?>
                    <a href="tel:+<?= $phone['phone_number'] ?>" target="_blank">
                        <picture>
                            <img src="<?= $phone['image']['url'] ?? '' ?>" alt="<?= $phone['image']['alt'] ?: $phone['image']['title'] ?? '' ?>" width="33" height="33" loading="lazy">
                        </picture>
                    </a>
                <?php endif; ?>
                <?php if (!empty($instagram['image'])) : ?>
                    <a href="<?= $instagram['link'] ?? '' ?>" target="_blank">
                        <picture>
                            <img src="<?= $instagram['image']['url'] ?? '' ?>" alt="<?= $instagram['image']['alt'] ?: $instagram['image']['title'] ?? '' ?>" width="33" height="33" loading="lazy">
                        </picture>
                    </a>
                <?php endif; ?>
                <?php if (!empty($instagram['image'])) : ?>
                    <a href="<?= $facebook['link'] ?? '' ?>" target="_blank">
                        <picture>
                            <img src="<?= $facebook['image']['url'] ?? '' ?>" alt="<?= $facebook['image']['alt'] ?: $facebook['image']['title'] ?? '' ?>" width="33" height="33" loading="lazy">
                        </picture>
                    </a>
                <?php endif; ?>
                <?php if (!empty($whatsapp['image'])) : ?>
                    <a href="https://api.whatsapp.com/send?phone=<?= $phone['phone_number'] ?>&app=facebook&entry_point=page_cta&fbclid=IwAR3g-Ur9AkIT893jD1skJT8JQXQKTGMFqY3ihfP5mR6JmJaRrwyM3JbCosQ" target="_blank">
                        <picture>
                            <img src="<?= $whatsapp['image']['url'] ?? '' ?>" alt="<?= $whatsapp['image']['alt'] ?: $whatsapp['image']['title'] ?? '' ?>" width="33" height="33" loading="lazy">
                        </picture>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="online-consultant__main_image-open js-active-open">
            <div class="online-consultant__wave"></div>
            <svg fill="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 423.789 423.789" style="enable-background:new 0 0 423.789 423.789;" xml:space="preserve">
                <path d="M423.789,225.29c0-52.537-50.816-95.767-116.583-100.102c-7.191-9.469-15.979-18.275-26.273-26.207  c-31.04-23.916-72.165-37.086-115.8-37.086c-43.634,0-84.759,13.171-115.799,37.086C17.521,123.492,0,156.321,0,191.42  c0,55.275,44.811,104.246,110.372,122.249c-3.909,6.604-11.674,16.833-26.906,29.81c-2.959,2.521-4.189,6.53-3.153,10.277  c1.036,3.748,4.151,6.554,7.985,7.197c0.575,0.097,5.865,0.941,14.5,0.941c0.001,0,0.001,0,0.002,0  c23.175,0,67.583-6.021,107.382-45.818c6.59-1.457,12.992-3.22,19.185-5.264c9.889,4.816,20.515,8.524,31.686,11.048  c30.757,30.437,64.927,34.909,82.347,34.909c6.711-0.001,10.939-0.664,11.525-0.762c3.834-0.643,6.949-3.45,7.985-7.197  c1.036-3.747-0.193-7.755-3.153-10.277c-9.412-8.02-14.932-14.569-18.141-19.272C390.578,304.654,423.789,267.339,423.789,225.29z   M210.133,228.895h-90c-5.523,0-10-4.477-10-10s4.477-10,10-10h90c5.523,0,10,4.477,10,10S215.656,228.895,210.133,228.895z   M240.133,179.561h-150c-5.523,0-10-4.477-10-10c0-5.523,4.477-10,10-10h150c5.523,0,10,4.477,10,10  C250.133,175.084,245.656,179.561,240.133,179.561z M325.373,302.767c-5.051,1.065-8.461,5.799-7.871,10.927  c0.224,1.946,1.705,9.83,11.347,21.917c-15.384-2.515-36.304-9.878-55.581-29.844c-1.401-1.451-3.208-2.445-5.184-2.85  c-4.193-0.86-8.289-1.921-12.288-3.155c45.494-23.441,74.471-63.779,74.471-108.342c0-15.473-3.409-30.503-9.942-44.576  c20.77,3.551,39.708,11.696,54.598,23.678c18.615,14.979,28.867,34.429,28.867,54.768  C403.789,261.171,371.543,293.03,325.373,302.767z" />

            </svg>
        </div>
        <div class="online-consultant__main_image-close">
            <svg fill="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 252 252" style="enable-background:new 0 0 252 252;" xml:space="preserve">
                <g>
                    <path d="M126,0C56.523,0,0,56.523,0,126s56.523,126,126,126s126-56.523,126-126S195.477,0,126,0z M126,234   c-59.551,0-108-48.449-108-108S66.449,18,126,18s108,48.449,108,108S185.551,234,126,234z" />
                    <path d="M164.612,87.388c-3.515-3.515-9.213-3.515-12.728,0L126,113.272l-25.885-25.885c-3.515-3.515-9.213-3.515-12.728,0   c-3.515,3.515-3.515,9.213,0,12.728L113.272,126l-25.885,25.885c-3.515,3.515-3.515,9.213,0,12.728   c1.757,1.757,4.061,2.636,6.364,2.636s4.606-0.879,6.364-2.636L126,138.728l25.885,25.885c1.757,1.757,4.061,2.636,6.364,2.636   s4.606-0.879,6.364-2.636c3.515-3.515,3.515-9.213,0-12.728L138.728,126l25.885-25.885   C168.127,96.601,168.127,90.902,164.612,87.388z" />
                </g>

            </svg>
        </div>

    </div>
</footer>

<div id="modal-popup" class="mfp-hide popup-modal-style">
    <div class="modal-popup-content">
        <?= do_shortcode('[contact-form-7 id="2933" title="Modal Form PL"]') ?>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        $('.popup-modal').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: '#username',
            //modal: true,
        });
        $(document).on('click', '.popup-modal-dismiss', function(e) {
            e.preventDefault();
            $.magnificPopup.close();
        });
    });
</script>
<script type="text/javascript">
    $('.menu-burger').click(function() {
        $("body").addClass('body-scroll').html();
        $(".mobile-menu").addClass('active').html();
    });

    $('.block-menu-close').click(function() {
        $("body").removeClass('body-scroll').html();
        $(".mobile-menu").removeClass('active').html();
    });

    $('.mobile-menu a').click(function() {
        $("body").removeClass('body-scroll').html();
        $(".mobile-menu").removeClass('active').html();
    });
</script>

<?php wp_footer(); ?>

<script>
    $('input[type="tel"]').mask("+48 999 999 999");
</script>

</body>

</html>