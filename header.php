<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Saleemidea</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8" />

        <script src='<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.3.js'></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.parallax-1.1.3.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/parallaxInit.js" type="text/javascript" charset="utf-8"></script>
        
        <script>
            $(document).ready(function() {
                $('.navbar-nav li a').click(function(evt) {
                    var place = $(this).attr('href');
                    $('html, body').animate({
                        scrollTop: $(place).offset().top
                    }, 1200, 'easeInOutCubic');
                    pde(evt);
                });
            });
            
        </script>

    </head>
    <body class="body" data-spy="scroll" data-target="#my-nav">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Saleemidea" class="logo"></a>
                </div>
                <div class="navbar-collapse collapse" id="my_nav">
                    <form class="navbar-form navbar-right">
                        <input type="text" class="form-control search_custom" placeholder="Your Text Here...">
                    </form>
                    <ul class="nav navbar-nav navbar-right" id="navigation">
                        <li><a href="#top_content" class="nav_text_first">HOME</a></li>
                        <li><a href="#our_project" class="nav_text">OUR PROJECT</a></li>
                        <li><a href="#whoiam" class="nav_text">WHO AM I ?</a></li>
                        <li><a href="#our_client" class="nav_text">OUR CLIENT</a></li>
                        <li><a href=""  class="nav_text">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </div>