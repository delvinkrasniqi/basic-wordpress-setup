<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Navigation Menu -->
    <nav class="menu-wrapper">
        <div class="page-container">
            <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $image = wp_get_attachment_image_src($custom_logo_id, 'full');
            ?>

            <a class="menu__logo" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?= $image[0]; ?>" class="img-fluid" alt="">
            </a>

            <!-- The WordPress Primary Menu -->
            <?php wp_nav_menu(
                array(
                    'theme_location'    => 'primary',
                    'menu_class'        => 'menu',
                    'container'  => false,
                    'container_id'    => '',
                )
            ); ?>

            <div class="menu__toggler">
                <div class="toggler__line toggler__line--top"></div>
                <div class="toggler__line toggler__line--middle"></div>
                <div class="toggler__line toggler__line--bottom"></div>
            </div>

        </div>
    </nav>