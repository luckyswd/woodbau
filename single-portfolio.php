<?php
get_header();
// получение массива дополнительных полей
$values = get_post_meta(get_the_ID(), false);


?>
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb">
                        <?php if (function_exists('bcn_display')) {
                            bcn_display();
                        } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- CONTENT -->
                    <div class="block-head">
                        <h3><?php the_title(); ?></h3>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="product-photo zoom-gallery">
                        <a href="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|0|0|value"]['0']; ?>">
                            <img src="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|0|0|value"]['0']; ?>" alt="<?php echo $part_item; ?>">
                        </a>
                        <?php if (isset($values["_code_portfolio_photo|code_portfolio_photo_item|1|0|value"]['0'])) { ?>
                            <a href="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|1|0|value"]['0']; ?>">
                                <img src="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|1|0|value"]['0']; ?>" alt="<?php echo $part_item; ?>">
                            </a>
                        <?php } ?>

                        <?php if (isset($values["_code_portfolio_photo|code_portfolio_photo_item|2|0|value"]['0'])) { ?>
                            <a href="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|2|0|value"]['0']; ?>">
                                <img src="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|2|0|value"]['0']; ?>" alt="<?php echo $part_item; ?>">
                            </a>
                        <?php } ?>
                        <?php if (isset($values["_code_portfolio_photo|code_portfolio_photo_item|3|0|value"]['0'])) { ?>
                            <a href="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|3|0|value"]['0']; ?>">
                                <img src="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|3|0|value"]['0']; ?>" alt="<?php echo $part_item; ?>">
                            </a>
                        <?php } ?>
                        <?php if (isset($values["_code_portfolio_photo|code_portfolio_photo_item|4|0|value"]['0'])) { ?>
                            <a href="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|4|0|value"]['0']; ?>">
                                <img src="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|4|0|value"]['0']; ?>" alt="<?php echo $part_item; ?>">
                            </a>
                        <?php } ?>
                        <?php if (isset($values["_code_portfolio_photo|code_portfolio_photo_item|5|0|value"]['0'])) { ?>
                            <a href="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|5|0|value"]['0']; ?>">
                                <img src="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|5|0|value"]['0']; ?>" alt="<?php echo $part_item; ?>">
                            </a>
                        <?php } ?>
                        <?php if (isset($values["_code_portfolio_photo|code_portfolio_photo_item|6|0|value"]['0'])) { ?>
                            <a href="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|6|0|value"]['0']; ?>">
                                <img src="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|6|0|value"]['0']; ?>" alt="<?php echo $part_item; ?>">
                            </a>
                        <?php } ?>
                        <?php if (isset($values["_code_portfolio_photo|code_portfolio_photo_item|7|0|value"]['0'])) { ?>
                            <a href="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|7|0|value"]['0']; ?>">
                                <img src="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|7|0|value"]['0']; ?>" alt="<?php echo $part_item; ?>">
                            </a>
                        <?php } ?>
                        <?php if (isset($values["_code_portfolio_photo|code_portfolio_photo_item|8|0|value"]['0'])) { ?>
                            <a href="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|8|0|value"]['0']; ?>">
                                <img src="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|8|0|value"]['0']; ?>" alt="<?php echo $part_item; ?>">
                            </a>
                        <?php } ?>
                        <?php if (isset($values["_code_portfolio_photo|code_portfolio_photo_item|9|0|value"]['0'])) { ?>
                            <a href="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|9|0|value"]['0']; ?>">
                                <img src="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|9|0|value"]['0']; ?>" alt="<?php echo $part_item; ?>">
                            </a>
                        <?php } ?>
                        <?php if (isset($values["_code_portfolio_photo|code_portfolio_photo_item|10|0|value"]['0'])) { ?>
                            <a href="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|10|0|value"]['0']; ?>">
                                <img src="<?php echo $values["_code_portfolio_photo|code_portfolio_photo_item|10|0|value"]['0']; ?>" alt="<?php echo $part_item; ?>">
                            </a>
                        <?php } ?>

                        <?php //dump($values); ?>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('.zoom-gallery').magnificPopup({
                                    delegate: 'a',
                                    type: 'image',
                                    closeOnContentClick: false,
                                    closeBtnInside: false,
                                    mainClass: 'mfp-with-zoom mfp-img-mobile',
                                    image: {
                                        verticalFit: true,
                                        titleSrc: function (item) {
                                            return item.el.attr('title') + ' &middot; <a class="image-source-link" href="' + item.el.attr('data-source') + '" target="_blank">image source</a>';
                                        }
                                    },
                                    gallery: {
                                        enabled: true
                                    },
                                    zoom: {
                                        enabled: true,
                                        duration: 300, // don't foget to change the duration also in CSS
                                        opener: function (element) {
                                            return element.find('img');
                                        }
                                    }

                                });
                            });
                        </script>
                    </div>
                </div>
                <div class="col-md-7">
                    <h3> Opis produktu </h3>
                    <?php
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    ?>
                    <?php if ($values["_code_portfolio_price"]["0"] !== "0") { ?>
                        <h3>Cena</h3>
                        <p>na prośbę </p>
                    <?php } ?>
                    <?php if ($values["_code_portfolio_time"]["0"] !== "0") { ?>
                        <h3>Czas produkcji</h3>
                        <p> 4-6 tygodnie </p>
                    <?php } ?>
                    <a href="#modal-popup" class="btn btn-green popup-modal">Aby uzyskać konsultację</a>
                </div>
            </div>
    </section>
<?php
get_footer();
?>

<?php
get_footer();
?>
