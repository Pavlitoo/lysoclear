<?php
/*
Template Name: Contact
*/
get_header();

// Відображення форми Contact Form 7
$contact_form_shortcode = '[contact-form-7 id="8a171a2" title="Test"]'; // Замініть на свій шорткод форми
?>

<div class="contact-page">
    <h1><?php the_title(); ?></h1>

    <div class="contact-form-wrapper">
        <?php echo do_shortcode($contact_form_shortcode); ?>
    </div>
</div>

<?php get_footer(); ?>