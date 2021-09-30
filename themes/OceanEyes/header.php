<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="https://kit.fontawesome.com/5d4284b50c.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <div id="container">
        <header>
            <div id="inner-header">
               <div class="box-logo">
                    <a href="<?php echo esc_url(home_url()); ?>" class="logo-anchor">
                       <div id="header-contens">
                        <p id="logo">
                            <?php echo the_custom_logo(); ?>
                        </p>
                        <p id="header-description">
                            <?php echo get_bloginfo('description') ?>
                        </p>
                        </div>
                    </a>
                </div>
                <!--HAMBURGER MANU-->
                <div id="nav-box">
                    <nav role="navigation">
                        <div id="menuToggle">
                            <input type="checkbox" />
                            <span></span>
                            <span></span>
                            <span></span>
                            <ul id="menu">
                                <?php wp_list_categories('title_li='); ?>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--HAMBURGER MANU END-->
            </div>
        </header>