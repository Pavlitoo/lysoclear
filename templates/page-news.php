<?php
/*
Template Name: News
*/
get_header();

// Отримуємо дані з ACF
$news_header = get_field('news_header');
$news_intro = get_field('news_intro');
$news_posts = get_field('news_posts');
?>

<div class="news-page">
    <?php if ($news_header): ?>
        <h1 class="news-header"><?php echo esc_html($news_header); ?></h1>
    <?php endif; ?>

    <?php if ($news_intro): ?>
        <div class="news-intro">
            <?php echo wpautop($news_intro); ?>
        </div>
    <?php endif; ?>

    <?php if ($news_posts): ?>
        <div class="news-posts">
            <?php foreach ($news_posts as $post): setup_postdata($post); ?>
                <div class="news-post">
                    <?php if (has_post_thumbnail()): ?>
                        <div class="post-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('news-thumbnail'); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <h2 class="post-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>

                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>

                    <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                </div>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
    <?php else: ?>
        <p>No news posts found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>