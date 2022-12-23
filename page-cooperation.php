<?php get_header();
$title = get_field('title');
$subtitile_1 = get_field('subtitile_1');
$subtitile_2 = get_field('subtitile_2');
$quote = get_field('quote');
$quote_bg = get_field('quote_bg');
$block_3_image = get_field('block_3_image');
$block_3_title = get_field('block_3_title');
$block_3_options = get_field('block_3_options');
$block_4_titile = get_field('block_4_titile');
$block_4_image = get_field('block_4_image');
$block_4_text = get_field('block_4_text');
$block_42_title = get_field('block_4.2_title');
$block_42_infos = get_field('block_4.2_infos');
$block_43_title = get_field('block_4.3_title');
$block_43_subtitle = get_field('block_4.3_subtitle');
$block_43_points = get_field('block_4.3_points');
$block_5_title = get_field('block_5_title');
$block_5_description = get_field('block_5_description');
$block_5_points = get_field('block_5_points');
$block_6_title = get_field('block_6_title');
$block_6_image_1 = get_field('block_6_image_1');
$block_6_image_2 = get_field('block_6_image_2');
$block_6_image_3 = get_field('block_6_image_3');
$block_7_title = get_field('block_7_title');
$block_7_subtitle = get_field('block_7_subtitle');
$block_7_partners = get_field('block_7_partners');
$block_8_title = get_field('block_8_title');
$block_8_projects = get_field('block_8_projects');
$block_9_title = get_field('block_9_title');
$block_9_points = get_field('block_9_points');
$block_10_faq_title = get_field('block_10_faq_title');
$block_10_asq_answr = get_field('block_10_asq_answr');
?>
<main>
    <section id="p-hero">
        <div class="container">
            <h2><?=$title?></h2>
            <div class="subtitles">
                <div class="subtitles_item"><?=$subtitile_1?></div>
                <div class="subtitles_item"><?=$subtitile_2?></div>
            </div>
        </div>
    </section>
	<section class="p-form">
		<div class="container">
			<?
				if (ICL_LANGUAGE_CODE == 'pl') {
                                echo do_shortcode('[contact-form-7 id="2970" title="Cooperation form PL"]');
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo do_shortcode('[contact-form-7 id="1458" title="Cooperation form RU"]');
                            } else {
                                echo do_shortcode('[contact-form-7 id="2969" title="Cooperation form DE"]');
                            }; ?>
		</div>
	
	</section>
