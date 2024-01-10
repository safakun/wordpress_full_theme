<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        <?php wp_head(); ?>
      

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
       

    </head>
	
	<body>
		
		
		<!-- top-area Start -->
		<header class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <!-- <a class="navbar-brand" href="index.html">browny</a>
							<img src="" class="navbar-brand" alt=""> -->
							<?php 
								if(has_custom_logo()) {
									echo get_custom_logo();
								}
								?>
			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
						<?php wp_nav_menu([
									'theme_location' => 'header',
									'container' => false,
									'menu_class' => 'nav navbar-nav navbar-right',
									'menu_id' => false,
									'echo' => true,
									'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
								]); ?>


			                <!-- <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                <li class=" smooth-menu active"></li>
			                    <li class=" smooth-menu"><a href="#education">education</a></li>
			                    <li class="smooth-menu"><a href="#skills">skills</a></li>
			                    <li class="smooth-menu"><a href="#experience">experience</a></li>
			                    <li class="smooth-menu"><a href="#profiles">profile</a></li>
			                    <li class="smooth-menu"><a href="#portfolio">portfolio</a></li>
			                    <li class="smooth-menu"><a href="#clients">clients</a></li>
			                    <li class="smooth-menu"><a href="#contact">contact</a></li>
			                </ul> -->
							
							<!--/.nav -->


			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->

		    <div class="clearfix"></div>

		</header><!-- /.top-area-->
		<!-- top-area End -->