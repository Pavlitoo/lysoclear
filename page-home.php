<?php
/**
 * Template Name: Home Page
 */
get_header(); 
?>


<!-- Hero Section -->
<section class="hero-slider">
    <div class="hero-slide">
        <?php if ($hero_image = get_field('hero_image')) : ?>
            <?php echo wp_get_attachment_image($hero_image['id'], 'full'); ?>
        <?php endif; ?>
        <div class="hero-content">
            <div class="content-box">
                <?php if ($hero_title = get_field('hero_title')) : ?>
                    <h1><?php echo $hero_title; ?></h1>
                <?php endif; ?>

                <?php if ($hero_text = get_field('hero_text')) : ?>
                    <p><?php echo $hero_text; ?></p>
                <?php endif; ?>

                <?php if ($hero_button = get_field('hero_button')) : ?>
                    <a class="btn" href="<?php echo $hero_button['url']; ?>" target="<?php echo $hero_button['target'] ?: '_self'; ?>">
                        <?php echo $hero_button['title']; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php if (have_rows('features')): ?>
<section class="features-section">
    <div class="container">
        <div class="features-grid">
            <?php while (have_rows('features')): the_row(); 
                $icon = get_sub_field('icon');
                $title = get_sub_field('title');
                $description = get_sub_field('description');
            ?>
            <div class="feature-item">
                <i class="<?php echo esc_attr($icon); ?>"></i>
                <h3><?php echo esc_html($title); ?></h3>
                <p><?php echo esc_html($description); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<div class="treatment-section">
    <div class="treatment-image">
        <?php
        // Виведення зображення
        $treatment_image = get_field('treatment_image');
        if ($treatment_image) :
            echo wp_get_attachment_image($treatment_image['id'], 'full');
        else :
            echo '<p>Зображення відсутнє.</p>';
        endif;
        ?>
    </div>
    <div class="treatment-text">
        <?php
        // Виведення заголовку
        $treatment_title = get_field('treatment_title');
        if ($treatment_title) :
            echo '<h2>' . esc_html($treatment_title) . '</h2>';
        else :
            echo '<p>Заголовок відсутній.</p>';
        endif;

        // Виведення тексту
        $treatment_text = get_field('treatment_text');
        if ($treatment_text) :
            echo $treatment_text;
        else :
            echo '<p>Текст відсутній.</p>';
        endif;

        // Виведення кнопки
        $treatment_button = get_field('treatment_button');
        if ($treatment_button) :
            echo '<a href="' . esc_url($treatment_button['url']) . '" class="btn" target="' . esc_attr($treatment_button['target']) . '">' . esc_html($treatment_button['title']) . '</a>';
        else :
            echo '<p>Кнопка відсутня.</p>';
        endif;
        ?>
    </div>
</div>

<section class="stargardt-section">
    <div class="content-box">
        <?php
        // Виведення заголовку
        $stargardt_title = get_field('stargardt_title');
        if ($stargardt_title) :
            echo '<h2 class="title">' . esc_html($stargardt_title) . '</h2>';
        endif;

        // Виведення опису
        $stargardt_description = get_field('stargardt_description');
        if ($stargardt_description) :
            echo $stargardt_description;
        endif;

        // Виведення кнопки
        $stargardt_button = get_field('stargardt_button');
        if ($stargardt_button) :
            echo '<a href="' . esc_url($stargardt_button['url']) . '" class="learn-more-btn" target="' . esc_attr($stargardt_button['target']) . '">' . esc_html($stargardt_button['title']) . '</a>';
        endif;
        ?>
    </div>
    <div class="image-box">
        <?php
        // Виведення зображення
        $stargardt_image = get_field('stargardt_image');
        if ($stargardt_image) :
            echo wp_get_attachment_image($stargardt_image['id'], 'full');
        endif;
        ?>
    </div>
</section>



<style>
/* Testimonials Section */
.testimonials {
    background-color: #f8f9fa; /* Світло-сірий фон */
    padding: 60px 0; /* Відступи зверху і знизу */
    text-align: center; /* Вирівнювання тексту по центру */
}

.testimonials .testimonial-slider {
    max-width: 800px;
    margin: 0 auto;
}

.testimonials blockquote {
    font-size: 1.5rem; /* Розмір тексту цитати */
    font-style: italic; /* Курсив */
    color: #333; /* Темно-сірий текст */
    line-height: 1.6; /* Висота рядка для читабельності */
    margin: 0 auto 20px auto; /* Центрування цитати */
}

.testimonials .author {
    font-size: 1.2rem; /* Розмір тексту автора */
    font-weight: bold; /* Напівжирний текст */
    color: #007bff; /* Синій колір для автора */
    margin-top: 10px; /* Відступ від цитати */
}

/* Налаштування точок слайдера */
.slick-dots li button:before {
    color: #007bff; /* Колір активних і неактивних точок */
    font-size: 12px;
}

.slick-dots li.slick-active button:before {
    color: #007bff; /* Колір активної точки */
}

