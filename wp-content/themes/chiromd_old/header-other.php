<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="TODO find content for here">
        <meta name="author" content="sell-e Media for Victoria Kuhlen -- TODO rephrase this"> 

        <title>Chiro | MD - <?php wp_title(''); ?></title>
        <!-- favicon saved in root -->
        <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php bloginfo('template_url');?>/favicon.ico" type="image/x-icon">
        <!-- font link source is first link -->
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,700italic,800,300italic,700' rel='stylesheet' type='text/css'>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" type="text/css">
    </head>
    
    <body class="subpage">
		
	   <div id="wrapper">
           
            <!-- ------------- Navbar BS for subpages -------------  -->
            <nav class="navbar navbar-default navbar-fixed-top uppercase navbar-subpage" id="header-nav" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" 
                         data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="">Menü</span>
                        </button>
                        <a class="navbar-logo hidden-md hidden-lg" href="index.html">
                            <img class="img img-responsive" src="<?php bloginfo('template_url');?>/images/logo-inline.png" alt="" title="">
                        </a>
                        
                    </div><!-- end navbar-header -->

                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <!-- <ul class="nav navbar-nav">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><a href="die-praxis.html">Die Praxis</a></li>
                            <li><a href="chiropraktik.html">Chiropraktik</a></li>
                            <li><a href="chiropraktik-auch-fuer-mich.html">Chiropraktik auch für mich?</a></li>
                            <li><a href="die-erste-behandlung.html">Die erste Behandlung</a></li>
                            <li><a href="fragen-und-antworten.html">Fragen &amp; Antworten</a></li>
							
							
							
                            <li class="icon-li">
                                <a class="icon icon-phone" data-toggle="modal" href="#contact-modal">
                                 
                                </a>
                            </li>
                            <li class="icon-li">
                                <a href="#appointment-modal" data-toggle="modal" class="icon icon-calendar"></a>
                            </li>
                            <li class="icon-li">
                                <a href="#news-modal" data-toggle="modal" class="icon icon-bell"></a>
                            </li>
                        </ul> -->
				
						<?php
							// navwalker from -> https://github.com/twittem/wp-bootstrap-navwalker
							$defaults = array(
								'theme_location'	=>	'primary',
								'container'			=>	false,
								'menu_class'		=>	'nav navbar-nav',
								'depth'				=>	2,
								'walker'			=>	new wp_bootstrap_navwalker()
							);
							wp_nav_menu($defaults);
						?>
				
                    </div><!-- end collapse -->
                    
                </div><!-- end navbar container -->
            </nav><!-- end navbar BS for subpages -->
		   
		    <!-- #header-logo -->
            <div id="header-logo" class="visible-md visible-lg container">
                <a class="header-logo" href="<?php echo get_home_url(); ?>">
                      <img class="img img-responsive" src="<?php bloginfo('template_url');?>/images/logo-inline.png" alt="" title="">
                 </a>
            </div>
            <!-- end #header-logo -->
           
            