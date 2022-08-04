<?php
/**
 * Template Name: Aboutpage
 *
 * @package TravelSite
 *
 */
?>
<?php get_header(); ?>

<!-- This is the start of hero section -->
<main id="topBtn-about">
    <div class="hero-text-about">
        <h1>About Us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div>
        
    </div>
</main>
<!-- This is the end of hero section -->

<!-- This is the start of banner section -->
<!-- Daily quotes? generated everyday 12||24hrs -->
<div class="banner-about">
    <section class="banner-about-section">
        <h2>"100% of success equals a fraction of fearing failure."</h2>
        <small>- Unknown Author</small>
    </section>
</div>
<!-- This is the end of banner section -->

<!-- This is the start of body about section -->
<div class="body-about-container">
    <div class="body-about-wrapper">
        <div>
            <img src="<?php the_field('grid_image_1'); ?>" alt="grid1">
            <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio doloribus suscipit quas voluptates sed saepe quo nam deleniti eaque! Accusantium iste fugiat perspiciatis ipsam sunt nihil est dignissimos tempore explicabo!</h2>
        </div>
        <div>
            <img src="<?php the_field('grid_image_2'); ?>" alt="grid2">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, consequatur quaerat! In dignissimos itaque, architecto odio vel ea eius expedita magni repellat laboriosam temporibus incidunt quos sed. Placeat, saepe veniam.</h2>
        </div>
    </div>
</div>
<!-- This is the end of body about section -->

<?php get_footer(); ?>