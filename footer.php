<footer class="site-footer">
    <!-- Upper Footer -->
    <div class="footer-top">
        <p>
            <?php 
            // Виведення основного тексту з ACF
            $footer_message = get_field('footer_message', 'option'); 
            if ($footer_message) {
                echo esc_html($footer_message);
            }
            ?>
            <a href="tel:<?php the_field('footer_phone', 'option'); ?>">
                <?php 
                // Виведення номера телефону
                $footer_phone = get_field('footer_phone', 'option'); 
                echo esc_html($footer_phone); 
                ?>
            </a>
        </p>
        <a href="<?php the_field('footer_button_link', 'option'); ?>" class="btn-message">
            <?php 
            // Виведення тексту кнопки
            $button_text = get_field('footer_button_text', 'option'); 
            echo esc_html($button_text); 
            ?>
        </a>
    </div>

    <!-- Lower Footer -->
    <div class="footer-bottom">
        <div class="container">
            <p>
                <?php 
                // Текст авторських прав
                $copyright_text = get_field('footer_copyright', 'option'); 
                echo esc_html($copyright_text); 
                ?> &bull;

                <?php 
                // Фізична адреса компанії
                $footer_address = get_field('footer_address', 'option'); 
                echo esc_html($footer_address); 
                ?> &bull;

                <a href="mailto:<?php the_field('footer_email', 'option'); ?>">
                    <?php 
                    // Email адреса
                    $footer_email = get_field('footer_email', 'option'); 
                    echo esc_html($footer_email); 
                    ?>
                </a> &bull;

                <a href="tel:<?php the_field('footer_phone', 'option'); ?>">
                    <?php 
                    // Номер телефону
                    echo esc_html($footer_phone); 
                    ?>
                </a>
            </p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>