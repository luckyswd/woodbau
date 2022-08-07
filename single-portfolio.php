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
                        <span><?php the_title(); ?></span>
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
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') { echo 'Opis produktu'; } elseif (ICL_LANGUAGE_CODE == 'ru') { echo 'Описание продукта'; } else { echo 'Produktbeschreibung'; }; ?></h3>
                    <?php
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    ?>
                    <?php if ($values["_code_portfolio_price"]["0"] !== "0") { ?>
                        <h3><?php if (ICL_LANGUAGE_CODE == 'pl') { echo 'Cena'; } elseif (ICL_LANGUAGE_CODE == 'ru') { echo 'Цена'; } else { echo 'Preis'; }; ?></h3><p><?php if (ICL_LANGUAGE_CODE == 'pl') { echo 'na prośbę'; } elseif (ICL_LANGUAGE_CODE == 'ru') { echo 'по запросу'; } else { echo 'auf Anfrage'; }; ?></p>
                    <?php } ?>
                    <?php if ($values["_code_portfolio_time"]["0"] !== "0") { ?>
                        <h3><?php if (ICL_LANGUAGE_CODE == 'pl') { echo 'Czas produkcji'; } elseif (ICL_LANGUAGE_CODE == 'ru') { echo 'Сроки производства'; } else { echo 'Produktionszeit'; }; ?></h3><p> <?php if (ICL_LANGUAGE_CODE == 'pl') { echo '3-4 tygodnie'; } elseif (ICL_LANGUAGE_CODE == 'ru') { echo '3-4 недели'; } else { echo '3-4 Wochen'; }; ?></p>
                    <?php } ?>
                    <?php if ($values["_code_portfolio_price"]["0"] !== "0") { ?>
                        <h3><?php if (ICL_LANGUAGE_CODE == 'pl') { echo 'Ekwipunek'; } elseif (ICL_LANGUAGE_CODE == 'ru') { echo 'Комплектация'; } else { echo 'Ausrüstung'; }; ?></h3><p><?php echo $values["_code_portfolio_description"]["0"]; ?></p>
                    <?php } ?>
                    <a href="#modal-popup" class="btn btn-green popup-modal"><?php if (ICL_LANGUAGE_CODE == 'pl') { echo 'Aby uzyskać konsultację'; } elseif (ICL_LANGUAGE_CODE == 'ru') { echo 'Получить консультацию'; } else { echo 'Um eine Beratung zu bekommen'; }; ?></a>
                </div>
            </div>
    </section>
<?php
get_footer();
?>

<?php
get_footer();
?>
