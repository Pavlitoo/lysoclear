<?php
/*
Template Name: Partners
*/
get_header();

// Отримуємо дані про партнера з ACF
$partner_title = get_field('partner_title');
$partner_photo = get_field('partner_photo');
$partner_description = get_field('partner_description');
?>

<div class="partners-page">
    <?php if ($partner_photo): ?>
        <img src="<?php echo esc_url($partner_photo); ?>" alt="<?php echo esc_attr($partner_title); ?>" class="partner-photo">
    <?php endif; ?>

    <?php if ($partner_title): ?>
        <h2 class="partner-title"><?php echo esc_html($partner_title); ?></h2>
    <?php endif; ?>

    <?php if ($partner_description): ?>
        <div class="partner-description">
            <?php echo wpautop($partner_description); ?>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>