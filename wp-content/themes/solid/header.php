<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solid
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <link rel="canonical" href=""/>
    <link rel="shortcut icon" href=""/>
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <div class="header-mobile">
        <nav class="navigation-mobile-wrapper">
            <ul class="navigation-body">
                <li class="nav-li"><a class="navigation-link">УСЛУГИ</a></li>
                <li class="nav-li"><a class="navigation-link">MAKE-UP ШКОЛА</a></li>
                <li class="nav-li"><a class="navigation-link">КОНТАКТЫ</a></li>
            </ul>
        </nav>
    </div>
    <div class="header_top-wrapper">
        <div class="site-wrapper">
            <div class="header_top-body">
                <div class="header_top-info">
                    <figure class="logo-wrapper">
                        <img src="wp-content/uploads/2019/06/logo-1.png" alt="logo"/>
                    </figure>
                    <div class="header_phone-wrapper">
                        <a href="tel:+37127500410" class="header_phone"><span>+371 275-00-410</span></a>
                    </div>
                </div>
                <div class="header_top-content">
                    <nav class="header-nav">
                        <ul class="header-list">
                            <li class="header_item active">
                                <a href="#" class="header_link">УСЛУГИ</a>
                            </li>
                            <li class="header_item">
                                <a href="#" class="header_link">MAKE-UP ШКОЛА</a>
                            </li>
                            <li class="header_item">
                                <a href="#" class="header_link">КОНТАКТЫ</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-lang">
                        <a href="#" class="lang_link">
                            <img src="wp-content/uploads/2019/06/lat_lang-1.png" alt="lat_lang"/>
                        </a>
                        <a href="#" class="lang_link">
                            <img src="wp-content/uploads/2019/06/rus_lang2.png" alt="rus_lang"/>
                        </a>
                    </div>
                </div>
                <div class="header-mobile-button-body">
                    <span class="header-mobile-button-line"></span>
                    <span class="header-mobile-button-line"></span>
                    <span class="header-mobile-button-line"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="header_bottom-wrapper">
        <div class="header_bottom-image">
            <div class="header_bottom-bg">
                <div class="site-wrapper">
                    <div class="header_bottom-body">
                        <div class="header_bottom-content">
                            <figure class="logo_mob-wrapper">
                                <img src="wp-content/uploads/2019/06/logo-1.png" alt="logo"/>
                            </figure>
                            <div class="header-title">
                                <h1 class="title_h1">CАЛОН КРАСОТЫ</h1>
                            </div>
                            <address class="address">
                                <figure class="address-image">
                                    <img src="wp-content/uploads/2019/06/address_img.png" alt="address"/>
                                </figure>
                                <p class="address-info">
                                    riga, citadeles iela 1a
                                    (вход с улицы muitas)
                                </p>
                            </address>
                            <button class="record-button" type="button">ЗАПИСАТЬСЯ</button>
                        </div>
                    </div>
                </div>
                <figure class="accessories-image accessories_image-first">
                    <img src="wp-content/uploads/2019/06/header_part4.png" alt="accessories"/>
                </figure>
                <figure class="accessories-image accessories_image-second">
                    <img src="wp-content/uploads/2019/06/header_part1.png" alt="accessories"/>
                </figure>
                <figure class="accessories-image accessories_image-third">
                    <img src="wp-content/uploads/2019/06/header_part5.png" alt="accessories"/>
                </figure>
                <figure class="accessories-image accessories_image-fourth">
                    <img src="wp-content/uploads/2019/06/header_part3.png" alt="accessories"/>
                </figure>
                <figure class="accessories-image accessories_image-fifth">
                    <img src="wp-content/uploads/2019/06/header_part6.png" alt="accessories"/>
                </figure>
                <figure class="accessories-image accessories_image-six">
                    <img src="wp-content/uploads/2019/06/header_part7.png" alt="accessories"/>
                </figure>
                <figure class="accessories-image accessories_image-seven">
                    <img src="wp-content/uploads/2019/06/header_part2.png" alt="accessories"/>
                </figure>
            </div>
        </div>
    </div>
</header>




