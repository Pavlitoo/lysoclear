<?php
/*
Template Name: About Lysoclear
*/

get_header(); ?>

<div class="about-lysoclear">
    <!-- Зображення -->
    <div class="about-image">
        <?php
        $about_image = get_field('about_image');
        if ($about_image) {
            echo '<img src="' . esc_url($about_image) . '" alt="About Lysoclear">';
        } else {
            echo '<p>Зображення ще не додано.</p>';
        }
        ?>
    </div>

    <!-- Текст -->
    <div class="about-text">
        <?php
        $about_text = get_field('about_text');
        if ($about_text) {
            echo wpautop($about_text);
        } else {
            echo '<p>Текст ще не додано.</p>';
        }
        ?>
    </div>

    <!-- Відео -->
    <div class="about-video">
        <?php
        $about_video = get_field('about_video');
        if ($about_video) {
            echo $about_video;
        } else {
            echo '<p>Відео ще не додано.</p>';
        }
        ?>
    </div>

    <!-- Цитата -->
    <div class="about-quote">
        <?php
        $about_quote = get_field('about_quote');
        if ($about_quote) {
            echo '<blockquote>' . wpautop($about_quote) . '</blockquote>';
        } else {
            echo '<p>Цитата ще не додана.</p>';
        }
        ?>
    </div>
</div>

<?php get_footer(); ?>