<?php
/**
 * Template Name: Homepage
 *
 * @package TravelSite
 *
 */
?>
<?php get_header(); ?>

<!-- This is the start of hero section -->
<main id="topBtn">
    <div class="hero-text">
        <h1><?php the_field('page_title'); ?></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
</main>
<!-- This is the end of hero section -->

<!-- This is the start of icon section -->
<section class="row">
    <div class="column">
        <img src="<?php the_field('icon_1'); ?>" alt="pink globe icon.">
        <h2>CHOOSE YOUR DESTIANTION</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis inventore, perspiciatis rerum quisquam nam ex. </p>
    </div>
    <div class="column">
        <img src="<?php the_field('icon_2'); ?>" alt="pink airplane.">
        <h2>CATCH YOUR FLIGHT</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis inventore, perspiciatis rerum quisquam nam ex. </p>
    </div>
    <div class="column">
        <img src="<?php the_field('icon_3'); ?>" alt="pink pin.">
        <h2>LAND IN PARADISE</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis inventore, perspiciatis rerum quisquam nam ex. </p>
    </div>
</section>
<!-- This is the end of icon section -->

<?php get_template_part('template-parts/info-section') ?>
<?php get_template_part('template-parts/banner') ?>

<?php get_footer(); ?>