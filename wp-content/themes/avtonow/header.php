<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avtonow
 */
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/app/css/libs.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/app/css/owl.theme.default.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/app/css/main.css">
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="top-fixed">
        <a href="/" class="top-fixed__logo">
            <span class="top-fixed__logo-text top-fixed__logo-text--1"><?php the_field('header_logo_part1', 'option');?></span><!--
                --><span class="top-fixed__logo-text top-fixed__logo-text--2"><?php the_field('header_logo_part2', 'option');?></span>
        </a>
        <div class="top-fixed__phone">
            <img class="top-fixed__phone-img" src="<?= get_template_directory_uri();?>/dist/img/tel-blue.png"><!--
                --><span class="top-fixed__phone-number"><span
                        class="top-fixed__phone-number-sub"><?php the_field('header_phone_part1', 'option');?></span> <?php the_field('header_phone_part2', 'option');?></span>
        </div>
        <div class="top-fixed__location-wrapper">
            <img class="top-fixed__location-img" src="<?= get_template_directory_uri();?>/dist/img/location-marker.png">
            <span class="top-fixed__address"><?php the_field('footer_address', 'option'); ?></span>
        </div>
    </div>
    <div class="header__container">
        <?php
        echo str_replace(array('menu-item ', '<a'), array('header__menu-item ', '<a class="header__menu-item-link"'), wp_nav_menu(array(
                'echo' => false,
                'theme_location' => 'menu-1',
                'items_wrap' => '<ul class="header__menu">%3$s</ul>',
                'container' => 'false'
            ))
        );
        ?>
        <div class="header__search-burger-wrapper">
            <div class="header__burger-wrapper">
                <input type="checkbox" class="header__burger-check-menu" id="check-menu">
                <label class="header__burger-check-menu-label" for="check-menu"></label>
                <div class="header__burger-line header__burger-first"></div>
                <div class="header__burger-line header__burger-second"></div>
                <div class="header__burger-line header__burger-third"></div>
                <div class="header__burger-line header__burger-fourth"></div>
                <?php
                echo str_replace(array('menu-item ', '<a'), array('header__menu-item ', '<a class="header__burger-link"'), wp_nav_menu(array(
                        'echo' => false,
                        'theme_location' => 'menu-1',
                        'items_wrap' => '<nav class="header__burger-main-menu">%3$s</nav>',
                        'container' => 'false'
                    ))
                );
                ?>
            </div>
            <div class="header__search">
                <button id="search-form-submit-unreal" class="header__search-form-submit">
                    <img class="header__search-img" src="<?= get_template_directory_uri();?>/dist/img/search.png">
                </button>
                <form id="header-search-form" class="header__search-form" action="/" method="get">
                    <input class="header__search-input" name="s" id="s" type="text" placeholder="Поиск">
                    <button type="submit" class="header__search-form-submit">
                        <img class="header__search-form-submit-img" src="<?= get_template_directory_uri();?>/dist/img/search.png">
                    </button>
                </form>
            </div>
        </div>
        <div class="header__bottom">
            <a href="/" class="header__logo">
                <span class="header__logo-text header__logo-text--1"><?php the_field('header_logo_part1', 'option');?></span><!--
                --><span class="header__logo-text header__logo-text--2"><?php the_field('header_logo_part2', 'option');?></span>
            </a>
            <div class="header__phone">
                <img class="header__phone-img" src="<?= get_template_directory_uri();?>/dist/img/tel-blue.png"><!--
                --><span class="header__phone-number"><span
                            class="header__phone-number-sub"><?php the_field('header_phone_part1', 'option');?></span> <?php the_field('header_phone_part2', 'option');?></span>
            </div>
            <div class="header__callback">
                <a target="<?= get_field('header_button1', 'option')['target']; ?>"
                   href="<?= get_field('header_button1', 'option')['url']; ?>"
                   class="header__callback-button">
                    <?= get_field('header_button1', 'option')['title']; ?>
                </a>
            </div>
            <div class="header__order">
                <a target="<?= get_field('header_button2', 'option')['target']; ?>"
                   href="<?= get_field('header_button2', 'option')['url']; ?>"
                   class="header__order-link">
                    <img class="header__order-img" src="<?= get_template_directory_uri();?>/dist/img/header-order.png"><!--
                    --><span class="header__order-text"><?= get_field('header_button2', 'option')['title']; ?></span>
                </a>
            </div>
        </div>
    </div>
</header>