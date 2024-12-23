<?php
/*
Template Name: About Us
*/
get_header();

// Отримуємо дані про розділи з ACF
$sections = get_field('about_sections');
?>

<div class="about-us-page">
    <?php if ($sections): ?>
        <?php foreach ($sections as $section): ?>
            <div class="about-section">
                <?php if ($section['section_title']): ?>
                    <h2 class="section-title"><?php echo esc_html($section['section_title']); ?></h2>
                <?php endif; ?>

                <?php if ($section['section_image']): ?>
                    <img src="<?php echo esc_url($section['section_image']); ?>" alt="<?php echo esc_attr($section['section_title']); ?>" class="section-image">
                <?php endif; ?>

                <?php if ($section['section_content']): ?>
                    <div class="section-content">
                        <?php echo wpautop($section['section_content']); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Наразі інформація відсутня.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>