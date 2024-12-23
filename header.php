<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <div class="header-inner">
            <!-- Логотип -->
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Lysoclear Logo">
                </a>
            </div>

            <!-- Кнопка для мобільного меню -->
            <button class="mobile-menu-toggle">☰</button>

            <!-- Головне меню -->
            <nav class="main-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'menu',
                ));
                ?>
            </nav>
        </div>
    </div>

    <!-- JavaScript для керування мобільним меню -->
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
        const mainMenu = document.querySelector('.main-menu');

        if (mobileMenuToggle && mainMenu) {
            mobileMenuToggle.addEventListener('click', function () {
                mainMenu.classList.toggle('active');
            });
        }
    });
    </script>
</header>