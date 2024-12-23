<?php get_header(); ?>

<main class="single-post">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="post-header">
                <h1><?php the_title(); ?></h1>
                <div class="post-meta">
                    <span><?php echo get_the_date(); ?></span>
                    <span><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></span>
                </div>
            </header>

            <div class="post-content">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endif; ?>

                <div class="post-text">
                    <?php the_content(); ?>
                </div>
            </div>

            <!-- Коментарі -->
            <div class="post-comments">
                <?php
                // Перевіряємо, чи коментування увімкнено для цього запису
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
                ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>