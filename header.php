<?php 
/**
* Header template for Restaurant-theme 
*
*/
?><!DOCTYPE html>
<html <?php language_attributes();?>>
<head> 
    <meta charset ="<?php bloginfo( 'charset' ); ?>" />
    <meta name ="viewport" content="width=device-width" />

    <title><?php wp_title( '|', true, 'right');?></title>

    <!--HTML5 SHIv for IE --> <!-- If using Modernizr you can remove this script! -->
    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="content-container">
        <div class="grid-container">
            <header>
                <div class="grid-x grid-padding-x">
                    <div class="large-12 cell">
                        <h1>Sipsum kovett</h1>
                        <h2>Cafe Bar</h2>
                    </div>
                </div>
                <nav>
                    <div class="grid-x grid-margin-x">
                        <div class="large-12 cell">
                            <div id="nav-menu" class="nav-hidden">
                                <ul class="main-nav-menu">
                                    <li>
                                        <a href="#">Nisi culpa</a>
                                    </li>
                                    <li>
                                        <a href="#">Occaecat laborum</a>
                                    </li>
                                    <li>
                                        <a href="#">Est sunt ut</a>
                                    </li>
                                    <li>
                                        <a href="#">Sit veniam</a>
                                    </li>
                                </ul>
                            </div>
                            <div id="burger-container">
                                <div class="burger"></div>
                                <div class="burger"></div>
                                <div class="burger"></div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>