<!--     <section id="qoute" style="background-image: url(<?=$quote_bg?>)">
        <div class="container">
            <div class="quote-warapper">
                <?=$quote?>
            </div>
        </div>
    </section> -->
    <section id="for">
        <div class="container">
            <div class="wrapper">
                <div class="left-content">
                    <h2><?=$block_3_title?></h2>
                    <div class="points">
                        <? foreach($block_3_options as $item):?>
                        <div class="point-item"><?=$item['points']?></div>
                        <? endforeach; ?>
                    </div>
                </div>
                <div class="right-content">
                    <img src="<?=$block_3_image?>" alt="img">
                </div>
            </div>
        </div>
    </section>
    <section id="p-about">
        <div class="container">
            <div class="first-wrapper">
                <div class="l">
                    <h2><?=$block_4_titile?></h2>
                    <?=$block_4_text?>
                </div>
                <div class="r">
                    <img src="<?=$block_4_image?>" alt="">
                </div>
            </div>
            <div class="second-wrapper">
                <h2><?=$block_42_title?></h2>
                <div class="items">
                    <? foreach($block_42_infos as $item):?>
                    <div class="item">
                        <?=$item['points']?>
                    </div>
                    <? endforeach;?>
                </div>
            </div>
            <div class="third-wrapper">
                <h2><?=$block_43_title?></h2>
                <h3><?=$block_43_subtitle?></h3>
                <div class="items" style="grid-template-columns: repeat(<?=count($block_43_points)?>, 1fr)">
                    <? foreach($block_43_points as $key=>$item):?>
                    <div class="item">
                        <div class="index">0<?=$key+1?></div>
                        <?=$item['points']?>
                    </div>
                    <? endforeach;?>
                </div>
            </div>
        </div>
    </section>
    <section id="why-us">
        <div class="container">
            <h2><?=$block_5_title?></h2>
            <div class="text">
                <?=$block_5_description?>
            </div>
            <div class="items">
                <? foreach($block_5_points as $item):?>
                <div class="item">
                    <div class="item-text"><?=$item['text']?></div>
                    <img src="<?=$item['image']?>" alt="">
                </div>
                <? endforeach;?>
            </div>
        </div>
    </section>
    <section id="delivery">
        <div class="container">
            <h2>Зона доставки</h2>
            <div class="items">
                <div class="item"><img src="<?=$block_6_image_1?>" alt="">
                    <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'Lieferung';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'Склады';
                            } else {
                                echo 'Lagerräume';
                            }; ?></p>
                </div>
                <div class="item"><img src="<?=$block_6_image_2?>" alt="">
                    <p><?php if (ICL_LANGUAGE_CODE == 'pl') {
                                echo 'Lieferung';
                            } elseif (ICL_LANGUAGE_CODE == 'ru') {
                                echo 'Доставка';
                            } else {
                                echo 'Lieferung';
                            }; ?></p>
                </div>
            </div>
            <div class="map">
                <img src="<?=$block_6_image_3?>" alt="">
            </div>
        </div>
    </section>
    <section id="p-partners">
        <div class="container">
            <h2><?=$block_7_title?></h2>
            <div class="top-container">
                <p><?=$block_7_subtitle?></p>

                <div class="p-nav">
                    <div class="p-nav-button-prev"><svg width="14" height="24" viewBox="0 0 14 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.93934 10.9393C0.353553 11.5251 0.353553 12.4749 0.93934 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97918 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.93934 10.9393ZM3 10.5L2 10.5L2 13.5L3 13.5L3 10.5Z"
                                fill="#2DE24A" />
                        </svg>
                    </div>
                    <div class="p-nav-button-next">
                        <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.0607 13.0607C13.6464 12.4749 13.6464 11.5251 13.0607 10.9393L3.51473 1.39339C2.92894 0.807605 1.97919 0.807604 1.39341 1.39339C0.807619 1.97918 0.807619 2.92892 1.3934 3.51471L9.87868 12L1.39339 20.4853C0.807604 21.0711 0.807604 22.0208 1.39339 22.6066C1.97918 23.1924 2.92892 23.1924 3.51471 22.6066L13.0607 13.0607ZM11 13.5L12 13.5L12 10.5L11 10.5L11 13.5Z"
                                fill="#2DE24A" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="swiper p-partners-slider">
                <div class="swiper-wrapper">
                    <? foreach($block_7_partners as $item):?>
                    <div class="swiper-slide">
                        <img src="<?=$item?>" alt="">
                    </div>
                    <? endforeach;?>
                </div>
            </div>
        </div>
    </section>
    <section id="p-projects">
        <div class="container">
            <h2><?=$block_8_title?></h2>
            <div class="wrapper">
                <div class="p-projects-items">
                <? foreach($block_8_projects as $item):
                    $values = get_post_meta($item['project']->ID, false);
                ?>
                    <div class="p-projects-item" style="background-image: url(<?=$values["_code_portfolio_photo|code_portfolio_photo_item|0|0|value"][0]?>)">
                        <p class="title"><?=$item['project']->post_title?></p>
                        <a href="<?=get_post_permalink($item['project']->ID)?>">Смотреть подробнее</a>
                    </div>
                    
                <?endforeach;?>
                </div>
            </div>
        </div>
    </section>
    <section id="how-to-start">
        <div class="container">
            <h2><?=$block_9_title?></h2>
            <div class="wrapper-items"  style="grid-template-columns: repeat(<?=count($block_9_points)?>, 1fr)">
                <? foreach($block_9_points as $key=>$item):?>
                    <div class="start-item" >
                        <div class="index">0<?=$key+1?></div>
                        <div class="text"><?=$item['text']?></div>
                    </div>
                <? endforeach;?>
            </div>
        </div>
    </section>
    <section id="faq">
        <div class="container">
            <h2><?=$block_10_faq_title?></h2>
            <div class="wrapper">
            <ul class="collapsible" data-collapsible="accordion">
            <?foreach($block_10_asq_answr as $faq_item):?>
            <li>
                <div class="collapsible-header"><?=$faq_item['ask']?>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24 12.5H0V11.5H24V12.5Z" fill="#FFF" />
                        <path class="minus" fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.5 -4.37114e-08L12.5 24L11.5 24L11.5 0L12.5 -4.37114e-08Z" fill="#FFF" />
                    </svg>
                </div>
                <div class="collapsible-body">
                    <?=$faq_item['answr']?>
                </div>
            </li>
            <?endforeach;?>
        </ul>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>