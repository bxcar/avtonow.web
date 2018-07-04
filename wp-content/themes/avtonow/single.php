<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package avtonow
 */

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

    <div class="advantages">
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
        <div class="main__container">
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
            <div class="single-content">
                <p class="single-content__breadcrumbs">Главная / Заказ минивэнов</p>
                <h1 class="single-content__title"><?php the_title(); ?></h1>
                <div class="single-content__top-block">
                    <div class="single-content__main-img-wrap owl-carousel" id="owl-slider-thumbs" data-slider-id="1">
                        <?php if (get_field('gallery')) {
                            foreach (get_field('gallery') as $item) { ?>
                                <img class="single-content__main-img" src="<?= $item['url']; ?>">
                            <?php }
                        } ?>
                    </div>
                    <div class="single-content__form-wrap single-content__form-wrap--desktop">
                        <span class="single-content__form-title"><?php the_field('form_title'); ?></span>
                        <span class="single-content__form-subtitle"><?php the_field('form_subtitle'); ?></span>
                        <span class="single-content__car-price-wrap"><?php the_field('form_subtitle_2_part1'); ?><!--
                    --><span class="single-content__car-price"> <?php the_field('form_subtitle_2_part2'); ?></span></span>
                        <?php echo do_shortcode('[contact-form-7 id="5" html_class="single-content__form"]')?>
                    </div>
                </div>
                <div class="single-content__subimages owl-thumbs" data-slider-id="1">
                    <?php if (get_field('gallery')) {
                        foreach (get_field('gallery') as $item) { ?>
                            <div class="single-content__subimg owl-thumb-item">
                                <img class="single-content__subimg-img" src="<?= $item['url']; ?>">
                            </div>
                        <?php }
                    } ?>
                </div>
                <div class="single-content__form-wrap single-content__form-wrap--mob">
                    <span class="single-content__form-title"><?php the_field('form_title'); ?></span>
                    <span class="single-content__form-subtitle"><?php the_field('form_subtitle'); ?></span>
                    <span class="single-content__car-price-wrap"><?php the_field('form_subtitle_2_part1'); ?><!--
                    --><span class="single-content__car-price"> <?php the_field('form_subtitle_2_part2'); ?></span></span>
                    <?php echo do_shortcode('[contact-form-7 id="193" html_class="single-content__form"]')?>
                </div>

                <h2 class="single-content__subtitle single-content__subtitle--1"><?php the_field('rates_title'); ?></h2>
                <?php if (get_field('table')) {
                    foreach (get_field('table') as $item) { ?>
                        <div class="single-content__table-wrap">
                            <table class="single-content__table">
                                <caption class="single-content__table-caption"><?= $item['title']; ?></caption>
                                <?php if ($item['поля']) {
                                    foreach ($item['поля'] as $row) { ?>
                                        <tr class="single-content__table-tr">
                                            <td class="single-content__table-td-first"><?= $row['left_column']; ?></td>
                                            <td class="single-content__table-td-second"><?= $row['right_column']; ?></td>
                                        </tr>
                                    <?php }
                                } ?>
                            </table>
                        </div>
                    <?php }
                } ?>

                <div class="single-content__seo">
                    <h2 class="single-content__subtitle single-content__subtitle--2"><?php the_field('desc_title'); ?></h2>
                    <?php the_field('desc_text'); ?>
                </div>
            </div>
        </div>
    </main>
    <div class="slider">
        <div class="slider__container owl-carousel owl-slider" id="owl-slider">
            <?php if (get_field('slides')) {
                foreach (get_field('slides') as $item) { ?>
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
    location.hash = 'main';
</script>
<?php
get_footer();
