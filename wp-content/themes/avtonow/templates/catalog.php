<?php
/* Template Name: catalog */

get_header();
?>
    <div class="cars-rent">
        <div class="cars-rent__container">
            <?php if (get_field('cars_rent_line_min', 99)) {
                foreach (get_field('cars_rent_line_min', 99) as $line) { ?>
                    <div class="cars-rent__block">
                        <div class="cars-rent__images">
                            <?php foreach ($line['car_single'] as $item) { ?>
                                <a target="<?= $item['link']['target']; ?>"
                                   href="<?= $item['link']['url']; ?>"
                                   class="cars-rent__img-link">
                                    <img class="cars-rent__img"
                                         src="<?= $item['img']; ?>">
                                    <span class="cars-rent__text-link cars-rent__text-link--mob"><?= $item['link']['title']; ?></span>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="cars-rent__titles">
                            <?php foreach ($line['car_single'] as $item) { ?>
                                <a target="<?= $item['link']['target']; ?>"
                                   href="<?= $item['link']['url']; ?>"
                                   class="cars-rent__text-link cars-rent__text-link--min"><?= $item['link']['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>

    <div class="advantages advantages--inner">
        <div class="advantages__container">
            <?php if (get_field('advantages', 16)) {
                foreach (get_field('advantages', 16) as $item) { ?>
                    <div class="advantages__item">
                        <img class="advantages__img"
                             src="<?= $item['img']; ?>">
                        <span class="advantages__desc"><?= $item['text']; ?></span>
                        <img class="advantages__checked advantages__checked--desktop"
                             src="<?= get_template_directory_uri(); ?>/dist/img/checked.png">
                    </div>
                <?php }
            } ?>
        </div>
    </div>
    <main class="main" id="main">
        <div class="main__container main__container--catalog">
            <div class="main__left-side">
                <div class="main__left-side-title"><?php the_field('left_sidebar_menu_title', 'option'); ?></div>
                <?php
                echo str_replace(array('menu-item ', '<a'), array('main__left-side-item ', '<a class="main__left-side-link"'), wp_nav_menu(array(
                        'echo' => false,
                        'theme_location' => 'menu-2',
                        'items_wrap' => '<ul class="main__left-side-list">%3$s</ul>',
                        'container' => 'false'
                    ))
                );
                ?>
            </div>
            <div class="catalog-content">
                <p class="catalog-content__breadcrumbs">Главная / <?php the_title(); ?></p>
                <h1 class="catalog-content__title"><?php the_title(); ?></h1>
                <?php
                if ($_GET['showall'] == 1) {
                    $posts_per_page = -1;
                } else {
                    $posts_per_page = 5;
                }
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $the_query_last_posts = query_posts(
                    array(
                        'numberposts' => -1,
                        'post_type' => 'post',
                        'posts_per_page' => $posts_per_page,
                        'paged' => $paged,
                        'cat' => get_field('catalog_cat')
                    )
                );

                if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>
                        <div class="catalog-content__tile">
                            <a class="catalog-content__tile-abs-link" href="<?php the_permalink(); ?>"></a>
                            <a href="<?php the_permalink(); ?>"><img class="catalog-content__tile-img" src="<?php the_post_thumbnail_url(); ?>"></a>
                            <div class="catalog-content__tile-desc">
                                <a class="catalog-content__tile-desc-title-link" href="<?php the_permalink(); ?>"><h2 class="catalog-content__tile-desc-title"><?php the_title(); ?></h2></a>
                                <div class="catalog-content__tile-desc-items">
                        <span class="catalog-content__tile-desc-item"><?= get_field('for_catalog')[0]['key']; ?><!--
                    --><span class="catalog-content__tile-desc-item-inner"> <?= get_field('for_catalog')[0]['value']; ?></span></span>
                                    <span class="catalog-content__tile-desc-item catalog-content__tile-desc-item--desktop"><?= get_field('for_catalog')[1]['key']; ?><!--
                    --><span class="catalog-content__tile-desc-item-inner"> <?= get_field('for_catalog')[1]['value']; ?></span></span>
                                    <span class="catalog-content__tile-desc-item catalog-content__tile-desc-item--desktop"><?= get_field('for_catalog')[2]['key']; ?><!--
                    --><span class="catalog-content__tile-desc-item-inner"> <?= get_field('for_catalog')[2]['value']; ?></span></span>
                                    <span class="catalog-content__tile-desc-item catalog-content__tile-desc-item--desktop"><?= get_field('for_catalog')[3]['key']; ?><!--
                    --><span class="catalog-content__tile-desc-item-inner"> <?= get_field('for_catalog')[3]['value']; ?></span></span>
                                </div>
                                <div class="catalog-content__tile-desc-buttons">
                                    <a class="catalog-content__tile-desc-button catalog-content__tile-desc-button--1"
                                       target="<?= get_field('for_catalog_button_link')['target']; ?>"
                                       href="<?= get_field('for_catalog_button_link')['url']; ?>"><?= get_field('for_catalog_button_link')['title']; ?></a>
                                    <a class="catalog-content__tile-desc-button catalog-content__tile-desc-button--2"
                                       href="<?php the_permalink(); ?>">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    <?php }
                } else {
                    // Постов не найдено
                }
                /* Возвращаем оригинальные данные поста. Сбрасываем $post. */
                //                wp_reset_postdata();
                ?>

                <?php
                $args_pagination = array(
                    'show_all' => false, // показаны все страницы участвующие в пагинации
                    'end_size' => 1,     // количество страниц на концах
                    'mid_size' => 1,     // количество страниц вокруг текущей
                    'prev_next' => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                    'prev_text' => __(''),
                    'next_text' => __('вперед >>'),
                    'add_args' => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                    'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                    'screen_reader_text' => __('Posts navigation'),
                );

                the_posts_pagination($args_pagination);
                wp_reset_query(); ?>
            </div>
        </div>
    </main>
    <div class="slider">
        <h2 class="slider__main-title"><?php the_field('slider_title', 16); ?></h2>
        <div class="slider__container owl-carousel owl-slider" id="owl-slider">
            <?php if (get_field('slides', 16)) {
                foreach (get_field('slides', 16) as $item) { ?>
                    <div class="slider__item">
                        <img class="slider__img" src="<?= $item['img']; ?>">
                        <span class="slider__title"><?= $item['title']; ?></span>
                        <p class="slider__text"><?= $item['desc']; ?></p>
                    </div>
                <?php }
            } ?>
        </div>
    </div>

    <script>
        jQuery('.menu-category-<?= get_field('catalog_cat') ?>').toggleClass('active');
        jQuery('.menu-category-<?= get_field('catalog_cat') ?>').find('.sub-menu').animate({height: 'show'}, 300);
//        jQuery( "#go-to-main" ).trigger( "click" );
        location.hash = 'main';
    </script>

<?php
get_footer();
