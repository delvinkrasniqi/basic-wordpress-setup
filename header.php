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
<nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                        ?>

                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?= $image[0]; ?>" class="img-fluid" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- The WordPress Primary Menu -->
                <?php wp_nav_menu(
                            array(
                                'theme_location'    => 'primary',
                                'menu_class'        => 'navbar-nav ml-auto w-100 justify-content-end',
                                'container_class'  => 'collapse navbar-collapse',
                                'container_id'    => 'navbarNav',
                            )
                        ); ?>
            </div>
        </nav>