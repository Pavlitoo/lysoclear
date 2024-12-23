<?php
/*
Template Name: Treatment
*/

get_header(); ?>

<div class="page-two">
    <!-- Заголовок сторінки -->
    <h1 class="page-two-title">
        <?php echo esc_html(get_field('page_two_title')); ?>
    </h1>

    <!-- Опис сторінки -->
    <div class="page-two-description">
        <?php echo wpautop(get_field('page_two_description')); ?>
    </div>

    <!-- Зображення -->
    <div class="page-two-image">
        <img src="<?php echo esc_url(get_field('page_two_image')); ?>" alt="<?php echo esc_attr(get_field('page_two_title')); ?>">
    </div>

    <!-- Список послуг -->
    <div class="page-two-services">
        <?php if (have_rows('page_two_services')) : ?>
            <ul>
                <?php while (have_rows('page_two_services')) : the_row(); ?>
                    <li>
                        <?php
                        $service_icon = get_sub_field('service_icon');
                        if ($service_icon) : ?>
                            <img src="<?php echo esc_url($service_icon); ?>" alt="<?php echo esc_attr(get_sub_field('service_title')); ?>" class="service-icon">
                        <?php endif; ?>
                        <h3><?php echo esc_html(get_sub_field('service_title')); ?></h3>
                        <p><?php echo esc_html(get_sub_field('service_description')); ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>

    <!-- Переваги -->
    <div class="page-two-advantages">
        <h2>Наші переваги</h2>
        <?php if (have_rows('page_two_advantages')) : ?>
            <ul>
                <?php while (have_rows('page_two_advantages')) : the_row(); ?>
                    <li>
                        <?php
                        $advantage_icon = get_sub_field('advantage_icon');
                        if ($advantage_icon) : ?>
                            <img src="<?php echo esc_url($advantage_icon); ?>" alt="<?php echo esc_attr(get_sub_field('advantage_title')); ?>" class="advantage-icon">
                        <?php endif; ?>
                        <h3><?php echo esc_html(get_sub_field('advantage_title')); ?></h3>
                        <p><?php echo esc_html(get_sub_field('advantage_description')); ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>

    <!-- Кнопка "Записатися" -->
    <div class="page-two-cta">
        <a href="#booking" class="btn-cta">
            <?php echo esc_html(get_field('page_two_cta')); ?>
        </a>
    </div>
</div>

<?php get_footer(); ?>