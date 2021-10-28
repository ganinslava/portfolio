<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpecPartner</title>
    <?php wp_head(); ?>
</head>

<body>
    <?php $theme_opts     =  get_option('sp_opts'); ?>
    <header class="header" id="js_header">
        <div class="header_left">
            <a href="/" class="header_logo">
            <a href="tel: <?php if (isset($theme_opts['header_phone']) && ($theme_opts['header_phone'] != '')) echo preg_replace("/[^0-9\+]/", "", $theme_opts['header_phone']); ?>" class="header_phone_link"><?php if (isset($theme_opts['header_phone']) && ($theme_opts['header_phone'] != '')) echo $theme_opts['header_phone']; ?></a>
        </div>
        <a href="#" class="header_mobile_menu_button"></a>
        <a href="#" class="header_mobile_menu_close_button"></a>
        <div class="header_menu_wrap">
            <!-- <ul class="header_menu">
                <li class="header_menu_li"><a href="#pack" class="header_menu_link">Франчайзинговый пакет</a></li>
                <li class="header_menu_li"><a href="#calc" class="header_menu_link">Калькулятор инвестиций</a></li>
                <li class="header_menu_li"><a href="#support" class="header_menu_link">Маркетинговая поддержка</a></li>
                <li class="header_menu_li"><a href="#footer_info" class="header_menu_link">Контакты</a></li>
            </ul> -->

            <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'header_menu',
                'menu_id'        => ''
            )); ?>
        </div>
    </header>


<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-entry.php'
));
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        global $post;

        $metaboxes_data = get_post_meta($post->ID, 'entry-metaboxes', true)
        ?>
        <section class="entry" id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
        <h1 class="entry_title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo $metaboxes_data['main-title']; ?></h1>
        <p class="entry_content"><?php if (isset($metaboxes_data['main-p']) && ($metaboxes_data['main-p'] != '')) echo $metaboxes_data['main-p']; ?></p>
        <button class="entry_button"><?php if (isset($metaboxes_data['button-text']) && ($metaboxes_data['button-text'] != '')) echo $metaboxes_data['button-text']; ?></button>
        <?php
        wp_reset_postdata();
    }
}
?>
    <div class="entry_slider">
        <div class="entry_slider_arrows">
            <button class="entry_slider_arrow_left"></button>
            <button class="entry_slider_arrow_right"></button>
        </div>
        <div class="entry_slider_counter"></div>
        <div class="slider_ul_wrap">
            <div class="entry_slider_ul">
                <?php
                $query = new WP_Query(array(
                    'post_type' => 'tech-slider-example',
                    'orderby' => 'title',
                    'order' => 'ASC'
                ));
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();

                        global $post;
                        $metaboxes_data = get_post_meta($post->ID, 'tech-slider-example-metaboxes', true);
                        ?>
                        <div class="entry_slide_wrap">
                            <div class="entry_slide_inner">
                                <a href="<?php if (isset($metaboxes_data['link']) && ($metaboxes_data['link'] != '')) echo $metaboxes_data['link']; ?>"
                                   class="entry_slide_img_link" target="_blank"
                                   style="background-image: url('<?php if (isset($metaboxes_data['main-img']) && ($metaboxes_data['main-img'] != '')) echo $metaboxes_data['main-img']; ?>')"></a>
                                <h3 class="entry_slide_title"><?php if (isset($metaboxes_data['text']) && ($metaboxes_data['text'] != '')) echo $metaboxes_data['text']; ?></h3>
                            </div>
                        </div>
                    <?php endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    </section>

