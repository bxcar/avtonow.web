<?php
/* Template Name: content */

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

    <main class="main main--content">
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
            <div class="content-text">
                <p class="content-text__breadcrumbs">Главная / <?php the_title(); ?></p>
                <h1 class="content-text__title"><?php the_title(); ?></h1>
                <?php the_field('textpage_text');?>
            </div>
        </div>
    </main>
<?php
get_footer();
