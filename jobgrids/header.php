<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->
    <div id="loading-area"></div>

    <header class="header other-page">
        <div class="navbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand logo" href="index.html">
                                <img class="logo1"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.svg"
                                    alt="Logo" />
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <?php 
                                    wp_nav_menu(array(
                                        'container_class' => 'collapse navbar-collapse sub-menu-bar',
                                        'theme_location'=> 'topmenu',
                                        'menu_id' => 'nav',
                                        'menu_class'=> 'navbar-nav ml-auto',
                                        'container_id' => 'navbarSupportedContent'
                                    ));
                                ?>
                            </div>
                        </nav>

                    </div>
                </div>

            </div>

        </div>

    </header>