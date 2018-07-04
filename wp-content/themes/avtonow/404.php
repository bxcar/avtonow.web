<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package avtonow
 */

get_header();
?>
<div class="page404">
    <img class="page404__img" src="<?= get_template_directory_uri(); ?>/dist/img/404.png">
    <h1 class="page404__text" >Страница не найдена</h1>
</div>

<?php
get_footer();
