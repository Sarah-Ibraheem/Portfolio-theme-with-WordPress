<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sarah_portfolio</title>
        <?php wp_head();?>
    </head>


<body class="dark-vertion black-bg">
    <!-- Start Loader -->
    <div class="section-loader" style="display: none;">
        <div class="loader">
            <div></div>
            <div></div> 
        </div>
    </div>
    <!-- End Loader -->
    
    <!--
    ===================
       NAVIGATION
    ===================
    -->
    <header class="black-bg mh-header mh-fixed-nav nav-scroll mh-xs-mobile-nav wow fadeInUp" id="mh-header" style="visibility: visible; animation-name: fadeInUp;">
        <div class="overlay active"></div>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg mh-nav nav-btn">
                    <button class="navbar-toggler active collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon icon"></span>
                    </button>
                    <?php 
                        wp_nav_menu( array(
                            "theme_location" => "main-menu",
                            "menu_class" => "navbar-nav mr-auto ml-auto",
                            "container_class" => "navbar-collapse active collapse",
                        ) );
                    ?>
                </nav>
            </div>
        </div>
    </header>
    