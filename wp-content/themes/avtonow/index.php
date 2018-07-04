<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package avtonow
 */

get_header();
?>
    <div class="cars-rent">
        <div class="cars-rent__container">
            <?php if (get_field('cars_rent_line')) {
                foreach (get_field('cars_rent_line') as $line) { ?>
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
                                   class="cars-rent__text-link"><?= $item['link']['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
    <div class="advantages">
        <div class="advantages__container">
            <?php if (get_field('advantages')) {
                foreach (get_field('advantages') as $item) { ?>
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
    <main class="main">
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
            <div class="main__right-side">
                <?php the_field('text'); ?>
            </div>
        </div>
    </main>
    <div class="slider">
        <h2 class="slider__main-title"><?php the_field('slider_title'); ?></h2>
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
<?php
get_footer();