/* Section Divider */
.section-divider {
    margin-top: 110px; /* Відступ зверху */
    border-top: 2px solid #00a2ff; /* Тонка лінія */
    width: 100%; /* Розтягуємо на всю ширину контейнера */
}

/* Адаптивні стилі для планшетів */
@media (max-width: 768px) {
    .testimonials {
        padding: 40px 0; /* Зменшуємо відступи зверху і знизу */
    }

    .testimonials blockquote {
        font-size: 1.2rem; /* Зменшуємо розмір тексту цитати */
    }

    .testimonials .author {
        font-size: 1rem; /* Зменшуємо розмір тексту автора */
    }

    .section-divider {
        margin-top: 80px; /* Зменшуємо відступ зверху */
    }
}

/* Адаптивні стилі для телефонів */
@media (max-width: 480px) {
    .testimonials {
        padding: 30px 0; /* Зменшуємо відступи зверху і знизу */
    }

    .testimonials blockquote {
        font-size: 1rem; /* Зменшуємо розмір тексту цитати */
    }

    .testimonials .author {
        font-size: 0.9rem; /* Зменшуємо розмір тексту автора */
    }

    .section-divider {
        margin-top: 60px; /* Зменшуємо відступ зверху */
    }
}



</style>

<!-- Testimonials Section -->
<section class="testimonials">
    <div class="testimonial-slider">
        <?php
        $testimonials = get_field('testimonials');
        if ($testimonials) :
            for ($i = 1; $i <= 3; $i++) :
                $testimonial_text = $testimonials['testimonial_text_' . $i];
                $testimonial_author = $testimonials['testimonial_author_' . $i];
                if ($testimonial_text && $testimonial_author) :
        ?>
                    <div class="testimonial-slide">
                        <blockquote><?php echo esc_html($testimonial_text); ?></blockquote>
                        <p class="author"><?php echo esc_html($testimonial_author); ?></p>
                    </div>
        <?php
                endif;
            endfor;
        endif;
        ?>
    </div>
    <hr class="section-divider">
</section>


<?php
// Перевіряємо, чи ввімкнена секція "Latest News" через ACF
if (get_field('show_latest_news')) : ?>
    <section class="latest-news">
        <div class="container">
            <?php
            // Отримуємо заголовок секції
            $title = get_field('latest_news_title') ?: 'Latest News from Lysoclear';
            echo '<h2>' . esc_html($title) . '</h2>';

            // Отримуємо зображення секції (якщо воно задане)
            $image = get_field('latest_news_image');
            if ($image) {
                echo '<img src="' . esc_url($image) . '" alt="' . esc_attr($title) . '" class="latest-news-image">';
            }

            // Отримуємо кількість постів
            $post_count = get_field('latest_news_count') ?: 7;

            // Query for latest posts
            $latest_posts = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => $post_count,
            ]);

            if ($latest_posts->have_posts()) : ?>
                <div class="news-slider">
                    <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                        <div class="news-item">
                            <div class="news-image">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('news-thumbnail');
                                } ?>
                            </div>
                            <h3><?php the_title(); ?></h3>
                            <div class="news-meta">
                                <span><?php echo get_the_date(); ?></span>
                                <span><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></span>
                            </div>
                            <p><?php echo wp_trim_words(get_the_content(), 15, '...'); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn-learn-more">Learn more</a>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<style>
    /* Latest News Section */
.latest-news {
    padding: 40px 0 50px; /* Зменшуємо відступ зверху */
    text-align: center;
    background-color: #f8f9fa;
}

.latest-news h2 {
    font-size: 2rem;
    color: #007bff;
    font-weight: bold;
    letter-spacing: 1px;
    margin-bottom: 30px;
}

/* Slick Slider wrapper */
.latest-news .news-slider {
    max-width: 1200px;
    margin: 0 auto;
}

/* News Item */
.latest-news .news-item {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
    text-align: left;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
}

.latest-news .news-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.latest-news .news-image {
    width: 100%;
    height: 200px;
    overflow: hidden;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.latest-news .news-image img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

.latest-news h3 {
    font-size: 1.25rem;
    margin: 15px 0;
    min-height: 3em; /* Ensures consistent height for titles */
    overflow: hidden;
}

.latest-news .news-meta {
    font-size: 0.9rem;
    color: #777;
    margin-bottom: 15px;
}

.latest-news p {
    font-size: 1rem;
    color: #555;
    margin-bottom: 15px;
    flex-grow: 1; /* Pushes the content to fill available space */
}

.latest-news .btn-learn-more {
    display: inline-block; /* Запобігає розтягуванню кнопки */
    padding: 10px 20px; /* Розмір кнопки */
    background-color: transparent;
    color: #00a2ff;
    border: 2px solid #00a2ff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    margin-top: 10px;
    max-width: 100px; /* Скидає максимальну ширину */
    width: auto; /* Ширина кнопки автоматична */
    text-align: center;
}

@media (max-width: 768px) {
    .latest-news .news-image {
        height: 150px;
    }
}
</style>




<?php
// Register custom image size
add_action('after_setup_theme', function() {
    add_image_size('news-thumbnail', 300, 200, true); // 300x200px, crop to center
});

get_footer();
?>