<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-stat.php'
));
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        global $post;

        $metaboxes_data = get_post_meta($post->ID, 'stat-metaboxes', true);
        ?>
        <section class="stat"
                 id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
            <h2 class="stat_title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo do_shortcode($metaboxes_data['main-title']); ?></span></h2>
            <ul class="stat_ul">
                <?php if (isset($metaboxes_data['1st-elem-title']) && ($metaboxes_data['1st-elem-title'] != '')) { ?>
                    <li class="stat_li">
                        <div class="stat_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['1st-elem-icon']) && ($metaboxes_data['1st-elem-icon'] != '')) echo do_shortcode($metaboxes_data['1st-elem-icon']); ?>"
                                    alt=""></div>
                        <h4 class="stat_li_title"><?php if (isset($metaboxes_data['1st-elem-title']) && ($metaboxes_data['1st-elem-title'] != '')) echo do_shortcode($metaboxes_data['1st-elem-title']); ?></h4>
                        <p class="stat_li_text"><?php if (isset($metaboxes_data['1st-elem-text']) && ($metaboxes_data['1st-elem-text'] != '')) echo $metaboxes_data['1st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['2st-elem-title']) && ($metaboxes_data['2st-elem-title'] != '')) { ?>
                    <li class="stat_li">
                        <div class="stat_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['2st-elem-icon']) && ($metaboxes_data['2st-elem-icon'] != '')) echo do_shortcode($metaboxes_data['2st-elem-icon']); ?>"
                                    alt=""></div>
                        <h4 class="stat_li_title"><?php if (isset($metaboxes_data['2st-elem-title']) && ($metaboxes_data['2st-elem-title'] != '')) echo do_shortcode($metaboxes_data['2st-elem-title']); ?></h4>
                        <p class="stat_li_text"><?php if (isset($metaboxes_data['2st-elem-text']) && ($metaboxes_data['2st-elem-text'] != '')) echo $metaboxes_data['2st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['3st-elem-title']) && ($metaboxes_data['3st-elem-title'] != '')) { ?>
                    <li class="stat_li">
                        <div class="stat_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['3st-elem-icon']) && ($metaboxes_data['3st-elem-icon'] != '')) echo do_shortcode($metaboxes_data['3st-elem-icon']); ?>"
                                    alt=""></div>
                        <h4 class="stat_li_title"><?php if (isset($metaboxes_data['3st-elem-title']) && ($metaboxes_data['3st-elem-title'] != '')) echo do_shortcode($metaboxes_data['3st-elem-title']); ?></h4>
                        <p class="stat_li_text"><?php if (isset($metaboxes_data['3st-elem-text']) && ($metaboxes_data['3st-elem-text'] != '')) echo $metaboxes_data['3st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['4st-elem-title']) && ($metaboxes_data['4st-elem-title'] != '')) { ?>
                    <li class="stat_li">
                        <div class="stat_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['4st-elem-icon']) && ($metaboxes_data['4st-elem-icon'] != '')) echo do_shortcode($metaboxes_data['4st-elem-icon']); ?>"
                                    alt=""></div>
                        <h4 class="stat_li_title"><?php if (isset($metaboxes_data['4st-elem-title']) && ($metaboxes_data['4st-elem-title'] != '')) echo do_shortcode($metaboxes_data['4st-elem-title']); ?></h4>
                        <p class="stat_li_text"><?php if (isset($metaboxes_data['4st-elem-text']) && ($metaboxes_data['4st-elem-text'] != '')) echo $metaboxes_data['4st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['5st-elem-title']) && ($metaboxes_data['5st-elem-title'] != '')) { ?>
                    <li class="stat_li">
                        <div class="stat_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['5st-elem-icon']) && ($metaboxes_data['5st-elem-icon'] != '')) echo do_shortcode($metaboxes_data['5st-elem-icon']); ?>"
                                    alt=""></div>
                        <h4 class="stat_li_title"><?php if (isset($metaboxes_data['5st-elem-title']) && ($metaboxes_data['5st-elem-title'] != '')) echo do_shortcode($metaboxes_data['5st-elem-title']); ?></h4>
                        <p class="stat_li_text"><?php if (isset($metaboxes_data['5st-elem-text']) && ($metaboxes_data['5st-elem-text'] != '')) echo $metaboxes_data['5st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['6st-elem-title']) && ($metaboxes_data['6st-elem-title'] != '')) { ?>
                    <li class="stat_li">
                        <div class="stat_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['6st-elem-icon']) && ($metaboxes_data['6st-elem-icon'] != '')) echo do_shortcode($metaboxes_data['6st-elem-icon']); ?>"
                                    alt=""></div>
                        <h4 class="stat_li_title"><?php if (isset($metaboxes_data['6st-elem-title']) && ($metaboxes_data['6st-elem-title'] != '')) echo do_shortcode($metaboxes_data['6st-elem-title']); ?></h4>
                        <p class="stat_li_text"><?php if (isset($metaboxes_data['6st-elem-text']) && ($metaboxes_data['6st-elem-text'] != '')) echo $metaboxes_data['6st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['7st-elem-title']) && ($metaboxes_data['7st-elem-title'] != '')) { ?>
                    <li class="stat_li">
                        <div class="stat_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['7st-elem-icon']) && ($metaboxes_data['7st-elem-icon'] != '')) echo do_shortcode($metaboxes_data['7st-elem-icon']); ?>"
                                    alt=""></div>
                        <h4 class="stat_li_title"><?php if (isset($metaboxes_data['7st-elem-title']) && ($metaboxes_data['7st-elem-title'] != '')) echo do_shortcode($metaboxes_data['7st-elem-title']); ?></h4>
                        <p class="stat_li_text"><?php if (isset($metaboxes_data['7st-elem-text']) && ($metaboxes_data['7st-elem-text'] != '')) echo $metaboxes_data['7st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['8st-elem-title']) && ($metaboxes_data['8st-elem-title'] != '')) { ?>
                    <li class="stat_li">
                        <div class="stat_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['8st-elem-icon']) && ($metaboxes_data['8st-elem-icon'] != '')) echo do_shortcode($metaboxes_data['8st-elem-icon']); ?>"
                                    alt=""></div>
                        <h4 class="stat_li_title"><?php if (isset($metaboxes_data['8st-elem-title']) && ($metaboxes_data['8st-elem-title'] != '')) echo do_shortcode($metaboxes_data['8st-elem-title']); ?></h4>
                        <p class="stat_li_text"><?php if (isset($metaboxes_data['8st-elem-text']) && ($metaboxes_data['8st-elem-text'] != '')) echo $metaboxes_data['8st-elem-text']; ?></p>
                    </li>
                <?php } ?>
            </ul>
        </section>
        <?php
        wp_reset_postdata();
    }
}
?>

<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-calc.php'
));
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        global $post;

        $metaboxes_data = get_post_meta($post->ID, 'calc-metaboxes', true);
        ?>
        <section class="calc" id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
        <h3 class="calc_title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo $metaboxes_data['main-title']; ?></h3>
        <div class="calc_form_wrap">
        <?php
        wp_reset_postdata();
    }
}
?>
<?php
$calc_form_shortcode = str_replace("&quot;", "'", $theme_opts['calc_form_shortcode']);
echo do_shortcode($calc_form_shortcode);
?>
    <!--
    <form action="#" method="POST" class="calc_form">
        <div class="calc_form_left">
            <div class="calc_form_range_div investments">
                <div class="calc_form_range_entry">
                    <h4>Инвестиции покупателям</h4>
                </div>
                <div>
                    <div class="calc_form_text_input_wrapper"><input type="text" placeholder="700000" class="calc_form_range_text_input calc_form_investments_text_input"></div>
                    <input type="range" step="1" value="50" min="0" max="100" class="calc_form_range_range_input calc_form_investments_range_input">
                    <div class="calc_form_range_notches">
                        <p>400 тыс.</p>
                        <p>500 тыс.</p>
                        <p>600 тыс.</p>
                        <p>700 тыс.</p>
                        <p>800 тыс.</p>
                        <p>900 тыс.</p>
                        <p>1 млн.</p>
                    </div>
                </div>
            </div>
            <div class="calc_form_range_div lumpsum">
                <div class="calc_form_range_entry">
                    <h4>Паушальный взнос</h4>
                    <p>(Однократный платеж, который передается франчайзеру за возможность организации бизнеса под его брендом)</p>
                </div>
                <div class="calc_form_text_input_wrapper"><input type="text" placeholder="55" class="calc_form_range_text_input calc_form_lumpsum_text_input"></div>
                <input type="range" step="1" value="50" min="0" max="100" class="calc_form_range_range_input calc_form_lumpsum_range_input">
                <div class="calc_form_range_notches">
                    <p>20%</p>
                    <p>30%</p>
                    <p>40%</p>
                    <p>50%</p>
                    <p>60%</p>
                    <p>70%</p>
                    <p>80%</p>
                    <p>90%</p>
                </div>
            </div>
            <div class="calc_form_range_div royalties">
                <div class="calc_form_range_entry">
                    <h4>Роялти</h4>
                    <p>(Ежемесячная компенсация франчайзеру за использование его бренда)</p>
                </div>
                <div class="calc_form_text_input_wrapper"><input type="text" placeholder="30 000" class="calc_form_range_text_input calc_form_royalties_text_input"></div>
                <input type="range" step="1" value="50" min="0" max="100" class="calc_form_range_range_input calc_form_royalties_range_input">
                <div class="calc_form_range_notches">
                    <p>10 тыс.</p>
                    <p>20 тыс.</p>
                    <p>30 тыс.</p>
                    <p>40 тыс.</p>
                    <p>50 тыс.</p>
                </div>
            </div>
        </div>
        <div class="calc_form_right">
            <p class="calc_form_right_text">Получите бесплатную консультацию по франчайзингу в вашем регионе</p>
            <input type="tel" name="tel" placeholder="Телефон">
            <input type="text" name="name" placeholder="Имя">
            <input type="submit">Получить консультацию</input>
        </div>
    </form>
    -->
    </div>
    </section>

<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-begin.php'
));
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        global $post;

        $metaboxes_data = get_post_meta($post->ID, 'begin-metaboxes', true);
        ?>
        <section class="begin"
                 id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
            <div class="begin_entry">
                <h2 class="begin_title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo do_shortcode($metaboxes_data['main-title']); ?></h2>
                <p class="begin_text"><?php if (isset($metaboxes_data['main-p']) && ($metaboxes_data['main-p'] != '')) echo $metaboxes_data['main-p']; ?></p>
            </div>
            <ul class="begin_ul">
                <?php if (isset($metaboxes_data['1st-elem-text']) && ($metaboxes_data['1st-elem-text'] != '')) { ?>
                    <li class="begin_li">
                        <div class="begin_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['1st-elem-icon']) && ($metaboxes_data['1st-elem-icon'] != '')) echo $metaboxes_data['1st-elem-icon']; ?>"
                                    alt=""></div>
                        <p class="begin_li_text"><?php if (isset($metaboxes_data['1st-elem-text']) && ($metaboxes_data['1st-elem-text'] != '')) echo $metaboxes_data['1st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['2st-elem-text']) && ($metaboxes_data['2st-elem-text'] != '')) { ?>
                    <li class="begin_li">
                        <div class="begin_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['2st-elem-icon']) && ($metaboxes_data['2st-elem-icon'] != '')) echo $metaboxes_data['2st-elem-icon']; ?>"
                                    alt=""></div>
                        <p class="begin_li_text"><?php if (isset($metaboxes_data['2st-elem-text']) && ($metaboxes_data['2st-elem-text'] != '')) echo $metaboxes_data['2st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['3st-elem-text']) && ($metaboxes_data['3st-elem-text'] != '')) { ?>
                    <li class="begin_li">
                        <div class="begin_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['3st-elem-icon']) && ($metaboxes_data['3st-elem-icon'] != '')) echo $metaboxes_data['3st-elem-icon']; ?>"
                                    alt=""></div>
                        <p class="begin_li_text"><?php if (isset($metaboxes_data['3st-elem-text']) && ($metaboxes_data['3st-elem-text'] != '')) echo $metaboxes_data['3st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['4st-elem-text']) && ($metaboxes_data['4st-elem-text'] != '')) { ?>
                    <li class="begin_li">
                        <div class="begin_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['4st-elem-icon']) && ($metaboxes_data['4st-elem-icon'] != '')) echo $metaboxes_data['4st-elem-icon']; ?>"
                                    alt=""></div>
                        <p class="begin_li_text"><?php if (isset($metaboxes_data['4st-elem-text']) && ($metaboxes_data['4st-elem-text'] != '')) echo $metaboxes_data['4st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['5st-elem-text']) && ($metaboxes_data['5st-elem-text'] != '')) { ?>
                    <li class="begin_li">
                        <div class="begin_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['5st-elem-icon']) && ($metaboxes_data['5st-elem-icon'] != '')) echo $metaboxes_data['5st-elem-icon']; ?>"
                                    alt=""></div>
                        <p class="begin_li_text"><?php if (isset($metaboxes_data['5st-elem-text']) && ($metaboxes_data['5st-elem-text'] != '')) echo $metaboxes_data['5st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['6st-elem-text']) && ($metaboxes_data['6st-elem-text'] != '')) { ?>
                    <li class="begin_li">
                        <div class="begin_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['6st-elem-icon']) && ($metaboxes_data['6st-elem-icon'] != '')) echo $metaboxes_data['6st-elem-icon']; ?>"
                                    alt=""></div>
                        <p class="begin_li_text"><?php if (isset($metaboxes_data['6st-elem-text']) && ($metaboxes_data['6st-elem-text'] != '')) echo $metaboxes_data['6st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['7st-elem-text']) && ($metaboxes_data['7st-elem-text'] != '')) { ?>
                    <li class="begin_li">
                        <div class="begin_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['7st-elem-icon']) && ($metaboxes_data['7st-elem-icon'] != '')) echo $metaboxes_data['7st-elem-icon']; ?>"
                                    alt=""></div>
                        <p class="begin_li_text"><?php if (isset($metaboxes_data['7st-elem-text']) && ($metaboxes_data['7st-elem-text'] != '')) echo $metaboxes_data['7st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['8st-elem-text']) && ($metaboxes_data['8st-elem-text'] != '')) { ?>
                    <li class="begin_li">
                        <div class="begin_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['8st-elem-icon']) && ($metaboxes_data['8st-elem-icon'] != '')) echo $metaboxes_data['8st-elem-icon']; ?>"
                                    alt=""></div>
                        <p class="begin_li_text"><?php if (isset($metaboxes_data['8st-elem-text']) && ($metaboxes_data['8st-elem-text'] != '')) echo $metaboxes_data['8st-elem-text']; ?></p>
                    </li>
                <?php } ?>
            </ul>
        </section>
        <?php
        wp_reset_postdata();
    }
}
?>

<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-franchise.php'
));
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        global $post;

        $metaboxes_data = get_post_meta($post->ID, 'franchise-metaboxes', true);
        ?>
        <section class="franchise"
                 id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
            <h3 class="franchise_title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo do_shortcode($metaboxes_data['main-title']); ?></h3>
            <div class="franchise_content">
                <div class="franchise_photo"></div>
                <div class="franchise_slider_wrapper">
                    <div class="franchise_slider">
                        <div class="franchise_slider_arrows">
                            <button class="franchise_arrow_left"></button>
                            <button class="franchise_arrow_right"></button>
                        </div>
                        <div class="franchise_slider_counter"></div>
                        <div class="franchise_slider_ul_wrapper">
                            <div class="franchise_slider_ul">
                                <?php if (isset($metaboxes_data['1st-top-slide-text']) && ($metaboxes_data['1st-top-slide-text'] != '')) { ?>
                                    <div class="franchise_slide_wrapper">
                                        <div class="franchise_slide_inner">
                                            <?php if (isset($metaboxes_data['1st-top-slide-text']) && ($metaboxes_data['1st-top-slide-text'] != '')) echo $metaboxes_data['1st-top-slide-text']; ?>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if (isset($metaboxes_data['2st-top-slide-text']) && ($metaboxes_data['2st-top-slide-text'] != '')) { ?>
                                    <div class="franchise_slide_wrapper">
                                        <div class="franchise_slide_inner">
                                            <?php if (isset($metaboxes_data['2st-top-slide-text']) && ($metaboxes_data['2st-top-slide-text'] != '')) echo $metaboxes_data['2st-top-slide-text']; ?>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if (isset($metaboxes_data['3st-top-slide-text']) && ($metaboxes_data['3st-top-slide-text'] != '')) { ?>
                                    <div class="franchise_slide_wrapper">
                                        <div class="franchise_slide_inner">
                                            <?php if (isset($metaboxes_data['3st-top-slide-text']) && ($metaboxes_data['3st-top-slide-text'] != '')) echo $metaboxes_data['3st-top-slide-text']; ?>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if (isset($metaboxes_data['4st-top-slide-text']) && ($metaboxes_data['4st-top-slide-text'] != '')) { ?>
                                    <div class="franchise_slide_wrapper">
                                        <div class="franchise_slide_inner">
                                            <?php if (isset($metaboxes_data['4st-top-slide-text']) && ($metaboxes_data['4st-top-slide-text'] != '')) echo $metaboxes_data['4st-top-slide-text']; ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="franchise_bottom_slider">
                <div class="franchise_bottom_slider_arrows">
                    <button class="franchise_bottom_left"></button>
                    <button class="franchise_bottom_right"></button>
                </div>
                <div class="franchise_bottom_slider_counter"></div>
                <div class="franchise_bottom_slider_ul_wrapper">
                    <div class="franchise_bottom_slider_ul">
                        <?php if (isset($metaboxes_data['1st-bottom-slide-title']) && ($metaboxes_data['1st-bottom-slide-title'] != '')) { ?>
                            <div class="franchise_bottom_slide_wrapper">
                                <div class="franchise_bottom_slide_inner">
                                    <h5><?php if (isset($metaboxes_data['1st-bottom-slide-title']) && ($metaboxes_data['1st-bottom-slide-title'] != '')) echo do_shortcode($metaboxes_data['1st-bottom-slide-title']); ?></h5>
                                    <p><?php if (isset($metaboxes_data['1st-bottom-slide-text']) && ($metaboxes_data['1st-bottom-slide-text'] != '')) echo $metaboxes_data['1st-bottom-slide-text']; ?></p>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if (isset($metaboxes_data['2st-bottom-slide-title']) && ($metaboxes_data['2st-bottom-slide-title'] != '')) { ?>
                            <div class="franchise_bottom_slide_wrapper">
                                <div class="franchise_bottom_slide_inner">
                                    <h5><?php if (isset($metaboxes_data['2st-bottom-slide-title']) && ($metaboxes_data['2st-bottom-slide-title'] != '')) echo do_shortcode($metaboxes_data['2st-bottom-slide-title']); ?></h5>
                                    <p><?php if (isset($metaboxes_data['2st-bottom-slide-text']) && ($metaboxes_data['2st-bottom-slide-text'] != '')) echo $metaboxes_data['2st-bottom-slide-text']; ?></p>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if (isset($metaboxes_data['3st-bottom-slide-title']) && ($metaboxes_data['3st-bottom-slide-title'] != '')) { ?>
                            <div class="franchise_bottom_slide_wrapper">
                                <div class="franchise_bottom_slide_inner">
                                    <h5><?php if (isset($metaboxes_data['3st-bottom-slide-title']) && ($metaboxes_data['3st-bottom-slide-title'] != '')) echo do_shortcode($metaboxes_data['3st-bottom-slide-title']); ?></h5>
                                    <p><?php if (isset($metaboxes_data['3st-bottom-slide-text']) && ($metaboxes_data['3st-bottom-slide-text'] != '')) echo $metaboxes_data['3st-bottom-slide-text']; ?></p>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if (isset($metaboxes_data['4st-bottom-slide-title']) && ($metaboxes_data['4st-bottom-slide-title'] != '')) { ?>
                            <div class="franchise_bottom_slide_wrapper">
                                <div class="franchise_bottom_slide_inner">
                                    <h5><?php if (isset($metaboxes_data['4st-bottom-slide-title']) && ($metaboxes_data['4st-bottom-slide-title'] != '')) echo do_shortcode($metaboxes_data['4st-bottom-slide-title']); ?></h5>
                                    <p><?php if (isset($metaboxes_data['4st-bottom-slide-text']) && ($metaboxes_data['4st-bottom-slide-text'] != '')) echo $metaboxes_data['4st-bottom-slide-text']; ?></p>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if (isset($metaboxes_data['5st-bottom-slide-title']) && ($metaboxes_data['5st-bottom-slide-title'] != '')) { ?>
                            <div class="franchise_bottom_slide_wrapper">
                                <div class="franchise_bottom_slide_inner">
                                    <h5><?php if (isset($metaboxes_data['5st-bottom-slide-title']) && ($metaboxes_data['5st-bottom-slide-title'] != '')) echo do_shortcode($metaboxes_data['5st-bottom-slide-title']); ?></h5>
                                    <p><?php if (isset($metaboxes_data['5st-bottom-slide-text']) && ($metaboxes_data['5st-bottom-slide-text'] != '')) echo $metaboxes_data['5st-bottom-slide-text']; ?></p>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if (isset($metaboxes_data['6st-bottom-slide-title']) && ($metaboxes_data['6st-bottom-slide-title'] != '')) { ?>
                            <div class="franchise_bottom_slide_wrapper">
                                <div class="franchise_bottom_slide_inner">
                                    <h5><?php if (isset($metaboxes_data['6st-bottom-slide-title']) && ($metaboxes_data['6st-bottom-slide-title'] != '')) echo do_shortcode($metaboxes_data['6st-bottom-slide-title']); ?></h5>
                                    <p><?php if (isset($metaboxes_data['6st-bottom-slide-text']) && ($metaboxes_data['6st-bottom-slide-text'] != '')) echo $metaboxes_data['6st-bottom-slide-text']; ?></p>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if (isset($metaboxes_data['7st-bottom-slide-title']) && ($metaboxes_data['7st-bottom-slide-title'] != '')) { ?>
                            <div class="franchise_bottom_slide_wrapper">
                                <div class="franchise_bottom_slide_inner">
                                    <h5><?php if (isset($metaboxes_data['7st-bottom-slide-title']) && ($metaboxes_data['7st-bottom-slide-title'] != '')) echo do_shortcode($metaboxes_data['7st-bottom-slide-title']); ?></h5>
                                    <p><?php if (isset($metaboxes_data['7st-bottom-slide-text']) && ($metaboxes_data['7st-bottom-slide-text'] != '')) echo $metaboxes_data['7st-bottom-slide-text']; ?></p>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if (isset($metaboxes_data['8st-bottom-slide-title']) && ($metaboxes_data['8st-bottom-slide-title'] != '')) { ?>
                            <div class="franchise_bottom_slide_wrapper">
                                <div class="franchise_bottom_slide_inner">
                                    <h5><?php if (isset($metaboxes_data['8st-bottom-slide-title']) && ($metaboxes_data['8st-bottom-slide-title'] != '')) echo do_shortcode($metaboxes_data['8st-bottom-slide-title']); ?></h5>
                                    <p><?php if (isset($metaboxes_data['8st-bottom-slide-text']) && ($metaboxes_data['8st-bottom-slide-text'] != '')) echo $metaboxes_data['8st-bottom-slide-text']; ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
        wp_reset_postdata();
    }
}
?>

<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-projects.php'
));
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        global $post;

        $metaboxes_data = get_post_meta($post->ID, 'projects-metaboxes', true);
        ?>
        <section class="projects"
                 id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
            <h3 class="projects_title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo do_shortcode($metaboxes_data['main-title']); ?></h3>
            <div class="projects_slider">
                <div class="projects_slider_arrows">
                    <button class="projects_slider_left"></button>
                    <button class="projects_slider_right"></button>
                </div>
                <div class="projects_slider_counter"></div>
                <div class="projects_slider_ul_wrapper">
                    <div class="projects_slider_ul">
                        <?php if ((isset($metaboxes_data['1st-slide-mp4']) && ($metaboxes_data['1st-slide-mp4'] != '')) || (isset($metaboxes_data['1st-slide-webm']) && ($metaboxes_data['1st-slide-webm'] != ''))) { ?>
                            <div class="projects_slide_wrap" meta-number="0">
                                <div class="projects_slide_inner">
                                    <div class="projects_slide_thumbnail"
                                         style="background: url('<?php if (isset($metaboxes_data['1st-slide-poster']) && ($metaboxes_data['1st-slide-poster'] != '')) echo $metaboxes_data['1st-slide-poster']; ?>'); background-size: cover;">
                                        <button class="projects_slide_play_btn"></button>
                                    </div>
                                    <div class="projects_slide_li_city"><?php if (isset($metaboxes_data['1st-slide-city']) && ($metaboxes_data['1st-slide-city'] != '')) echo $metaboxes_data['1st-slide-city']; ?></div>
                                    <div class="projects_slide_li_bottom">
                                        <?php if (isset($metaboxes_data['1st-slide-link']) && ($metaboxes_data['1st-slide-link'] != '')) { ?>

                                            <a href="<?php echo $metaboxes_data['1st-slide-link']; ?>"
                                               class="projects_li_bottom_link"><?php if (isset($metaboxes_data['1st-slide-link-text']) && ($metaboxes_data['1st-slide-link-text'] != '')) echo $metaboxes_data['1st-slide-link-text']; ?></a>
                                        <?php } else { ?>
                                            <?php if (isset($metaboxes_data['1st-slide-link-text']) && ($metaboxes_data['1st-slide-link-text'] != '')) echo $metaboxes_data['1st-slide-link-text']; ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ((isset($metaboxes_data['2st-slide-mp4']) && ($metaboxes_data['2st-slide-mp4'] != '')) || (isset($metaboxes_data['2st-slide-webm']) && ($metaboxes_data['2st-slide-webm'] != ''))) { ?>
                            <div class="projects_slide_wrap" meta-number="1">
                                <div class="projects_slide_inner">
                                    <div class="projects_slide_thumbnail"
                                         style="background: url('<?php if (isset($metaboxes_data['2st-slide-poster']) && ($metaboxes_data['2st-slide-poster'] != '')) echo $metaboxes_data['2st-slide-poster']; ?>'); background-size: cover;">
                                        <button class="projects_slide_play_btn"></button>
                                    </div>
                                    <div class="projects_slide_li_city"><?php if (isset($metaboxes_data['2st-slide-city']) && ($metaboxes_data['2st-slide-city'] != '')) echo $metaboxes_data['2st-slide-city']; ?></div>
                                    <div class="projects_slide_li_bottom">
                                        <?php if (isset($metaboxes_data['2st-slide-link']) && ($metaboxes_data['2st-slide-link'] != '')) { ?>

                                            <a href="<?php echo $metaboxes_data['2st-slide-link']; ?>"
                                               class="projects_li_bottom_link"><?php if (isset($metaboxes_data['2st-slide-link-text']) && ($metaboxes_data['2st-slide-link-text'] != '')) echo $metaboxes_data['2st-slide-link-text']; ?></a>
                                        <?php } else { ?>
                                            <?php if (isset($metaboxes_data['2st-slide-link-text']) && ($metaboxes_data['2st-slide-link-text'] != '')) echo $metaboxes_data['2st-slide-link-text']; ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ((isset($metaboxes_data['3st-slide-mp4']) && ($metaboxes_data['3st-slide-mp4'] != '')) || (isset($metaboxes_data['3st-slide-webm']) && ($metaboxes_data['3st-slide-webm'] != ''))) { ?>
                            <div class="projects_slide_wrap" meta-number="2">
                                <div class="projects_slide_inner">
                                    <div class="projects_slide_thumbnail"
                                         style="background: url('<?php if (isset($metaboxes_data['3st-slide-poster']) && ($metaboxes_data['3st-slide-poster'] != '')) echo $metaboxes_data['3st-slide-poster']; ?>'); background-size: cover;">
                                        <button class="projects_slide_play_btn"></button>
                                    </div>
                                    <div class="projects_slide_li_city"><?php if (isset($metaboxes_data['3st-slide-city']) && ($metaboxes_data['3st-slide-city'] != '')) echo $metaboxes_data['3st-slide-city']; ?></div>
                                    <div class="projects_slide_li_bottom">
                                        <?php if (isset($metaboxes_data['3st-slide-link']) && ($metaboxes_data['3st-slide-link'] != '')) { ?>

                                            <a href="<?php echo $metaboxes_data['3st-slide-link']; ?>"
                                               class="projects_li_bottom_link"><?php if (isset($metaboxes_data['3st-slide-link-text']) && ($metaboxes_data['3st-slide-link-text'] != '')) echo $metaboxes_data['3st-slide-link-text']; ?></a>
                                        <?php } else { ?>
                                            <?php if (isset($metaboxes_data['3st-slide-link-text']) && ($metaboxes_data['3st-slide-link-text'] != '')) echo $metaboxes_data['3st-slide-link-text']; ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ((isset($metaboxes_data['4st-slide-mp4']) && ($metaboxes_data['4st-slide-mp4'] != '')) || (isset($metaboxes_data['4st-slide-webm']) && ($metaboxes_data['4st-slide-webm'] != ''))) { ?>
                            <div class="projects_slide_wrap" meta-number="3">
                                <div class="projects_slide_inner">
                                    <div class="projects_slide_thumbnail"
                                         style="background: url('<?php if (isset($metaboxes_data['4st-slide-poster']) && ($metaboxes_data['4st-slide-poster'] != '')) echo $metaboxes_data['4st-slide-poster']; ?>'); background-size: cover;">
                                        <button class="projects_slide_play_btn"></button>
                                    </div>
                                    <div class="projects_slide_li_city"><?php if (isset($metaboxes_data['4st-slide-city']) && ($metaboxes_data['4st-slide-city'] != '')) echo $metaboxes_data['4st-slide-city']; ?></div>
                                    <div class="projects_slide_li_bottom">
                                        <?php if (isset($metaboxes_data['4st-slide-link']) && ($metaboxes_data['4st-slide-link'] != '')) { ?>

                                            <a href="<?php echo $metaboxes_data['4st-slide-link']; ?>"
                                               class="projects_li_bottom_link"><?php if (isset($metaboxes_data['4st-slide-link-text']) && ($metaboxes_data['4st-slide-link-text'] != '')) echo $metaboxes_data['4st-slide-link-text']; ?></a>
                                        <?php } else { ?>
                                            <?php if (isset($metaboxes_data['4st-slide-link-text']) && ($metaboxes_data['4st-slide-link-text'] != '')) echo $metaboxes_data['4st-slide-link-text']; ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ((isset($metaboxes_data['5st-slide-mp4']) && ($metaboxes_data['5st-slide-mp4'] != '')) || (isset($metaboxes_data['5st-slide-webm']) && ($metaboxes_data['5st-slide-webm'] != ''))) { ?>
                            <div class="projects_slide_wrap" meta-number="4">
                                <div class="projects_slide_inner">
                                    <div class="projects_slide_thumbnail"
                                         style="background: url('<?php if (isset($metaboxes_data['5st-slide-poster']) && ($metaboxes_data['5st-slide-poster'] != '')) echo $metaboxes_data['5st-slide-poster']; ?>'); background-size: cover;">
                                        <button class="projects_slide_play_btn"></button>
                                    </div>
                                    <div class="projects_slide_li_city"><?php if (isset($metaboxes_data['5st-slide-city']) && ($metaboxes_data['5st-slide-city'] != '')) echo $metaboxes_data['5st-slide-city']; ?></div>
                                    <div class="projects_slide_li_bottom">
                                        <?php if (isset($metaboxes_data['5st-slide-link']) && ($metaboxes_data['5st-slide-link'] != '')) { ?>

                                            <a href="<?php echo $metaboxes_data['5st-slide-link']; ?>"
                                               class="projects_li_bottom_link"><?php if (isset($metaboxes_data['5st-slide-link-text']) && ($metaboxes_data['5st-slide-link-text'] != '')) echo $metaboxes_data['5st-slide-link-text']; ?></a>
                                        <?php } else { ?>
                                            <?php if (isset($metaboxes_data['5st-slide-link-text']) && ($metaboxes_data['5st-slide-link-text'] != '')) echo $metaboxes_data['5st-slide-link-text']; ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="projects_video_slider_wrapper">
                <div class="projects_video_slider">
                    <div class="projects_video_slider_ul_wrapper">
                        <button class="close_projects_video"></button>
                        <div class="projects_video_slider_arrows">
                            <button class="projects_video_slider_left"></button>
                            <button class="projects_video_slider_right"></button>
                        </div>
                        <div class="projects_video_slider_counter" style="display: none;">1/5</div>
                        <div class="projects_video_slider_ul">
                            <?php if ((isset($metaboxes_data['1st-slide-mp4']) && ($metaboxes_data['1st-slide-mp4'] != '')) || (isset($metaboxes_data['1st-slide-webm']) && ($metaboxes_data['1st-slide-webm'] != ''))) { ?>
                                <div class="projects_video_slide_wrap" meta-number="0">
                                    <div class="projects_video_slide">
                                        <div class="player">
                                            <video controls class="projects_li_video">
                                                <source src="<?php if (isset($metaboxes_data['1st-slide-mp4']) && ($metaboxes_data['1st-slide-mp4'] != '')) echo $metaboxes_data['1st-slide-mp4']; ?>"
                                                        type="video/mp4">
                                                <source src="<?php if (isset($metaboxes_data['1st-slide-webm']) && ($metaboxes_data['1st-slide-webm'] != '')) echo $metaboxes_data['1st-slide-webm']; ?>"
                                                        type="video/webm">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if ((isset($metaboxes_data['2st-slide-mp4']) && ($metaboxes_data['2st-slide-mp4'] != '')) || (isset($metaboxes_data['2st-slide-webm']) && ($metaboxes_data['2st-slide-webm'] != ''))) { ?>
                                <div class="projects_video_slide_wrap" meta-number="1">
                                    <div class="projects_video_slide">
                                        <div class="player">
                                            <video controls class="projects_li_video">
                                                <source src="<?php if (isset($metaboxes_data['2st-slide-mp4']) && ($metaboxes_data['2st-slide-mp4'] != '')) echo $metaboxes_data['2st-slide-mp4']; ?>"
                                                        type="video/mp4">
                                                <source src="<?php if (isset($metaboxes_data['2st-slide-webm']) && ($metaboxes_data['2st-slide-webm'] != '')) echo $metaboxes_data['2st-slide-webm']; ?>"
                                                        type="video/webm">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if ((isset($metaboxes_data['3st-slide-mp4']) && ($metaboxes_data['3st-slide-mp4'] != '')) || (isset($metaboxes_data['3st-slide-webm']) && ($metaboxes_data['3st-slide-webm'] != ''))) { ?>
                                <div class="projects_video_slide_wrap" meta-number="2">
                                    <div class="projects_video_slide">
                                        <div class="player">
                                            <video controls class="projects_li_video">
                                                <source src="<?php if (isset($metaboxes_data['3st-slide-mp4']) && ($metaboxes_data['3st-slide-mp4'] != '')) echo $metaboxes_data['3st-slide-mp4']; ?>"
                                                        type="video/mp4">
                                                <source src="<?php if (isset($metaboxes_data['3st-slide-webm']) && ($metaboxes_data['3st-slide-webm'] != '')) echo $metaboxes_data['3st-slide-webm']; ?>"
                                                        type="video/webm">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if ((isset($metaboxes_data['4st-slide-mp4']) && ($metaboxes_data['4st-slide-mp4'] != '')) || (isset($metaboxes_data['4st-slide-webm']) && ($metaboxes_data['4st-slide-webm'] != ''))) { ?>
                                <div class="projects_video_slide_wrap" meta-number="3">
                                    <div class="projects_video_slide">
                                        <div class="player">
                                            <video controls class="projects_li_video">
                                                <source src="<?php if (isset($metaboxes_data['4st-slide-mp4']) && ($metaboxes_data['4st-slide-mp4'] != '')) echo $metaboxes_data['4st-slide-mp4']; ?>"
                                                        type="video/mp4">
                                                <source src="<?php if (isset($metaboxes_data['4st-slide-webm']) && ($metaboxes_data['4st-slide-webm'] != '')) echo $metaboxes_data['4st-slide-webm']; ?>"
                                                        type="video/webm">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if ((isset($metaboxes_data['5st-slide-mp4']) && ($metaboxes_data['5st-slide-mp4'] != '')) || (isset($metaboxes_data['5st-slide-webm']) && ($metaboxes_data['5st-slide-webm'] != ''))) { ?>
                                <div class="projects_video_slide_wrap" meta-number="4">
                                    <div class="projects_video_slide">
                                        <div class="player">
                                            <video controls class="projects_li_video">
                                                <source src="<?php if (isset($metaboxes_data['5st-slide-mp4']) && ($metaboxes_data['5st-slide-mp4'] != '')) echo $metaboxes_data['5st-slide-mp4']; ?>"
                                                        type="video/mp4">
                                                <source src="<?php if (isset($metaboxes_data['5st-slide-webm']) && ($metaboxes_data['5st-slide-webm'] != '')) echo $metaboxes_data['5st-slide-webm']; ?>"
                                                        type="video/webm">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        wp_reset_postdata();
    }
}
?>

<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-presence.php'
));
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        global $post;

        $metaboxes_data = get_post_meta($post->ID, 'presence-metaboxes', true);
        ?>
        <section class="presence"
                 id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
            <h2 class="presence_title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo do_shortcode($metaboxes_data['main-title']); ?></h2>
            <div class="presence_right">
                <ul class="presence_top"><?php if (isset($metaboxes_data['cities-top']) && ($metaboxes_data['cities-top'] != '')) echo do_shortcode($metaboxes_data['cities-top']); ?></ul>
                <ul class="presence_bottom"><?php if (isset($metaboxes_data['cities-bottom']) && ($metaboxes_data['cities-bottom'] != '')) echo do_shortcode($metaboxes_data['cities-bottom']); ?></ul>
            </div>
            <div class="presence_left_angle"></div>
        </section>
        <?php
        wp_reset_postdata();
    }
}
?>

<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-pack.php'
));
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        global $post;

        $metaboxes_data = get_post_meta($post->ID, 'pack-metaboxes', true);
        ?>
        <section class="pack"
                 id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
            <div class="pack_top">
                <h2 class="pack_title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo do_shortcode($metaboxes_data['main-title']); ?></h2>
                <p class="pack_p_right_text"><?php if (isset($metaboxes_data['main-p']) && ($metaboxes_data['main-p'] != '')) echo $metaboxes_data['main-p']; ?></p>
            </div>
            <div class="pack_additional_text"><?php if (isset($metaboxes_data['additional-p']) && ($metaboxes_data['additional-p'] != '')) echo $metaboxes_data['additional-p']; ?></div>
            <div class="pack_mobile_photo"></div>
            <div class="pack_bottom">
                <div class="pack_left">
                    <div class="pack_slider">
                        <div class="pack_slider_arrows">
                            <button class="pack_slider_left"></button>
                            <button class="pack_slider_right"></button>
                        </div>
                        <div class="pack_slider_counter"></div>
                        <div class="pack_slider_ul_wrapper">
                            <div class="pack_slider_ul">
                                <?php if (isset($metaboxes_data['1st-slide-content']) && ($metaboxes_data['1st-slide-content'] != '')) { ?>
                                    <div class="pack_slide_wrapper">
                                        <div class="pack_slide_inner"><?php if (isset($metaboxes_data['1st-slide-content']) && ($metaboxes_data['1st-slide-content'] != '')) echo $metaboxes_data['1st-slide-content']; ?></div>
                                    </div>
                                <?php } ?>

                                <?php if (isset($metaboxes_data['2st-slide-content']) && ($metaboxes_data['2st-slide-content'] != '')) { ?>
                                    <div class="pack_slide_wrapper">
                                        <div class="pack_slide_inner"><?php if (isset($metaboxes_data['2st-slide-content']) && ($metaboxes_data['2st-slide-content'] != '')) echo $metaboxes_data['2st-slide-content']; ?></div>
                                    </div>
                                <?php } ?>

                                <?php if (isset($metaboxes_data['3st-slide-content']) && ($metaboxes_data['3st-slide-content'] != '')) { ?>
                                    <div class="pack_slide_wrapper">
                                        <div class="pack_slide_inner"><?php if (isset($metaboxes_data['3st-slide-content']) && ($metaboxes_data['3st-slide-content'] != '')) echo $metaboxes_data['3st-slide-content']; ?></div>
                                    </div>
                                <?php } ?>

                                <?php if (isset($metaboxes_data['4st-slide-content']) && ($metaboxes_data['4st-slide-content'] != '')) { ?>
                                    <div class="pack_slide_wrapper">
                                        <div class="pack_slide_inner"><?php if (isset($metaboxes_data['4st-slide-content']) && ($metaboxes_data['4st-slide-content'] != '')) echo $metaboxes_data['4st-slide-content']; ?></div>
                                    </div>
                                <?php } ?>

                                <?php if (isset($metaboxes_data['5st-slide-content']) && ($metaboxes_data['5st-slide-content'] != '')) { ?>
                                    <div class="pack_slide_wrapper">
                                        <div class="pack_slide_inner"><?php if (isset($metaboxes_data['5st-slide-content']) && ($metaboxes_data['5st-slide-content'] != '')) echo $metaboxes_data['5st-slide-content']; ?></div>
                                    </div>
                                <?php } ?>

                                <?php if (isset($metaboxes_data['6st-slide-content']) && ($metaboxes_data['6st-slide-content'] != '')) { ?>
                                    <div class="pack_slide_wrapper">
                                        <div class="pack_slide_inner"><?php if (isset($metaboxes_data['6st-slide-content']) && ($metaboxes_data['6st-slide-content'] != '')) echo $metaboxes_data['6st-slide-content']; ?></div>
                                    </div>
                                <?php } ?>

                                <?php if (isset($metaboxes_data['7st-slide-content']) && ($metaboxes_data['7st-slide-content'] != '')) { ?>
                                    <div class="pack_slide_wrapper">
                                        <div class="pack_slide_inner"><?php if (isset($metaboxes_data['7st-slide-content']) && ($metaboxes_data['7st-slide-content'] != '')) echo $metaboxes_data['7st-slide-content']; ?></div>
                                    </div>
                                <?php } ?>

                                <?php if (isset($metaboxes_data['8st-slide-content']) && ($metaboxes_data['8st-slide-content'] != '')) { ?>
                                    <div class="pack_slide_wrapper">
                                        <div class="pack_slide_inner"><?php if (isset($metaboxes_data['8st-slide-content']) && ($metaboxes_data['8st-slide-content'] != '')) echo $metaboxes_data['8st-slide-content']; ?></div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pack_photo"></div>
            </div>
        </section>
        <?php
        wp_reset_postdata();
    }
}
?>

<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-rent.php'
));
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        global $post;

        $metaboxes_data = get_post_meta($post->ID, 'rent-metaboxes', true);
        ?>
        <section class="rent"
                 id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
            <h3 class="rent_title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo do_shortcode($metaboxes_data['main-title']); ?></h3>
            <div class="rent_inner">
                <ul class="rent_ul">
                    <?php if (isset($metaboxes_data['1st-elem-title']) && ($metaboxes_data['1st-elem-title'] != '')) { ?>
                        <li class="rent_li">
                            <div class="rent_icon"><img
                                        src="<?php if (isset($metaboxes_data['1st-elem-icon']) && ($metaboxes_data['1st-elem-icon'] != '')) echo $metaboxes_data['1st-elem-icon']; ?>"
                                        alt=""></div>
                            <h4><?php if (isset($metaboxes_data['1st-elem-title']) && ($metaboxes_data['1st-elem-title'] != '')) echo $metaboxes_data['1st-elem-title']; ?></h4>
                            <p><?php if (isset($metaboxes_data['1st-elem-text']) && ($metaboxes_data['1st-elem-text'] != '')) echo $metaboxes_data['1st-elem-text']; ?></p>
                        </li>
                    <?php } ?>

                    <?php if (isset($metaboxes_data['2st-elem-title']) && ($metaboxes_data['2st-elem-title'] != '')) { ?>
                        <li class="rent_li">
                            <div class="rent_icon"><img
                                        src="<?php if (isset($metaboxes_data['2st-elem-icon']) && ($metaboxes_data['2st-elem-icon'] != '')) echo $metaboxes_data['2st-elem-icon']; ?>"
                                        alt=""></div>
                            <h4><?php if (isset($metaboxes_data['2st-elem-title']) && ($metaboxes_data['2st-elem-title'] != '')) echo $metaboxes_data['2st-elem-title']; ?></h4>
                            <p><?php if (isset($metaboxes_data['2st-elem-text']) && ($metaboxes_data['2st-elem-text'] != '')) echo $metaboxes_data['2st-elem-text']; ?></p>
                        </li>
                    <?php } ?>

                    <?php if (isset($metaboxes_data['3st-elem-title']) && ($metaboxes_data['3st-elem-title'] != '')) { ?>
                        <li class="rent_li">
                            <div class="rent_icon"><img
                                        src="<?php if (isset($metaboxes_data['3st-elem-icon']) && ($metaboxes_data['3st-elem-icon'] != '')) echo $metaboxes_data['3st-elem-icon']; ?>"
                                        alt=""></div>
                            <h4><?php if (isset($metaboxes_data['3st-elem-title']) && ($metaboxes_data['3st-elem-title'] != '')) echo $metaboxes_data['3st-elem-title']; ?></h4>
                            <p><?php if (isset($metaboxes_data['3st-elem-text']) && ($metaboxes_data['3st-elem-text'] != '')) echo $metaboxes_data['3st-elem-text']; ?></p>
                        </li>
                    <?php } ?>

                    <?php if (isset($metaboxes_data['4st-elem-title']) && ($metaboxes_data['4st-elem-title'] != '')) { ?>
                        <li class="rent_li">
                            <div class="rent_icon"><img
                                        src="<?php if (isset($metaboxes_data['4st-elem-icon']) && ($metaboxes_data['4st-elem-icon'] != '')) echo $metaboxes_data['4st-elem-icon']; ?>"
                                        alt=""></div>
                            <h4><?php if (isset($metaboxes_data['4st-elem-title']) && ($metaboxes_data['4st-elem-title'] != '')) echo $metaboxes_data['4st-elem-title']; ?></h4>
                            <p><?php if (isset($metaboxes_data['4st-elem-text']) && ($metaboxes_data['4st-elem-text'] != '')) echo $metaboxes_data['4st-elem-text']; ?></p>
                        </li>
                    <?php } ?>

                    <?php if (isset($metaboxes_data['5st-elem-title']) && ($metaboxes_data['5st-elem-title'] != '')) { ?>
                        <li class="rent_li">
                            <div class="rent_icon"><img
                                        src="<?php if (isset($metaboxes_data['5st-elem-icon']) && ($metaboxes_data['5st-elem-icon'] != '')) echo $metaboxes_data['5st-elem-icon']; ?>"
                                        alt=""></div>
                            <h4><?php if (isset($metaboxes_data['5st-elem-title']) && ($metaboxes_data['5st-elem-title'] != '')) echo $metaboxes_data['5st-elem-title']; ?></h4>
                            <p><?php if (isset($metaboxes_data['5st-elem-text']) && ($metaboxes_data['5st-elem-text'] != '')) echo $metaboxes_data['5st-elem-text']; ?></p>
                        </li>
                    <?php } ?>

                    <?php if (isset($metaboxes_data['6st-elem-title']) && ($metaboxes_data['6st-elem-title'] != '')) { ?>
                        <li class="rent_li">
                            <div class="rent_icon"><img
                                        src="<?php if (isset($metaboxes_data['6st-elem-icon']) && ($metaboxes_data['6st-elem-icon'] != '')) echo $metaboxes_data['6st-elem-icon']; ?>"
                                        alt=""></div>
                            <h4><?php if (isset($metaboxes_data['6st-elem-title']) && ($metaboxes_data['6st-elem-title'] != '')) echo $metaboxes_data['6st-elem-title']; ?></h4>
                            <p><?php if (isset($metaboxes_data['6st-elem-text']) && ($metaboxes_data['6st-elem-text'] != '')) echo $metaboxes_data['6st-elem-text']; ?></p>
                        </li>
                    <?php } ?>

                    <?php if (isset($metaboxes_data['7st-elem-title']) && ($metaboxes_data['7st-elem-title'] != '')) { ?>
                        <li class="rent_li">
                            <div class="rent_icon"><img
                                        src="<?php if (isset($metaboxes_data['7st-elem-icon']) && ($metaboxes_data['7st-elem-icon'] != '')) echo $metaboxes_data['7st-elem-icon']; ?>"
                                        alt=""></div>
                            <h4><?php if (isset($metaboxes_data['7st-elem-title']) && ($metaboxes_data['7st-elem-title'] != '')) echo $metaboxes_data['7st-elem-title']; ?></h4>
                            <p><?php if (isset($metaboxes_data['7st-elem-text']) && ($metaboxes_data['7st-elem-text'] != '')) echo $metaboxes_data['7st-elem-text']; ?></p>
                        </li>
                    <?php } ?>

                    <?php if (isset($metaboxes_data['8st-elem-title']) && ($metaboxes_data['8st-elem-title'] != '')) { ?>
                        <li class="rent_li">
                            <div class="rent_icon"><img
                                        src="<?php if (isset($metaboxes_data['8st-elem-icon']) && ($metaboxes_data['8st-elem-icon'] != '')) echo $metaboxes_data['8st-elem-icon']; ?>"
                                        alt=""></div>
                            <h4><?php if (isset($metaboxes_data['8st-elem-title']) && ($metaboxes_data['8st-elem-title'] != '')) echo $metaboxes_data['8st-elem-title']; ?></h4>
                            <p><?php if (isset($metaboxes_data['8st-elem-text']) && ($metaboxes_data['8st-elem-text'] != '')) echo $metaboxes_data['8st-elem-text']; ?></p>
                        </li>
                    <?php } ?>
                </ul>
                <div class="rent_photo"></div>
            </div>
        </section>
        <?php
        wp_reset_postdata();
    }
}
?>

<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-feedback.php'
));
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        global $post;

        $metaboxes_data = get_post_meta($post->ID, 'feedback-metaboxes', true);
        ?>
        <section class="feedback" id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
        <h3 class="feedback_title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo do_shortcode($metaboxes_data['main-title']); ?></h3>
        <?php
        wp_reset_postdata();
    }
}
?>
    <div class="feedback_slider">
        <div class="feedback_slider_arrows">
            <button class="feedback_arrow_left"></button>
            <button class="feedback_arrow_right"></button>
        </div>
        <div class="feedback_slider_counter"></div>
        <div class="feedback_slider_ul_wrapper">
            <div class="feedback_slider_ul">
                <?php
                $query = new WP_Query(array(
                    'post_type' => 'youtube-feedback',
                    'orderby' => 'title',
                    'order' => 'ASC'
                ));
                $counter = 0;
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();

                        global $post;
                        $metaboxes_data = get_post_meta($post->ID, 'youtube-feedback-metaboxes', true);
                        ?>
                        <div class="feedback_slide_wrap">
                            <div class="feedback_slide_inner" meta-number="<?php print_r($counter); ?>"><img
                                        src="https://img.youtube.com/vi/<?php echo str_replace("https://www.youtube.com/embed/", "", $metaboxes_data['link']); ?>/mqdefault.jpg"
                                        alt=""></div>
                        </div>
                        <?php $counter++; ?>

                    <?php endwhile;
                endif;
                wp_reset_postdata(); ?>
                <!-- <div class="feedback_slide_wrap">
                    <div class="feedback_slide_inner" meta-number="0"><img src="https://img.youtube.com/vi/1sq2Fqi5LwA/mqdefault.jpg" alt=""></div>
                </div>
                <div class="feedback_slide_wrap">
                    <div class="feedback_slide_inner" meta-number="1"><img src="https://img.youtube.com/vi/-EATjjZlIHA/mqdefault.jpg" alt=""></div>
                </div>
                <div class="feedback_slide_wrap">
                    <div class="feedback_slide_inner" meta-number="2"><img src="https://img.youtube.com/vi/2fh77zHuC5k/mqdefault.jpg" alt=""></div>
                </div>
                <div class="feedback_slide_wrap">
                    <div class="feedback_slide_inner" meta-number="3"><img src="https://img.youtube.com/vi/9V2VwUrtVnA/mqdefault.jpg" alt=""></div>
                </div>
                <div class="feedback_slide_wrap">
                    <div class="feedback_slide_inner" meta-number="4"><img src="https://img.youtube.com/vi/gIA0Mkk7wik/mqdefault.jpg" alt=""></div>
                </div> -->
            </div>
        </div>

        <?php
        $query = new WP_Query(array(
            'post_type' => 'page',
            'meta_key' => '_wp_page_template',
            'meta_value' => 'page-feedback.php'
        ));
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();

                global $post;

                $metaboxes_data = get_post_meta($post->ID, 'feedback-metaboxes', true);
                ?>
                <div class="feedback_slider_link"><a
                            href="<?php if (isset($metaboxes_data['link-url']) && ($metaboxes_data['link-url'] != '')) echo $metaboxes_data['link-url']; ?>"
                            target="_blank"><?php if (isset($metaboxes_data['link-text']) && ($metaboxes_data['link-text'] != '')) echo $metaboxes_data['link-text']; ?></a>
                </div>
                <?php
                wp_reset_postdata();
            }
        }
        ?>
    </div>
    <div class="feedback_video_slider">
        <div class="feedback_video_slider_arrows">
            <button class="feedback_video_arrow_left"></button>
            <button class="feedback_video_arrow_right"></button>
        </div>
        <button class="close_feedback_video"></button>
        <div class="feedback_video_slider_counter"></div>
        <div class="feedback_video_slider_ul_wrapper">
            <div class="feedback_video_slider_ul">
                <?php
                $query = new WP_Query(array(
                    'post_type' => 'youtube-feedback',
                    'orderby' => 'title',
                    'order' => 'ASC'
                ));
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();

                        global $post;
                        $metaboxes_data = get_post_meta($post->ID, 'youtube-feedback-metaboxes', true);
                        ?>
                        <div class="feedback_video_slide_wrap">
                            <div class="feedback_video_slide_inner">
                                <iframe width="100%" height="100%"
                                        src="<?php if (isset($metaboxes_data['link']) && ($metaboxes_data['link'] != '')) echo $metaboxes_data['link']; ?>"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                        </div>

                    <?php endwhile;
                endif;
                wp_reset_postdata(); ?>
                <!-- <div class="feedback_video_slide_wrap">
                    <div class="feedback_video_slide_inner"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/-EATjjZlIHA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
                <div class="feedback_video_slide_wrap">
                    <div class="feedback_video_slide_inner"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/2fh77zHuC5k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
                <div class="feedback_video_slide_wrap">
                    <div class="feedback_video_slide_inner"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/9V2VwUrtVnA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
                <div class="feedback_video_slide_wrap">
                    <div class="feedback_video_slide_inner"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/gIA0Mkk7wik" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div> -->
            </div>
        </div>
    </div>
    </section>

<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-support.php'
));
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        global $post;

        $metaboxes_data = get_post_meta($post->ID, 'support-metaboxes', true);
        ?>
        <section class="support"
                 id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
            <div class="support_top">
                <h3 class="support_title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo do_shortcode($metaboxes_data['main-title']); ?></h3>
                <p class="support_p"><?php if (isset($metaboxes_data['main-p']) && ($metaboxes_data['main-p'] != '')) echo $metaboxes_data['main-p']; ?></p>
            </div>
            <ul class="support_ul">
                <?php if (isset($metaboxes_data['1st-elem-text']) && ($metaboxes_data['1st-elem-text'] != '')) { ?>
                    <li class="support_li">
                        <div class="support_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['1st-elem-icon']) && ($metaboxes_data['1st-elem-icon'] != '')) echo $metaboxes_data['1st-elem-icon']; ?>"
                                    alt=""></div>
                        <p><?php if (isset($metaboxes_data['1st-elem-text']) && ($metaboxes_data['1st-elem-text'] != '')) echo $metaboxes_data['1st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['2st-elem-text']) && ($metaboxes_data['2st-elem-text'] != '')) { ?>
                    <li class="support_li">
                        <div class="support_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['2st-elem-icon']) && ($metaboxes_data['2st-elem-icon'] != '')) echo $metaboxes_data['2st-elem-icon']; ?>"
                                    alt=""></div>
                        <p><?php if (isset($metaboxes_data['2st-elem-text']) && ($metaboxes_data['2st-elem-text'] != '')) echo $metaboxes_data['2st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['3st-elem-text']) && ($metaboxes_data['3st-elem-text'] != '')) { ?>
                    <li class="support_li">
                        <div class="support_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['3st-elem-icon']) && ($metaboxes_data['3st-elem-icon'] != '')) echo $metaboxes_data['3st-elem-icon']; ?>"
                                    alt=""></div>
                        <p><?php if (isset($metaboxes_data['3st-elem-text']) && ($metaboxes_data['3st-elem-text'] != '')) echo $metaboxes_data['3st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['4st-elem-text']) && ($metaboxes_data['4st-elem-text'] != '')) { ?>
                    <li class="support_li">
                        <div class="support_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['4st-elem-icon']) && ($metaboxes_data['4st-elem-icon'] != '')) echo $metaboxes_data['4st-elem-icon']; ?>"
                                    alt=""></div>
                        <p><?php if (isset($metaboxes_data['4st-elem-text']) && ($metaboxes_data['4st-elem-text'] != '')) echo $metaboxes_data['4st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['5st-elem-text']) && ($metaboxes_data['5st-elem-text'] != '')) { ?>
                    <li class="support_li">
                        <div class="support_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['5st-elem-icon']) && ($metaboxes_data['5st-elem-icon'] != '')) echo $metaboxes_data['5st-elem-icon']; ?>"
                                    alt=""></div>
                        <p><?php if (isset($metaboxes_data['5st-elem-text']) && ($metaboxes_data['5st-elem-text'] != '')) echo $metaboxes_data['5st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['6st-elem-text']) && ($metaboxes_data['6st-elem-text'] != '')) { ?>
                    <li class="support_li">
                        <div class="support_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['6st-elem-icon']) && ($metaboxes_data['6st-elem-icon'] != '')) echo $metaboxes_data['6st-elem-icon']; ?>"
                                    alt=""></div>
                        <p><?php if (isset($metaboxes_data['6st-elem-text']) && ($metaboxes_data['6st-elem-text'] != '')) echo $metaboxes_data['6st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['7st-elem-text']) && ($metaboxes_data['7st-elem-text'] != '')) { ?>
                    <li class="support_li">
                        <div class="support_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['7st-elem-icon']) && ($metaboxes_data['7st-elem-icon'] != '')) echo $metaboxes_data['7st-elem-icon']; ?>"
                                    alt=""></div>
                        <p><?php if (isset($metaboxes_data['7st-elem-text']) && ($metaboxes_data['7st-elem-text'] != '')) echo $metaboxes_data['7st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['8st-elem-text']) && ($metaboxes_data['8st-elem-text'] != '')) { ?>
                    <li class="support_li">
                        <div class="support_li_icon"><img
                                    src="<?php if (isset($metaboxes_data['8st-elem-icon']) && ($metaboxes_data['8st-elem-icon'] != '')) echo $metaboxes_data['8st-elem-icon']; ?>"
                                    alt=""></div>
                        <p><?php if (isset($metaboxes_data['8st-elem-text']) && ($metaboxes_data['8st-elem-text'] != '')) echo $metaboxes_data['8st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <!-- <li class="support_li">
                <div class="support_li_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/support-icon-2.png" alt=""></div>
                <p>Комплекс работ по размещению контекстной рекламы Яндекс.Директ и Google AdWords</p>
            </li>
            <li class="support_li">
                <div class="support_li_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/support-icon-3.png" alt=""></div>
                <p>Раскрученный YouTube канал на 70 000 подписчиков. При настройке таргета на ваш город, вы будете сразу получать «горячих» заказчиков</p>
            </li>
            <li class="support_li">
                <div class="support_li_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/support-icon-4.png" alt=""></div>
                <p>Раскрученный Telegram канал, набирающий обороты по количеству поступающих заявок.</p>
            </li>
            <li class="support_li">
                <div class="support_li_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/support-icon-5.png" alt=""></div>
                <p>Огромная база знаний в разработке и запуске Landing Page и сайтов-визиток. Настройке, наполнении, подключении сайта к статистикам продаж.</p>
            </li>
            <li class="support_li">
                <div class="support_li_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/support-icon-6.png" alt=""></div>
                <p>Стремительно развивающаяся Instagram-страница с 35,5 тысячами активных подписчиков.</p>
            </li> -->
            </ul>
        </section>
        <?php
        wp_reset_postdata();
    }
}
?>

<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-patronage.php'
));
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        global $post;

        $metaboxes_data = get_post_meta($post->ID, 'patronage-metaboxes', true);
        ?>
        <section class="patronage"
                 id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
            <h3 class="patronage_title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo do_shortcode($metaboxes_data['main-title']); ?></h3>
            <ul class="patronage_ul">
                <?php if (isset($metaboxes_data['1st-elem-text']) && ($metaboxes_data['1st-elem-text'] != '')) { ?>
                    <li class="patronage_li">
                        <div class="patronage_icon"><img
                                    src="<?php if (isset($metaboxes_data['1st-elem-icon']) && ($metaboxes_data['1st-elem-icon'] != '')) echo $metaboxes_data['1st-elem-icon']; ?>"
                                    alt=""></div>
                        <p><?php if (isset($metaboxes_data['1st-elem-text']) && ($metaboxes_data['1st-elem-text'] != '')) echo $metaboxes_data['1st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['2st-elem-text']) && ($metaboxes_data['2st-elem-text'] != '')) { ?>
                    <li class="patronage_li">
                        <div class="patronage_icon"><img
                                    src="<?php if (isset($metaboxes_data['2st-elem-icon']) && ($metaboxes_data['2st-elem-icon'] != '')) echo $metaboxes_data['2st-elem-icon']; ?>"
                                    alt=""></div>
                        <p><?php if (isset($metaboxes_data['2st-elem-text']) && ($metaboxes_data['2st-elem-text'] != '')) echo $metaboxes_data['2st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['3st-elem-text']) && ($metaboxes_data['3st-elem-text'] != '')) { ?>
                    <li class="patronage_li">
                        <div class="patronage_icon"><img
                                    src="<?php if (isset($metaboxes_data['3st-elem-icon']) && ($metaboxes_data['3st-elem-icon'] != '')) echo $metaboxes_data['3st-elem-icon']; ?>"
                                    alt=""></div>
                        <p><?php if (isset($metaboxes_data['3st-elem-text']) && ($metaboxes_data['3st-elem-text'] != '')) echo $metaboxes_data['3st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['4st-elem-text']) && ($metaboxes_data['4st-elem-text'] != '')) { ?>
                    <li class="patronage_li">
                        <div class="patronage_icon"><img
                                    src="<?php if (isset($metaboxes_data['4st-elem-icon']) && ($metaboxes_data['4st-elem-icon'] != '')) echo $metaboxes_data['4st-elem-icon']; ?>"
                                    alt=""></div>
                        <p><?php if (isset($metaboxes_data['4st-elem-text']) && ($metaboxes_data['4st-elem-text'] != '')) echo $metaboxes_data['4st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['5st-elem-text']) && ($metaboxes_data['5st-elem-text'] != '')) { ?>
                    <li class="patronage_li">
                        <div class="patronage_icon"><img
                                    src="<?php if (isset($metaboxes_data['5st-elem-icon']) && ($metaboxes_data['5st-elem-icon'] != '')) echo $metaboxes_data['5st-elem-icon']; ?>"
                                    alt=""></div>
                        <p><?php if (isset($metaboxes_data['5st-elem-text']) && ($metaboxes_data['5st-elem-text'] != '')) echo $metaboxes_data['5st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['6st-elem-text']) && ($metaboxes_data['6st-elem-text'] != '')) { ?>
                    <li class="patronage_li">
                        <div class="patronage_icon"><img
                                    src="<?php if (isset($metaboxes_data['6st-elem-icon']) && ($metaboxes_data['6st-elem-icon'] != '')) echo $metaboxes_data['6st-elem-icon']; ?>"
                                    alt=""></div>
                        <p><?php if (isset($metaboxes_data['6st-elem-text']) && ($metaboxes_data['6st-elem-text'] != '')) echo $metaboxes_data['6st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['7st-elem-text']) && ($metaboxes_data['7st-elem-text'] != '')) { ?>
                    <li class="patronage_li">
                        <div class="patronage_icon"><img
                                    src="<?php if (isset($metaboxes_data['7st-elem-icon']) && ($metaboxes_data['7st-elem-icon'] != '')) echo $metaboxes_data['7st-elem-icon']; ?>"
                                    alt=""></div>
                        <p><?php if (isset($metaboxes_data['7st-elem-text']) && ($metaboxes_data['7st-elem-text'] != '')) echo $metaboxes_data['7st-elem-text']; ?></p>
                    </li>
                <?php } ?>

                <?php if (isset($metaboxes_data['8st-elem-text']) && ($metaboxes_data['8st-elem-text'] != '')) { ?>
                    <li class="patronage_li">
                        <div class="patronage_icon"><img
                                    src="<?php if (isset($metaboxes_data['8st-elem-icon']) && ($metaboxes_data['8st-elem-icon'] != '')) echo $metaboxes_data['8st-elem-icon']; ?>"
                                    alt=""></div>
                        <p><?php if (isset($metaboxes_data['8st-elem-text']) && ($metaboxes_data['8st-elem-text'] != '')) echo $metaboxes_data['8st-elem-text']; ?></p>
                    </li>
                <?php } ?>
            </ul>
        </section>
        <?php
        wp_reset_postdata();
    }
}
?>

<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-to-know.php'
));
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        global $post;

        $metaboxes_data = get_post_meta($post->ID, 'to-know-metaboxes', true);
        ?>
        <section class="to-know"
                 id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
            <h3 class="to-know_title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo do_shortcode($metaboxes_data['main-title']); ?></h3>
            <div class="to-know_video_div">
                <video controls class="projects_li_video"
                       poster="<?php if (isset($metaboxes_data['video-poster']) && ($metaboxes_data['video-poster'] != '')) echo $metaboxes_data['video-poster']; ?>">
                    <source src="<?php if (isset($metaboxes_data['video-mp4']) && ($metaboxes_data['video-mp4'] != '')) echo $metaboxes_data['video-mp4']; ?>"
                            type="video/mp4">
                    <source src="<?php if (isset($metaboxes_data['video-webm']) && ($metaboxes_data['video-webm'] != '')) echo $metaboxes_data['video-webm']; ?>"
                            type="video/webm">
                </video>
            </div>
        </section>
        <?php
        wp_reset_postdata();
    }
}
?>

<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-get-plan.php'
));
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        global $post;

        $metaboxes_data = get_post_meta($post->ID, 'get-plan-metaboxes', true);
        ?>
        <section class="get-plan" id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
        <div class="get-plan_inner">
        <div class="get-plan_left">
            <h3 class="get-plan_title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo $metaboxes_data['main-title']; ?></h3>
            <p class="get-plan_p"><?php if (isset($metaboxes_data['main-p']) && ($metaboxes_data['main-p'] != '')) echo $metaboxes_data['main-p']; ?></p>
        </div>
        <?php
        wp_reset_postdata();
    }
}
?>
    <div class="get-plan_right">
        <?php
        $get_plan_form_shortcode = str_replace("&quot;", "'", $theme_opts['get_plan_form_shortcode']);
        echo do_shortcode($get_plan_form_shortcode);
        ?>
        <!-- <form action="#" mehton="POST" class="get-plan_form">
            <input type="text" name="name" placeholder="Имя">
            <input type="tel" name="tel" placeholder="Телефон">
            <input type="email" name="email" placeholder="Email">
            <button type="submit">Получить</button>
            <label><input type="checkbox">Даю согласие на обработку персональных данных</label>
        </form> -->

    </div>
    </div>
    </section>


    <?php
        $query = new WP_Query(array(
            'post_type' => 'page',
            'meta_key' => '_wp_page_template',
            'meta_value' => 'page-footer.php'
        ));
        if ($query->have_posts()) {
        while ($query->have_posts()) {
        $query->the_post();

        global $post;

        $metaboxes_data = get_post_meta($post->ID, 'footer-metaboxes', true);
    ?>  
    <footer class="footer" id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
        <div class="footer_top">
            <!-- <div class="footer_logo"><a href="/" class="footer_logo_link"></a></div> -->
            <button class="footer_get_call"><?php if (isset($metaboxes_data['button-text']) && ($metaboxes_data['button-text'] != '')) echo $metaboxes_data['button-text']; ?></button>
        </div>
        <div class="footer_menu">
            <?php wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'container'      => false,
                'menu_class'     => '',
                'menu_id'        => ''
            )); ?>
            <!-- <ul>
                <li><a href="#pack">Франчайзинговый пакет</a></li>
                <li><a href="#calc">Калькулятор инвестиций</a></li>
                <li><a href="#support">Маркетинговая поддержка</a></li>
                <li><a href="#footer_info">Контакты</a></li>
            </ul> -->
        </div>
        <div class="footer_info">
            <ul class="footer_info_ul">
                <?php if (isset($metaboxes_data['1st-elem-content']) && ($metaboxes_data['1st-elem-content'] != '')) echo '<li>' . $metaboxes_data['1st-elem-content'] . '</li>'; ?>
                <?php if (isset($metaboxes_data['2st-elem-content']) && ($metaboxes_data['2st-elem-content'] != '')) echo '<li>' . $metaboxes_data['2st-elem-content'] . '</li>'; ?>
                <?php if (isset($metaboxes_data['3st-elem-content']) && ($metaboxes_data['3st-elem-content'] != '')) echo '<li>' . $metaboxes_data['3st-elem-content'] . '</li>'; ?>
                <?php if (isset($metaboxes_data['4st-elem-content']) && ($metaboxes_data['4st-elem-content'] != '')) echo '<li>' . $metaboxes_data['4st-elem-content'] . '</li>'; ?>
                <?php if (isset($metaboxes_data['5st-elem-content']) && ($metaboxes_data['5st-elem-content'] != '')) echo '<li>' . $metaboxes_data['5st-elem-content'] . '</li>'; ?>
                <?php if (isset($metaboxes_data['6st-elem-content']) && ($metaboxes_data['6st-elem-content'] != '')) echo '<li>' . $metaboxes_data['6st-elem-content'] . '</li>'; ?>
                <?php if (isset($metaboxes_data['7st-elem-content']) && ($metaboxes_data['7st-elem-content'] != '')) echo '<li>' . $metaboxes_data['7st-elem-content'] . '</li>'; ?>
                <?php if (isset($metaboxes_data['8st-elem-content']) && ($metaboxes_data['8st-elem-content'] != '')) echo '<li>' . $metaboxes_data['8st-elem-content'] . '</li>'; ?>
                <?php if (isset($metaboxes_data['9st-elem-content']) && ($metaboxes_data['9st-elem-content'] != '')) echo '<li>' . $metaboxes_data['9st-elem-content'] . '</li>'; ?>
                <?php if (isset($metaboxes_data['10st-elem-content']) && ($metaboxes_data['10st-elem-content'] != '')) echo '<li>' . $metaboxes_data['10st-elem-content'] . '</li>'; ?>
                <?php if (isset($metaboxes_data['11st-elem-content']) && ($metaboxes_data['11st-elem-content'] != '')) echo '<li>' . $metaboxes_data['11st-elem-content'] . '</li>'; ?>
                <?php if (isset($metaboxes_data['12st-elem-content']) && ($metaboxes_data['12st-elem-content'] != '')) echo '<li>' . $metaboxes_data['12st-elem-content'] . '</li>'; ?>
                    
            </ul>
        </div>
        <div class="footer_copy">
            <p><?php if (isset($metaboxes_data['copy-text']) && ($metaboxes_data['copy-text'] != '')) echo $metaboxes_data['copy-text']; ?></p>
        </div>
    </footer>
    <?php
        wp_reset_postdata();
    }
    }
    ?>

    <div class="modal_get_call">
        <div class="modal_get_call_close"></div>
        <div class="modal_get_call_title">Обратная связь</div>
        <div class="modal_get_call_descr">Наш менеджер свяжется с вами в течение 10 минут</div>
        <?php
            $get_call_form_shortcode = str_replace("&quot;", "'", $theme_opts['get_call_form_shortcode']);
            echo do_shortcode($get_call_form_shortcode);
        ?>

        <!-- <form action="#">
            <label>Имя<input type="text" placeholder="Александр"></label>
            <label>Телефон<input type="text" placeholder="+7 (000) 00-00-000"></label>
            <button type="submit">Заказать звонок</button>
        </form> -->
    </div>

    <div class="modal_thank_you">
        <div class="modal_thank_you_close"></div>
        <div class="modal_thank_you_title">Спасибо за заявку!</div>
        <div class="modal_thank_you_descr">Мы свяжемся с вами в ближайшее время</div>
    </div>

    <div class="cookie_notification" id="cookie_notification">
        <p>Для улучшения работы сайта и его взаимодействия с пользователями мы используем файлы cookie. Продолжая работу с сайтом, Вы разрешаете использование cookie-файлов. Вы всегда можете отключить файлы cookie в настройках Вашего браузера.<button class="button cookie_accept">Принять</button></p>
    </div>

    <section class="hoovered_backgrounds_preload" style="display: none;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calc-button-bkg-hoover.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/entry-button-bkg-hoover.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-button-bkg-hoover.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/get-plan-button-bkg-hoover.png" alt="">
    </section>

<?php wp_footer(); ?>

</body>
</html>