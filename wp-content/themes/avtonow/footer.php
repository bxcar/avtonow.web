<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avtonow
 */

?>
<footer class="footer">
    <div class="footer__top">
        <div class="footer__top-container">
            <span class="footer__title"><?php the_field('footer_title', 'option'); ?></span>
            <div class="footer__phone-map-wrapper">
                <div class="footer__phone">
                    <img class="footer__phone-img" src="<?= get_template_directory_uri();?>/dist/img/white-tel.png"><!--
                --><span class="footer__phone-number"><!--
                --><span class="footer__phone-number-sub"><?php the_field('footer_phone_part1', 'option'); ?></span> <?php the_field('footer_phone_part2', 'option'); ?></span><!--
                --><span class="footer__phone-small-text"><?php the_field('footer_under_phone', 'option'); ?></span>
                </div>
                <div class="footer__location-wrapper">
                    <img class="footer__location-img" src="<?= get_template_directory_uri();?>/dist/img/location-marker.png">
                    <span class="footer__address"><?php the_field('footer_address', 'option'); ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__form-wrap">
        <span class="footer__form-title"><?php the_field('footer_form_title', 'option'); ?></span>
        <span class="footer__form-subtitle"><?php the_field('footer_form_subtitle', 'option'); ?></span>
        <?php echo do_shortcode('[contact-form-7 id="194" html_class="footer__form"]')?>
        <span class="footer__form-small-text"><?php the_field('footer_small_text_under_form', 'option'); ?></span>
    </div>
    <div class="footer__bottom">
        <div class="footer__bottom-container">
            <span class="footer__copyright"><?php the_field('footer_copyright', 'option'); ?></span>
        </div>
    </div>
</footer>
<script src="<?= get_template_directory_uri();?>/app/js/libs.min.js"></script>
<script src="<?= get_template_directory_uri();?>/app/js/common.js"></script>
<?php wp_footer(); ?>
</body>
</html>